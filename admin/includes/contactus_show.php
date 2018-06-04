<div class="container">
  <aside class="lg-side">
  <table class="table table-inbox table-hover">

<?php
$query = "SELECT * FROM pesan ";
$select_by_id = mysqli_query($con,$query) or die(mysqli_error());

?>
                <tbody>
                  <tr class="unread">
                      <td class="view-message dont-show">Name</td>
                      <td class="view-message ">Email</td>
                      <td class="view-message ">Subject</td>
                      <td class="view-message text-left">Message</td>
                      <td>
                            <span>Status
                                <div>
                                    <span class="label label-success pull-left"> </span>
                                    <span class="label label-info pull-left"> </span>
                                    <span class="label label-warning pull-left"> </span>
                                    <span class="label label-danger pull-left"> </span>
                                  </div>
                            </span>
                      </td>
                      <td colspan="2" class="view-message text-center">Action</td>
                   </tr>

<?php	if(mysqli_num_rows($select_by_id )==0 ){ ?>

                    <tr class = "">
                      <td></td>
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

        $id_pesan=$row['id_pesan'];
        $nama= $row['nama'];
        $email= $row['email'];
        $subject= $row['subject'];
        $pesan= $row['isipesan'];
        $pesan_show = substr($row['isipesan'], 0, 25);
        $status=$row['status'];




//if($status == "pending"){	echo $pending ="label label-danger";} else{ echo $sucess = "label label-success";}
?>
                    <tr class="">

                        <td class="view-message"><?php echo $nama ?></td>
                        <td class="view-message"><?php echo $email?></td>
                        <td class="view-message  text-left"><?php echo $subject ?></td>
                        <td class="view-message  text-left"><?php echo $pesan_show ,' ...' ?></td>
                        <td><span class="<?php if($status == "unread"){	echo $unread = "label label-warning";} elseif($status == "read"){ echo $read = "label label-info";} if($status == 'replied'){ echo $reply = "label label-success";}  ?>"><?php echo $status ?></span></td>

                      <td colspan="2" class="view-message text-center">
                          <a href="contactus.php?source=reply&sid=<?php echo $id_pesan ?>" class="btn btn-success btn-sm" >
                          <span class="glyphicon glyphicon-envelope" id=""></span> reply
                          </a>
                          <a href="contactus.php?del=<?php echo $id_pesan ?>" class="btn btn-danger btn-sm" >
                          <span class="glyphicon glyphicon-trash" id=""></span> delete
                          </a>
                      </td>
                    </tr>

<?php	}	}?>


                </tbody>
                      </table>

                      <?php

                                  if(isset($_GET['sid'])){
                                  $id_p = $_GET['sid'];

                                $input_status2= "UPDATE pesan SET status='read' WHERE id_pesan = $id_p";
                                $result2 = mysqli_query($con,$input_status2);
                              }
                              ?>


                      <?php //fungsi delete

               if(isset($_GET['del'])){
                 $del_id = $_GET['del'];
                 $query= "DELETE FROM pesan WHERE id_pesan = $del_id";
                 $delete_query= mysqli_query($con,$query);
                 if($delete_query){
                      echo "<script> window.location.replace('/tour/admin/contactus.php'); </script>";
                   }
                   else{
                      echo "<script> alert('Failed Delete Message'); </script>";
                   }

               }

               ?>

              </aside>

</div>
