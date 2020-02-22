<!-- Modal -->
<div class="modal fade" id="detailModal<?=$data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Detail Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="m-auto">
                <img src="img/<?=$data['photo']?>" width="250" height="250">
            </div>            
            <div class="m-3">
                <label for="">Name      : <?=$data['name']?></label> <br>
                <label for="">Born Date : <?=$data['born_date']?></label> <br>
                <label for="">Address   : <?=$data['address']?></label> <br>
                <label for="">Hobbies   : 
                <?php
                    $result1 = mysqli_query($mysqli, "SELECT * FROM hobby_tb");
                    while($data1 = mysqli_fetch_array($result1)){
                        if($data['hobby_id'] && $data1['id'] == $data['hobby_id']){
                            echo $data1['name'];
                        }
                    }
                ?>
                </label> <br>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>