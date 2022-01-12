<?php
include('format/header.php');
include('format/sidebar.php');
?>

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->



<!-- home/managebooks -->
<div class="container-fluid">
    <h2>Add Transaction</h2>
    <div class="row">
        <div class="col">
            <h2>Add Book</h2>
            <br>
            <input class="form-control" id="myInput" type="text" placeholder="Search student">
            <br>
            <form action="add-book.php" method="POST">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Student No:</th>
                        <td>
                            <input type="text" name="title" class="form-control" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>
                            <input type="text" name="author" class="form-control" placeholder="Enter books author" required>
                        </td>
                    </tr>

                </table>
                <input type="submit" name="submit" value="Confirm Student" class="btn-secondary">
            </form>
            <br>
            <h2>Student Info</h2>
            <br>
            <table class="table table-bordered table-striped">
            </table>

        </div>

        <div class="col">
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
                            <input type=" text" name="category" class="form-control" placeholder="Enter book category" required>
                        </td>
                    </tr>


                </table>
                <input type="submit" name="submit" value="Add Book" class="btn-secondary">
            </form>
        </div>
    </div>
</div>
<?php
include('format/footer.php'); ?>