<?php
include('dbconnect.php');
if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please fill both the username and password fields!');
}

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" || $password == "") {
    echo "please fill up";
    exit();
}
$Query = "SELECT admin_id FROM admin WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $Query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
    echo "<script> alert('Welcome succesfully') 
    window.location.href='home.php'</script>";
} else {
    echo "<script> alert('Wrong login') 
    </script>";
}
