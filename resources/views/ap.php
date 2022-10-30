<?php

function json(){
$prices_json = @file_get_contents('prices.json');
 
$myarray = json_decode($prices_json, true);
var_dump($myarray);

}

json();