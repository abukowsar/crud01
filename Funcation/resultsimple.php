<?php

$first = $_POST['first'];
$second= $_POST['second'];
if($_POST['inlineRadioOptions1'] == 'add') {
echo $first + $second;
}
else if($_POST['inlineRadioOptions2'] == 'subtract') {
echo $first - $second;
}
else if($_POST['inlineRadioOptions3'] == 'multiple') {
echo $first * $second;
} 
else if($_POST['inlineRadioOptions4'] == 'divide') {
echo $first / $second;
}
?>

