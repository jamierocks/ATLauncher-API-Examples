<?php

	$version_number = $_POST["version"];
	$pack_safeName = $_POST["safeName"];
	
	$api_link = "https://api.atlauncher.com/v1/pack/";
	$api_link = $api_link. $pack_safeName. "/";
	
	$link = file_get_contents($api_link);
	
	$latest = json_decode($link, true);
	
	$version_link = $latest['data']['versions'][$version_number]['__LINK'];
	
	$link = file_get_contents($version_link);
	
	$json = json_decode($link, true);
	
	$changelog = $json['data']['changelog'];
	print($changelog);
	
?>