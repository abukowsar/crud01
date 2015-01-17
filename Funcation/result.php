<?php
    session_start();

    if($_SERVER['REQUEST_METHOD']=="GET"){
        header('location: calculate.php');
    }


        if (empty($_POST['number1']) && empty($_POST['number2'])) {
            $_SESSION['msg']="Number1 and Number2 is required";
            header('location: calculate.php');
        }
        else {
            if ($_POST['inlineRadioOptions'] == 'add') {
                $_SESSION['result']=add($_POST['number1'], $_POST['number2']);
                header('location: calculate.php');
            } elseif ($_POST['inlineRadioOptions'] == 'subtract') {
                $_SESSION['result']=subtract($_POST['number1'], $_POST['number2']);
                header('location: calculate.php');
            } elseif ($_POST['inlineRadioOptions'] == 'divide') {
                $_SESSION['result']=divide($_POST['number1'], $_POST['number2']);
                header('location: calculate.php');
            } elseif ($_POST['inlineRadioOptions'] == 'multiply') {
                $_SESSION['result']=multiply($_POST['number1'], $_POST['number2']);
                header('location: calculate.php');
            }
            else{
                $_SESSION['msg']="Please select one of them <strong>Add or Subtract or Divide or Multiply</strong>!!!";
                header('location: calculate.php');
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
                $_SESSION['msg'] = "Number1 should be larger than Number2";
                header('location: calculate.php');
            }
        }

        function divide($num1, $num2)
        {
            if ($num2==0 ) {
                $_SESSION['msg'] = "Can not Divide";
                header('location: calculate.php');
            } else {
                return $num1 / $num2;
            }
        }

        function multiply($num1, $num2)
        {
            return $num1 * $num2;
        }
