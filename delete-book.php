<?php include('../dbconnect.php');
$book_id = $_GET['book_id'];
//2. create sql query to delete
$sql = "DELETE FROM books WHERE book_id = $book_id";
// execute query
$res = mysqli_query($conn, $sql);
// check if success or not
if ($res == true) {
    // successful deletion
    // echo " ADMIN DELETED";
    // create session var to display msh
    $_SESSION['delete'] = '<div class="success">admin deleted succesfulyy</div>';
    header("location: home.php");
} else {
    // echo "DELETION FAILED";
    // create session var to display msh
    $_SESSION['delete'] = '<div class="error">ADMIN DELETION FAILED</div>';
    header("location: home.php");
}
