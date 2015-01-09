<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($id, $FullName, $hobby, $favFood, $jobLocation, $error)
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


<tr> <td align='left'> <strong>Full Name: *</strong> </td><td><input type="text" name="FullName" value="<?php echo $FullName; ?>" /><br/></td></tr>
         
         
            
         
       
                   
          
   
            

        
           <tr>
        <td align='left'><strong>Hobby: *</strong></td><td>
                
 <input type="checkbox" name="hobby[]" value="Playing" <?php echo($hobby == 'Playing') ? 'checked' : ''; ?> /><label>Playing</label><br/>
 <input type="checkbox" name="hobby[]" value="Coding"<?php echo($hobby == 'Coding') ? 'checked' : ''; ?> /><label>Coding</label><br/>
 <input type="checkbox" name="hobby[]" value="Reading"<?php echo($hobby == 'Reading') ? 'checked' : ''; ?> /><label>Reading</label><br/>
 <input type="checkbox" name="hobby[]" value="Hacking"<?php echo($hobby == 'Hacking') ? 'checked' : ''; ?> /><label>Hacking</label><br/>
        
        
           </td>  </tr>
         
        
          <tr> <td align='left'> <strong>Job Location: *</strong> </td><td><input type="text" name="jobLocation" value="<?php echo $jobLocation; ?>" /><br/></td></tr>
         
          <tr> <td align='left'><strong>Favourite Food: *</strong> </td><td><input type="text" name="favFood" value="<?php echo $favFood; ?>" /><br/></td></tr>
         
        
      
         
         
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

 
    $FullName = mysql_real_escape_string(htmlspecialchars($_POST['FullName']));
    
	 $hobby = mysql_real_escape_string(htmlspecialchars($_POST['hobby']));
	 $jobLocation = mysql_real_escape_string(htmlspecialchars($_POST['jobLocation']));
	  $favFood = mysql_real_escape_string(htmlspecialchars($_POST['favFood']));
	   
	   $modified =($_POST['modified']);
 
 // check that result/created fields are both filled in
 if ($FullName == '' || $hobby == ''|| $jobLocation == '' || $favFood == '' ||  $modified == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($id, $FullName, $jobLocation, $hobby, $favFood,  $error);
 }
 else
 {
 // save the data to the database
 mysql_query("UPDATE multiple SET FullName='$FullName', hobby='$hobby', jobLocation='$jobLocation', favFood='$favFood',  modified='$modified' WHERE id='$id'")
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
 $result = mysql_query("SELECT * FROM multiple WHERE id=$id")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $fullName = $row['fullName'];
 
if(isset($_POST['hobby'])){
    $hobby=join(",",$_POST['hobby']);
    //echo $hobby;
}
	  
//print_r($hobby);



if(isset($_POST['jobLocation'])){
    $jobLocation=join(",",$_POST['jobLocation']);
    //echo $hobby;
}
  
  //if( is_array($jobLocation)){
//while (list ($key, $val) = each ($jobLocation)) {
//echo "$val <br>";
//}
//}
 


if(isset($_POST['favFood'])){
    $favFood=join(",",$_POST['favFood']);
    //echo $hobby;
}


 $modified =$row['modified'];
 

 
 // show form
 renderForm($id, $fullName, $hobby, $jobLocation, $favFood, '');
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
