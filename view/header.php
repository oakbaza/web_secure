	<head>
		<title>E-gai</title>
		<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">
		<?php include_once('head.php');?>
	</head>
	<?php 
		include_once('../controller/Path.php');
		$path = new Path();
		session_start();
		if(!isset($_SESSION['username'])){
			$location = 'location: '.$path->url.'view/index.php';
			header($location);
		}
		$profile_condition = true;
		
		$json_data = file_get_contents($path->url."controller/Api.php?userid=".$_SESSION['user_id']);
		$user_data = json_decode($json_data);
		//print_r($user_data);
		//print_r($_SESSION);
	?>

<style>
	.bg-custom-1 {
		background-color: #85144b;
	}

	.bg-custom-2 {
		background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
	}
</style>
<!--<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a class="navbar-brand" href="profile.php">
		<img class="img-thumbnail rounded-circle" src="../pic/chicken.png" height="45px" width="45px">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<form class="form-inline" method="post" action="profile.php" target="_blank">
			<div class="md-form my-0">
			
				<select class="selectpicker form-control mr-sm-2" id="live-search" data-live-search="true" name="live-search">
				</select>
			</div>
			<input class="btn btn-primary btn-md my-2 my-sm-0 ml-3" type="submit" value="SEARCH" name="search">
		</form>
	</div>  
	<div class="navbar-nav ml-auto">
		<a class="nav-link p-0 pr-2" href="#">
			<img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="35">
        </a>
		<a class="btn btn-danger" href="<?php echo $path->url.'controller/Logout.php'?>" class="nav-item nav-link">
			Logout
		</a>
	</div>
</nav> -->
<script>
	$(document).ready(function(){
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
	})
</script>
<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
  <a class="navbar-brand" href="profile.php">
    <img class="rounded-circle" src="<?php echo $path->url.'pic/chicken.png'?>" width="30" height="30" alt="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<form class="form-inline" method="post" action="profile_view.php" target="_blank">
			<div class="md-form my-0">
			
				<select class="selectpicker form-control mr-sm-2" id="live-search" data-live-search="true" name="live-search">
				</select>
			</div>
			<input class="btn btn-primary btn-md my-2 my-sm-0 ml-3" type="submit" value="SEARCH" name="search">
		</form>
	</div>  
  <div class="collapse navbar-collapse " id="navbar-list-4">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
				<img src="<?=$path->url_image.$user_data->user_picture ;?>" width="40" height="40" class="rounded-circle">
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="profile.php"><?php echo $user_data->user_name_tmp;?></a>
				<a class="dropdown-item" href="chat_view.php">Chat</a>
				<a class="dropdown-item" href="<?php echo $path->url.'controller/Logout.php'?>">Log out</a>
			</div>
      </li>   
    </ul>
  </div>
</nav>



                

