<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="canonical" href="/account/login/">
	<title>Freedom Robotics Login</title>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/includes/jsincludes.php");
	includeJS("core:1.12.0", "", "", "", "", "", "1.6.16");
	?>
	<script type="text/javascript">
	WebFont.load({
		google: {
			families: ['Roboto:300:latin']
		}
	});
	</script>
	<link href="./content/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="content">
		<div id="login_text"><p>Login</p></div>
		<form action="./content/login.php" method="post">
			<div id="form">
				<div id="username">
					<input type="text" name="LoginID" class="inputBox" value="Username/Email" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
				</div>
				<div id="password">
					<input type="text" name="Password" class="inputBox" value="Password" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
				</div>
			</div>
			<div id="extras">
				<div id="error">This is a test error.</div>
				<div id="rememberBox"><input type="checkbox" name="rememberMe" value="remember"> Remember for 30 days</div>
				<div id="registerLinkDiv"><a href="/account/register" id="registerLink">Register?</a></div>
			</div>
			<div id="login_button"><input type="submit" value="Login"></div>
		</form>
	</div>
</body>
