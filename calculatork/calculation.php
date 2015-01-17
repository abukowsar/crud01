<?php
    session_start();

    

        if (empty($_POST['number1']) && empty($_POST['number2'])) {
            $_SESSION['msg']="Input Number 1 & Number 2";
            header('location: calculator.php');
        }
		
		/*
			else if (empty($_POST['number1']) && empty($_POST['number1'])){
			$_SESSION['msg']= 'Check number 1';
			header('location:calculator.php');
			}
			
			
			else if (empty($_POST['number2']) && empty($_POST['number2'])){
			$_SESSION['msg']= 'Check number 2';
			header('location:calculator.php');
			}
        */
		
        else {
		
            if ($_POST['calculation'] == 'add') {
                $_SESSION['result']=add($_POST['number1'], $_POST['number2']);
                header('location: calculator.php');
				
            } elseif ($_POST['calculation'] == 'subtract') {
                $_SESSION['result']=subtract($_POST['number1'], $_POST['number2']);
                header('location: calculator.php');
				
            } elseif ($_POST['calculation'] == 'divide') {
                $_SESSION['result']=divide($_POST['number1'], $_POST['number2']);
                header('location: calculator.php');
				
            } elseif ($_POST['calculation'] == 'multiply') {
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

 		function multiply($num1, $num2)
        {
            return $num1 * $num2;
        }
		
        function divide($num1, $num2)
        {
            if ($num2==0 ) {
                $_SESSION['msg'] = "Divide not possible with 0";
                header('location: calculator.php');
            } else {
                return $num1 / $num2;
            }
        }

       
		
	if($_SERVER['REQUEST_METHOD']=="GET"){
        header('location: calculator.php');
   		}
