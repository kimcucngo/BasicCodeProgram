<?php
//String 2
//Add escape for string
$str = 'Learning english \throungh stories';
// $str = addcslashes ($str, 'es');
// echo $str.'<br/>';
$str = addslashes ($str);
echo $str.'<br/>';
$str = stripcslashes ($str);
echo $str.'<br/>';
//change string => array
$ex = 'I hope you allways happy, beauty and success';
$arr = explode (' ',$ex);
print_r($arr);
echo '<hr/>';
// Change array => string
$str = implode (' ',$arr);
echo $str;
echo '<br/>';
$exA = 'We are family';
$lengthEx = strlen ($exA);
echo 'Length is '.$lengthEx.'<br/>';
$wordCount = str_word_count ($exA);
echo 'the number word is '.$wordCount;
echo '<hr/>';
$exB = 'Camry';
$exB = str_repeat ($exB, 3);
echo $exB;
echo '<br/>';
//Find and replace
$exC = 'Learning speaking english with Camry';
echo $exC.'<br/>';
$exC = str_replace ('Camry','foreigner',$exC);
echo $exC.'<br/>';
$str = 'Family123456';
$str = md5 ($str);
echo $str.'<br/>';
$str = sha1 ($str);
echo $str.'<br/>';
$str = '<p>Learning write PHP</p>';
$str = htmlentities ($str);
echo $str.'<br/>';
$str = html_entity_decode ($str);
echo $str.'<br/>';
$str = '<p>Learning<a href =""> english <strong> with Camry </strong></a> </p>';
echo $str.'<br/>';
$str = strip_tags ($str,'<a>');
echo $str.'<br/>';
$str = 'My family are living Ho Chi Minh city';
$subStr = substr ($str,0,2);
echo $subStr.'<br/>';
$str = 'kimcuc.bkhcm.@gmail.com';
$subStr = strstr ($str, '@');
echo $subStr.'<br/>';
