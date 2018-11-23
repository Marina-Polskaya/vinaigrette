<?php

require_once __DIR__.'/products/vegetables/Vegetable.php';
require_once __DIR__.'/products/vegetables/Beet.php';
require_once __DIR__.'/products/vegetables/Carrot.php';
require_once __DIR__.'/products/vegetables/Potatoe.php';
require_once __DIR__.'/Cheef.php';
require_once __DIR__.'/Vinaigrette.php';

require_once __DIR__.'/Eater.php';

/**
 * Коллекция овощей
 */
$vegitableCollection = [
    new Potatoe(true, false, false),
    new Potatoe(false, false, false),
    new Potatoe(true, false, false),
    new Beet(true, true, true),
    new Carrot(true, true, false),
    new Carrot(true, true, false)
];

/**
 * У нас есть повар
 */
$cheef = new Cheef();
/**
 * повар готовит винегрет
 */
$vinaigrette = $cheef->cook($vegitableCollection); // Vinegrette

$eater = new Eater();

$eater->eat($vinaigrette);

echo "Едок съел винегрет и сказал ";
$eater->isTasty();
