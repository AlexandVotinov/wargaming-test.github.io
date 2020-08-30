<?php
	$ip_base = array();

	$log = file_get_contents('https://share.wargaming.net/f/833539e6dceb4391b3bd/?dl=1');
	$log = explode("\n", $log);

	foreach($log as $value) { 
    	$ip = explode(" ", $value);
    	array_push($ip_base, $ip[0]);
    } 
    $ip_base = array_count_values ($ip_base);
    arsort($ip_base);
	foreach ($ip_base as $key => $val) {
    echo "$key = $val <br><br>";
}

?>