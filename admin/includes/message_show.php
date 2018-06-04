

                         <table class="table table-bordered table-hover">
                         	<thead>
                         		<tr>
                         			<th>ID</th>
                         			<th>Name</th>
                         			<th>Email</th>
                         			<th>Subject</th>
                         			<th>Message</th>
                         			<th colspan="2" style="text-align: center;">Setting</th>
                         		</tr>
                         	</thead>
                         	<tbody>

                         	 <?php //tampilkan pesan

					 $query = "SELECT * from pesan";
           $select_categories = mysqli_query($connection,$query);

					while($row = mysqli_fetch_assoc($select_categories)){
              $pesan_id = $row['id_pesan'];
              $pesan_nama = $row['nama'];
						$pesan_email = $row['email'];
						$pesan_tlp = $row['subject'];
						$pesan_isipesan = $row['isipesan'];
                        echo "<tr>";
                        echo "<td>{$pesan_id}</td>";
						echo "<td>{$pesan_nama}</td>";
						echo "<td>{$pesan_email}</td>";
						echo "<td>{$pesan_tlp}</td>";
						echo "<td>{$pesan_isipesan}</td>";

          	echo "<td><a href='message.php?source=reply&idp={$pesan_id}'>Reply</a></td>";
						echo "<td><a href='message.php?delete={$pesan_id}'>delete</a></td>";

						echo "</tr>";
                    }

                                ?>
                         	<?php //fungsi delete pesan

								if(isset($_GET['delete'])){
									$id_cat = $_GET['delete'];
									$query= "DELETE FROM pesan WHERE id_pesan = {$id_cat}";
									$delete_query= mysqli_query($connection,$query);

									if($delete_query){
                    echo '<script> location.href = "/tour/admin/message.php";</script>';
										}
										else{
											echo 'Gagal';
										}
								}

								?>


                         	</tbody>
                         </table>
