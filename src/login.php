<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<div class="login">
	<form method="post" action="../php/login.php">
		<p><input type="text" placeholder="登录" id="name" name="name" value="<?php echo $name; ?>"></p>
		<p><input type="email" placeholder="邮件" id="email" name="email" value="<?php echo $email; ?>"></p>
		<p><textarea name="commend" id="commend" cols="30" rows="10"> <?php echo $commend; ?></textarea></p>
		<p>
			<input type="radio" name="gender" <?php if(isset($gender) && $gender=="famale") echo "checked";?> value="famale" >男
			<input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") echo "checked";?> value="male">女
		</p>
		<input id="submit" type="submit"></form>
	</div>
	
	
	
<!--
	<script>
		window.onload=function()
		{
			var name=document.getElementById('name');
			var password=document.getElementById("password");
			var submit=document.getElementById("submit");
		}
		function login(){
			window.location.href="www.baidu.com";
		}
	</script>
-->
</body>
</html>