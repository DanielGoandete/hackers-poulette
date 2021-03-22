<?php


$name = '';
$lastname= '';
$email = '';
$country= '';
$message= '';
$id = 0;
$male= '';
$female= '';
$subject1= '';
$subject2= '';
$subject3= '';
        


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

    
   

        
    //     $_SESSION['message'] = "Name need to be validate";
    //     $_SESSION['msg_type'] = "danger";
    
    //      //send messge after save
    // $_SESSION['message'] = "saved ok";
    // $_SESSION['msg_type'] = "success";

 
    
   
   
    //return to main page
    //header("location: index.php");
}



?>