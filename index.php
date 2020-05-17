<?php

require_once "autoload.php";

$people = new Collection();
$people->John = "Wick";
$people->Sarah = "Conor";

unset($people['John']);
var_dump($people->toArray());