<?php
$errorlgin="";
if (isset($_POST['btn'])) {
    if(isset($_COOKIE['username'])) {
     $username=$_COOKIE['username'];
	 $password=$_COOKIE['password'];
	 $fullname=$_COOKIE['fullname'];
	if($_POST['un']==$username && $_POST['pw']==$password){ 
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['fullname']=$fullname;
	    header('Location: Dashboard.php');
	}

	if (empty($_POST['un']) && empty($_POST['pw'])) {
		$errorlgin="username && password is required";
	}
	else{
		$errorlgin="Your username and password is wrong";
	}
 }
}
?>


<!DOCTYPE html>
<html>
<head>
   <title>Home page ! Personal information</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body bgcolor="#C0C0C0">
    <table border="1" width="980" align="center" cellpadding="5">         
        <tr>
            <td height="80" width="90" colspan="3" align="center">
            <h1>Home page of Antora</h1>
            </td>
        </tr>
        <tr>
            <td height="40" align="right" colspan="4" >
            <big><b> <a href="index.php" >Introduction</a> </b></big>|
            <big> <a href="Education.php" >Education</a></big> |
            <big> <a href="Project.php" >Project</a></big> |
            <big> <a href="Contact.php" >Contacts</a></big> |
			<big> <a href="Registation.php">Registation</a></big>|
			<big> <a href="Login.php">Login</a></big>
            </td>
         </tr>
         <tr>            
             <td  height="400" valign="middle"  colspan="3" align="center"> 
                     <p style="margin-left: 150px;"><?php echo $errorlgin; ?></p>
              <form name="application" method="post" action="">
              <table align="center" >
    	     
	<tr>
		<td>
		username :
		</td>
		<td>
		 <input type ="text" name ="un"/>
		</td>
	</tr>
	<tr>
		<td>
		Password :
		</td>
		<td>
		 <input type ="password" name ="pw"/>
		</td>
	</tr>
	<tr>
		<td>
		
		</td>
		<td>
		<input type="submit" name="btn" value="Submit">
		</td>
	</tr>


</table>
</form>
</td>
 </tr>
 </table>    
 </body>
</html>
