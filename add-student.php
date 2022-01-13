<?php
include('format/header.php');
include('format/sidebar.php');
?>
<div class="container">
    <h2>Add Student</h2>
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
                <td>Course:</td>
                <td>
                    <input type=" text" name="course" class="form-control" placeholder="Enter course" required>
                </td>
            </tr>
            <tr>
                <td>Section</td>
                <td>
                    <input type="text" name="section" class="form-control" placeholder="Enter published section" required>
                </td>
            </tr>



        </table>
        <input type="submit" name="submit" value="Add Student" class="btn-secondary">
    </form>

</div>

<?php
include('format/footer.php');

if (isset($_POST['submit'])) {

    // get data from form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $course = $_POST['course'];
    $section = $_POST['section'];

    // sql query to save data to database
    $sql = "INSERT INTO student SET
    firstname = '$firstname',
    lastname = '$lastname',
    course = '$course',
    section = '$section'
        ";
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    // check whether the data is inserted or not 
    if ($res == TRUE) {
        echo "<script> alert('New Student Account Added') 
        window.location.href='students.php'</script>";
    } else {
        echo "<script> alert('Failed') 
       </script>";
    }
}

?>