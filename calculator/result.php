<?php
$first = $_POST['first'];
$second= $_POST['second'];
if($_POST['inlineRadioOptions'] == 'add') {
echo $first + $second;
}
else if($_POST['inlineRadioOptions'] == 'subtract') {
echo $first - $second;
}
else if($_POST['inlineRadioOptions'] == 'multiple') {
echo $first * $second;
} 
else if($_POST['inlineRadioOptions'] == 'divide') {
echo $first / $second;
}
?>