<?php

namespace Dansup\Edmunds\Two;

use GuzzleHttp;

abstract class Client {

  public $client;
  public $apiUrl;

  public function __construct()
  {
    $client = new GuzzleHttp\Client([
      'query' => [
        'api_key' => config('laravel-edmunds.api_key')
        ]
      ]);
    $this->client = $client;
    $this->apiUrl = 'https://api.edmunds.com/api';
  }

  public function client()
  {
    return $this->client;
  }
  public function apiUrl()
  {
    return $this->apiUrl;
  }

}