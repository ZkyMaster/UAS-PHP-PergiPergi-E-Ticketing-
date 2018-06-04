<?php
if (isset($_POST['update_destination'])){
	if(isset($_GET['d_id'])){
	$destination_id = $_GET['d_id'];
	}

  $des_title = $_POST['des_t'];
	$ntempat = $_POST['des_n'];
	$nnegara = $_POST['des_c'];
	$image = $_FILES['image']['name'];
	$image_temp= $_FILES['image']['tmp_name'];
	$capt_date = date('d-m-y');

	move_uploaded_file($image_temp,"../image_upload/$image"); //move temp ke file folder di server



	$query = "UPDATE destination SET judul='{$des_title}',nama_tempat='{$ntempat}',nama_negara ='{$nnegara}',image='{$image}' WHERE id_destination = $destination_id ";


	$update_query = mysqli_query($con,$query);

	if(!$update_query){
		die("QUERY FAILED" . mysqli_error($con));
	}
	else{
		  echo "<script> window.location.replace('/tour/admin/destination.php'); </script>";
	}

}

?>


<?php

if(isset($_GET['d_id'])){
  $dd_id = $_GET['d_id'];


					$query = "SELECT * from destination WHERE id_destination = $dd_id ";
          $select_by_id = mysqli_query($con,$query);

					while($row = mysqli_fetch_array($select_by_id)){


            $des_id = $row['id_destination'];
            $des_titles = $row['judul'];
          	$ntempats = $row['nama_tempat'];
          	$nnegaras = $row['nama_negara'];
            $images = $row['image'];



}}
?>

<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Destination Title</label>
		<input value="<?php echo $des_titles ?>" type="text" class="form-control" name="des_t">
	</div>
	<div class="form-group">
		<label for="post_category_id">Destination Name</label>
		<input value="<?php echo "{$ntempats}"; ?>" type="text" class="form-control" name="des_n">
	</div>
  <div class="form-group">
		<label for="post_category_id">Destination Country</label>
		<input value="<?php echo "{$nnegaras}"; ?>" type="text" class="form-control" name="des_c">
	</div>
	<div class="form-group">
		<label for="post_image">Destination Image *(max. 800px * 600px)</label>
		<img width="400" src="../image_upload/<?php echo $images ; ?>" alt="image">
		<input type="file" name="image">
	</div>



	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="update_destination" value="Publish">
	</div>

</form>
