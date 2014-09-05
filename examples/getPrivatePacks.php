<?php

	$api_link = "https://api.atlauncher.com/v1/"; // Example api link for ATLauncher API (must include version)
	
	$json_content = file_get_contents($api_link. 'packs/full/private/');
	$json = json_decode($json_content, true);
	$json_data = $json['data'];
	
	$length = sizeof($json_data) - 1;
	for($i=0; $i<=$length; $i=$i+1) {
		print('('. $json_data[$i]['id']. ') '. $json_data[$i]['name']. ' (Link: <a href="'.$json_data[$i]["websiteURL"].'">here</a>)');
		print("<br>");
	}

?>