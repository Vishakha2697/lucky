<?php include "includes/functions.php" ?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	 <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Ruslan+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Lobster|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
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
	

	

	<div class="box">
	    <div class="card-a"></div>
	    <div class="card-b"></div>
	    <div class="card-c"></div>
	    <div class="card-a"></div>
	    <div class="card-b"></div>
	    
	

   </div>
    <p>View all Winners</p>
     <div class="row">
      <div class="col-md-12">
           <button data-toggle="modal" data-target="#urModal" class="btn btn-info btn-lg"> Login</button>
           <button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-lg">Register</button>
      </div>
      </div>
	
   
   
	<div class="pop">
	  

<!-- Modal for register -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="box">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel" style="margin-left:250px;font-family: 'Courgette', cursive;"><i class="fa fa-user-plus"></i>Register</h2>
      </div>
      <div class="modal-body" >
           
<h4>You can create your own lucky drawing list after registration</h4>
<div class="container">
   <center>
   
  
   
    <form action="register.php" method="post" class="form-horizontal">
       
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
      
       <p>Already have an account?<a href="#urModal" data-target="#urModal" data-toggle="modal" data-dismiss="modal">Login</a></p>
      </div>
    </div>
  </div>
</div> 
	    
	    
	</div>
	<div class="log">
	
	
	
	
	
	

<!-- Modal for login-->
<div class="modal fade" id="urModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="box1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel" style="margin-left:150px;font-family: 'Courgette', cursive;"><i class="fa fa-user"></i>Login to Continue</h2>
      </div>
      <div class="modal-body">
       
	<div class="container">
	<center>
	
	
	
	<form action="includes/login.php" method="post">
		
  <div class="form-group">
    <label for="name">Email</label>
    <div class="input-group">
    <div class="input-group-addon">
     <span class="glyphicon glyphicon-envelope"></span>
        </div>
      <input type="email" name="email" class="form-control" placeholder="enter your email" style="width:300px">
    </div>
  </div>
  <div class="form-group">
    <label for="name">Password</label>
    <div class="input-group">
     <div class="input-group-addon">
      <span><i class="fas fa-key"></i></span>
      </div>
      <input type="password" name="password" class="form-control"  placeholder="Password" style="width:300px;">
   
          <a href="#" id="pass">Forgot your password</a>

      
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
        <p>Don't have an account?<a href="#myModal" data-target="#myModal" data-dismiss="modal" data-toggle="modal">Register</a></p>
      </div>
    </div>
  </div>
</div>
	</div>
	<div class="container-fluid">
	    <div class="row">
              <div class="col-md-3">
                   
              </div>
              <div class="col-md-3">
                 <span><i class="fa fa-palette fa-3x" style="padding-top:40px;"></i></span>  
              </div>

              <div class="col-md-3">
                    <a href=""><span><i class="fa fa-music fa-3x" style="padding-top:40px;"></i></span></a>
               </div>
                
               
                <div class="col-md-3">
                   <span><i class="	fa fa-envelope fa-3x" style="padding-top:40px;"  data-toggle="modal" data-target="#newModal"></i></span>
               </div>

               
        <!-- Modal for contact-->
        <div class="contact">
            <!-- Button trigger modal -->


<!-- Modal for contact-->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="box2">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel">Contact Us</h2>
      </div>
      <div class="modal-body">
      <div class="container">
	<center>
	
	<?php contact_categories(); ?>
	
	
	<form action="index.php" method="post">
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
        <label for="name">Message</label>
        <div class="input-group">
         <div class="input-group-addon">
      <span><i class="fa fa-comment"></i></span>
      </div>   
            <textarea class="form-control" name="message" style="width:300px;" rows="4"></textarea>
        </div>
    </div>
    <div class="form-group">
 <button type="submit" name="submit" id="sub" class="btn btn-warning btn-lg">Submit</button>
        </div>
     </form>
     </center>
      </div>
      </div>
    </div>
  </div>
</div>
        </div>
        
  
        </div>
	</div>

   
	   </div>
    
	




	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	

</body>

</html>
