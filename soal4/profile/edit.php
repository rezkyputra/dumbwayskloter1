<div class="modal fade" id="editModal<?=$data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="hidden" name="id" value="<?=$data['id']?>">
              <input type="text" class="form-control" name="name" value="<?=$data['name'];?>" id="name" placeholder="Name" required>
          </div>
          <div class="form-group">
              <label for="born">Born Date</label>
              <input type="date" class="form-control" name="born_date" value="<?=$data['born_date'];?>" id="born" required>
          </div>
          <div class="form-group">
              <label for="address">Address</label>
              <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address" required><?=$data['address'];?></textarea>
          </div>
          <div class="form-group">
              <label for="hobby">Hobby</label>
              <select class="form-control" id="hobby" name="hobby_id" required>
                  <option value="">---</option>
                  <?php
                  $resultedit = mysqli_query($mysqli, "SELECT * FROM hobby_tb");
                  while($dataedit = mysqli_fetch_array($resultedit)){
                        if($data['hobby_id'] && $dataedit['id'] == $data['hobby_id']){?>                          
                          <option value="<?=$dataedit['id']?>" selected><?=$dataedit['name']?></option>
                        <?php
                        }else{?>
                          <option value="<?=$dataedit['id']?>"><?=$dataedit['name']?></option>
                        <?php
                        }
                      ?>
                  <?php } ?>
              </select>
          </div>
          <div class="form-group">
              <label for="img">Photo</label>
              <input type="file" class="form-control" name="photo" id="img" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
  <?php
    if(isset($_POST['edit'])) {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $born_date = $_POST['born_date'];
      $address = $_POST['address'];
      $hobby_id = $_POST['hobby_id'];
      $photo = $_FILES['photo']['name'];
      $mysqli->query("UPDATE profile_tb SET name='".$name."', born_date='".$born_date."', address='".$address."', hobby_id='".$hobby_id."', photo='".$photo."' WHERE id='".$id."'");
      move_uploaded_file($_FILES['photo']['tmp_name'],'img/'.$photo);
      echo "<script>
        window.location.href='index.php';
      </script>";
    }
  ?>
</div>