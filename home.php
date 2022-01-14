<?php
include('format/header.php');
include('format/sidebar.php');
?>

<div class="container">
    <br>
    <h1>Manage Books</h1>

    <input class="form-control" id="search_text" name="search_text" type="text" placeholder="Search..">
    <br>

    <a href="add-book.php" class="btn btn-primary btn-lg">Add Book</a>
    <br>
    <br>
    <?php
    if (isset($_SESSION['delete'])) {
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
    }

    ?>
    <div id="result">
        <table class="table table-bordered table-striped" id="table-data">
        </table>

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "manage-book.php",
                method: "post",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
</script>
<?php
include('format/footer.php'); ?>