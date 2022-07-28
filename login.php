<?php
    include("loginCode.php");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
        
  <link rel="icon" href="Pics/Barangay.svg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-lg">
    <a class="my-0 mr-md-auto font-weight-bolder text-dark text-decoration-none" href="index.html">
      <img src="Pics/Barangay.svg" height="40"> Barangay E-System
    </a>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#">Services</a>
      <a class="p-2 text-dark" href="#">Support</a>
      <a class="p-2 text-dark" href="#">About Us</a>
    </nav>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex"></div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 ">Login</h5>
              <form action="#" method="POST" id="form">
                <div class="form-floating mb-3">
                  <div class="input-group">
                    <input type="text" class="form-control" name="username" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                  </div>
                  <label>Username</label>
                </div>
                <div class="form-floating mb-3">
                  <div class="input-group">
                    <input type="password" class="form-control" name="password" id="password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                      </span>
                    </div>
                  </div>
                  <label>Password</label>
                  </div> 
                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-primary btn-login fw-bold" type="submit">LOGIN</button>
                </div>
                <br>
                <a class="d-block text-center mt-2 small" href="signup.php">Don't have an account? Register</a>
              </form>
          </div> 
        </div>
      </div>
    </div>
  </div>
</body> 
</html>

<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="showPass.js"></script>
