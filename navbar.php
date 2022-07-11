<?php
  include("redirect.php");
?>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-lg">
  <nav class="my-0 mr-md-auto font-weight-bolder text-dark text-decoration-none" href="userHome.php">
    <img src="Pics/Barangay.svg" height="40"> Barangay E-System 
  </nav>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="announcement.php">Anounncements</a>
    <a class="p-2 text-dark" href="reqForm.php">Request Form</a>
    <a class="p-2 text-dark" href="vaccination.php">Vaccination Form</a>
  </nav>
  <div>
    <button class="btn font-weight-bold" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-user-circle"></i> <?php echo $_SESSION["username"] ?> </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Account</a>
        <a class="dropdown-item" href="#">Settings</a>
        <a class="dropdown-item" href="logout.php">Logout</a>
    </div>
  </div>
</div>