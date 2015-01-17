<?php
    session_start();

    

        if (empty($_POST['number1']) && empty($_POST['number2'])) {
            $_SESSION['msg']="Not Empty Number 1 and Number 2";
            header('location: calculator.php');
        }
        else {
            if ($_POST['calc'] == 'add') {
                $_SESSION['result']=add($_POST['number1'], $_POST['number2']);
                header('location: calculator.php');
            } elseif ($_POST['calc'] == 'subtract') {
                $_SESSION['result']=subtract($_POST['number1'], $_POST['number2']);
                header('location: calculator.php');
            } elseif ($_POST['calc'] == 'divide') {
                $_SESSION['result']=divide($_POST['number1'], $_POST['number2']);
                header('location: calculator.php');
            } elseif ($_POST['calc'] == 'multiply') {
                $_SESSION['result']=multiply($_POST['number1'], $_POST['number2']);
                header('location: calculator.php');
            }
            else{
                $_SESSION['msg']="Choice an option !";
                header('location: calculator.php');
            }
        }

        function add($num1, $num2)
        {
            return $num1 + $num2;
        }

        function subtract($num1, $num2)
        {
            if ($num1 > $num2) {
                return $num1 - $num2;
            } else {
                $_SESSION['msg'] = "Number 2 not less than Number 1";
                header('location: calculator.php');
            }
        }

        function divide($num1, $num2)
        {
            if ($num2==0 ) {
                $_SESSION['msg'] = "Number 1 not be 0";
                header('location: calculator.php');
            } else {
                return $num1 / $num2;
            }
        }

        function multiply($num1, $num2)
        {
            return $num1 * $num2;
        }
		
	if($_SERVER['REQUEST_METHOD']=="GET"){
        header('location: calculator.php');
   		}
