<?php
/**
 * Created by PhpStorm.
 * User: eduardrussy
 * Date: 6/01/17
 * Time: 16:42
 */
namespace bukerllk\placeToPay;
class placeToPay
{

    public function connect($text, $separator = '-sdfdsfds')
    {
        $text = strtolower($text);
        return trim($text, $separator);
    }

}