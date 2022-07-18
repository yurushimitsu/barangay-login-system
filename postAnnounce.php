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
                            <a class="nav-link text-dark" href="adminhome.php">
                                Dashboard 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="postAnnounce.php">
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
                    <h2>Post Announcement</h2>
                </div>
                <form action="#" method="POST" onsubmit="return submitForm(this);">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <i class="fas fa-edit"></i> Input Details
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="formGroupExampleInput">Title</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="formGroupExampleInput">Topic</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="formGroupExampleInput">Details</label>
                                    <div class="input-group">
                                        <textarea class="form-control" style="height: 100px;" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="card-footer text-right">                    
                        <button type="button" onclick="cancel()" class="btn btn-danger">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Post">
                    </div>
                </form>
                <div id="loadFooter"></div>
            </main>
        </div>
    </div>     
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="loadAdminNav.js"></script>
<script src="loadFooter.js"></script>

<script>
    function submitForm(form) {
        Swal.fire({
            title: 'Are you sure?',
            text: "All information won't be edited once submitted",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Submit'
        })
        .then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Successfully Posted',
                    '',
                    'success'
                )
                .then((result) => {
                    if (result.isConfirmed){
                        window.location = "adminHome.php";
                    }
                })
            }
        })
        return false;
    }
</script>

<script>
    function cancel(){
    Swal.fire({
        title: 'Are you sure you want to cancel?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        cancelButtonText: 'No'
    })
    .then((result) => {
        if (result.isConfirmed) {
            window.location = "adminHome.php";
        }
    })
    }
</script>