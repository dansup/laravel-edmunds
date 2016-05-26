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
  public function queryString($endpoint, $queryKey="null", $queryValue="null", $format="array")
  {
    $client = new GuzzleHttp\Client();
    $apiKey = config('laravel-edmunds.api_key');
    $queryString = "?{$queryKey}={$queryValue}&api_key={$apiKey}";
    $response = $client->request('GET', $endpoint.$queryString, ['stream' => false]);
    $body = $this->formatResponse($response, $format);
    return $body;
  }
  public function query($endpoint, $format = "array")
  {
    $response = $this->client->request('GET', $endpoint, ['stream' => false]);
    $body = $this->formatResponse($response, $format);
    return $body;
  }
  public function formatResponse($response, $format)
  {
    $body = null;
    switch ($format) {
      case 'array':
      $body = json_decode($response->getBody());
      break;
      case 'stream':
      $body = $response->getBody();
      break;
      case 'collection':
      $body = collect(json_decode($response->getBody()));
      break;
      
      default:
      $body = json_decode($response->getBody());
      break;
    }
    return $body;
  }
}