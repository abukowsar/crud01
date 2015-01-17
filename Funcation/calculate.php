
<?php
    session_start();
?>

<html>
<head>
    <title>Calculator</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<head>
<body>
<header class="container">

</header>

<section class="container">
    <div class="row">
<div class="panel panel-primary">
    <div class="panel-heading" align="center"><h2>Calculator</h2></div>

    <div class="panel-body" align="center">
        <table width="40%" height="151" align="center" class="table table-condensed">
        <form action="result.php" method="post" align="center">
            

<?php if(isset($_SESSION['result'])){?>
                            
                                <?php   echo "Output of your calculation is: <strong>".$_SESSION['result']."</strong>"; session_unset();session_destroy(); ?>
                            <td width="34%"></div>
                        <?php } ?>
                        <?php if(isset($_SESSION['msg'])){?>
                            <div class="alert alert-warning text-center">
                                <?php   echo "<strong>".$_SESSION['msg']."</strong>"; session_unset();session_destroy(); ?>
                            </div>
                        <?php } ?>



<div>

        <tr>
   <td> Enter number 1</td><td width="11%">:</td>
   <td width="55%"><input type="number" name="first" class="form-control" placeholder="Text input"/></td>
    </tr><tr>
        <td> Enter number 2</td><td>:</td><td><input type="number" name="second" class="form-control" placeholder="Text input"/></td>
    </tr>
   

<tr>

<td><td></td><td>
<label class="radio-inline">
    <input type="radio" name="inlineRadioOptions" id="add" value="add"> Add
</label>
<label class="radio-inline">
    <input type="radio" name="inlineRadioOptions" id="subtract" value="subtract"> Substract
</label>
    <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="multiple" value="multiple"> Multiplication
    </label>
<label class="radio-inline">
    <input type="radio" name="inlineRadioOptions" id="divide" value="divide"> Division
</label>


   </tr>
   <tr><td></td> <td><input name="reset" type="reset" value="Reset" class="btn btn-default" /></td> <td><input type="submit" value="result" class="btn btn-default"/></td></tr>
    </form>
</table>


    </div>
</div>
 </div>
</div>

</body>
</html>