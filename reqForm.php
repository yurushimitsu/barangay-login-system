<?php
    include("redirect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Form</title>
    
    <link rel="icon" href="Pics/Barangay.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="formStyle.css">
</head>
<body>
    <div class="jumbotron jumbotron-fluid mb-0">
        <div class="overlay-image"></div>
            <div class="white">
                <h1 class="display-3 text-center">Request Form</h1>
            </div>
    </div>
    <div id="loadNavbar"></div>
    <div class="container " style="margin-top: 50px;">
        <div class="col-12">
            <form action="#" method="POST" onsubmit="return submitForm(this);">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <i class="fas fa-edit"></i> Input Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Firstname</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="formGroupExampleInput" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Lastname</label>
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
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Contact No.</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="formGroupExampleInput" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="formGroupExampleInput" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-at"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <i class="fas fa-edit"></i> Input Address
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">City/Area</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">Barangay</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">Zone</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="formGroupExampleInput">Complete Address</label>
                                <div class="input-group">
                                    <textarea class="form-control" style="height: 100px;" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <i class="fas fa-upload"></i> Request Document/Certificate
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Requested Document/Certificate</label>
                                <select class="form-control" required>
                                    <option value="">Options</option>
                                    <option value="1">Barangay ID</option>
                                    <option value="2">Barangay Clearance</option>
                                    <option value="3">Indigency</option>
                                    <option value="4">Vaccine Card</option>
                                    <option value="5">Quarantine Pass</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Upload Requirements</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileInput" required>
                                    <label class="custom-file-label" for="customFileInput">Select file</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card-footer text-right">                    
                    <button type="button" onclick="cancel()" class="btn btn-danger">Cancel</button>
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div id="loadFooter"></div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="loadNavbar.js"></script>
<script src="loadFooter.js"></script>

<script>
  document.querySelector('.custom-file-input').addEventListener('change', function (e) {
    var name = document.getElementById("customFileInput").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = name
  })
</script>

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
                    'Requested',
                    'Please wait for 7 working days to process your document',
                    'success'
                )
                .then((result) => {
                    if (result.isConfirmed){
                        window.location = "userhome.php";
                    }
                })
            }
        })
        return false;
    }
</script>

<script src="cancel.js"></script>
