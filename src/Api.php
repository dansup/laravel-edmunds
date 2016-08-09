<?php

namespace Edmunds;

use Edmunds\Two\Client;

class Api extends Client
{
  public function decodeVin($vin, $fmt = "array")
  {
    return $this->query("{$this->apiUrl}/vehicle/v2/vins/{$vin}", $fmt);
  }
  public function getAllMakes($fmt = "array")
  {
    return $this->query("{$this->apiUrl}/vehicle/v2/makes", $fmt);
  }
  public function getMake($make, $fmt = "array")
  {
    return $this->query("{$this->apiUrl}/vehicle/v2/{$make}", $fmt);
  }
  public function getPhotosByTag($tag, $fmt = "array")
  {
    return $this->queryString("{$this->apiUrl}/media/v2/photoset", "tag", $tag, $fmt);
  }
  public function getPhotosByMakeModelYear($make, $model, $year, $fmt = "array")
  {
    return $this->query("{$this->apiUrl}/media/v2/{$make}/{$model}/{$year}/photos", $fmt);
  }
  public function getPhotosByStyleId($styleId, $fmt = "array")
  {
    return $this->query("{$this->apiUrl}/media/v2/styles/{$styleId}/photos", $fmt);
  }
  public function getVehicleDetailsByStyleId($styleId, $fmt = "array")
  {
    return $this->queryString("{$this->apiUrl}/vehicle/v2/styles/{$styleId}", "view", "full", $fmt);
  }
}
