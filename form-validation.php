<?php
  $err_username = " ";
  $err_password = " ";
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username)){
      $err_username = "This Field is mandatory.";
    }
    if(empty($password)){
      $err_password = "This Field is mandatory.";
    }
  }
 ?>
 <!Doctype html>
 <html>
 <head>
   <title>
     Form Validation
   </title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="bootstrap/animate.css"/>
  <style>
    body{
      background:url('images/background3.jpg');
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
    }
    label{
      color:white;
    }
    input{
      color:white!important;
      font-weight:600!important;
      background: transparent!important;
    }
    legend{
      color:white!important;
    }
  </style>
 </head>
 <body>
   <br/><br/><br/>
   <div class="container">
     <form class="form-horizontal" method="post" action="form-validation.php">
       <fieldset>
         <legend>Form Validation</legend>
         <div class="row animated bounceInDown">
           <div class="form-group">
             <label class="col-sm-2 control-label">Username</label>
             <div class="col-sm-4">
               <input class="form-control" type="text" name="username"/>
                <span class="text-danger"><?php echo $err_username;?></span>
             </div>
           </div>
           <div class="form-group">
             <label class="col-sm-2 control-label">Password</label>
             <div class="col-sm-4">
               <input class="form-control" type="password" name="password"/>
               <span class="text-danger"><?php echo $err_password;?></span>
             </div>
           </div>
           <div class="form-group">
             <div class="col-sm-offset-2 col-sm-4">
               <input type="submit" value="login" name="submit"/>
             </div>
           </div>
         </div>
     </fieldset>
     </form>
   </div>
 </body>
 </html>
