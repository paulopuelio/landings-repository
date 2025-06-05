﻿<?php
$data = [
	"flow" => 19868,
	"country" => "pl",
	"offer" => 6577,
	"ip" => $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : ( $_SERVER["HTTP_X_FORWARDED_FOR"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"] ),
	"name" => isset( $_POST["name"] ) ? $_POST["name"] : "",
	"phone" => isset( $_POST["phone"] ) ? $_POST["phone"] : "",
	"comm" => isset( $_POST["comment"] ) ? $_POST["comment"] : "",
	"email" => isset( $_POST["email"] ) ? $_POST["email"] : "",
	"ua" => $_SERVER["HTTP_USER_AGENT"],
    "us" => isset( $_POST["utm_source"] ) ? $_POST["utm_source"] : "",
	"uc" => isset( $_POST["utm_campaign"] ) ? $_POST["utm_campaign"] : "",
	"un" => isset( $_POST["utm_content"] ) ? $_POST["utm_content"] : "",
	"ut" => isset( $_POST["utm_term"] ) ? $_POST["utm_term"] : "",
	"um" => isset( $_POST["utm_medium"] ) ? $_POST["utm_medium"] : "",
];
$curl = curl_init( "https://cpaua.space/api/wm/push.json?id=502-38bc3752870ee64bee9f897da98ddf87" );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_TIMEOUT, 30 );
curl_setopt( $curl, CURLOPT_POST, 1 );
curl_setopt( $curl, CURLOPT_POSTFIELDS, $data );
$result = json_decode( curl_exec( $curl ), true );
curl_close( $curl );
if ( $result["id"] ) {
	header( "Location: ok.php?id=" . $result["id"] );
} else header( "Location: /?error=" . $result["error"] );
die();
?>