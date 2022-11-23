<?php
$customerName = 'Kim Cuc';
$customerDetailEmail = 'kimcuc.bkhcm@gmail.com';
$customerAge = 29;
echo $customerName;
echo '<br/>';
echo '日本語練習<br/>';
echo $customerDetailEmail;
echo '<br/>';
echo $customerAge;
echo '<br/>';
$customerAge = 28;
echo $customerAge;
echo '<br/>';
echo 202;
//一行でメモ
/*行１
行２
*/
echo '<br/>';
var_dump($customerName);
echo '<br/>';
var_dump($customerDetailEmail);
echo '<br/>';
var_dump($customerAge);
echo '<br/>';
print_r($customerName);
echo '<br/>';
$str1 = 'learning english';
$str2 = ' throungh stories';
//connect str1 and str2
echo $str1.$str2;
echo '<br/>';
//connect and add new
$str = $str1.' '.$str2.' children';
echo $str;
echo '<br/>';
$str3 = "learning english {$str2} for children";
echo $str3;
echo '<br/>';
?>
<img src="https://thuthuatnhanh.com/wp-content/uploads/2019/04/Hinh-cute-de-thuong.jpg"
     width="300"
     height="300">
<?php
echo "<br/>";
$url = 'https://www.w3schools.com';
$picture = 'https://img.freepik.com/premium-vector/diano-cartoon-cute-vector-art-chibi_124418-3.jpg?w=2000"
width="300"
height="300"';
$htmloutput = '<a href="'.$url.'">Visit W3School<img src="'.$picture.'"/></a>';
echo $htmloutput;
