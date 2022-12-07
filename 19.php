<?php
function getMessage(){
    $params = func_get_args();
    print_r($params);
}
getMessage (1,2,3);
echo '<hr/>';
function fibonacci($n){
    if ($n == 0 || $n == 1){
        return $n;
    }
    return fibonacci($n - 1)+ fibonacci ($n - 2);
}
$n = 15;
for ($i = 0; $i <= $n; $i++){
    echo fibonacci($i).' ';
}
