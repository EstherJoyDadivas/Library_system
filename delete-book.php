<?php
require('dbconnect.php');
$book_id = $_GET['id'];

if (isset($_GET['id'])) {
    echo 'success ' . $book_id;
} else {
    echo ' no ' . $book_id;
}

$sql = "DELETE FROM books WHERE book_id = $book_id";

$res = mysqli_query($conn, $sql);

if ($res == true) {
    // successful deletion
    // echo "ADMIN DELETED";
    // create session var to display msh
    $_SESSION['delete'] = '<div class="success">admin deleted succesfulyy</div>';
    header('location: home.php');
} else {
    echo "DELETION FAILED";
    // create session var to display msh
    // $_SESSION['delete'] = '<div class="error">ADMIN DELETION FAILED</div>';
    // header('location: home.php');
}
