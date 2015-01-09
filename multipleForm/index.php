<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/

// creates the new record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($fullName, $hobby, $jobLocation, $created, $favFood, $error)

//function renderForm($Email, $mobile, $error)
{
    ?>
    <!DOCdate HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <html>
    <head>
        <title>New Record</title>
    </head>
    <body>
    <?php
    // if there are any errors, display them
    if ($error != '')
    {
        echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
    }
    ?>

 <div class='formbox'>
    <div align="center"><a href="index.php"> Home </a>|<a href="index.php"> Registration </a>| <a href="view.php">List </a>|  
    </div>
</div>
<h2 align="center">Add Multiple Information</h2> 
<table border="1" width="70%"  align="center" cellpadding="2" cellspacing="0">

    <form action="" method="post">
    
        <div>
            <tr>
              <td width="39%" align='left'><strong>Full Name: *</strong></td>
              <td width="61%"><input type="text" name="fullName" value="<?php echo $fullName; ?>" /><br/></td></tr>

        
           
           <tr> <td align='left'><strong>Hobby: *</strong> </td><td>
            
            
 <input type="checkbox" name="hobby[]" value="Playing"><label>Playing</label><br/>
 <input type="checkbox" name="hobby[]" value="Coding"><label>Coding</label><br/>
 <input type="checkbox" name="hobby[]" value="Reading"><label>Reading</label><br/>
 <input type="checkbox" name="hobby[]" value="Hacking"><label>Hacking</label><br/>

 </td></tr>
            
         
          <tr> <td align='left'><strong>Job Location: *</strong> </td><td>
<select multiple="multiple" name="jobLocation[]">
    <option value="Dhaka">Dhaka</option>
    <option value="Comilla">Comilla</option>
    <option value="Pabna">Pabna</option>
    <option value="Nator">Nator</option>
    <option value="Rajshahi">Rajshahi</option>
    <option value="Barishal">Barishal</option>
     
    

</select> <br/></td></tr>
          
           <tr><td align='left'><strong>Favourite Food: *</strong> </td><td>
          
          <input id="cheese" type="checkbox" name="favFood[]" value="Cheese" /> <label for="cheese">Cheese</label> <br /> 
          <input id="olives" type="checkbox" name="favFood[]" value="Olives" /> <label for="olives">Olives</label> <br /> 
          <input id="pepperoni" type="checkbox" name="favFood[]" value="Pepperoni" /> <label for="pepperoni">Pepperoni</label> <br />
           <input id="anchovies" type="checkbox" name="favFood[]" value="Anchovies" /> <label for="anchovies">Anchovies</label>
          
          </td></tr>
   <input type="hidden" name="created" value="<?php echo date("Y-m-d H:i:s"); ?>" />
          
<tr> <td height="68" colspan="2" align="center">
            <p>* required Fields</p>
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
   
    </tr>
    </table>
    </body>
    </html>
<?php
}




// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit']))
{
    // get form data, making sure it is valid
    $fullName = mysql_real_escape_string(htmlspecialchars($_POST['fullName']));
   
	



//echo "$hobby";

//if(isset($_POST['hobby'])){
   //$hobby=join(",",$_POST['hobby']);
    //echo $hobby;
//}



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


  
//foreach($_POST['favFood'] as $option)
//{
//print_r($option);
//echo "<br>";
//}


 $created = mysql_real_escape_string(htmlspecialchars($_POST['created']));

//if(isset($_POST['submit']))
//{
//  $ajobLocation = $_POST['jobLocation'];
   
 // if(!isset($ajobLocation))
//  {
  //  echo("<p>You didn't select any job Location!</p>\n");
 // }
  //else
 // {
  //  $njobLocation = count($ajobLocation);
     
   // echo("<p>You selected $jobLocation Location: ");
 //   for($i=0; $i < $nCountries; $i++)
  //  {

 
	
//	 var_dump($hobby,$jobLocation,$favFood);
   

    // check to make sure both fields are entered
    if ($fullName == '' || $hobby == '' || $jobLocation == '' || $favFood == '' || $created == '')
    {
        // generate error message
        $error = 'ERROR: Please fill in all required fields!';

        // if either field is blank, display the form again
        renderForm($fullName, $hobby, $jobLocation, $favFood, $created, $error);
    }
    else
    {
        // save the data to the database
        mysql_query("INSERT multiple SET fullName='$fullName', hobby='$hobby', jobLocation='$jobLocation', favFood='$favFood', created='$created'")
        or die(mysql_error());

        // once saved, redirect back to the view page
        header("Location: view.php");
    }
}
else
    // if the form hasn't been submitted, display the form
{
    renderForm('','','','','','');
}
?>

