<?php

namespace Dansup\Edmunds;

use Dansup\Edmunds\Two\Client;

class Api extends Client
{
    public $decodeVin;

    public function decodeVin($vin, $returnFullResponse = false)
    {
      $apiurl = "{$this->apiUrl}/vehicle/v2/vins/{$vin}";
      $res = $this->client->request('GET', $apiurl, ['stream' => false]);
      $body = json_decode($res->getBody());
      if($returnFullResponse == true) {
        $resp = [
        'status-code' =>  $res->getStatusCode(),
        'content-type' => $res->getHeader('content-type'),
        'body' => $body
        ];
      } else {
        $resp = $body;
      }
      return $resp;
    }
}
