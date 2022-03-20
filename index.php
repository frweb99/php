<?php

require_once __DIR__ . "/classi/moto/ducati.php";
require_once __DIR__ . "/classi/moto/honda.php";

require_once __DIR__ . "enricoi";

use frweb\moto\honda;
use frweb\moto\ducati;

$moto1 = new honda();
echo $moto1->messaggio() . "<br>";
$moto2 = new ducati();
echo $moto2->messaggio()  . "<br>";

use frweb\auto\honda;
$moto3 = new honda();
$moto3->messaggio();

echo "modifica enrico";