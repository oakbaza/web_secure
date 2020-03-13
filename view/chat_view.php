<!DOCTYPE html>
<html class=''>
	<head>
	<?php include_once('header.php'); ?>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<style class="cp-pen-styles">
	body {
	  display: block;
	  align-items: center;
	  justify-content: center;
	  min-height: 100vh;
	  background: #27ae60;
	  font-family: "proxima-nova", "Source Sans Pro", sans-serif;
	  font-size: 1em;
	  letter-spacing: 0.1px;
	  color: #32465a;
	  text-rendering: optimizeLegibility;
	  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
	  -webkit-font-smoothing: antialiased;
	}

	#frame {
	  width: 95%;
	  min-width: 360px;
	  max-width: 1000px;
	  height: 92vh;
	  min-height: 300px;
	  max-height: 720px;
	  background: #E6EAEA;
	}
	@media screen and (max-width: 360px) {
	  #frame {
		width: 100%;
		height: 100vh;
	  }
	}
	#frame #sidepanel {
	  float: left;
	  min-width: 280px;
	  max-width: 340px;
	  width: 40%;
	  height: 100%;
	  background: #2c3e50;
	  color: #f5f5f5;
	  overflow: hidden;
	  position: relative;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel {
		width: 58px;
		min-width: 58px;
	  }
	}
	#frame #sidepanel #profile {
	  width: 80%;
	  margin: 25px auto;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile {
		width: 100%;
		margin: 0 auto;
		padding: 5px 0 0 0;
		background: #32465a;
	  }
	}
	#frame #sidepanel #profile.expanded .wrap {
	  height: 210px;
	  line-height: initial;
	}
	#frame #sidepanel #profile.expanded .wrap p {
	  margin-top: 20px;
	}
	#frame #sidepanel #profile.expanded .wrap i.expand-button {
	  -moz-transform: scaleY(-1);
	  -o-transform: scaleY(-1);
	  -webkit-transform: scaleY(-1);
	  transform: scaleY(-1);
	  filter: FlipH;
	  -ms-filter: "FlipH";
	}
	#frame #sidepanel #profile .wrap {
	  height: 60px;
	  line-height: 60px;
	  overflow: hidden;
	  -moz-transition: 0.3s height ease;
	  -o-transition: 0.3s height ease;
	  -webkit-transition: 0.3s height ease;
	  transition: 0.3s height ease;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile .wrap {
		height: 55px;
	  }
	}
	#frame #sidepanel #profile .wrap img {
	  width: 50px;
	  border-radius: 50%;
	  padding: 3px;
	  border: 2px solid #e74c3c;
	  height: auto;
	  float: left;
	  cursor: pointer;
	  -moz-transition: 0.3s border ease;
	  -o-transition: 0.3s border ease;
	  -webkit-transition: 0.3s border ease;
	  transition: 0.3s border ease;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile .wrap img {
		width: 40px;
		margin-left: 4px;
	  }
	}
	#frame #sidepanel #profile .wrap img.online {
	  border: 2px solid #2ecc71;
	}
	#frame #sidepanel #profile .wrap img.away {
	  border: 2px solid #f1c40f;
	}
	#frame #sidepanel #profile .wrap img.busy {
	  border: 2px solid #e74c3c;
	}
	#frame #sidepanel #profile .wrap img.offline {
	  border: 2px solid #95a5a6;
	}
	#frame #sidepanel #profile .wrap p {
	  float: left;
	  margin-left: 15px;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile .wrap p {
		display: none;
	  }
	}
	#frame #sidepanel #profile .wrap i.expand-button {
	  float: right;
	  margin-top: 23px;
	  font-size: 0.8em;
	  cursor: pointer;
	  color: #435f7a;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile .wrap i.expand-button {
		display: none;
	  }
	}
	#frame #sidepanel #profile .wrap #status-options {
	  position: absolute;
	  opacity: 0;
	  visibility: hidden;
	  width: 150px;
	  margin: 70px 0 0 0;
	  border-radius: 6px;
	  z-index: 99;
	  line-height: initial;
	  background: #435f7a;
	  -moz-transition: 0.3s all ease;
	  -o-transition: 0.3s all ease;
	  -webkit-transition: 0.3s all ease;
	  transition: 0.3s all ease;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile .wrap #status-options {
		width: 58px;
		margin-top: 57px;
	  }
	}
	#frame #sidepanel #profile .wrap #status-options.active {
	  opacity: 1;
	  visibility: visible;
	  margin: 75px 0 0 0;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile .wrap #status-options.active {
		margin-top: 62px;
	  }
	}
	#frame #sidepanel #profile .wrap #status-options:before {
	  content: '';
	  position: absolute;
	  width: 0;
	  height: 0;
	  border-left: 6px solid transparent;
	  border-right: 6px solid transparent;
	  border-bottom: 8px solid #435f7a;
	  margin: -8px 0 0 24px;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile .wrap #status-options:before {
		margin-left: 23px;
	  }
	}
	#frame #sidepanel #profile .wrap #status-options ul {
	  overflow: hidden;
	  border-radius: 6px;
	}
	#frame #sidepanel #profile .wrap #status-options ul li {
	  padding: 15px 0 30px 18px;
	  display: block;
	  cursor: pointer;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile .wrap #status-options ul li {
		padding: 15px 0 35px 22px;
	  }
	}
	#frame #sidepanel #profile .wrap #status-options ul li:hover {
	  background: #496886;
	}
	#frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
	  position: absolute;
	  width: 10px;
	  height: 10px;
	  border-radius: 50%;
	  margin: 5px 0 0 0;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
		width: 14px;
		height: 14px;
	  }
	}
	#frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
	  content: '';
	  position: absolute;
	  width: 14px;
	  height: 14px;
	  margin: -3px 0 0 -3px;
	  background: transparent;
	  border-radius: 50%;
	  z-index: 0;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
		height: 18px;
		width: 18px;
	  }
	}
	#frame #sidepanel #profile .wrap #status-options ul li p {
	  padding-left: 12px;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #profile .wrap #status-options ul li p {
		display: none;
	  }
	}
	#frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
	  background: #2ecc71;
	}
	#frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
	  border: 1px solid #2ecc71;
	}
	#frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
	  background: #f1c40f;
	}
	#frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
	  border: 1px solid #f1c40f;
	}
	#frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
	  background: #e74c3c;
	}
	#frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
	  border: 1px solid #e74c3c;
	}
	#frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
	  background: #95a5a6;
	}
	#frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
	  border: 1px solid #95a5a6;
	}
	#frame #sidepanel #profile .wrap #expanded {
	  padding: 100px 0 0 0;
	  display: block;
	  line-height: initial !important;
	}
	#frame #sidepanel #profile .wrap #expanded label {
	  float: left;
	  clear: both;
	  margin: 0 8px 5px 0;
	  padding: 5px 0;
	}
	#frame #sidepanel #profile .wrap #expanded input {
	  border: none;
	  margin-bottom: 6px;
	  background: #32465a;
	  border-radius: 3px;
	  color: #f5f5f5;
	  padding: 7px;
	  width: calc(100% - 43px);
	}
	#frame #sidepanel #profile .wrap #expanded input:focus {
	  outline: none;
	  background: #435f7a;
	}
	#frame #sidepanel #search {
	  border-top: 1px solid #32465a;
	  border-bottom: 1px solid #32465a;
	  font-weight: 300;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #search {
		display: none;
	  }
	}
	#frame #sidepanel #search label {
	  position: absolute;
	  margin: 10px 0 0 20px;
	}
	#frame #sidepanel #search input {
	  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
	  padding: 10px 0 10px 46px;
	  width: calc(100% - 25px);
	  border: none;
	  background: #32465a;
	  color: #f5f5f5;
	}
	#frame #sidepanel #search input:focus {
	  outline: none;
	  background: #435f7a;
	}
	#frame #sidepanel #search input::-webkit-input-placeholder {
	  color: #f5f5f5;
	}
	#frame #sidepanel #search input::-moz-placeholder {
	  color: #f5f5f5;
	}
	#frame #sidepanel #search input:-ms-input-placeholder {
	  color: #f5f5f5;
	}
	#frame #sidepanel #search input:-moz-placeholder {
	  color: #f5f5f5;
	}
	#frame #sidepanel #contacts {
	  height: calc(100% - 177px);
	  overflow-y: scroll;
	  overflow-x: hidden;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #contacts {
		height: calc(100% - 149px);
		overflow-y: scroll;
		overflow-x: hidden;
	  }
	  #frame #sidepanel #contacts::-webkit-scrollbar {
		display: none;
	  }
	}
	#frame #sidepanel #contacts.expanded {
	  height: calc(100% - 334px);
	}
	#frame #sidepanel #contacts::-webkit-scrollbar {
	  width: 8px;
	  background: #2c3e50;
	}
	#frame #sidepanel #contacts::-webkit-scrollbar-thumb {
	  background-color: #243140;
	}
	#frame #sidepanel #contacts ul li.contact {
	  position: relative;
	  padding: 10px 0 15px 0;
	  font-size: 0.9em;
	  cursor: pointer;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #contacts ul li.contact {
		padding: 6px 0 46px 8px;
	  }
	}
	#frame #sidepanel #contacts ul li.contact:hover {
	  background: #32465a;
	}
	#frame #sidepanel #contacts ul li.contact.active {
	  background: #32465a;
	  border-right: 5px solid #435f7a;
	}
	#frame #sidepanel #contacts ul li.contact.active span.contact-status {
	  border: 2px solid #32465a !important;
	}
	#frame #sidepanel #contacts ul li.contact .wrap {
	  width: 88%;
	  margin: 0 auto;
	  position: relative;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #contacts ul li.contact .wrap {
		width: 100%;
	  }
	}
	#frame #sidepanel #contacts ul li.contact .wrap span {
	  position: absolute;
	  left: 0;
	  margin: -2px 0 0 -2px;
	  width: 10px;
	  height: 10px;
	  border-radius: 50%;
	  border: 2px solid #2c3e50;
	  background: #95a5a6;
	}
	#frame #sidepanel #contacts ul li.contact .wrap span.online {
	  background: #2ecc71;
	}
	#frame #sidepanel #contacts ul li.contact .wrap span.away {
	  background: #f1c40f;
	}
	#frame #sidepanel #contacts ul li.contact .wrap span.busy {
	  background: #e74c3c;
	}
	#frame #sidepanel #contacts ul li.contact .wrap img {
	  width: 40px;
	  border-radius: 50%;
	  float: left;
	  margin-right: 10px;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #contacts ul li.contact .wrap img {
		margin-right: 0px;
	  }
	}
	#frame #sidepanel #contacts ul li.contact .wrap .meta {
	  padding: 5px 0 0 0;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #contacts ul li.contact .wrap .meta {
		display: none;
	  }
	}
	#frame #sidepanel #contacts ul li.contact .wrap .meta .name {
	  font-weight: 600;
	}
	#frame #sidepanel #contacts ul li.contact .wrap .meta .preview {
	  margin: 5px 0 0 0;
	  padding: 0 0 1px;
	  font-weight: 400;
	  white-space: nowrap;
	  overflow: hidden;
	  text-overflow: ellipsis;
	  -moz-transition: 1s all ease;
	  -o-transition: 1s all ease;
	  -webkit-transition: 1s all ease;
	  transition: 1s all ease;
	}
	#frame #sidepanel #contacts ul li.contact .wrap .meta .preview span {
	  position: initial;
	  border-radius: initial;
	  background: none;
	  border: none;
	  padding: 0 2px 0 0;
	  margin: 0 0 0 1px;
	  opacity: .5;
	}
	#frame #sidepanel #bottom-bar {
	  position: absolute;
	  width: 100%;
	  bottom: 0;
	}
	#frame #sidepanel #bottom-bar button {
	  float: left;
	  border: none;
	  width: 50%;
	  padding: 10px 0;
	  background: #32465a;
	  color: #f5f5f5;
	  cursor: pointer;
	  font-size: 0.85em;
	  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #bottom-bar button {
		float: none;
		width: 100%;
		padding: 15px 0;
	  }
	}
	#frame #sidepanel #bottom-bar button:focus {
	  outline: none;
	}
	#frame #sidepanel #bottom-bar button:nth-child(1) {
	  border-right: 1px solid #2c3e50;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #bottom-bar button:nth-child(1) {
		border-right: none;
		border-bottom: 1px solid #2c3e50;
	  }
	}
	#frame #sidepanel #bottom-bar button:hover {
	  background: #435f7a;
	}
	#frame #sidepanel #bottom-bar button i {
	  margin-right: 3px;
	  font-size: 1em;
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #bottom-bar button i {
		font-size: 1.3em;
	  }
	}
	@media screen and (max-width: 735px) {
	  #frame #sidepanel #bottom-bar button span {
		display: none;
	  }
	}
	#frame .content {
	  float: right;
	  width: 60%;
	  height: 100%;
	  overflow: hidden;
	  position: relative;
	}
	@media screen and (max-width: 735px) {
	  #frame .content {
		width: calc(100% - 58px);
		min-width: 300px !important;
	  }
	}
	@media screen and (min-width: 900px) {
	  #frame .content {
		width: calc(100% - 340px);
	  }
	}
	#frame .content .contact-profile {
	  width: 100%;
	  height: 60px;
	  line-height: 60px;
	  background: #f5f5f5;
	}
	#frame .content .contact-profile img {
	  width: 40px;
	  border-radius: 50%;
	  float: left;
	  margin: 9px 12px 0 9px;
	}
	#frame .content .contact-profile p {
	  float: left;
	}
	#frame .content .contact-profile .social-media {
	  float: right;
	}
	#frame .content .contact-profile .social-media i {
	  margin-left: 14px;
	  cursor: pointer;
	}
	#frame .content .contact-profile .social-media i:nth-last-child(1) {
	  margin-right: 20px;
	}
	#frame .content .contact-profile .social-media i:hover {
	  color: #435f7a;
	}
	#frame .content .messages {
	  height: auto;
	  min-height: calc(100% - 93px);
	  max-height: calc(100% - 93px);
	  overflow-y: scroll;
	  overflow-x: hidden;
	}
	@media screen and (max-width: 735px) {
	  #frame .content .messages {
		max-height: calc(100% - 105px);
	  }
	}
	#frame .content .messages::-webkit-scrollbar {
	  width: 8px;
	  background: transparent;
	}
	#frame .content .messages::-webkit-scrollbar-thumb {
	  background-color: rgba(0, 0, 0, 0.3);
	}
	#frame .content .messages ul li {
	  display: inline-block;
	  clear: both;
	  float: left;
	  margin: 15px 15px 5px 15px;
	  width: calc(100% - 25px);
	  font-size: 0.9em;
	}
	#frame .content .messages ul li:nth-last-child(1) {
	  margin-bottom: 20px;
	}
	#frame .content .messages ul li.replies img {
	  margin: 6px 8px 0 0;
	}
	#frame .content .messages ul li.replies p {
	  background: #f5f5f5;
	}
	#frame .content .messages ul li.sent img {
	  float: right;
	  margin: 6px 0 0 8px;
	}
	#frame .content .messages ul li.sent p {
	  background: #435f7a;
	  color: #f5f5f5;
	  float: right;
	}
	#frame .content .messages ul li img {
	  width: 22px;
	  border-radius: 50%;
	  float: left;
	}
	#frame .content .messages ul li p {
	  display: inline-block;
	  padding: 10px 15px;
	  border-radius: 20px;
	  max-width: 205px;
	  line-height: 130%;
	}
	@media screen and (min-width: 735px) {
	  #frame .content .messages ul li p {
		max-width: 300px;
	  }
	}
	#frame .content .message-input {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  z-index: 99;
	}
	#frame .content .message-input .wrap {
	  position: relative;
	}
	#frame .content .message-input .wrap input {
	  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
	  float: left;
	  border: none;
	  width: calc(100% - 90px);
	  padding: 11px 32px 10px 8px;
	  font-size: 0.8em;
	  color: #32465a;
	}
	@media screen and (max-width: 735px) {
	  #frame .content .message-input .wrap input {
		padding: 15px 32px 16px 8px;
	  }
	}
	#frame .content .message-input .wrap input:focus {
	  outline: none;
	}
	#frame .content .message-input .wrap .attachment {
	  position: absolute;
	  right: 60px;
	  z-index: 4;
	  margin-top: 10px;
	  font-size: 1.1em;
	  color: #435f7a;
	  opacity: .5;
	  cursor: pointer;
	}
	@media screen and (max-width: 735px) {
	  #frame .content .message-input .wrap .attachment {
		margin-top: 17px;
		right: 65px;
	  }
	}
	#frame .content .message-input .wrap .attachment:hover {
	  opacity: 1;
	}
	#frame .content .message-input .wrap button {
	  float: right;
	  border: none;
	  width: 50px;
	  padding: 12px 0;
	  cursor: pointer;
	  background: #32465a;
	  color: #f5f5f5;
	}
	@media screen and (max-width: 735px) {
	  #frame .content .message-input .wrap button {
		padding: 16px 0;
	  }
	}
	#frame .content .message-input .wrap button:hover {
	  background: #435f7a;
	}
	#frame .content .message-input .wrap button:focus {
	  outline: none;
	}
	</style>
