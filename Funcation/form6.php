<?php
$number1 = rand(1,100);
$number2 = rand(1,100);

switch(rand(0,3)) {
    case 0:
        $solution = $number1 + $number2;
        echo "$number1+$number2=?";
        break;
    case 1:
        $solution = $number1 - $number2;
        echo "$number1-$number2=?";
        break;
    case 2:
        $solution = $number1 * $number2;
        echo "$number1*$number2=?";
        break;
    case 3:
        $solution = $number1 / $number2;
        echo "$number1/$number2=?";
        break;
}
?>
