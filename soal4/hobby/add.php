<!-- Modal -->
<div class="modal fade" id="tambahhobby" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Hobby</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <div class="modal-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" name="addhobby" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['addhobby'])) {
        $name = $_POST['name'];
        $mysqli->query("INSERT INTO hobby_tb(name) VALUES('$name')");
        echo "<script>
        window.location.href='index.php';
        </script>";
    }
    ?>
</div>