</head>
<body>
<!-- 

A concept for a chat interface. 

Try writing a new message! :)


Follow me here:
Twitter: https://twitter.com/thatguyemil
Codepen: https://codepen.io/emilcarlsson/
Website: http://emilcarlsson.se/

-->
<div class="container">
<div id="frame">
	<div id="sidepanel">
		<div id="profile">
			<div class="wrap">
				<img id="profile-img" src="<?php echo $path->url_image.$user_data->user_picture?>" class="online" alt="" />
				<p><?php echo $user_data->user_name_tmp?></p>
			</div>
		</div>
		<div id="search">
			<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
			<input type="text" placeholder="Search contacts..." />
		</div>
		<div id="contacts">
			<ul id="results">
				<!-- Friend list-->
			</ul>
		</div>
	</div>
	<div class="content">
		<div class="contact-profile">
			<img src="" alt="" />
			<p></p>
		</div>
		<div class="messages">
			<ul>
			</ul>
		</div>
		<div class="message-input">
			<div class="wrap">
			<input type="text" placeholder="Write your message..." />
			<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
			<button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>
</div>
<script >
	$(document).ready(function(){
		var user_chat_data;
		var first_load = true;
		$(".messages").animate({ scrollTop: $(document).height() }, "fast");

		function clearSearch(){
			$("li.contact").remove()
		}

		function createFriendList(data){
			let picture_path = "<?php echo $path->url_image?>"
			clearSearch()
			for(let i = 0;i < data.length;i++){
				person = '<li class="contact" data-id="'+data[i].user_id+'">' +
						 '<div class="wrap">' +
							'<span class="contact-status online"></span>'+
							'<img src="'+picture_path+data[i].user_picture+'" alt="" />'+
							'<div class="meta">' +
								'<p class="name">'+data[i].user_fname+' '+data[i].user_lname+'</p>' +
								'<p class="preview">'+data[i].user_name_tmp+'</p>' +
							'</div>' +
						'</div>' +
					'</li>'
				$(person).appendTo("#contacts ul")
			}
		}
		
		function createChat(data){
			console.log(data)
			for(let i = 0; i < data.length; i++){
				if(data[i].chat_sender == '<?php echo $_SESSION['user_id']?>'){
					$('<li class="sent"><img src="'+'<?php echo $path->url_image.$user_data->user_picture?>'+'" alt="" /><p>' + data[i].chat_message + '</p></li>').appendTo($('.messages ul'));
				}else if(data[i].chat_sender == user_chat_data.user_id){
					$('<li class="replies"><img src="'+'<?php echo $path->url_image?>'+user_chat_data.user_picture+'" alt="" /><p>' + data[i].chat_message + '</p></li>').appendTo($('.messages ul'));
				}
			}
			//$('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
			//$('.message-input input').val(null);
			//$('.contact.active .preview').html('<span>You: </span>' + message);
			//$(".messages").animate({ scrollTop: $(document).height() }, "fast");
		}
		
		function load_chat(user_data){
			$('.messages ul').html("")
			let picture_path = "<?php echo $path->url_image?>"
			$("div.contact-profile img").attr("src",picture_path+user_data.user_picture)
			$("div.contact-profile p").text(user_data.user_fname+" "+user_data.user_lname)
			$.ajax({
				url:"<?php echo $path->url;?>" + "controller/Api.php",
				dataType:'json',
				type:'post',
				data:{
					'load_message':true,
					'chat_sender':'<?php echo $_SESSION['user_id']?>',
					'chat_reciever':user_data.user_id
				},
				success:function(result){
					createChat(result)	
				}
			})
		}

		
		/** SEARCH CHAT**/
		$("#search input").keyup(function(){
			$.ajax({
				url:"<?php echo $path->url;?>" + "controller/Api.php",
				dataType:'json',
				type:'post',
				data:{
					'search':true,
					'keyword':this.value
				},
				success: function(result){
				  if(result.length > 0){
					console.log("success")
					createFriendList(result)
				  }else{
					console.log("failed")
				  }
				}
			});
		})
		/** SEARCH CHAT**/
		
		/** Select chat**/
		$("#results").on("click", ".contact", function(event){
			//console.log(this.dataset.id);
			user_chat = this.dataset.id
			$.ajax({
				url:"<?php echo $path->url;?>" + "controller/Api.php",
				dataType:'json',
				type:'get',
				data:{
					'userid':user_chat
				},
				success:function(result){
					user_chat_data = result
					load_chat(user_chat_data)
				}
			})
		});
		/** Select chat**/
		

		
		/** send message **/
		function newMessage() {
			message = $(".message-input input").val();
			if($.trim(message) == '') {
				return false;
			}
			
			$.ajax({
				url:"<?php echo $path->url;?>" + "controller/Api.php",
				dataType:'json',
				type:'post',
				data:{
					'send_message':true,
					'chat_message':message,
					'chat_sender':'<?php echo $_SESSION['user_id']?>',
					'chat_reciever':user_chat_data.user_id
				},
				success:function(result){
					load_chat(user_chat_data)
					//$('<li class="sent"><img src="<?php echo $path->url_image.$user_data->user_picture?>" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
					//$('.message-input input').val(null);
					//$('.contact.active .preview').html('<span>You: </span>' + message);
					//$(".messages").animate({ scrollTop: $(document).height() }, "fast");
				}
			})
			
		};
		
		$('.submit').click(function() {
		  newMessage();
		});

		$(window).on('keydown', function(e) {
		  if (e.which == 13) {
			newMessage();
			return false;
		  }
		});
		/** send message **/

	}) //document ready


//# sourceURL=pen.js
</script>
</body></html>