<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($id, $firstName, $lastName, $email, $password, $date, $gender, $hobby, $favFood, $comment, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Edit Record</title>
 </head>
  <div class='formbox'>
    <div align="center">|<a href="index.php"> Registration </a>| <a href="view.php">List </a>|  
    </div>
</div>
<h2 align="center">Edit Information</h2> 

 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 <table border="1" width="70%"  align="center" cellpadding="2" cellspacing="0">
<tr>
 <form action="" method="post">
 <input type="hidden" name="id" value="<?php echo $id; ?>"/>
 <div>
 <p><strong>ID:</strong> <?php echo $id; ?></p>


<tr> <td align='left'> <strong>First Name: *</strong> </td><td><input type="text" name="firstName" value="<?php echo $firstName; ?>" /><br/></td></tr>
 
  
  
 
            
         <tr> <td align='left'> <strong>Last Name: *</strong> </td><td><input type="text" name="lastName" value="<?php echo $lastName; ?>" /><br/></td></tr>
          <tr> <td align='left'> <strong>Your Email: *</strong> </td><td><input type="email" name="email" value="<?php echo $email; ?>" /><br/></td></tr>
         
         
         
          
         
          <tr> <td align='left'><strong>New password: *</strong> </td><td><input type="password" name="password" value="<?php echo $password; ?>" /><br/></td></tr>
          
          
            
         
       
          <tr> <td align='left'><strong>
               <label>Birthday:</label>*</strong> </td><td>
             
               <?php
				$y=date("y");
				$m=date("m");
				$d=date("i");
			?>
             
               
                   
                       <select name="year">
                       <option <?php if($y==2000) echo "Selected='selected'"; ?>value="2000">2000</option>
                       <option <?php if($y==2001) echo "Selected='selected'"; ?>value="2001">2001</option>
                       <option <?php if($y==2002) echo "Selected='selected'"; ?>value="2002">2002</option>
                     
               </select>
                   
                            <select name="month">
                   <option value="01"<?php if($m==01) echo "Selected='selected'"; ?>>Jan</option>
                   <option value="02"<?php if($m==02) echo "Selected='selected'"; ?>>Feb</option>
                   <option value="03"<?php if($m==03) echo "Selected='selected'"; ?>>Mar</option>
                   <option value="04"<?php if($m==04) echo "Selected='selected'"; ?>>Apr</option>
                   <option value="05"<?php if($m==05) echo "Selected='selected'"; ?>>May</option>
                   <option value="06"<?php if($m==06) echo "Selected='selected'"; ?>>Jun</option>
                   <option value="07"<?php if($m==07) echo "Selected='selected'"; ?>>Jul</option>
                   <option value="08"<?php if($m==08) echo "Selected='selected'"; ?>>Aug</option>
                   <option value="09"<?php if($m==09) echo "Selected='selected'"; ?>>Sep</option>
                   <option value="10"<?php if($m==10) echo "Selected='selected'"; ?>>Oct</option>
                   <option value="11"<?php if($m==11) echo "Selected='selected'"; ?>>Nov</option>
                   <option value="12"<?php if($m==12) echo "Selected='selected'"; ?>>Dec</option>
               </select>
                   
                   <select name="day">
                     <?php
    for ($i = 1; $i <=31; $i++) {
        echo "<option value=\"$i\">$i</option>";
    }
?>
               </select>
                   
                   
                              </p></td></tr>
          
        <!--  <tr> <td align='left'><strong>Birthday: *</strong> </td>
              <td><input type="date" name="date" value="<?php echo $date; ?>" /><br/></td></tr> -->
        
    
           <tr>
        <td align='left'><strong>I am: *</strong></td>
        <td colspan="2">
        <input type="radio" name="gender" value="Male" <?php echo($gender == 'Male') ? 'checked' : ''; ?> />Male
        <input type="radio" name="gender" value="Female" <?php echo($gender == 'Female') ? 'checked' : ''; ?> />Female
        
           </td>  </tr>
            
         
         
         <tr> <td align='left'> <strong>Hobby: *</strong> </td><td><input type="text" name="hobby" value="<?php echo $hobby; ?>" /><br/></td></tr>
         
         
         
         
          <tr> <td align='left'><strong>Favourite Food: *</strong> </td><td><input type="text" name="favFood" value="<?php echo $favFood; ?>" /><br/></td></tr>
         
        
      <!--   <tr> <td align='left'> <strong>Comment: *</strong> </td><td><input type="text" name="comment" value="<?php echo $comment; ?>" /><br/></td></tr> -->
         
          <tr> <td align='left'> <strong>Comment: *</strong> </td><td><textarea name="comment"><?php echo $comment; ?>"</textarea><br/></td></tr>
         
        <input type="hidden" name="modified" value="<?php echo date("Y-m-d H:i:s"); ?>" />
        
 <tr> <td height="68" colspan="2" align="center">
 <p>* Required</p>
 <input type="submit" name="submit" value="Update">
 </div>
 </form> 
 </td>
    </tr>
    </table>
 </body>
 </html> 
 <?php
 }



 // connect to the database
 include('connect-db.php');
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['id']))
 {
 // get form data, making sure it is valid
 $id = $_POST['id'];

 
    $firstName = mysql_real_escape_string(htmlspecialchars($_POST['firstName']));
    $lastName = mysql_real_escape_string(htmlspecialchars($_POST['lastName']));
	  $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
    $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
	 
   
	  $date = mysql_real_escape_string(htmlspecialchars($_POST['year'].":".$_POST['month'].":".$_POST['day']));
	  
    $gender = mysql_real_escape_string(htmlspecialchars($_POST['gender']));
	 $hobby = mysql_real_escape_string(htmlspecialchars($_POST['hobby']));
	  $favFood = mysql_real_escape_string(htmlspecialchars($_POST['favFood']));
	   $comment = mysql_real_escape_string(htmlspecialchars($_POST['comment']));
	   $modified =($_POST['modified']);
 
 // check that result/created fields are both filled in
 if ($firstName == '' || $lastName == '' || $email == '' || $password == '' || $date == '' || $gender == ''|| $hobby == ''|| $favFood == ''|| $comment == ''|| $modified == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($id, $firstName, $lastName, $email, $password, $date, $gender, $hobby, $favFood, $comment, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("UPDATE facebook SET firstName='$firstName', lastName='$lastName', email='$email', password='$password', date='$date', gender='$gender', hobby='$hobby', favFood='$favFood', comment='$comment', modified='$modified' WHERE id='$id'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: view.php"); 
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error!';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
 {
 // query db
 $id = $_GET['id'];
 $result = mysql_query("SELECT * FROM facebook WHERE id=$id")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $firstName = $row['firstName'];
 $lastName = $row['lastName'];
 $email = $row['email'];
 $password = $row['password'];
 
 $date = $row['date'];
 
 $gender = $row['gender'];
 $hobby = $row['hobby'];
 $favFood = $row['favFood'];
 $comment = $row['comment'];
 $modified =$row['modified'];
 

 
 // show form
 renderForm($id, $firstName, $lastName, $email, $password, $date, $gender, $hobby, $favFood, $comment, '');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error!';
 }
 }
?>
