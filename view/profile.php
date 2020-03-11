<!doctype html>
<html lang="en">
<?php include_once('header.php'); ?>
	<body>
	<script>
		$(document).ready(function(){
			var profile_condition;
			$('.datepicker').datepicker({
				format:'dd/mm/yyyy'
			});
			
			$("#toggle_pass").on('click', function(event) {
				event.preventDefault();
				if($('#password').attr("type") == "text"){
					$('#password').attr('type', 'password');
					$('#icon_pass').addClass( "fa-eye-slash" );
					$('#icon_pass').removeClass( "fa-eye" );
				}else if($('#password').attr("type") == "password"){
					$('#password').attr('type', 'text');
					$('#icon_pass').removeClass( "fa-eye-slash" );
					$('#icon_pass').addClass( "fa-eye" );
				}
			});
			
				$('#live-search').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
					e.preventDefault();
					console.log(clickedIndex)
				});
	
			/** SEARCH **/
			$("#live-search").on('loaded.bs.select',function(){
				$('.bs-searchbox input').on('keyup', function(e) {
					e.preventDefault();
					$('#live-search').selectpicker('refresh');
						$.ajax({
							url:"<?php echo $path->url;?>" + "controller/Api.php",
							dataType:'json',
							type:'post',
							data:{
								'search':true,
								'keyword':$('.bs-searchbox input').val()
							},
							success: function(result){
							  console.log(result)
							  if(result.length > 0){
								  option = ""
								  for(let i = 0;i<result.length;i++){
									  option += "<option value="+result[i].user_id+">"+result[i].user_fname+" "+result[i].user_lname+"</option>"
								  }
								  $('#live-search').html(option)
								  $('#live-search').selectpicker('refresh');
							  }else{
								  $('#live-search').html("")
								  $('#live-search').selectpicker('refresh');
							  }
							}
						});
				});
			})
			/** SEARCH **/
			
			/** EDIT **/
			$('#save').click(function(){
				$.ajax({
					url:"<?php echo $path->url;?>" + "controller/Api.php",
					dataType:'json',
					type:'post',
					data:{
						'edit_profile':true,
						'user_id':"<?php echo $_SESSION['user_id']?>",
						'user_name':$("#username").val(),
						'user_password':$("#password").val(),
						'user_fname':$("#firstname").val(),
						'user_lname':$("#lastname").val(),
						'user_birthdate':$("#birthdate").val(),
						'user_email':$("#email").val(),
						'user_address':$("#address").val()
					},
					success:function(result){
						alert(result)
					}
				})
				return false;
			})
			/** EDIT **/
		})
	</script>
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
						<form role="form" method="post" id="profile_form">
							<div class="input-group row mb-3">
								<label class="col-lg-3 col-form-label form-control-label">Username</label>
								<div class="col-lg-9">
									<input id="username" class="form-control" type="text" value="<?=$user_data->user_name_tmp?>" placeholder="Username" required>
								</div>
							</div>
							<div class="input-group row mb-3">
								<label class="col-lg-3 col-form-label form-control-label">Password</label>
								<div class="col-lg-8 pr-0">
								  <input id="password" type="password" value="<?=$user_data->user_password?>" class="form-control" placeholder="Password" required>
								</div>
								<a class="input-group-append col-lg-1 pl-0">
									<span class="input-group-text form-control" id="toggle_pass"><i id="icon_pass" class="fa fa-eye-slash"></i></span>
								 </a>
							</div>
							<!--<div class="input-group row mb-3">
								<label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
								<div class="col-lg-9">
									<input class="form-control" type="password" value="<?=$user_data->user_name?>" placeholder="Confirm password">
								</div>
							</div> -->
							<div class="input-group row mb-3">
								<label class="col-lg-3 col-form-label form-control-label">Firstname</label>
								<div class="col-lg-9">
									<input id="firstname" class="form-control" type="text" value="<?=$user_data->user_fname?>" placeholder="Firstname" required>
								</div>
							</div>
							<div class="input-group row mb-3">
								<label class="col-lg-3 col-form-label form-control-label">Lastname</label>
								<div class="col-lg-9">
									<input id="lastname" class="form-control" type="text" value="<?=$user_data->user_lname?>" placeholder="Lastname" required>
								</div>
							</div>
							<div class="input-group row mb-3">
								<label class="col-lg-3 col-form-label form-control-label">Birthdate</label>
								<div class="col-lg-9">
									<input class="form-control datepicker" id="birthdate" name="birthdate" placeholder="Birthdate" aria-label="Birthdate" value="<?=$path->splitDateForm2($user_data->user_birthdate)?>" required>
								</div>
							</div>
							<div class="input-group row mb-3">
								<label class="col-lg-3 col-form-label form-control-label">Email</label>
								<div class="col-lg-9">
									<input id="email" class="form-control" type="email" value="<?=$user_data->user_email?>" placeholder="email@gmail.com" required>
								</div>
							</div>
							<div class="input-group row mb-3">
								<label class="col-lg-3 col-form-label form-control-label">Address</label>
								<div class="col-lg-9">
									<textarea id="address" class="form-control" type="text"  placeholder="Address" ><?=$user_data->user_address?></textarea>
								</div>
							</div>
							<div class="input-group row mb-3">
								<label class="col-lg-3 col-form-label form-control-label"></label>
								<div class="col-lg-9">
									<input type="reset" class="btn btn-secondary" value="Cancel">
									<input type="button" class="btn btn-primary" id="save" value="Save Changes">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-4 order-lg-1 text-center">
				<img src="<?=$path->url_image.$user_data->user_picture;?>" class="avatar img-circle img-thumbnail rounded-circle" alt="avatar">
				<h6 class="mt-2">Upload a different photo</h6>
				<label class="custom-file" >
					<input type="file" id="file" class="custom-file-input">
					<span class="btn btn-primary custom-file-control">Choose file</span>
				</label>
			</div>
		</div>
	</div>
	
	</body>
</html>