<?php

require_once "CatClass.php";

$ppp1 = new CatClass();
$ppp2 = new CatClass();

$ppp1->setName("Mincis");
$ppp2->setName("Brincis");

//echo $ppp1->getName();
echo $ppp1->name;
$ppp1->birthday();

echo $ppp2->name;
$ppp2->birthday();

CatClass::meow();