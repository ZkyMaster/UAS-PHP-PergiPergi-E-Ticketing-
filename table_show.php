<div class="container">
	<div class="mail-box">
							<aside class="lg-side">
									<div class="inbox-head">
											<h3>Transaction List</h3>
									</div>
									<div class="inbox-body">
										 <div class="mail-option">
											  <table class="table table-inbox table-hover">


<?php
$query = "SELECT * from booking ";
$select_by_id = mysqli_query($con,$query);
$ddate = date('d M Y');

?>
								<tbody>
									<tr class="unread">
											<td class="view-message  dont-show">ID Transaction</td>
											<td class="view-message text-left">Transaction Date</td>
											<td class="view-message">ID Flight</td>
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
											<td colspan="2" class="view-message text-left">Action</td>
									 </tr>
<?php	if(mysqli_num_rows($select_by_id )==0 ){ ?>

										<tr class = "">
											<td class="col-xs-10"> <?php echo "Data tidak di temukan!"; ?> </td>
										</tr>
<?php	}
		else{
while($row = mysqli_fetch_assoc($select_by_id)){

	$id_transaksi=$row['id_transaksi'];
	$id_flight=$row['id_flight'];
	$mail_user= $row['Email_user'];
	$from = $row['fromm'];
	$to = $row['too'];
?>
										<tr class="">
												<td class="view-message  dont-show"><?php echo $id_transaksi ?></td>
												<td class="view-message"><?php echo $ddate ?></td>
												<td class="view-message"><?php echo $id_flight ?></td>
												<td class="view-message  text-left"><?php echo $mail_user ?></td>
												<td class="view-message  text-left"><?php echo $from ?></td>
												<td class="view-message  text-left"><?php echo $to ?></td>
												<td><span class="label label-success">Success</span></td>
												<td class="view-message">
													<a href="#" class="btn btn-info btn-sm">
									          <span class="glyphicon glyphicon-edit"></span>
									        </a>
												</td>
												<td class="view-message">
													<a href="#" class="btn btn-danger btn-sm">
									          <span class="glyphicon glyphicon-trash"></span>
									        </a>
												</td>
										</tr>
<?php		}}?>

								</tbody>
											</table>
									</div>
								</div>

							</aside>



	</div>
</div>
