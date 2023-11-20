<?php

use Hero\Character as biodataHero;
use Villain\Enemy as biodataVillain;

include "Hero/Hero.php";
include "Villain/Enemy.php";

$Hero = new biodataHero();
$Hero->setName('Aether');
$Hero->setElement('light');
$Hero->setWeapon('Sword');
$heroResult = $Hero->Started();

$Enemy = new biodataVillain();
$Enemy->setEnemyName('Scaramouche');
$Enemy->setEnemyType('Weekly boss');
$enemyResult = $Enemy->Against();

$result = [
    'hero' => $heroResult,
    'enemy' => $enemyResult
];

$jsonResult = json_encode($result);
echo $jsonResult;
