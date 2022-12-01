<?php
$i = 1;
while ($i <= 5){
    echo 'While loop = '.$i.'<br/>';
    $i++;
}
// Total 1
$n = 10;
$i = 1;
$total = 0;
while ($i <= $n){
    $total += $i;
    $i++;
}
echo 'Total = '.$total.'<br/>';
// Total 2
$total = 0;
$i = 2;
while (1/$i >= 0.0001){
    $total += 1/$i;
    $i+=2;
}
echo 'Total = '.$total.'<hr/>';
// Do While
$i = 1;
do {
    echo 'Loop Do While '.$i.'<br/>';
    $i++;
}while ($i <= 10);
// loop do while total
$n = 10;
$i = 2;
$total = 0;
do {
    $total += 1/$i;
    $i += 2;
}while (1/$i >= 0.0001);
echo 'Total = '.$total.'<br/>';
