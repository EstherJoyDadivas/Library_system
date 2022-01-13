<?php
include('format/header.php');
include('format/sidebar.php');
?>

<div class="container">
    <h2 class="display-6">Update Book</h2>
    <br>
    <?php

    $student_id = $_GET['id'];

    $sql = "SELECT * FROM student WHERE student_id = $student_id";

    $res = mysqli_query($conn, $sql);


    if ($res == true) {

        $count = mysqli_num_rows($res);

        if ($count == 1) {
            $row = mysqli_fetch_assoc($res);
            $student_id = $row['student_id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $course = $row['course'];
            $section = $row['section'];
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
                <th scope="row">Course:</th>
                <td>
                    <input type=" text" name="course" value="<?= $course ?>" class="form-control">
                </td>
            </tr>
            <tr>
                <th scope="row">Section:</th>
                <td>
                    <input type=" text" name="section" value="<?= $section ?>" class="form-control">
                </td>
            </tr>

        </table>
        <input type="hidden" name="student_id" value="<?= $student_id; ?>">
        <input type="submit" name="submit" value="Save changes" class="btn-secondary">
    </form>

</div>

<?php


if (isset($_POST['submit'])) {
    // get data from form

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $course = $_POST['course'];
    $section = $_POST['section'];
    // sql query to save data to database
    $sql = "UPDATE student SET
                firstname = '$firstname',
                lastname = '$lastname',
                course = '$course',
                section = '$section'
                WHERE student_id = '$student_id'
                ";

    $res = mysqli_query($conn, $sql);


    if ($res == TRUE) {

        echo "<script> alert('Student Account Update Successful') 
            window.location.href='students.php'</script>";
    } else {

        echo "<script> alert('Student Account Update Failed')
        </script";
    }
}
?>

<?php

include('format/footer.php');
?>