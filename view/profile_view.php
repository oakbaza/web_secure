<!doctype html>
<html lang="en">
<?php include_once('header.php'); ?>
	<body>
	<?php 
	if(isset($_POST['live-search'])){
		$user_id = $_POST['live-search'];
		$json_data = file_get_contents($path->url."controller/Api.php?userid=".$user_id );
		$seacrh_data = json_decode($json_data);
	}else{ ?>
		<div class="container">
			<h2 class="text-center mt-4" >Not Found</h2>
		</div>
	<?php exit();} ?>
		<div class="container">
			<div class="row my-2">
				<div class="col-lg-8 order-lg-2">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
						</li>
					</ul>
					<div class="tab-content py-4">
						<div class="tab-pane active" id="profile">
							<h4 class="mb-3"><?php echo $seacrh_data->user_name_tmp?></h4>
							<div class="row">
								<div class="col-md-6">
									<p><span><b>Name : </b></span>
										<?php echo $seacrh_data->user_fname." ".$seacrh_data->user_lname?>
									</p>
									<p><span><b>Birthdate : </b></span>
										<?php echo $path->splitDateForm2($seacrh_data->user_birthdate)?>
									<p><span><b>Email : </b></span>
										<?php echo $seacrh_data->user_email;?>
									</p>
									<p><span><b>Address : </b></span>
										<?php echo $seacrh_data->user_address;?>
									</p>
								</div>
								<!-- <div class="col-md-12">
									<h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
									<table class="table table-sm table-hover table-striped">
										<tbody>                                    
											<tr>
												<td>
													<strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
												</td>
											</tr>
											<tr>
												<td>
													<strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
												</td>
											</tr>
											<tr>
												<td>
													<strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
												</td>
											</tr>
											<tr>
												<td>
													<strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
												</td>
											</tr>
											<tr>
												<td>
													<strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
												</td>
											</tr>
										</tbody>
									</table>
								</div> -->
							</div>
							<!--/row-->
						</div>
					</div>
				</div>
				<div class="col-lg-4 order-lg-1 text-center">
					<img src="<?php echo $path->url_image.$seacrh_data->user_picture?>" class="avatar img-circle img-thumbnail rounded-circle" alt="avatar">
				</div>
			</div>
		</div>
	</body>
</html>