<?php

function otro(){
$data = file_get_contents("prices.json");
$products = json_decode($data, true);
 
foreach ($products as $product) {
    echo '<pre>';
    print_r($product);
    echo '</pre>';
}
}
otro();