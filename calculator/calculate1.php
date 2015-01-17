<?php
$submit1 = $_POST['submit1'];
$submit2 = $_POST['submit2'];
$method1 = $_POST['method1'];
$method2 = $_POST['method2'];
$first = $_POST['first'];
$second = $_POST['second'];
$number = $_POST['number'];

// Simple
if ($submit1 == true) {
    switch ($method1) {
        case add: $ans = $first + $second;
            break;
        case sub: $ans = $first - $second;
            break;
        case multi: $ans = $first * $second;
            break;
        case div: $ans = $first / $second;
            break;
    }

    $ans = number_format($ans, 2, ',', ' ');
    echo "The answer is $ans";
}

?>