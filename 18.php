<?php
function makeTotal($a,$b){
    $total = $a + $b;
    return $total;
}
$total = makeTotal (5,2);
echo $total;
echo '<br/>';
function getMessage ($msg = null){
    if ($msg == null){
        return;
    }
    return $msg;
}
echo getMessage('Nothing');
echo '<br/>';
function handlecount(){
    Static $number = 0;
    $number++;
    return $number;
}
echo handlecount();
echo '<br/>';
echo handlecount();
