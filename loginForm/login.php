<?php session_start();


if (isset($_SESSION['invailedUser'])) echo $_SESSION['invailedUser'];

if (isset($_SESSION['invailedPassword'])) echo $_SESSION['invailedPassword'];

session_unset();

?>


<form action="checkuser.php" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username"  type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<input name="reset" type="reset" value="Reset" />

<br />
<br />
<a href="register.php" >New Registration</a>



