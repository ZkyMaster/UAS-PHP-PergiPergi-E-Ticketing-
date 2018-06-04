<?php
if(isset($_GET['penanda'])){
	$idt = $_GET['penanda'];
$query1 = "SELECT * from transaksi WHERE id_transaksi = $idt";
$select_by_id1 = mysqli_query($con,$query1);

while($row = mysqli_fetch_assoc($select_by_id1)){



  $nama1 = $row['nameoncard'];
  $cnum1=$row['cardnumber'];
  $status= $row['status'];

}
}
 ?>
<div class="container">
<form action="" method="post">

<div class="col-md-12">
  <div class="col-md-6">
    <h5>Traveler Information</h5>
      <div class="row form-group">
        <div class="col-md-12">
            <label for="fname">Name</label>
            <input value="<?php echo "{$nama_user}"; ?>" type="text" class="form-control" name="nama" readonly="readonly">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-12">
          <label for="email">Email</label>
          <input value="<?php echo "{$email}"; ?>" type="text" class="form-control" name="email" readonly="readonly">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-12">
          <label for="subject">Address</label>
          <input value="<?php echo "{$alamat1}"; ?>" type="text" class="form-control" name="alamat" readonly="readonly">
        </div>
      </div>
  </div>

  <div class="col-md-6">
    <h5>Ticket Information</h5>
      <div class="row form-group">
            <div class="col-md-12">
              <label for="subject">ID Flight</label>
              <input value="<?php echo "{$id_flight1}"; ?>" type="text" class="form-control" name="id_flight" readonly="readonly">
            </div>
      </div>
      <div class="row form-group">
            <div class="col-md-12">
              <label for="subject">Seat</label>
              <input value="<?php echo "{$seat1}"; ?>" type="text" class="form-control" name="seat" readonly="readonly">
            </div>
      </div>
      <div class="row form-group">
           <div class="col-md-12">


            <div class="col-md-6">
              <label for="subject">From</label>
              <input value="<?php echo "{$from1}"; ?>" type="text" class="form-control" name="from" readonly="readonly">
            </div>

            <div class="col-md-6">
              <label for="subject">to</label>
              <input value="<?php echo "{$to1}"; ?>" type="text" class="form-control" name="from_time"readonly="readonly">
            </div>
          </div>
      </div>
  </div>

  <div class="col-md-12">
      <h4>Payment Information</h4>

      <div class="row form-group">
        <div class="col-md-12">
          <label for="subject">Name on card</label>
            <input value="<?php echo "{$nama1}"; ?>" type="text" class="form-control" name="id_flight" readonly="readonly">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-12">
          <div class="col-md-6">
            <label for="subject">Card Number ( Credit Card )</label>
              <input value="<?php echo "{$cnum1}"; ?>" type="text" class="form-control" name="id_flight" readonly="readonly">
          </div>

          <div class="col-md-6">
            <label for="subject">Status</label>
              <input value="<?php echo "{$status}"; ?>" type="text" class="form-control" name="status" readonly="readonly">
          </div>
        </div>
      </div>
</div>
</div>
      <div class="form-group text-center">
        <input type="submit" name="Update" value="Update Status" class="btn btn-primary">
      </div>

</form>
<?php
  if(isset($_POST['update'])){
  $statuss = "success";
  $input_status1= "update booking set (status) values ('$statuss') where id_transaksi = '$id_transaksi'";
  $result1 = mysqli_query($con,$tatus1);

  $input_status2= "update transaksi set (status) values ('$statuss') where id_transaksi = '$id_transaksi'";
  $result2 = mysqli_query($con,$tatus2);
  if($result1 and $result2){
      echo "<script>window.location.reload();</script>";
  }
}?>
</div>
