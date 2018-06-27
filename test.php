<?php
function searchPlace($keyword) {
	$api_key = 'AIzaSyBoip3JCxXBNUO_yPVHZcAJcRmYEJGcmUk';
	$keyword = urlencode($keyword);
	$url = "https://maps.googleapis.com/maps/api/place/textsearch/json?key={$api_key}&query={$keyword}";
	$json = file_get_contents($url);
	$data = json_decode($json, true);
	return $data;
}
print_r(searchPlace("クリムゾンハウス"));
?>