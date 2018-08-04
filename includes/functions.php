<?php include"db.php"   ?>
<?php

function insert_categories() {

    global $connection;

if(isset($_POST['register'])){
    $name = $_POST['name'];
   
    $email = $_POST['email'];
   
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $contact = mysqli_real_escape_string($connection, $contact);
    $password = mysqli_real_escape_string($connection, $password);
    
    $hashFormat = "$2y$10$";
    $salt = "justusingarandomstring";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password,$hashF_and_salt);
    
     $query = "INSERT INTO user(name,email,contact,password) VALUES ('$name', '$email', $contact , '$password')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die('Query FAILED' . mysqli_error($connection));
    } 
    
}
        }

function login_categories() {
    
    global $connection;
    
    if(isset($_POST['submit'])){
   
    $email = $_POST['email'];
   
    $password = $_POST['password'];
    
  
    
  
    
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    
    $result = mysqli_query($connection, $query);
    
    if(mysqli_num_rows($result)>0){

            echo "<script>alert('You are logged in')</script>";
    }
    else {
              die('Query FAILED' . mysqli_error($connection));
        }
    
}
}

function contact_categories(){
    
    global $connection;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
   
    $email = $_POST['email'];
   
    $message = $_POST['message'];
    
   $name = mysqli_real_escape_string($connection, $name);
   $email = mysqli_real_escape_string($connection, $email); 
   $message = mysqli_real_escape_string($connection, $message);
    
     $query = "INSERT INTO user(name,email,message) VALUES ('$name', '$email', '$message')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die('Query FAILED' . mysqli_error($connection));
    } 
    
}
    
}

?>















