<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$contact = $_POST['contact'];

$conn = new mysqli('localhost','root','','bus_service');
if($conn->connect_error){
    die('connection failed' .$conn->connect_error);
}
else{
    $data = mysqli_fetch_assoc(mysqli_query($conn,"select * from registration where email='$email' "));
    if($data['email']!="$email"){
    $stmt = $conn->prepare("insert into registration(name,email,password,contact) values(?,?,?,?)");
    $stmt->bind_param("sssi",$name,$email,$password,$contact);
    $stmt->execute();
    echo '<script>alert("Registration successful please login");
    location.href="userlogin.html";
    </script>';
    $stmt->close();
    $conn->close();
    }
    else{
        echo "<script> alert('account already exist please login');
            location.href='userlogin.html';
            </script>";
    }
}
?>