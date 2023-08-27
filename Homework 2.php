<?php
//fan 2, ac 5, fridge 2
//fan 20 w
//ac 100 w
//fridge 150 w
//1 w = 14 taka 
//Total Watt ?? Total bill ?? 


//******************** STATIC ****************** */
echo ("<b><u> STATIC :- </b></u><br><br>");
//fan
$fanWatt = 20;
$fan = 2;
$totalFanWatt = $fanWatt * $fan;
echo 'Total used fan watt ='.$totalFanWatt.'<br>';
//ac
$acWatt = 100;
$ac = 5;
$totalacWatt = $acWatt * $ac;
echo 'Total used ac watt ='.$totalacWatt.'<br>';
//fridge
$fridgeWatt = 150;
$fridge = 2;
$totalFridgeWatt = $fridgeWatt * $fridge;
//Total
echo 'Total used fridge watt ='.$totalFridgeWatt.'<br>';
$totalWatt = $totalFanWatt + $totalacWatt + $totalFridgeWatt;
echo '<b>Total Watt =<b>' .$totalWatt.'<br>';

$PerWatt = 14;
echo 'Total Bill =' .$totalWatt * $PerWatt.'<br><br>';


//************************ DYNAMIC *********************** */

echo ("<b><u> DYNAMIC :- </b></u><br><br>");
//$fanWatt = 80
//$acWatt = 160
//$fridgeWatt = 240 

function t_Watt ($fanWatt,$acWatt,$fridgeWatt)
 {
    $perWatt = 14;
    $watt = $fanWatt + $acWatt+ $fridgeWatt;
    echo 'Total Used Watt ='.$watt.'<br>';
    $bill = $watt * $perWatt;
    echo 'Total Bill ='.$bill.'<br>';
 }
 t_Watt(80,160,240);








