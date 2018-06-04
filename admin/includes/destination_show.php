<div class="container">
  <aside class="lg-side">
  <table class="table table-inbox table-hover">

<?php
$query = "SELECT * FROM destination ";
$select_by_id = mysqli_query($con,$query) or die(mysqli_error());

?>
                <tbody>
                  <tr class="unread">
                      <td class="view-message dont-show">ID Destination </td>
                      <td class="view-message dont-show">Destination Title</td>
                      <td class="view-message ">Destination Name</td>
                      <td class="view-message ">Destination Country</td>
                      <td class="view-message text-left">Image</td>
                      <td class="view-message text-center">Action</td>
                   </tr>

<?php	if(mysqli_num_rows($select_by_id )==0 ){ ?>

                    <tr class = "">
                      <td></td>
                      <td></td>
                      <td class="view-message text-center"> <?php echo "Data tidak di temukan!"; ?> </td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
<?php	}
    else{



      while($row = mysqli_fetch_assoc($select_by_id)){

        $des_id = $row['id_destination'];
        $des_title = $row['judul'];
        $ntempat = $row['nama_tempat'];
        $nnegara = $row['nama_negara'];
        $image = $row['image'];


//if($status == "pending"){	echo $pending ="label label-danger";} else{ echo $sucess = "label label-success";}
?>
                    <tr class="">
                        <td class="view-message"><?php echo $des_id ?></td>
                        <td class="view-message"><?php echo $des_title?></td>
                        <td class="view-message  text-left"><?php echo $ntempat ?></td>
                        <td class="view-message  text-left"><?php echo $nnegara ?></td>
                        <td><img style="width:200px; height:100px;" src="/tour/image_upload/<?php echo $image ?>" alt="image"></td>
                        <td colspan="1" class="view-message text-center">
                            <a href="destination.php?source=update&d_id=<?php echo $des_id ?>" class="btn btn-primary btn-sm" >
                            <span class="glyphicon glyphicon-edit" id=""></span> edit
                            </a>
                       </td>
                    </tr>

<?php	}	}?>


                </tbody>
                      </table>



              </aside>

</div>
