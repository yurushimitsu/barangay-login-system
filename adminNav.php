<?php
  include("redirect.php");
?>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm">
  <a class="my-0 mr-md-auto font-weight-bolder text-dark text-decoration-none" href="adminHome.php">
    <img src="Pics/Barangay.svg" height="40"> Barangay E-System
  </a>
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION["username"] ?> </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Account</a>
      <a class="dropdown-item" href="#">Settings</a>
      <a class="dropdown-item" href="logout.php">Logout</a>
    </div>
  </div>
</div>