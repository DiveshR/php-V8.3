<?php
$jsonString = '{"version" : "PHP 8.3"}';
$isValid = json_validate($jsonString);
var_dump($isValid);