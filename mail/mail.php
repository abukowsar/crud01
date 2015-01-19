<?php
if (isset($_POST['send'])){
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email){
        $to = 'iusoftbd@gmail.com';
        $from = 'm.a.kowsar@gmail.com';
        $message = 'From:' .$_POST['name']. "\r\n\r\n";
        $message = 'comments:' .$_POST['comments'];
        $headers = "From: $from\r\nReply-to: $email";
        $send = mail($to, $subject, $message, $headers);
        if($send){
            $result = 'Your Message has been sent';
        }
    }else{
        $result = 'Sorry, there was a problem';
    }
}

?>