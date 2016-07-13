<?php

/*
 *  Receiving data from the contact form 
 *  Performs appropriate action on the data received 
 */



//Retreiving and sanitizing variables
$name               = htmlentities($_POST['name']);
$email               = htmlentities($_POST['email']);
$msg                  = htmlentities($_POST['message']);




//validations
if( empty($name) || empty($email)){
    echo "NONE";
}else{
    echo "SEND";
}



?>
