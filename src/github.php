<?php
header('Access-Control-Allow-Origin: *');

function objectToArray($d) {
		if (is_object($d)) {
			// Gets the properties of the given object
			// with get_object_vars function
			$d = get_object_vars($d);
		}
 
		if (is_array($d)) {
			/*
			* Return array converted to object
			* Using __FUNCTION__ (Magic constant)
			* for recursive call
			*/
			return array_map(__FUNCTION__, $d);
		}
		else {
			// Return array
			return $d;
		}
	}

$ch = curl_init("https://api.github.com/users/Jamesking56");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
try {
	$github = curl_exec($ch);
} catch (Exception $e) {
	$github = false;
}

$github = objectToArray(json_decode($github));

if($github['hireable'] == 1)
{
	echo "yes";
}
else
{
	echo "no";
}

?>