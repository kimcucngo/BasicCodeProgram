<?php
$money = 50.5;
$money = (int)$money;
echo $money;
echo '<br/>';
var_dump($money);
echo '<br/>';
//check integer type
$check = is_int($money);
var_dump($check);
echo '<br/>';
$check = is_integer($money);
var_dump($check);
echo '<br/>';
//check boolean (logic)
$value1 = 1;
$checkBool = is_bool($value1);
var_dump($checkBool);
echo '<br/>';
$value2 = false;
$checkBool2 = is_bool($value2);
var_dump($checkBool2);
echo '<br/>';
$value3 = 'a';
$value3 = (bool)$value3;
$checkBool3 = is_bool($value3);
var_dump($checkBool3);
echo '<br/>';
//check float type
$fee1 = 10.7;
var_dump($fee1);
echo '<br/>';
var_dump(is_float($fee1));
echo '<br/>';
//check string type
$message1 = 'This is personal information';
var_dump($message1);
$checkString1 = is_string($message1);
var_dump($checkString1);
echo '<br/>';
$message2 = 10;
var_dump($message2);
$checkString2 = is_string($message2);
var_dump($checkString2);
echo '<br/>';
$message3 = -1;
$message3 = (string)$message3;
$checkString3 = is_string($message3);
var_dump($checkString3);
