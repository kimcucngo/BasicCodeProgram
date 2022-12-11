<?php
//array
$carArr = ['Honda','Toyota','Nissan','Mazda'];
echo '<pre>';
print_r($carArr);
echo '</pre>';
echo '<hr/>';
$customerArr = [
    'email: kimcuc.bkhcm@gmail.com',
    'name' => 'Kim Cuc',
    'job' => 'Engineer',
    10 => 'PHP',
    'age' => 29,
    'live' => 'Japan',
    'single'
];
echo '<pre>';
print_r($customerArr);
echo '</pre>';
echo '<hr/>';
$cusArr = 'I am student';
if (!empty($cusArr) && is_array($cusArr)){
    foreach ($cusArr as $key => $value){
        echo $value.'<br/>';
    }
}else{
    echo 'Wrong';
}
echo '<hr/>';
$aArr = [
    'Dinh Loc',
    'Kim Cuc',
    'Dinh Tinh',
    'Dinh Tu'
];
for ($i = 0; $i < count($aArr); $i++){
    if (!empty($aArr) && is_array($aArr)){
        var_dump($aArr[$i]);
    }
}
echo '<hr/>';
$items1 = [
    'name'=>'Kim Cuc',
    'email'=>'kimcuc.bkhcm@gmail.com',
    'phone'=>'07042902255',
    'address'=>'Fukuoka ken Itoshima shi Maebaru Kita 3-1-5(202)',
];
$items2 = [
    'name'=>'Dinh Loc',
    'mail'=>'phandinhlocbk@gmail.com',
    'phone'=>'08078425145',
    'address'=>'Fukuoka ken Itoshima shi Maebaru Kita 3-1-3(107)'
];
$cus = [
    $items1,
    $items2
];
echo '<pre>';
print_r($cus);
echo '</pre>';
$custo = [
    [
        'name' => 'Dinh Loc',
        'age' => 29,
        'single',
        'phone' => '08078425145'
    ],
    [
        'name' => 'Kim Cuc',
        'age' => 29,
        'single',
        'phone' => '07043902255'
    ],
    'Live in Japan',
    'Can speak Japanese'
];
echo '<pre>';
print_r($custo);
echo '</pre>';
echo '<hr/>';
$Array = [];
//add another array
$array[] = [
    'name' => 'Aoyama',
    'job' => 'engineer',
    'age' => '25',
    'single'
];
$array[] = [
    'name' => 'Ueno',
    'position' => 'leader',
    'age' => 45
];
$array['place'] = 'Itoshima'; 
$array[] = [
    'company' => 'kuchogikenkogyo',
    'address' => 'fukuoka ken itoshima shi',
    'manager' => 'urabe',
    'goods' => 'air conditioner'
];
$array['3']['manager'] = [
    'name' => 'urabe',
    'phone' => '08078425145',
    'job' => 'owner of company',
    'email' => 'urabe@gmai.com'
];
echo '<pre>';
Print_r($array);
echo '</pre>';
echo '<hr/>';
if (!empty($array) && is_array($array)){
    foreach ($array as $item){
        if (is_array($item)){
            if (!empty($item) && is_array($item)){
                echo 'customer information'.'<br/>';
                foreach ($item as $subArr){
                if(is_array($subArr)){
                }
                else{
                echo $subArr.'<br/>';
                }
                }
            }
        else{
            echo $item.'<br/>';
        }
        }
        echo '<hr/>';
    }
}
