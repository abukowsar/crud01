
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
        <script src="js/jqBootstrapValidation.js"></script>
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
                            <h3>Dashboard</h3>
                            <p>[Your details]</p>
                        </div>
                    </div>
					<div class="container">
                    <div class="row">
           
                        <div class="col-md-12">
                        <div class="panel panel-default">
  <div class="panel-body">
<?php


echo "<br>";
session_start();
if(isset($_SESSION['name'])){
echo "<br>";
echo "Hello " . $_SESSION['name'] . "<br>";
echo "<br>";
echo "Your email is : " .$_SESSION['email']. "<br>";
echo "<br>";
echo "You was Registered at : " . $_SESSION['created'] . "<br>";
}
else{
header("location:index.php");
}
?>


<hr />
<div class="btn-group btn-group-lg" class="caret"><a href="logout.php">Logout</a></div>
<hr />
            </div></div></div></div></div></div></div>
              
       
        <!-- End Contact Section -->
<div class="copyright text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>Design & Developed by <a href="https://www.linkedin.com/pub/abu-kowsar/17/a84/a26?trk=shareFB" target="_blank">M.A. Kowsar</a></div>
                    </div>
                   
   </body>           
</html>
