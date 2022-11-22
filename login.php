<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','bus_service');
    if($conn->connect_error){
        die('connection failed' .$conn->connect_error);
    }
    else {
        $datae = mysqli_fetch_assoc(mysqli_query($conn,"select * from registration where email='$email' "));
        // $datap = mysqli_fetch_assoc(mysqli_query($conn,"select * from registration where password='$password' "));

        if(($datae['email']==$email ) and ($password==$datae['password'])){
            echo '<script>alert("Registration successful");
            location.href="index.html";
            </script>';
            }
            else{
                echo "<script> alert('account does not exist please register');
                location.href='userlogin.html';
                    </script>";
            }
    }


?>