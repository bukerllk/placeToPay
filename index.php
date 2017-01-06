<?php

require_once __DIR__ . '/vendor/autoload.php';


$p2p= new bukerllk\placeToPay\placeToPay();

$text=$p2p->connect('SEBAS');

echo $text;
