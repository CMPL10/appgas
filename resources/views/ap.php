<?php

function places(){
$places = simplexml_load_file("places.xml");
foreach($places as $place)
{
echo "name: " . $place->name; echo "<br>";
echo "id: " . $place->cre_id; echo "<br>";
echo "Location: " . $place->location; echo "<br>"; echo "<br>";
}
}

places();