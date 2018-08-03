<?php include "includes/functions.php" ?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Ruslan+Display" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Ultra" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
	
	<title>LuckyDrawLive</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

	<div class="container">

	<h1>LUCKY DRAW</h1>
	

	
	<div class="prize">
        <h1> Bronze Prize</h1>
	</div>
	  
	<div class="box">
	    <div class="card-a"></div>
	    <div class="card-b"></div>
	    <div class="card-c"></div>
	    <div class="card-a"></div>
	    <div class="card-b"></div>
	    
	

   </div>
    <p>View all Winners</p>
     <div class="row">
      <div class="col-md-12 col-sm-6">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#urModal">
 Login
</button>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
 Register
</button>
          </div>
      </div>
	
   
   
	<div class="pop">
	  

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus"></i>Register</h2>
      </div>
      <div class="modal-body">
           
<h4>You can create your own lucky drawing list after registration</h4>
<div class="container">
   <center>
   
   <?php insert_categories(); ?>
   
    <form action="luck.php" method="post" class="form-horizontal">
       
        <img src="https://res.cloudinary.com/twenty20/private_images/t_watermark-criss-cross-10/v1510993548000/photosp/f6b767e9-edec-4f31-9fb9-9de97e4a4c74/stock-photo-colorful-person-grain-gradient-icon-user-user-icon-f6b767e9-edec-4f31-9fb9-9de97e4a4c74.jpg" alt="" class="img-circle">
        <p class="pic">Profile Photo</p>
        <div class="form-group">
    <label for="name">Name</label>
    <div class="input-group">
    <div class="input-group-addon">
     <span class="glyphicon glyphicon-user"></span>
     </div>
      <input type="text" name="name" class="form-control"  style="width:300px;" placeholder="Enter your Name">
    </div>
    </div>
    <div class="form-group">
    <label for="name">Email</label>
    <div class="input-group">
    <div class="input-group-addon">
      <span class="glyphicon glyphicon-envelope"></span>
      </div>
      <input type="email"  name="email" class="form-control"  placeholder="Email" style="width:300px;">
    </div>
  </div>
  <div class="form-group">
    <label for="name">Contact</label>
    <div class="input-group">
    <div class="input-group-addon">
    
     <span><i class="fa fa-phone cust"></i></span>
     </div>
      <input type="text" name="contact" class="form-control"  placeholder="Contact" style="width:300px;">
    </div>
  </div>
  <div class="form-group">
    <label for="name">Password</label>
    <div class="input-group">
     <div class="input-group-addon">
      <span><i class="fas fa-key"></i></span>
      </div>
      <input type="password" name="password" class="form-control"  placeholder="Password" style="width:300px;">
    </div>
  </div>
  <div class="form-group">
 <button type="submit" name="register" id="sub" class="btn btn-warning btn-lg">Register</button>
        </div>
    </form>
    </center>
</div>
      </div>
      <div class="modal-footer">
      
       <p>Already have an account?<a href="#urModal">Login</a></p>
      </div>
    </div>
  </div>
</div> 
	    
	    
	</div>
	<div class="log">

<!-- Modal -->
<div class="modal fade" id="urModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i>Login to Continue</h2>
      </div>
      <div class="modal-body">
       
	<div class="container">
	<center>
	
	 <?php login_categories(); ?>
	
	<form action="luck.php" method="post">
		
  <div class="form-group">
    <label for="name">Email</label>
    <div class="input-group">
    <div class="input-group-addon">
     <span class="glyphicon glyphicon-envelope"></span>
        </div>
      <input type="email" name="email" class="form-control" placeholder="enter your email">
    </div>
  </div>
  <div class="form-group">
    <label for="name">Password</label>
    <div class="input-group">
    <div class="input-group-addon">
     <span><i class="fas fa-key"></i></span>
     </div>
      <input type="password" name="password" class="form-control"  placeholder="Password"><a href="#" class="pass">Forgot Password?</a>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="log" name="submit" class="btn btn-info">Login</button>
    </div>
  </div>
 
</form>
	</center>


	</div>
      </div>
      <div class="modal-footer">
        <p>Don't have an account?<a href="#myModal">Register</a></p>
      </div>
    </div>
  </div>
</div>
	</div>
	<div class="row">
<div class="footer col-lg-3 col-md-6 col-sm-6">
    <span><i class="fa fa-music"></i></span>
    </div>
    <div class="footer col-lg-3 col-md-6 col-sm-6">
     <span><i class="fa fa-envelope-square"></i></span>
    </div>
    <div class="footer col-lg-3 col-md-6 col-sm-6">
     <span><i class="fas fa-palette"></i></span>
    </div>
    <div class="footer col-lg-3 col-md-6 col-sm-6">
     <span><i class="fa fa-image"></i></span>
</div>
</div>
   
	   </div>
    
	




	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	

</body>

</html>
