<!doctype html>
<?php
include_once("konek.php");
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>DumbWays</title>
  </head>
  <body>
    <div class="container">

      <div class="row">
        <div class="col">
          <div class="float-left mt-3">
              <h2>Halo School</h2>
          </div>
          <div class="float-right mt-3">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                Add Profile
              </button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Addhobby">
                Data Hobby
              </button>
          </div>
        </div>
      </div>

      <div class="row">
        <?php
        $result = mysqli_query($mysqli, "SELECT * FROM profile_tb");
        while($data = mysqli_fetch_array($result)) {?>
        <div class="mx-auto">
          <div class="col m-1">
            <div class="card" style="width: 18rem;">
              <img src="img/<?=$data['photo']?>" width="100" height="200" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?=$data['name']?></h5>
                <p class="card-text"><?=$data['address']?></p>
                <!-- Button trigger modal Detail Profil -->
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal<?= $data['id']; ?>">
                  Detail
                </button>
                <!-- Button trigger modal Edit Profil -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal<?= $data['id']; ?>">
                  Edit
                </button>
                <!-- Buttun Hapus -->
                <a href="profile/delete.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                <?php
                  include("profile/add.php");
                  include("profile/detail.php");
                  include("profile/edit.php");

                  // Hobby
                  include("hobby/index.php");
                  include("hobby/add.php");
                ?>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>