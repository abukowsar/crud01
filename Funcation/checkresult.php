
<?php

session_start();

$first = $_POST['first'];
$second= $_POST['second'];


//var_dump($first,$second);

if (isset ($first) && empty($first)){
    $_SESSION['invailedFirst']= 'Check First Number';
    header('location:calculate.php');
}


else if (isset ($second) && empty($second)){
    $_SESSION['invailedSecond']= 'Check Second Number';
    header('location:calculate.php');
}

else if($_POST['inlineRadioOptions'] == 'add') {
    echo $first + $second;
    header('location:calculate.php');
}
else if($_POST['inlineRadioOptions'] == 'subtract') {
    echo $first - $second;
    header('location:calculate.php');
}
else if($_POST['inlineRadioOptions'] == 'multiple') {
    echo $first * $second;
    header('location:calculate.php');
}
else if($_POST['inlineRadioOptions'] == 'divide') {
    echo $first / $second;
    header('location:calculate.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET')

{
    header('location:calculate.php');
}


else{
    $_SESSION['loggedin']=true;
    $_SESSION['message']='This ia a message of login';
    header('location:calculate.php');
}

?>