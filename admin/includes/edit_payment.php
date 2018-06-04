
        <?php
          if(isset($_POST['Update'])){
            if(isset($_GET['sid'])){
            $id_t = $_GET['sid'];
          }
          $input_status2= "UPDATE transaksi SET status='success' WHERE id_transaksi = $id_t";

          $result2 = mysqli_query($con,$input_status2);
          if($result2){
            //  echo "<script>window.location.href('/tour/admin/index.php');</script>";
            echo "<script> window.location.replace('/tour/admin/transaction.php'); </script>";
          }
          else{
            echo "<script>alert('Update Failed');</script>";
              echo "<script>window.location.href('/tour/admin/transaction');</script>";
          }
        }?>




<?php
  if(isset($_GET['sid'])){
  $id_t = $_GET['sid'];
}
  $query = "SELECT t.id_transaksi,t.nameoncard,t.cardnumber,t.status,b.id_flight,b.id_booking, b.address ,b.Email_user ,b.nama ,b.email, b.fromm , b.too ,b.seat from transaksi t JOIN booking b ON t.id_transaksi = b.id_transaksi where t.id_transaksi = '$id_t'";
  $select_by_penanda = mysqli_query($con,$query);
  $ddate = date('d M Y');
  while($row = mysqli_fetch_assoc($select_by_penanda)){


    $id_transaksi=$row['id_transaksi'];
    $namcard=$row['nameoncard'];
    $numcard=$row['cardnumber'];
    $tstatus=$row['status'];
    $id_flights=$row['id_flight'];
    $mail_user= $row['Email_user'];
    $alamat= $row['address'];
    $email= $row['email'];
    $nama_user= $row['nama'];
    $froms = $row['fromm'];
    $tos = $row['too'];
    $seats=$row['seat'];
  }
?>

          <form action="" method="post">

          <div class="col-md-12">
            <div class="col-md-6">
              <h5>Traveler Information</h5>
                <div class="row form-group">
                  <div class="col-md-12">
                      <label for="fname">Name</label>
                      <input value="<?php echo $id_t; ?>" type="text" class="form-control" name="nama" readonly="readonly">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12">
                    <label for="email">Email</label>
                    <input value="<?php echo $email; ?>" type="text" class="form-control" name="email" readonly="readonly">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12">
                    <label for="subject">Address</label>
                    <input value="<?php echo "$alamat"; ?>" type="text" class="form-control" name="alamat" readonly="readonly">
                  </div>
                </div>
            </div>

            <div class="col-md-6">
              <h5>Ticket Information</h5>
                <div class="row form-group">
                      <div class="col-md-12">
                        <label for="subject">ID Flight</label>
                        <input value="<?php echo "{$id_flights}"; ?>" type="text" class="form-control" name="id_flight" readonly="readonly">
                      </div>
                </div>
                <div class="row form-group">
                      <div class="col-md-12">
                        <label for="subject">Seat</label>
                        <input value="<?php echo "{$seats}"; ?>" type="text" class="form-control" name="seat" readonly="readonly">
                      </div>
                </div>
                <div class="row form-group">
                     <div class="col-md-12">


                      <div class="col-md-6">
                        <label for="subject">From</label>
                        <input value="<?php echo "{$froms}"; ?>" type="text" class="form-control" name="from" readonly="readonly">
                      </div>

                      <div class="col-md-6">
                        <label for="subject">to</label>
                        <input value="<?php echo "{$tos}"; ?>" type="text" class="form-control" name="from_time"readonly="readonly">
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h4>Payment Information</h4>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label for="subject">Name on card</label>
                      <input value="<?php echo "{$namcard}"; ?>" type="text" class="form-control" name="id_flight" readonly="readonly">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <label for="subject">Card Number ( Credit Card )</label>
                        <input value="<?php echo "{$numcard}"; ?>" type="text" class="form-control" name="id_flight" readonly="readonly">
                    </div>

                    <div class="col-md-6">
                      <label for="subject">Status</label>
                        <input value="<?php echo "{$tstatus}"; ?>" type="text" class="form-control" name="status" readonly="readonly">
                    </div>
                  </div>
                </div>
          </div>
          </div>
                <div class="form-group text-center">
                  <input type="submit" name="Update" value="Update Status" class="btn btn-primary">
                </div>

          </form>
        </div>
