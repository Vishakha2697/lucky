<?php include"db.php"   ?>
<?php

function insert_categories() {

    global $connection;

if(isset($_POST['register'])){
    $name = $_POST['name'];
   
    $email = $_POST['email'];
   
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    
    
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
              echo "<script>alert('Enter right credentials')</script>";
        }
    
}
}

?>















