<?php
for ($i = 1; $i <= 10; $i++){
    echo $i.'<br/>';
    if ($i == 5){
        break;
    }
}
echo '<br/>';
for ($i = 1; $i <= 5; $i++){
    if ($i == 5) continue;
    echo $i.'<br/>';
}
//die ('The end');
exit ('The end');
echo 'wellcome to course learning PHP';
