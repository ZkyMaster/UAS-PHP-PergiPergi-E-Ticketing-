

<?php
  if(isset($_GET['sid'])){
  $id_p = $_GET['sid'];
  $input_status2= "UPDATE pesan SET status='read' WHERE id_pesan = $id_p";
  $result2 = mysqli_query($con,$input_status2);
}
?>

<?php
if (isset($_POST['Reply'])){
	if(isset($_GET['sid'])){
	$id_m = $_GET['sid'];

  $message_sub_balas = $_POST['subject_reply'];
  $message_balas = $_POST['pesan_balas'];
  $sts ='replied';

  $query = "UPDATE pesan SET subject_balas= '$message_sub_balas' , pesan_balas= '$message_balas'  WHERE id_pesan = $id_m ";

  $update_caption_query = mysqli_query($con,$query);
  if(!$update_caption_query){
        echo "<script>alert('Message not replied')</script>";
  		die("QUERY FAILED" . mysqli_error($connection));
  	}
  	else{
      $query2 = "UPDATE pesan SET status='replied' WHERE id_pesan = $id_m";
      $update_caption_query2 = mysqli_query($con,$query2);
      echo "<script>alert('Message replied')</script>";
  		  echo "<script> window.location.replace('/tour/admin/contactus.php'); </script>";
  	}

}}

?>






<?php
  if(isset($_GET['sid'])){
  $id_p = $_GET['sid'];
}
$query = "SELECT * FROM pesan  WHERE id_pesan = $id_p ";
$select_by_id = mysqli_query($con,$query) or die(mysqli_error());

  while($row = mysqli_fetch_assoc($select_by_id)){

    $id_pesan=$row['id_pesan'];
    $nama= $row['nama'];
    $email= $row['email'];
    $subject= $row['subject'];
    $pesan= $row['isipesan'];
    $subject_balas= $row['subject_balas'];
    $pesan_balas= $row['pesan_balas'];
    $pesan_show = substr($row['isipesan'], 0, 25);
    $status=$row['status'];
  }
?>

          <form action="" method="post">

          <div class="col-md-12">
            <div class="col-md-6">
              <h5>Message Information</h5>
                <div class="row form-group">
                  <div class="col-md-12">
                      <label for="fname">Name</label>
                      <input value="<?php echo $nama; ?>" type="text" class="form-control" name="nama" readonly="readonly">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12">
                    <label for="subject">Subject</label>
                    <input value="<?php echo "$subject"; ?>" type="text" class="form-control" name="subj" readonly="readonly">
                  </div>
                </div>
                <div class="row form-group">
                      <div class="col-md-12">
                        <label for="subject">Message</label>
                        <textarea value="" type="text" id="message" cols="30" rows="10" class="form-control" placeholder="" name="pesan" readonly="readonly"><?php echo "{$pesan}"; ?></textarea>
                      </div>
                </div>
            </div>

            <div class="col-md-6">
              <h5>Reply Message</h5>
                <div class="row form-group">
                  <div class="col-md-12">
                    <label for="email">Email</label>
                    <input value="<?php echo $email; ?>" type="text" class="form-control" name="email" readonly="readonly">
                  </div>
                </div>
                <div class="row form-group">
                      <div class="col-md-12">
                        <label for="subject">Subject reply</label>
                        <input type="text" name="subject_reply" id="subject" class="form-control" placeholder="">
                      </div>
                </div>
                <div class="row form-group">
                      <div class="col-md-12">
                        <label for="subject">Message</label>
                        <textarea name="pesan_balas" id="message" cols="30" rows="10" class="form-control" placeholder=""></textarea>
                      </div>
                </div>
            </div>

            <div class="form-group text-center" style="padding-left: 900px;">
              <div class="col-md-12">

                <div class="col-md-6" style="">
                  <input type="submit" name="Reply" value="Reply" class="btn btn-primary btn-md">
                </div>
              </div>
            </div>

          </div>
          </form>
