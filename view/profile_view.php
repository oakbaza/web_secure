<!doctype html>
<html lang="en">
<?php include_once('header.php'); ?>
<?php 
	if(isset($_POST['search'])){
		$user_id = $_POST['live-search'];
		$json_data = file_get_contents($path->url."controller/Api.php?userid=".$user_id );
		$seacrh_data = json_decode($json_data);
	}else{
		echo "<a href='profile.php'>return</a>";
		exit();
	}
?>
	<body>
		<div class="container">
			<div class="row my-2">
				<div class="col-lg-8 order-lg-2">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
						</li>
						<li class="nav-item">
							<a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
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
						<div class="tab-pane" id="messages">
							<div class="alert alert-info alert-dismissable">
								<a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
							</div>
							<table class="table table-hover table-striped">
								<tbody>                                    
									<tr>
										<td>
										   <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
										</td>
									</tr>
									<tr>
										<td>
										   <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
										</td>
									</tr>
									<tr>
										<td>
										   <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
										</td>
									</tr>
									<tr>
										<td>
										   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
										</td>
									</tr>
									<tr>
										<td>
										   <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros. 
										</td>
									</tr>
								</tbody> 
							</table>
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