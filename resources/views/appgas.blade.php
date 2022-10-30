<?php
/*
function readXML(){
$places = simplexml_load_file("prices.xml");
$total_places = count($places->place);

echo "<table>\n";
echo "<tr><th>regular</th><th>premium</th></tr>\n";

for($x=0; $x<$total_places; $x++){
echo "<tr><td>".$places->place[$x]->regular."</td><td>".$places->place[$x]->premium."</td></tr>\n";
}

echo "</table>\n";
}
*/

function readXML(){
if (file_exists('places.xml')) {
    $xml = simplexml_load_file('places.xml');
 
    print_r($xml);
} else {
    exit('Failed to open prices.xml');
}
}

readXML();

?>