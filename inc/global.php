<?php
$path = $_SERVER['DOCUMENT_ROOT'];

////////////////////////////////////////////////////////////////////////////////
// Šajā dokumentā nepieciešams aizstāt 'web@janisf.id.lv' ar jauno epasta adresi! 
////////////////////////////////////////////////////////////////////////////////	

if(isset($_POST['submit_email'])){
    $from = "web@janisf.id.lv";
    $to = "web@janisf.id.lv";

    $reply_to = $_POST['email'];
    $phone = $_POST['phone'];
    $first_name = $_POST['first_name'];
    $subject = "Email from web: " . $first_name;
    $message = "Telefons: " . $phone . "\nEpasts:" . $reply_to . "\n\n" . $first_name . " rakstīja:" . "\n" . $_POST['message'];

	
    $headers = 'From: Email from web <web@janisf.id.lv>' . "\r\n";
    $headers .= 'Reply-To:' . $reply_to  . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    if(mail($to,$subject,$message,$headers)){
      echo "<div class='container-fluid container-xl alert alert-success' role='alert'>Paldies par ziņu " . $first_name . ", mēs ar Jums sazināsimies drīzumā.</div>";
    }
    else {
      echo "<div class='alert alert-success' role='alert'>Kļūda! Epasts netika nosūtīts. Lūdzu sazinieties ar mums telefoniski.</div>";
    }
}
