	<?php
	/*	$con = mysql_connect("localhost","root","Onlybiao4079");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("mywebstore",$con);
		$result=mysql_query("SELECT * FROM admin");
		$name1=$_POST['name'];
		$pwd1=$_POST['password'];
		while($row=mysql_fetch_array($result)){
			$name=$row['userName'];
			$pwd=$row['passWord'];
		}
		$num1=1.234;
		var_dump($num1);
		
		define("BIG","this is big book",false);
		echo BIG;
		$i=30;
		if($i>"20"){
			echo "<";
		}elseif($i<"10"){
			echo ">";
		}else{
			echo "=";
		}


		$color=["green","red","blue"];
		echo count($color);
		foreach($color as $value){
			echo "<br>$value<br>";//     .链接符
		}


		//关联数组
		$color['color']="green";
		$color['color1']="red";
		$color['color2']="blue";

		echo $color['color2'];
*/

		$nameErr=$emailErr=$genderErr="";
		$name=$email=$gender=$comment="";
		
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(empty($_POST["name"])){
				$nameErr="姓名是必填的";
			}else{
				if(!preg_match("/^[a-zA-Z ]*$/",$name)){
					$nameErr="只允许字母和空格";
				}else{
					$name=test_input($_POST["name"]);
				}
			}
			
			if(empty($_POST["email"])){
				$emailErr="邮件是必填的";
			}else{
				$email=test_input($_POST["email"]);
				if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
					$emailErr="无效的邮件格式";
				}
			}
			
			if(empty($_POST["comment"])){
				$commed="";
			}else{
				$commed=test_input($_POST["commend"]);
			}
			
			
			if(empty($_POST["gender"])){
				$genderErr="性别是必选的";
			}else{
				$gender=test_input($_POST["gender"]);
			}
		}

			function test_input($data){
				$data=trim($data);
				$data=stripslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			
			}
		echo date('y/m/d');











































	?>