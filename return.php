<?php
include('format/header.php');
include('format/sidebar.php');
?>

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->



<!-- home/managebooks -->
<div class="container">
    <h2>Returned Transactions</h2>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Student Name</th>
                <th>Book Title</th>
                <th>Date Borrowed</th>
                <th>Due Date</th>
                <th>Date returned</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td>1</td>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>Date</td>
                <td>Doe</td>

                <td>
                    <button class="btn-primary">Details</button>
                    <button class="btn-secondary">Delete</button>

                </td>

            </tr>
            <tr>
                <td>1</td>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@mail.com</td>
                <td>mary@mail.com</td>
                <td>Doe</td>
                <td>
                    <button class="btn-primary">Details</button>
                    <button class="btn-secondary">Delete</button>

                </td>


            </tr>
        </tbody>
    </table>


</div>

<?php
include('format/footer.php'); ?>