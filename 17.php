<?php
//function
//call function
require_once 'functions.php';
if (function_exists('makeTotal')){
    makeTotal (5,10);
    echo '<br/>';
}
$numberA = 10;
$numberB = 20;
if (function_exists('makeTotal')){
    makeTotal ($numberA,$numberB);
    echo '<br/>';
}
if (function_exists('getMessage')){
    getMessage();
    echo '<br/>';
}
if (function_exists('getNumber')){
    getNumber(10,'To day is',' day');
}
