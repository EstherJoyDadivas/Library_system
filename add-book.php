<?php
include('format/header.php');
include('format/sidebar.php');
?>

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->



<!-- home/managebooks -->
<div class="container">
    <h2>Add Book</h2>
    <br>

    <form action="add-book.php" method="POST">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Title:</th>
                <td>
                    <input type="text" name="title" class="form-control" placeholder="Enter book title" required>
                </td>
            </tr>
            <tr>
                <td>Author:</td>
                <td>
                    <input type="text" name="author" class="form-control" placeholder="Enter books author" required>
                </td>
            </tr>
            <tr>
                <td>Publisher:</td>
                <td>
                    <input type=" text" name="publisher" class="form-control" placeholder="Enter publisher" required>
                </td>
            </tr>
            <tr>
                <td>Published Year:</td>
                <td>
                    <input type=" text" name="year" class="form-control" placeholder="Enter published year" required>
                </td>
            </tr>
            <tr>
                <td>Category:</td>
                <td>
                    <input type=" text" name="category" placeholder="Enter book category" required>
                </td>
            </tr>
            <!-- <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Book" class="btn-secondary">
                </td>
            </tr> -->

        </table>
        <input type="submit" name="submit" value="Add Book" class="btn-secondary">
    </form>

</div>

<?php
include('format/footer.php');

if (isset($_POST['submit'])) {

    // get data from form
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = ($_POST['publisher']);
    $year = $_POST['year'];
    $category = $_POST['category'];

    // sql query to save data to database
    $sql = "INSERT INTO books SET
    title = '$title',
    author = '$author',
    publisher = '$publisher',
    year = '$year',
    category = '$category'
        ";
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    // check whether the data is inserted or not 
    if ($res == TRUE) {
        echo "<script> alert('Book Added succesfully') 
        window.location.href='add-book.php'</script>";

        // exit();
    } else {
        echo "Failed";
    }
}

?>