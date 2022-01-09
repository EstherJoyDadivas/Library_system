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
    <!-- <?php
            if (isset($_SESSION['add'])) {
                echo $_SESSION['add']; //displaying session message
                unset($_SESSION['add']); //removing session message
            }
            ?> -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Title:</th>
                <td>
                    <input type="text" name="title" placeholder="Enter book title">
                </td>
            </tr>
            <tr>
                <td>Author:</td>
                <td>
                    <input type="text" name="author" placeholder="Enter books author">
                </td>
            </tr>
            <tr>
                <td>Publisher:</td>
                <td>
                    <input type=" text" name="publisher" placeholder="Enter publisher">
                </td>
            </tr>
            <tr>
                <td>Published Year:</td>
                <td>
                    <input type=" text" name="year" placeholder="Enter published year">
                </td>
            </tr>
            <tr>
                <td>Category:</td>
                <td>
                    <input type=" text" name="category" placeholder="Enter book category">
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


    // executing query and saving data into database
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    // check whether the data is inserted or not 
    if ($res == TRUE) {
        // echo "data inserted";
        // create session var
        $_SESSION['add'] = "admin added successfully";
        // redirect page to manage admin
        header("location: home.php");
    } else {
        // echo "failed to insert";
        // create session var
        $_SESSION['add'] = "failed to add admin";
        // redirect page to manage admin
        header("location: add-book.php");
    }
}
?>