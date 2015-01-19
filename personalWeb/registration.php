<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>::Welcome::</title>

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/contact_me.js"></script>
        
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>


<body>

 <section id="menu-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                      <ul class="nav nav-pills">
  							<li><a href="index.php">Home</a></li>
  							<li><a href="profile.php">Profile</a></li>
  							<li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="about.php">About Me</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="team.php">Team</a></li>
                            <li class="active"><a href="registration.php">Registration</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="contact.php">Contact</a></li>
						</ul>
                        
                        
                    </div>
                    
                    
                    <div class="col-md-4">
                        <form class="navbar-form navbar-left" role="search">
  						<div class="form-group">
    					<input type="text" class="form-control" placeholder="Search">
  						</div>
                        <button type="button" class="btn btn-default btn-md">
  						<span class="glyphicon glyphicon-search"></span>
						</button>
  						
						</form>
                        
                    
                        
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Section -->
   
        <!-- Start Contact Section -->
       <!-- <div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true"> -->
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Login</h3>
                            <p>[Access of Members]</p>
                        </div>
                    </div>
					<div class="container">
                    <div class="row">
           
                        <div class="col-md-12">
                        <div class="panel panel-default">
  <div class="panel-body">
                        
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12">
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

<table class="table">

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
            
          <tr><td align='left'><strong>Favourite City: *</strong> </td><td>
          <select multiple="multiple" name="favFood[]">
    <option value="Dhaka">Dhaka</option>
    <option value="Comilla">Comilla</option>
    <option value="Pabna">Pabna</option>
    <option value="Nator">Nator</option>
    <option value="Rajshahi">Rajshahi</option>
    <option value="Barishal">Barishal</option>
     
    

</select> 
          
          
          </td></tr>
          <tr> <td align='left'><strong>Additional comment: *</strong> </td><td> <textarea name="comment" value="<?php echo $comment; ?>"></textarea> <br/></td></tr>
          
          
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
    $firstName = (htmlspecialchars($_POST['firstName']));
    $lastName = (htmlspecialchars($_POST['lastName']));
	  $email = (htmlspecialchars($_POST['email']));
    $password = (htmlspecialchars($_POST['password']));
	  $date = (htmlspecialchars($_POST['year'].":".$_POST['month'].":".$_POST['day']));
    $gender = (htmlspecialchars($_POST['gender']));
	
	
	if(isset($_POST['hobby'])){
		$hobby=join(",",$_POST['hobby']);
		//echo $hobby;
	}
		  
	
	
	if(isset($_POST['favFood'])){
		$favFood=join(",",$_POST['favFood']);
		//echo $hobby;
	}
	
    $comment = (htmlspecialchars($_POST['comment']));
	$created = (htmlspecialchars($_POST['created']));
	
	 
   

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


<hr>
<div class="btn-group btn-group-lg" class="caret"><a href="login.php">Have an Account? </a></div>
</div></div></div></div></div></div></div></div></div>

<div class="copyright text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>Design & Developed by <a href="https://www.linkedin.com/pub/abu-kowsar/17/a84/a26?trk=shareFB" target="_blank">M.A. Kowsar</a></div>
                    </div>
                   
   </body>           
</html>

