<?php if(isset($_SESSION['error'] )) : ?>

<div class="error">

<?php echo $_SESSION['error'];?>

</div>

<?php 
unset($_SESSION['error']); 
endif;
?>
------------------------------------------------------------------------------
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')

{
header('location:login.php');
}

else

{

$_SESSION['loggedin']=true;

$_SESSION['message']='This ia a message';

header('location:dashboard.php');
}
?>
-----------------------------------------------------------------------------------
<?php
mysqli_connect('localhost','root','','students');

$sql = "SELECT *from login where username = $username AND password = $password"

$result = mysql_query(query);

if ($result)
{

   $result = mysql_query("SELECT * FROM login");
	
	
	
	
	echo "<table border='1' cellpadding='5'>";
	echo "<tr> <th>ID</th>User Name</th> <th>password</th><th>Edit</th><th>Delete</th></tr>";

	// loop through hobbys of database query, displaying them in the table	
	for ($i = $start; $i < $end; $i++)
	{
		// make sure that PHP doesn't try to show hobbys that don't exist
		if ($i == $total_results) { break; }
	
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . mysql_result($result, $i, 'id') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'username') . '</td>';
		
		echo '<td>' . mysql_result($result, $i, 'password') . '</td>';
		
		echo '<td><a href="edit.php?id=' . mysql_result($result, $i, 'id') . '">Edit</a></td>';
		echo '<td><a href="delete.php?id=' . mysql_result($result, $i, 'id') . '">Delete</a></td>';
		echo "</tr>"; 
	}
	
	echo "</table>"; 
	header('location:dashboard.php');
}
else
{
	header('location:login.php');
}
?>