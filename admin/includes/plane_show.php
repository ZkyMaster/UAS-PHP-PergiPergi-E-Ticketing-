

                         <table class="table table-bordered table-hover">
                         	<thead>
                         		<tr>
                         			<th>ID</th>
                         			<th>Nama Pesawat</th>
                         			<th>Jenis Pesawat</th>
                         			<th colspan="2" style="text-align: center;">Setting</th>
                         		</tr>
                         	</thead>
                         	<tbody>

                         	 <?php //tampilkan pesan

					 $query = "SELECT * from pesawat";
           $select_categories = mysqli_query($connection,$query);

					while($row = mysqli_fetch_assoc($select_categories)){
            $p_id = $row['id_pesawat'];
            $p_nama = $row['nama_pesawat'];
						$p_jenis = $row['jenis_pesawat'];

            echo "<tr>";
            echo "<td>{$p_id}</td>";
						echo "<td>{$p_nama}</td>";
						echo "<td>{$p_jenis}</td>";
						echo "<td><a href='plane.php?source=edit&idp={$p_id}'>edit</a></td>";
						echo "<td><a href='plane.php?delete={$p_id}'>delete</a></td>";

						echo "</tr>";
                    }

                                ?>
                         	<?php //fungsi delete pesan

								if(isset($_GET['delete'])){
									$id_cat = $_GET['delete'];
									$query= "DELETE FROM pesawat WHERE id_pesawat = {$id_cat}";
									$delete_query= mysqli_query($connection,$query);
									if($delete_query){
                    echo '<script> location.href = "/tour/admin/plane.php";</script>';
										}
										else{
											echo 'Gagal';
										}
								}

								?>


                         	</tbody>
                         </table>
