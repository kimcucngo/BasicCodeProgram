<?php
//String
$exStr = "Learning PHP";
var_dump ($exStr);
echo '<br/>';
$exStr = 'Learning PHP';
var_dump ($exStr);
echo '<br/>';
$exHtml = '<p><a href="https://unicode.vn">Unicode</a></p>';
echo $exHtml;
const _EX_HTML = '<h3>Learning PHP</h3>';
echo _EX_HTML;
echo '<hr/>';
$stringA = "Learning english in \"Camry\" Japan";
echo $stringA;
echo '<br/>';
$stringB = 'Learning english in "Camry" Japan';
echo $stringB;
echo '<br/>';
$selectHtml = '<select year = "category">';
for ($i = 2000; $i <= 2022; $i++){
    $selectHtml .='<option value ="'.$i.'">Year '.$i.'</option>';
}
$selectHtml .='</select>';
echo $selectHtml;
