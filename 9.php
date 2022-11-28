<?php
$count = 10;
$start = 1;
for ($i = $start; $i <= $count; $i++){
    echo 'This is count '.$i.'<br/?>';
}
echo '<hr/>';
$n = 100;
$S = 0;
for ($i = $S; $i <= $n; $i++){
    $S += $i;
}
echo 'Sum: '.$S;
echo  '<hr/>';
$n = 10;
for ($i = $n; $i >= 1; $i--){
    echo 'This is count '.$i.'<br/>';
}
echo '<hr/>';
//excercise1:
$startId = 1;
$endId = 10;
for ($i = $startId; $i <= $endId; $i++){
    if ($i %2 == 0){
        echo $i.' :Even Number'.'<br/>';
    }else{
        echo $i.' :Odd Number'.'<br/>';
    }
}
echo '<hr/>';
$startIndex = 0;
$endIndex = 5;
$even = null;
$odd = null;
$evenCount = 0;
$oddCount = 0;
for ($i = $startIndex; $i <= $endIndex; $i++){
    if ($i %2 == 0){
        $evenCount ++;
        $even .= $i.' ';
    }else{
        $oddCount++;
        $odd .= $i.' ';
    }
}
if ($evenCount > 0){
    echo 'There are '.$evenCount.' even Number: '.$even.'<br/>';

}else{
    echo 'Therr aren not even number <br/>';
}
if ($oddCount > 0){
    echo 'Ther are '.$oddCount.' odd Numver: '.$odd.'<br/>';
}else{
    echo 'There are not odd number <br/>';
}