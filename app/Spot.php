<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    function searchPlace($keyword) {
            	$api_key = 'AIzaSyBoip3JCxXBNUO_yPVHZcAJcRmYEJGcmUk';
            	$keyword = urlencode($keyword);
            	$url = "https://maps.googleapis.com/maps/api/place/textsearch/json?key=%7B$api_key%7D&query=%7B$keyword%7D";
            	$json = file_get_contents($url);
            	$data = json_decode($json, true);
            	return $data;
            }
}
