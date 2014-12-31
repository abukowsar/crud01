<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/

// creates the new record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($firstName, $lastName, $email, $password, $date, $gender, $hobby, $favFood, $comment, $created, $error)

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
<h2 align="center">Add facebook Information</h2> 
<table border="1" width="70%"  align="center" cellpadding="2" cellspacing="0">

    <form action="" method="post">
    
        <div>
            <tr>
              <td width="39%" align='left'><strong>First Name: *</strong></td>
              <td width="61%"><input type="text" name="firstName" value="<?php echo $firstName; ?>" /><br/></td></tr>

        <tr>  <td align='left'><strong>Last Name: *</strong> </td>
          <td><input type="text" name="lastName" value="<?php echo $lastName; ?>" /><br/></td></tr>
        <tr>  <td align='left'><strong>Your Email: *</strong> </td>
          <td><input type="email" name="email" value="<?php echo $email; ?>" /><br/></td></tr>
        
         
          <tr> <td align='left'><strong>New password: *</strong></td>
            <td><input type="password" name="password" value="<?php echo $password; ?>" /><br/></td></tr>
            
          
         
            
             <tr> <td align='left'><strong>
               <label>Birthday:</label>*</strong> </td><td>
             
               <?php
				$y=date("y");
				$m=date("m");
				$d=date("i");
			?>
             
               
                   
                       <select name="year">
                       <option value="2000"<?php if($y==2000) echo "Selected='selected'"; ?>>2000</option>
                       <option value="2001"<?php if($y==2001) echo "Selected='selected'"; ?>>2001</option>
                       <option value="2002"<?php if($y==2002) echo "Selected='selected'"; ?>>2002</option>
                     
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
          <tr>
         
            <td align='left'><strong>I am: *</strong></td>
      <td colspan="2">
                <input type="radio" name="gender" value="Male" id="male" />Male
                <input type="radio" name="gender" value="Female" id="Female" />Female


            </td>  </tr>
      
          
          <tr>
            <td align='left'><strong>Hobby: *</strong> </td><td>
            
            
            <input type="checkbox" name="hobby[]" value="Playing"><label>Playing</label><br/>
 <input type="checkbox" name="hobby[]" value="Coding"><label>Coding.</label><br/>
 <input type="checkbox" name="hobby[]" value="Reading"><label>Reading</label><br/>
 <input type="checkbox" name="hobby[]" value="Hacking"><label>Hacking</label><br/>
 <input type="checkbox" name="hobby[]" value="Sleeping"><label>Sleeping</label><br/><br/></td></tr>
            
          <tr><td align='left'><strong>Favourite Food: *</strong> </td><td>
          
          <input id="cheese" type="checkbox" name="favFood[]" value="Cheese" /> <label for="cheese">Cheese</label> <br /> 
          <input id="olives" type="checkbox" name="favFood[]" value="Olives" /> <label for="olives">Olives</label> <br /> 
          <input id="pepperoni" type="checkbox" name="favFood[]" value="Pepperoni" /> <label for="pepperoni">Pepperoni</label> <br />
           <input id="anchovies" type="checkbox" name="favFood[]" value="Anchovies" /> <label for="anchovies">Anchovies</label>
          
          </td></tr>
          <tr> <td align='left'><strong>Additional comment: *</strong> </td><td> <textarea name="comment" value="<?php echo $comment; ?>"></textarea> <br/></td></tr>
          
          
     <input type="hidden" name="created" value="<?php echo date("Y-m-d H:i:s"); ?>" />
            
            <tr><td align='left'> <strong>Photo Upload: *</strong> </td><td>  <input name="pic2" type="file" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" /></td></tr><br/>
          
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
    $firstName = mysql_real_escape_string(htmlspecialchars($_POST['firstName']));
    $lastName = mysql_real_escape_string(htmlspecialchars($_POST['lastName']));
	  $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
    $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
	  $date = mysql_real_escape_string(htmlspecialchars($_POST['year'].":".$_POST['month'].":".$_POST['day']));
    $gender = mysql_real_escape_string(htmlspecialchars($_POST['gender']));
	// $hobby = mysql_real_escape_string(htmlspecialchars($_POST['hobby']));
	
	
	if(!empty($_POST['hobby'])) {

 //Loop through hobbies array to fetch individual hobby so that we can use them
 echo "<h2> You have selected: </h2>";
 foreach($_POST['hobby'] as $hobby) {
 echo "<p>".$hobby ."</p>"; //Print all the hobbies

/* Alert hobbies using JS
$show = "<p>".$hobby ."</p>";
echo "<script type='text/javascript'>alert(\"Your Hobbies are: '$show'\");</script>";

 */
 }
 }
 else{
 echo "<b>Please Select at least One Hobby.</b>";
 }
	 
	  
	  
   

		  
		  
	  $favFood = ($_POST['favFood']); 
	// foreach ($_POST['favFood'] as $favFood) 
	// { 
	// $favFood = array('3' => 'Cheese', '5' => 'Olives', '8' => 'Pepperoni');
	//$favFood = array('Cheese', 'Olives', 'Pepperoni', 'Anchovies');
	 //}
	 // $favFood =($_POST['favFood'] as $favFood)
    $comment = mysql_real_escape_string(htmlspecialchars($_POST['comment']));
	$created = mysql_real_escape_string(htmlspecialchars($_POST['created']));
	
	 
   

    // check to make sure both fields are entered
    if ($firstName == '' || $lastName == '' || $email == '' || $password == '' || $date == '' || $gender == '' || $hobby == '' || $favFood == ''|| $comment == '' || $created == '')
    {
        // generate error message
        $error = 'ERROR: Please fill in all required fields!';

        // if either field is blank, display the form again
        renderForm($firstName, $lastName, $email, $password, $date, $gender, $hobby, $favFood, $comment, $created, $error);
    }
    else
    {
        // save the data to the database
        mysql_query("INSERT facebook SET firstName='$firstName', lastName='$lastName', email='$email', password='$password', date='$date', gender='$gender', hobby='$hobby', favFood='$favFood', comment='$comment', created='$created'")
        or die(mysql_error());

        // once saved, redirect back to the view page
        header("Location: view.php");
    }
}
else
    // if the form hasn't been submitted, display the form
{
    renderForm('','','','','','','','','','','');
}
?>

