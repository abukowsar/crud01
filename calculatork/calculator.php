<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<header class="container">

</header>
<section class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="panel panel-danger">
                <form action="calculation.php" method="post">
                    
                        <div class="panel panel-primary">
                         <div class="panel-heading" align="center"><h2>Calculator</h2></div>
                         <br/>
                        <?php if(isset($_SESSION['result'])){?>
                            <div class="alert alert-success text-center">
                                <?php   echo "Calculation Result: <strong>".$_SESSION['result']."</strong>"; 
								session_unset();
								session_destroy(); 
								?>
                            </div>
                        <?php } ?>
                        <?php if(isset($_SESSION['msg'])){?>
                            <div class="alert alert-warning text-center">
                                <?php   echo "<strong>".$_SESSION['msg']."</strong>"; 
								session_unset();
								session_destroy(); 
								?>
                            </div>
                        <?php } ?>
                        <div class="form-group text-center">
                            <label class="form-inline">Insert Number 1 : </label>
                            <input type="number" class="form-inline" name="number1">
                        </div>
                        <div class="form-group text-center">
                            <label class="form-inline">Insert Number 2 : </label>
                            <input type="number" class="form-inline" name="number2">
                        </div>
                        <hr>
                        <div class="form-inline text-center radio">
                            <label><input type="radio" name="calculation" value="add"> Add </label>
                            <label><input type="radio" name="calculation" value="subtract"> Subtract </label>
                            <label><input type="radio" name="calculation" value="multiply"> Multiply </label>
                            <label><input type="radio" name="calculation" value="divide"> Divide </label>
                        </div>
                        <hr>
                        <div align="center">
                            <input name="reset" type="reset" value="Reset" class="btn btn-default" />
                             <input name="submit" type="submit" value="Result" class="btn btn-primary"/>
                            
                    
                </form>
            </div>
        </div>
    </div>
  </div>
    </div>
    </div>
    </div>
</section>
<footer class="container">

</footer>
</body>
</html>