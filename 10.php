<?php
// Check prime number
$number = 9;
$checkNumber = true;
if ($number >= 0){
    for ($i = 2; $i < $number; $i++){
        if ($number %$i == 0){
            $checkNumber = false;
        }
    }
    if ($checkNumber){
        echo $number. ': is prime number <br/>';
    }else{
        echo $number.': is not prime number <br/>';
    }
}else{
    echo 'It is not prime number';
}
echo '<hr/>';
?>
<!-- Print multiplicatiom table -->
<table border = "1" width = "100%">
    <tr>
        <?php
        for ($i = 1; $i <= 5; $i++){
            echo '<td>';
            for ($j = 1; $j <= 10; $j++){
                echo $i.' x '.$j.' = '.$i*$j.'<br/>';
            }
        echo '</td>';
        } 
        ?>
    </tr>
    <tr>
        <?php
        for ($i = 6; $i <= 10; $i++){
            echo '<td>';
            for ($j = 1; $j <= 10; $j++){
                echo $i.' x '.$j.' = '.$i*$j.'<br/>';
            }
        echo '</td>';
        } 
        ?>
    </tr>
</table>
<?php
echo '<hr/>';
