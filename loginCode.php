<?php
    $host = "localhost:3306";
    $user = "root";
    $password = "";
    $db = "ojt_website";

    session_start();

    $data = mysqli_connect($host,$user,$password,$db);

    if($data === false){
        die("Connection Error");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

	    $sql="SELECT * FROM login WHERE username='".$username."' AND password='".$password."' ";

	    $result = mysqli_query($data,$sql);
        $row = mysqli_fetch_array($result);

        if($row["usertype"] == "user") {	
            $_SESSION["username"]=$username;
            header("location:userHome.php");
        }

        elseif($row["usertype"] == "admin") {
            $_SESSION["username"] = $username;
            header("location:adminHome.php");
        }

        else {
            echo '
                <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
                <script>
                    $(this).ready(function () {
                        Swal.fire({
                            title: "Oops...",
                            icon: "error",
                            text: "Username/Password Incorrect",
                            showCloseButton: true,
                            showCancelButton: false,
                            showConfirmButton: false,
                          })
                    })
                </script>';
        }
    }
?>