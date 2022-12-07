<?php
// isset
$number = 1;
$check = isset($number);
var_dump($check);
if ($number){
    echo $number;
}
// isset can all type except null type
echo '<hr/>';
//empty
//result of empty is boolean
//result is true: !isset, null, empty, 0, array empty, object empty, false
$object = new stdClass();
$str = (array)$object;
$check = empty($str);
var_dump($check);
echo '<hr/>';
// $a = 5;
if (!empty($a)){
    echo $a;
}else{
    echo 'Nothing';
}
