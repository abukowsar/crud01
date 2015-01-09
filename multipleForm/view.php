<!DOCfavFood HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>View Records</title>
</head>
<body>

<h2 align="center">View Information</h2> 
<table border="0" width="70%"  align="center" cellpadding="2" cellspacing="0">
<tr><td>



<?php
/* 
	VIEW-PAGINATED.PHP
	Displays all data from 'jobLocation' table
	This is a modified version of view.php that includes pagination
*/

	// connect to the database
	include('connect-db.php');
	
	// number of results to show per page
	$per_page = 20;
	
	// figure out the total pages in the database
	$result = mysql_query("SELECT * FROM multiple");
	$total_results = mysql_num_rows($result);
	$total_pages = ceil($total_results / $per_page);

	// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
	if (isset($_GET['page']) && is_numeric($_GET['page']))
	{
		$show_page = $_GET['page'];
		
		// make sure the $show_page value is valid
		if ($show_page > 0 && $show_page <= $total_pages)
		{
			$start = ($show_page -1) * $per_page;
			$end = $start + $per_page; 
		}
		else
		{
			// error - show first set of results
			$start = 0;
			$end = $per_page; 
		}		
	}
	else
	{
		// if page isn't set, show first set of results
		$start = 0;
		$end = $per_page; 
	}
	
	// display pagination
	
	echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> ";
	for ($i = 1; $i <= $total_pages; $i++)
	{
		echo "<a href='view.php?page=$i'>$i</a> ";
	}
	echo "</p>";
		
	// display data in table
	echo "<table border='1' cellpadding='5'>";
	echo "<tr> <th>ID</th><th>FullName</th><th>Hobby</th> <th>jobLocation</th><th>favFood</th> <th>created</th><th>Modified</th><th>Edit</th><th>Delete</th></tr>";

	// loop through hobbys of database query, displaying them in the table	
	for ($i = $start; $i < $end; $i++)
	{
		// make sure that PHP doesn't try to show hobbys that don't exist
		if ($i == $total_results) { break; }
	
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . mysql_result($result, $i, 'id') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'FullName') . '</td>';
	
		echo '<td>' . mysql_result($result, $i, 'hobby') . '</td>';
	
		
		echo '<td>' . mysql_result($result, $i, 'jobLocation') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'favFood') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'created') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'modified') . '</td>';
		
		echo '<td><a href="edit.php?id=' . mysql_result($result, $i, 'id') . '">Edit</a></td>';
		echo '<td><a href="delete.php?id=' . mysql_result($result, $i, 'id') . '">Delete</a></td>';
		echo "</tr>"; 
	}
	// close table>
	echo "</table>"; 
	
	
	
	// pagination
	
?>



</td></tr>
<tr><td>
<p><a href="index.php">Add a new record</a></p>
</td></tr>
</table>
</body>
</html>
