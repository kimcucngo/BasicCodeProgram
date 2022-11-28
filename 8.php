<?php
$number = 4;
switch ($number){
    case 1:
        echo 'Today is Monday';
        break;
    case 2:
        echo 'Today is Tueday';
        break;
    case 3:
        echo 'Today is Wedday';
        break;
    case 4:
        echo 'Today is Thursday';
        break;
    case 5:
        echo 'Today is Friday';
        break;
    case 6:
        echo 'Today is Saturday';
        break;
    case 7:
        echo 'Today is Sunday';
        break;
    default:
        echo 'Nothing';
        break;
}
echo '<br/>';
/* check days of month
Month: 2 (28 or 29)
Month; 1,3,5,7,8,10,12 ( 31)
Month: 4, 6,9,11 (30)
*/
$month = 2;
$year = 2022;
switch ($month){
    case 2:
        if ($year %4 == 0){
            echo 'Year: '.$year.' Month:'.$month.' This month have 28 days';
        }else{
            echo 'Year: '.$year.' Month:'.$month.' This month have 29 days';
        }
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo 'Year: '.$year.' Month:'.$month.' This month have 30 days';
        break;
    default:
        echo 'Year: '.$year.' Month:'.$month.' This month have 31 days';
        break;
}
