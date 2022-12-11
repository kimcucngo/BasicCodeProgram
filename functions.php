<?php
if (!function_exists('makeTotal')){
    function makeTotal($a,$b){
        $total = $a + $b;
        echo 'Total: '.$a.' + '.$b.' = '.$total;
    }
}
if (!function_exists('getMessage')){
    function getMessage(){
        echo 'This is emergency infomation';
    }
}
if (!function_exists('getNumber')){
    function getNumber ($number,$text = null,$day = null){
        if ($text != null and $day != null){
            echo $text.': '.$number.$day;
        }else{
            echo $number.'<br/>';
        }
    }
}
