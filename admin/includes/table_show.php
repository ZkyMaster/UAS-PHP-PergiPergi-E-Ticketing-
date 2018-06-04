							<div class="container">
														<aside class="lg-side">
								<table class="table table-inbox table-hover">

							<?php
							$query = "SELECT t.id_transaksi,t.nameoncard,t.cardnumber,t.status,b.id_flight,b.id_booking, b.Email_user ,b.address,b.nama ,b.email, b.fromm , b.too ,b.seat from transaksi t JOIN booking b ON t.id_transaksi = b.id_transaksi";
							$select_by_id = mysqli_query($con,$query) or die(mysqli_error());
							$ddate = date('d M Y');

							?>
															<tbody>
																<tr class="unread">
																		<td class="view-message  dont-show">ID Transaction</td>
																		<td class="view-message">ID Flight</td>
																		<td class="view-message text-left">Transaction Date</td>
																		<td class="view-message">Nama</td>
																		<td class="view-message text-left">User</td>
																		<td class="view-message text-left">From</td>
																		<td class="view-message text-left">To</td>
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
																		<td class="col-xs-10"> <?php echo "Data tidak di temukan!"; ?> </td>
																	</tr>
							<?php	}
									else{



										while($row = mysqli_fetch_assoc($select_by_id)){


											$id_transaksi=$row['id_transaksi'];
											$namcard=$row['nameoncard'];
											$numcard=$row['cardnumber'];

											$id_flight=$row['id_flight'];
											$mail_user= $row['Email_user'];
											$alamat= $row['address'];
											$email= $row['email'];
											$nama_user= $row['nama'];
											$from = $row['fromm'];
											$to = $row['too'];
											$seat=$row['seat'];
											$status = $row['status'];



							//if($status == "pending"){	echo $pending ="label label-danger";} else{ echo $sucess = "label label-success";}
							?>
																	<tr class="">
																			<td class="view-message  dont-show"><?php echo $id_transaksi ?></td>
																			<td class="view-message"><?php echo $id_flight ?></td>
																			<td class="view-message"><?php echo $ddate ?></td>
																			<td class="view-message"><?php echo $nama_user?></td>
																			<td class="view-message  text-left"><?php echo $mail_user ?></td>
																			<td class="view-message  text-left"><?php echo $from ?></td>
																			<td class="view-message  text-left"><?php echo $to ?></td>
																			<td><span class="<?php if($status == "pending"){	echo $pending ="label label-danger";} else{ echo $sucess = "label label-success";} ?>"><?php echo $status ?></span></td>
																		<td class="view-message">
																				<a href="transaction.php?source=edit_payment&sid=<?php echo $id_transaksi ?>" class="btn btn-info btn-sm" >
																        <span class="glyphicon glyphicon-edit" id=""></span>edit
																        </a>
																			</td>

							<?php	}	}?>


															</tbody>
																		</table>


														</aside>

</div>
