<?php
$c = ["passerine" , "hummingbird", "cormorant", "eagle", "nightingle"];
$d = [];
for ($i=count($c)-1; $i >= 0 ; $i--) { 
    array_push($d,$c[$i]);
}
print_r($d);
?>