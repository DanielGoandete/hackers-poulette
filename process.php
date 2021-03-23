<?php


$name = '';
$lastname= '';
$email = '';
$country= '';
$message= '';
$gender='';
$subject= '';    

//function to debug
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}


//form 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $message = $_POST['message'];
    $gender = $_POST['gender'];
    $subject = $_POST['subject'];

    //send to confirmation page
    header("location: confirmation.php");
}

?>