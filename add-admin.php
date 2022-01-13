<?php
include('format/header.php');
include('format/sidebar.php');
?>
<div class="container">
    <h2>Add Book</h2>
    <br>

    <form action="" method="POST">
        <table class="table table-bordered table-striped">
            <tr>
                <th>First Name:</th>
                <td>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter book firstname" required>
                </td>
            </tr>
            <tr>
                <td>last Name:</td>
                <td>
                    <input type="text" name="lastname" class="form-control" placeholder="Enter books lastname" required>
                </td>
            </tr>
            <tr>
                <td>Username:</td>
                <td>
                    <input type=" text" name="username" class="form-control" placeholder="Enter username" required>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="password" class="form-control" placeholder="Enter published password" required>
                </td>
            </tr>



        </table>
        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
    </form>

</div>

<?php
include('format/footer.php');

if (isset($_POST['submit'])) {

    // get data from form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // sql query to save data to database
    $sql = "INSERT INTO admin SET
    firstname = '$firstname',
    lastname = '$lastname',
    username = '$username',
    password = '$password'
        ";
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    // check whether the data is inserted or not 
    if ($res == TRUE) {
        echo "<script> alert('New Admin Account Added') 
        window.location.href='admin.php'</script>";

        // exit();
    } else {
        echo "<script> alert('Failed') 
       </script>";
    }
}

?>