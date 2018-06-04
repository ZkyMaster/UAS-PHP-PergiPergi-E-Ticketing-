 <button type="button" style="margin-right=250px; padding-right: 90px;"><a href="subscribe.php?source=reply">Reply</a></td></button>

 <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th colspan="2" style="text-align: center;">Setting</th>
        </tr>
    </thead>

    <tbody>

    <?php //tampilkan pesan

					 $query = "SELECT * from subscribe";
           $select_categories = mysqli_query($con,$query);

					while($row = mysqli_fetch_assoc($select_categories)){
            $sub_id = $row['Id_subscribe'];
						$sub_email = $row['email'];
            echo "<tr>";
            echo "<td>{$sub_id}</td>";
						echo "<td>{$sub_email}</td>";
						
						echo "<td><a href='subscribe.php?delete={$sub_id}'>delete</a></td>";

						echo "</tr>";
                    }

      ?>
      <?php //fungsi delete

								if(isset($_GET['delete'])){
									$id_cat = $_GET['delete'];
									$query= "DELETE FROM subscribe WHERE id_subscribe = {$id_cat}";
									$delete_query= mysqli_query($con,$query);
									if($delete_query){
                    echo '<script> location.href = "/tour/admin/subscribe.php";</script>';
										}
										else{
											echo 'Gagal';
										}
								}

			?>


      </tbody>
</table>
