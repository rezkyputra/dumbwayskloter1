<!-- Modal -->
<div class="modal fade" id="Addhobby" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Data Hobby</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resulthobby = mysqli_query($mysqli, "SELECT * FROM hobby_tb");
                        while($datahobby = mysqli_fetch_array($resulthobby)){?>
                        <tr>
                            <td><?=$datahobby['name']?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edithobby<?=$datahobby['id'];?>">
                                    Edit
                                </button>
                                <!-- Buttun Hapus -->
                                <a href="hobby/delete.php?id=<?= $datahobby['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a> 
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#tambahhobby">
                    Add Profile
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>