<?php
/*** check if a file was submitted ***/
if(!isset($_FILES['pic2']))
    {
    echo '<p>Please select a photo to Upload</p>';
    }
else
    {
    try    {
        upload();
        /*** give praise and thanks to the php gods ***/
        echo '<p>Thank you for submitting</p>';
        }
    catch(Exception $e)
        {
        echo '<h4>'.$e->getMessage().'</h4>';
        }
    }
?>

 <?php
/**
 *
 * the upload function
 * 
 * @access public
 *
 * @return void
 *
 */
function upload(){
/*** check if a file was uploaded ***/
if(is_uploaded_file($_FILES['pic2']['tmp_name']) && getimagesize($_FILES['pic2']['tmp_name']) != false)
    {
    /***  get the image info. ***/
    $size = getimagesize($_FILES['pic2']['tmp_name']);
    /*** assign our variables ***/
    $type = $size['mime'];
    $imgfp = fopen($_FILES['pic2']['tmp_name'], 'rb');
    $size = $size[3];
    $name = $_FILES['pic2']['name'];
    $maxsize = 99999999;


    /***  check the file is less than the maximum file size ***/
    if($_FILES['pic2']['size'] < $maxsize )
        {
        /*** connect to db ***/
        $dbh = new PDO("mysql:host=localhost;dbname=students", 'root', '');

                /*** set the error mode ***/
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            /*** our sql query ***/
        $stmt = $dbh->prepare("INSERT INTO facebook (image_type ,pic2, image_size, image_name) VALUES (? ,?, ?, ?)");
		
		header("Location: view.php");

        /*** bind the params ***/
        $stmt->bindParam(1, $type);
        $stmt->bindParam(2, $imgfp, PDO::PARAM_LOB);
        $stmt->bindParam(3, $size);
        $stmt->bindParam(4, $name);

        /*** execute the query ***/
        $stmt->execute();
        }
    else
        {
        /*** throw an exception is image is not of type ***/
        throw new Exception("File Size Error");
        }
    }
else
    {
    // if the file is not less than the maximum allowed, print an error
    throw new Exception("Unsupported Image Format!");
    }
}



?> 


