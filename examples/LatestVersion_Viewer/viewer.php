<?php

	$pack_safeName = $_POST["safeName"];
	
	$api_link = "https://api.atlauncher.com/v1/pack/";
	$api_link = $api_link. $pack_safeName. "/";
	
	$link = file_get_contents($api_link);
	
	$latest = json_decode($link, true);
	
	$latestversion = $latest['data']['versions'][0]['version'];
	print($latestversion);
	
?>