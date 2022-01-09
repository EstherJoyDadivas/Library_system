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
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
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

                        <!-- <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                            <td>
                                <button class="btn-primary"><a href="add-book.php?>?id=<?php echo $id ?>"> Update</a></button>
                                <button class="btn-secondary"><a href="delete-book.php?id=<?php echo $id ?>">Delete</a></button>
                            </td>

                        </tr> -->
                        <tr>
                            <td><?php echo $sn++ ?>.</td>
                            <td><?php echo $author ?></td>
                            <td><?php echo $title ?></td>
                            <td><?php echo $author ?></td>
                            <td><?php echo $publisher ?></td>
                            <td><?php echo $year ?></td>
                            <td><?php echo $category ?></td>

                            <td>
                                <!-- <button class="btn-info"><a href="add-book.php?>?id=<?php echo $book_id ?>"> Update</a></button>
                                <button class="btn-secondary"><a href=" delete-book.php?id=<?php echo $book_id ?>">Delete</a></button> -->
                                <a href="add-book.php?>?id=<?php echo $book_id ?>" class="btn btn-success btn-sm"> Update</a>
                                <a href=" delete-book.php?id=<?php echo $book_id ?>" class="btn btn-danger btn-sm">Delete</a>
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