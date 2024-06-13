<?php

require "vendor/autoload.php";


$Toyota = new Dummy\Mobil\Toyota("Toyota Fortuner", 10);
$Calculator = new Dummy\Calculator($Toyota);
echo "Jarak maksimum".$Toyota->getMerk().$Calculator->hitungjarak()."Km";
echo "<hr>";
$Honda = new Dummy\Mobil\Honda("Honda CRV", 10);
$Calculator = new Dummy\Calculator($Honda);
echo "jarak maksimum ".$Honda->getMerk().$Calculator->hitungjarak()."Km";


?>