<?php
$age = 11;
if ($age <= 18){
    echo 'You can drive motobike';
}else{
    echo 'You can not drive motobike';
}
echo '<br/>';
// Toan tu 3 ngoi
echo $age == 18?'You can drive motobike':'You can not drive motobike';
// exchange if by another one
$number = 9;
if ($number <= 10){
?>
    <h3>Title 1</h3>
    <h3>Title 2</h3>
    <p>Content</p>
<?php
}else{
?>
    <p>Wrong<p>
<?php
}
echo '<hr/>';
if ($number <= 10):
?>
    <h3>Title 1</h3>
    <h3>Title 2</h3>
    <p>Content</p>
<?php
else:
?>
    <p>Wrong<p>
<?php
endif;
echo '<hr/>';
//exchange for by anorther one
for ($i = 1; $i <= 9; $i++){
    echo $i.'<br/>';
}
echo '<hr/>';
for ($i = 1;$i <= 9; $i++):
    echo $i.'<br/>';
endfor;
echo '<hr/>';
$e = 1;
while ($e <= 5){
    echo $e.'<br/>';
    $e++;
}
echo '<hr/>';
$e = 1;
while ($e <=5):
    echo $e.'<br/>';
    $e++;
endwhile;
echo '<hr/>';
//exchange foreach by another one
$dataArr = [
    'item 1',
    'item 2',
    'item 3',
    'item 4'
];
foreach ($dataArr as $item){
    echo $item.'<br/>';
}
echo '<hr/>';
foreach ($dataArr as $item):
    echo $item.'<br/>';
endforeach;
