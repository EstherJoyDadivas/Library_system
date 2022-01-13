<?php
include('format/header.php');
include('format/sidebar.php');
?>

<div class="container">
    <h2 class="display-6">Update Book</h2>
    <br>
    <?php

    $admin_id = $_GET['id'];

    $sql = "SELECT * FROM admin WHERE admin_id = $admin_id";

    $res = mysqli_query($conn, $sql);


    if ($res == true) {

        $count = mysqli_num_rows($res);

        if ($count == 1) {
            $row = mysqli_fetch_assoc($res);
            $admin_id = $row['admin_id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $username = $row['username'];
            $password = $row['password'];
        } else {
            echo "<h1> no</h1>";
        }
    }
    ?>
    <form action="" method="post">
        <table class="table table-bordered table-striped">
            <tr>
                <th class="h2" scope="row">First name:</th>
                <td>
                    <input type="text" name="firstname" value="<?= $firstname ?>" class="form-control">
                </td>
            </tr>
            <tr>
                <th scope="row">Last name:</th>
                <td>
                    <input type=" text" name="lastname" value="<?= $lastname ?>" class="form-control">
                </td>
            </tr>
            <tr>
                <th scope="row">Username:</th>
                <td>
                    <input type=" text" name="username" value="<?= $username ?>" class="form-control">
                </td>
            </tr>
            <tr>
                <th scope="row">Password:</th>
                <td>
                    <input type=" text" name="password" value="<?= $password ?>" class="form-control">
                </td>
            </tr>

        </table>
        <input type="hidden" name="admin_id" value="<?= $admin_id; ?>">
        <input type="submit" name="submit" value="Save changes" class="btn-secondary">
    </form>

</div>

<?php


if (isset($_POST['submit'])) {
    // get data from form

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // sql query to save data to database
    $sql = "UPDATE admin SET
                firstname = '$firstname',
                lastname = '$lastname',
                username = '$username',
                password = '$password'
                WHERE admin_id = '$admin_id'
                ";

    $res = mysqli_query($conn, $sql);


    if ($res == TRUE) {

        echo "<script> alert('Book Update Successful') 
            window.location.href='admin.php'</script>";
    } else {

        echo "<script> alert('Book Update Failed')
        </script";
    }
}
?>

<?php

include('format/footer.php');
?>