<?php
$num_amount = 10;
$num_total = 1000;

$num_cal1=$num_amount*$num_total;
$num_cal2=($num_amount-2)*$num_total;



$count1 = $num_cal1 /100;
$count2 = $num_cal2 /100;

$count3 = $count1 -$count2;

echo "$count3 %";




