
<?php 

session_start(); 

$username = $_POST['username'];
$password = $_POST['password'];


//var_dump($username,$password);

if (isset ($username) && empty($username)){
$_SESSION['invailedUser']= 'Check Username';
header('location:login.php');
}


else if (isset ($password) && empty($password)){
$_SESSION['invailedPassword']= 'Check password';
header('location:login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET')

{
header('location:login.php');
}


else{
$_SESSION['loggedin']=true;
$_SESSION['message']='This ia a message';
header('location:dashboard.php');
}

?>