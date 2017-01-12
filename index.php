<?php

require 'vendor/autoload.php';
$wsdl="https://test.placetopay.com/soap/pse/";
$cliente = new \bukerllk\placeToPay\placeToPay();
$p2p=$cliente->getFunctions();
$p2p1=$cliente->getBankList();
echo '<pre>';
print_r($p2p);
print_r($p2p1);