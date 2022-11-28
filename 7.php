<?php
$number = 200;
$seku = 'fg';
if ($seku !== 'fg'){
    echo $number.'sashikomi';
}elseif ($number > 175 && $seku = 'fg'){
    echo $number.'fg';
}elseif ($number <= 175 && $seku = 'fg'){
    echo $number.'donatuban';
}
echo '<br/>';
$number1 = 175;
$seku1 = 'sashikoki';
if ($seku1 !== 'fg'){
    if ($number1 > 300){
        echo $number1.'sashikomi'.'4tenturi';
    }else{
        echo $number1.'sashikomi'.'2tenturi';
    }
}elseif ($seku1 ='fg'){
    if ($number1 > 175 && $number1 > 300){
        echo $number1.'fg'.'4tenturi';
    }elseif ($number1 > 175 && $number1 <= 300) {
        echo $number1.'fg'.'2tenturi';
    }
    else{
        echo $number1.'donatuban';
    }
}
