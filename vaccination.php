<?php
    include("redirect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination Form</title>

    <link rel="icon" href="Pics/Barangay.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="formStyle.css">
</head>
<body>
    <div class="jumbotron jumbotron-fluid mb-0">
        <div class="overlay-image"></div>
            <div class="white">
                <h1 class="display-3 text-center">Vaccination Form</h1>
            </div>
    </div>
    <div id="loadNavbar"></div>
    <div class="container " style="margin-top: 50px;">
        <div class="col-12">
            <form action="#" method="POST" onsubmit="return submitForm(this);">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <i class="fas fa-bullhorn"></i> Announcement
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                <p style="padding: 0 20px 0 20px;">Only 18 years of vaccination will be given on a scheduled date.
                                If you have the following illness (Cancer, Leukemia, with a history of allergic reactions, and other 
                                serious illnesses) you are not allowed to be vaccinated unless you are given Medical Clearance or
                                 your doctor's permission.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <i class="fas fa-upload"></i> Upload Files
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Upload 1x1 ID</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileInput" required>
                                    <label class="custom-file-label" for="customFileInput">Select file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <i class="fas fa-edit"></i> Input Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Firstname</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" required>
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
                                    <input type="text" class="form-control" required>
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
                                <label for="formGroupExampleInput">Middle Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="formGroupExampleInput">Suffix</label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="formGroupExampleInput">Sex</label>
                                <select class="form-control" required>
                                    <option value="">Options</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Contact No.</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Birthday</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" required>
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
                        <i class="fas fa-edit"></i> COVID-19 Survey
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Have you ever been positive to the COVID-19</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                    <option value="3">Unaware</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Have contact with a COVID-19 patient for the past 14 days </label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                    <option value="3">Unaware</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Have been abroad for the past 14 days</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                    <option value="3">Unaware</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput">Have been to crowded place for the past 14 days</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                    <option value="3">Unaware</option>
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h5>Had the following symptoms for the past 14 days</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">Fever</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">Cough</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">Cold</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">Sorethroat</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">Body Ache</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">Diarrhea</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">Loss of Smell</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">Loss of Taste</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="formGroupExampleInput">Difficulty Breathing</label>
                                <select class="form-control" required>
                                    <option value="">Select Answer</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
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
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
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
                    'Registered',
                    'Successfully registered for COVID-19 vaccine',
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