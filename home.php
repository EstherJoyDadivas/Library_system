<?php
include('format/header.php');
include('format/sidebar.php');
?>

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->



<!-- home/managebooks -->
<div class="container">
    <h2>Manage Books</h2>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <a href="add-book.php" class="btn">Add Book</a>
    <?php
    if (isset($_SESSION['add'])) {
        echo $_SESSION['add']; //displaying session message
        unset($_SESSION['add']); //removing session message
    }
    if (isset($_SESSION['delete'])) {
        echo $_SESSION['delete']; //displaying session message
        unset($_SESSION['delete']); //removing session message
    }
    if (isset($_SESSION['update'])) {
        echo $_SESSION['update']; //displaying session message
        unset($_SESSION['update']); //removing session message
    }
    ?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Published Year</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php
            //query to get all admin
            $sql = "SELECT * FROM books";
            // execute query
            $res = mysqli_query($conn, $sql);

            if ($res == TRUE) {

                $count = mysqli_num_rows($res);

                $sn = 1;

                if ($count > 0) {

                    while ($rows = mysqli_fetch_assoc($res)) {

                        $book_id = $rows['book_id'];
                        $title = $rows['title'];
                        $author = $rows['author'];
                        $publisher = $rows['publisher'];
                        $year = $rows['year'];
                        $category = $rows['category'];

            ?>

                        <tr>
                            <td><?php echo $sn++ ?>.</td>
                            <td><?php echo $title ?></td>
                            <td><?php echo $author ?></td>
                            <td><?php echo $publisher ?></td>
                            <td><?php echo $year ?></td>
                            <td><?php echo $category ?></td>

                            <td>

                                <a href="update-book.php?id=<?= $book_id ?>" class="btn btn-success btn-sm"> Update</a>
                                <a href="delete-book.php?id=<?= $book_id ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>


                        </tr>
            <?php
                    }
                } else {
                    //we dont have data in db
                }
            }
            ?>
        </tbody>
    </table>


</div>

<?php
include('format/footer.php'); ?>