<?php  include "includes/db.php"; ?>


    <?php

if(isset($_POST['register']))
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
        $contact = $_POST['contact'];
    if(!empty($name) && !empty($email) && !empty($password))
    {
    
$name = mysqli_real_escape_string($connection,$name);
$email    = mysqli_real_escape_string($connection,$email);
$password = mysqli_real_escape_string($connection,$password);
$contact = mysqli_real_escape_string($connection,$contact);
        
$password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));        
        
        
        
        
  
    $query = "INSERT INTO user (name, email,contact,password) ";
    $query .= "VALUES('{$name}','{$email}','{$contact}','{$password}')";
    $registration_user_query =mysqli_query($connection,$query);
    
    if(!$registration_user_query)
    {
        die("Query Failed" .mysqli_error($connection));
        mysqli_errno($connection);
    }
    
   header('Location:index.php');        
}
    
    else{ $message ="Fields cannot be empty";  
        }
}else {
    $message= "";
}

?>
    
    
    
    
    
