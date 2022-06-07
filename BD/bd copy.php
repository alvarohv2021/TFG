<?php

$server = "sql480.main-hosting.eu";
$user = "u850300514_ahernandez";
$password = "x43470242N";
$bdName = "u850300514_ahernandez";

$coon= new mysqli($server, $user, $password, $bdName);

if ($coon->connect_error) {
    die("Connection failed: " . $coon->connect_error);
}