<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <div class="modal-body">
            <form action="" method="POST" name="form1" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="born">Born Date</label>
                    <input type="date" class="form-control" name="born_date" id="born" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" id="address" name="Address" rows="3" placeholder="Address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="hobby">Hobby</label>
                    <select class="form-control" id="hobby" name="hobby_id" required>
                        <option value="">---</option>
                        <?php
                        $resultadd = mysqli_query($mysqli, "SELECT * FROM hobby_tb");
                        while($dataadd = mysqli_fetch_array($resultadd)){ ?>
                            <option value="<?=$dataadd['id']?>"><?=$dataadd['name']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="img">Photo</label>                    
                    <input type="file" class="form-control" name="photo" id="img" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" name="add" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['add'])) {
        $name = $_POST['name'];
        $born_date = $_POST['born_date'];
        $address = $_POST['address'];
        $hobby_id = $_POST['hobby_id'];
        $photo = $_FILES['photo']['name'];
        $mysqli->query("INSERT INTO profile_tb(id, name ,born_date ,address ,hobby_id ,photo) VALUES('','$name','$born_date','$address','$hobby_id','$photo')");
        move_uploaded_file($_FILES['photo']['tmp_name'],'img/'.$photo);
        echo "<script>
        window.location.href='index.php';
        </script>";
    }
    ?>
</div>