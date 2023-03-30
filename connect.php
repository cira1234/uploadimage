<?php
	header("Access-Control-Allow-Origin: *");
    error_reporting(0);
    error_reporting(E_ERROR | E_PARSE);
    header("content-type:text/javascript;charset=utf-8");
    $link = mysqli_connect(
    'aws.connect.psdb.cloud', 
    'nlwbqt5rhaqhekwberbv', 
    'pscale_pw_rwr2II6JSRuGL7vFZij0ec6jTZdkWZce939aQrbjIdx', 
    "member"
);
?>