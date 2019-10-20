<?php

session_start();

if(isset($_POST['submit']))
{
	$id = $_POST["id"];
$pword = $_POST["pword"];
$pword2 = $_POST["pword2"];
$name = $_POST["name"];
$users = $_POST["users"];

$m = "REGISTRATION Complete";

 if(!empty ($id) == true || !empty ($pword) == true || !empty ($pword2) == true || !empty ($name) == true || !empty ($users) == true )
 {
	 $myfiles = fopen('user.txt','a+');
	 $data= fwrite($myfiles,"$id"."||"."$pword"."||"."$pword2"."||"."$name"."||"."$users");
	 $user=explode("   ",$data);
	 setcookie('user',$user,time()+3600);	
	 fclose($user);
	 
	 
	 
	 
 }
 
}
else
{ $m=  "";}

	
?>

<html>
<head>
	<title>Mini Project</title>
</head>
<body>
<?= $m ?>
	<form method="post" >
		<fieldset>
			<legend><b>REGISTRATION</b></legend>
			<table border="0" >
				<tr> 
					<td>Id:</td> 
					
				</tr>
				
				<tr>
					<td><input type="text" name="id"> </td>
				</tr>
				
				
					
				<tr>	
					<td>Password:</td>
				</tr>
				
				<tr><td><input type="password" name="pword"></td></tr>
				<tr><td>Confirm Password</td></tr>
				<tr><td><input type="password" name="pword2"></td></tr>
				<tr><td>Name</td></tr>
				<tr><td><input type="name" name="name"></td></tr>
				<tr>
					<td>User Type</td>
					
				</tr>
				<tr><td><p>---------------</p></td></tr>
				<tr><td><input type="radio" name="users" value="User"/> User
						<input type="radio" name="users" value="Admin"/> Admin </td></tr>
				
				
					
				<tr>
				
					<td>
						<input type="submit" name="submit" value="Submit">
						
					</td>
					
					<td><a href="login.php">Sign in </a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
