<?php
////////////////////////////////
// Contact formulier
// Auteur: Joeri Smits
// Date: 27/04/2014
// Website: http://joerismits.nl
// Email: contact@joerismits.nl
////////////////////////////////

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name =     "";
    $subject =  "";
    $email =    "";
    $bericht =  "";
    $checksum = "";

    if(isset($_SESSION['gemailt'])) {
        if($_SESSION['gemailt']) {
            echo '<div class="succeed">Thanks for your message, we will reply as soon as possible.</div>';
            $_SESSION['gemailt'] = false;
        }
    }
}
else {
    $ownerEmail = "contact@joerismits.nl";
    $name =     $_POST['naam'];
    $subject =  $_POST['subject'];
    $email =    $_POST['email'];
    $bericht =  $_POST['bericht'];
    $checksum = $_POST['checksum'];

    function ckNumeric($input) {
        if(is_numeric($input)) {
            return true;
        }
        else {
            return false;
        }
    }

    function ckEmail($input) {
        if(filter_var($input, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else {
            return false;
        }
    }

    if(!empty($name) && !empty($subject) && !empty($email) && !empty($email) && !empty($bericht) && !empty($checksum)) {
            if(ckEmail($email)) {
                if($checksum == "4" || $checksum == "four" || $checksum == "Four") {
                    $customMessage = '<br />Naam contactpersoon:'.$name.'<br />Emailadres:'.$email.'<br />Uw bericht:<br />'.$bericht.'';
                    $headers = "Content-type: text/html\r<br />";
                    mail($ownerEmail, $subject, $customMessage, $headers);
                    $_SESSION['gemailt'] = true;
                    header('Location: index.php');
                }
                else {
                    echo '<div class="error">Checksum is not correct please check</div>';
                }
            }
            else {
                echo '<div class="error">Not a valid email.</div>';
            }
    }
    else {
        echo '<div class="error">Some fields are missing.</div>';
    }
}
?>