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
    echo "
    <script>
    alert('Book deleted')
    </script>";
    // $_SESSION['delete'] = '<div class="success">admin deleted succesfulyy</div>';
    $_SESSION['delete'] =  "
    <script>
    alert('Book deleted')
    </script>";
    header('location: home.php');
} else {
    echo "DELETION FAILED";
}
