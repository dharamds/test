<?php

ini_set('SMTP', "smtp-relay.sendinblue.com");
ini_set('smtp_port', "587");
ini_set('sendmail_from', "lobheshborade27@gmail.com");

$firstname      = $_POST['firstname'];
$lastname       = $_POST['lastname'];
$emailaddress   = $_POST['emailaddress'];
$mobilenumber   = $_POST['mobilenumber'];
error_reporting(E_ERROR | E_PARSE);

include 'Mailin.php';
$mailin = new Mailin('lobheshborade27@gmail.com', 'qxnwrj18bBMtLcQU');
$mailin->
addTo('dharamds1104@gmail.com', $firstname)->
setFrom($emailaddress, 'amazon invest')->
setReplyTo($emailaddress,'amazon-invest')->
setSubject('Thank you amazon invest')->
setText('Hello')->
setHtml('First Name : '.$firstname.' <br> 
Last Name : '.$lastname.'<br>
Email address : '.$emailaddress.'<br>
Mobile number : '.$mobilenumber.'<br>');
//$res = $mailin->send();

if($mailin->send()){
echo json_encode(array("statusCode"=>200));
} else {
    echo json_encode(array("statusCode"=>300));    
}

?>