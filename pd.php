<?php
/*
 * Change 127.0.0.1 to your attacking machines IP then upload this file
 * to the target webserver
 */
$fd = fsockopen("IP TO CONNECT BACK TO",(int)$_GET['p']);if(!$fd){fclose($fd);}else{fclose($fd);}?>
