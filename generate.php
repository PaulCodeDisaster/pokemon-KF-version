<?php
require_once("Map.class.php");
// Using map src code to generate the map
$map = new Map("maps/" . $_GET['map'] . ".map");
$map->genImage(true);
echo "done"
?>