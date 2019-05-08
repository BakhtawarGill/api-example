<?php 

function response($response)
{
	http_response_code(200);
	$json_response = json_encode($response);
	echo $json_response;
}

?>