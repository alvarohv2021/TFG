<?php

$api="http://localhost:8055/items";

$provincias=json_decode(file_get_contents($api."/Provincias"), true)["data"];
$casas=json_decode(file_get_contents($api."/Casas"), true)["data"];

?>