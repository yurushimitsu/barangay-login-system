<?php
  include("redirect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>

    <link rel="icon" href="Pics/Barangay.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body style="background-color: #EDEDED;">
    <div id="loadAdminNav"></div>
    <div class="container-fluid">
        <div class="row flex-xl-nonwrap">
            <nav class="col-md-2 d-none d-md-block shadow bg-white sidebar">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h5>Barangay 636</h5> 
                </div>
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="adminhome.php">
                                Dashboard 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="postAnnounce.php">
                                Post Announcement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                Requests
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                Community Pantry
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                Ayuda
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2 >Barangay 636</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                       <i class="far fa-calendar"></i> This Month
                    </button>
                    </div>
                </div>
                <div class="card-columns">
                    <div class="card border-dark mb-3" style="min-height: 180px;">
                        <div class="card-header text-white bg-secondary pb-0">
                            <h5 class="card-title">Total Of Registered For Vaccination</h5>
                        </div>
                        <div class="card-body text-dark text-center">
                            <br>
                            <h2 class="card-text">742</h2>
                            <p class="card-text">Individuals</p>
                        </div>
                    </div>
                    <div class="card border-dark mb-3" style="min-height: 180px;">
                        <div class="card-header text-white bg-secondary pb-0">
                            <h5 class="card-title">Monthly Budget</h5>
                        </div>
                        <div class="card-body text-dark text-center">
                            <br>
                            <h2 class="card-text">₱ 100,000.00</h2>
                            <a href="#" class="text-dark">View Report</a>
                        </div>
                    </div>   
                    <div class="card border-dark mb-3" style="min-height: 180px;">
                        <div class="card-header text-white bg-secondary pb-0">
                            <h5 class="card-title">Total Document Requests</h5>
                        </div>
                        <div class="card-body text-dark text-center">
                            <br>
                            <h2 class="card-text">384</h2>
                            <a href="#" class="text-dark">View Requests</a>
                        </div>
                    </div>
                    <div class="card border-dark mb-3" style="min-height: 180px;">
                        <div class="card-header text-white bg-secondary pb-0">
                            <h5 class="card-title">Total Of Particially Vaccinated</h5>
                        </div>
                        <div class="card-body text-dark text-center">
                            <br>
                            <h2 class="card-text">1,184</h2>
                            <p class="card-text">Individuals</p>
                        </div>
                    </div>
                    <div class="card border-dark mb-3" style="min-height: 180px;">
                        <div class="card-header text-white bg-secondary pb-0">
                            <h5 class="card-title">Total Of Monthly Food Packs Given</h5>
                        </div>
                        <div class="card-body text-dark text-center">
                            <br>
                            <h2 class="card-text">1,952</h2>
                            <p class="card-text">Families Given</p>
                        </div>
                    </div>
                    <div class="card border-dark mb-3" style="min-height: 180px;">
                        <div class="card-header text-white bg-secondary pb-0">
                            <h5 class="card-title">Peding Document Requests</h5>
                        </div>
                        <div class="card-body text-dark text-center">
                            <br>
                            <h2 class="card-text">206</h2>
                            <a href="#" class="text-dark">View Requests</a>
                        </div>
                    </div>
                    <div class="card border-dark mb-3" style="min-height: 180px;">
                        <div class="card-header text-white bg-secondary pb-0">
                            <h5 class="card-title">Total Of Fully Vaccinated</h5>
                        </div>
                        <div class="card-body text-dark text-center">
                            <br>
                            <h2 class="card-text">692</h2>
                            <p class="card-text">Individuals</p>
                        </div>
                    </div>
                    <div class="card border-dark mb-3" style="min-height: 180px;">
                        <div class="card-header text-white bg-secondary pb-0">
                            <h5 class="card-title">Total Of Monthly Ayuda Given</h5>
                        </div>
                        <div class="card-body text-dark text-center">
                            <br>
                            <h2 class="card-text">1,952</h2>
                            <p class="card-text">Families Given</p>
                        </div>
                    </div>
                    <div class="card border-dark mb-3" style="min-height: 180px;">
                        <div class="card-header text-white bg-secondary pb-0">
                            <h5 class="card-title">Peding Document Requests</h5>
                        </div>
                        <div class="card-body text-dark text-center">
                            <br>
                            <h2 class="card-text">178</h2>
                            <a href="#" class="text-dark">View Requests</a>
                        </div>
                    </div>
                </div>
                <div id="loadFooter"></div>
            </main>
        </div>
    </div>     
</body>
</html>

<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="loadAdminNav.js"></script>
<script src="loadFooter.js"></script>