<?php
$unErr = $fnErr = $ueErr = $upErr =$pwErr=$cpwErr=$genErr=$eduErr= "";
    $un=$fn=$ue=$up=$pw=$cpw=$gen=$edu="";
$successmessage="";
if (isset($_POST['btn'])) {
    if (empty($_POST["un"])) {
    	$unErr = "username is required";
     }
     else {
     $un = $_POST["un"];
      }

     if (empty($_POST["fn"])) {
    	$fnErr = "Fullname is required";
     }
     else {
     $fn = $_POST["fn"];
     }

 if (empty($_POST["ue"])) {
    	$ueErr = "email is required";
     }
     else {
     $ue = $_POST["ue"];
     if (!filter_var($ue, FILTER_VALIDATE_EMAIL)) {
      $ueErr = "Invalid email format";
    }
    }

     if (empty($_POST["up"])) {
    	$upErr = "Phone number is required";
     }
     else {
     $up = $_POST["up"];
     }

     if (empty($_POST["pw"])) {
    	$pwErr = "Password is required";
     }
     else {
     $pw = $_POST["pw"];
     }

     if (empty($_POST["cpw"])) {
    	$cpwErr = "Confirmed Password is required";
     }
     else {
     $pw = $_POST["cpw"];
     }

     if (empty($_POST["gen"])) {
    	$genErr = "Confirmed Password is required";
     }
     else {
     $gen = $_POST["gen"];
     }

      if (empty($_POST["gen"])) {
    	$genErr = "Gender is required";
     }
     else {
     $gen = $_POST["gen"];
     }


     if (empty($_POST["edu"])) {
    	$eduErr = "Education is required";
     }
     else {
     $edu = $_POST["edu"];
     }
	 if(!empty($un) && !empty($pw)){
		 $successmessage="Successfully registerd please login";
	 }
	setcookie('username',$un,time()+60*60*7);
	setcookie('password',$pw,time()+60*60*7);
	setcookie('fullname',$fn,time()+60*60*7);

  }

?>

<!DOCTYPE html>
<html>
    <head>

        <title>Home| Personal_ information</title>
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
                <td height="400" valign="middle"  colspan="3" align="center"> 
                   
			<form name="application" method="post" action="">
			<table align="center" >
			<p><?php echo $successmessage; ?></p>
				<tr>
					<td>
					username :
					</td>
					<td>
					 <input type ="text" name ="un"/><span class="error">* <?php echo $unErr;?></span>
					</td>
				</tr>
				<tr>
					<td>
					Fullname :
					</td>
					<td>
					 <input type ="text" name ="fn"/><span class="error">* <?php echo $fnErr;?></span>
					</td>
				</tr>
				<tr>
					<td>
					Email :
					</td>
					<td>
					 <input type ="text" name ="ue"/><span class="error">* <?php echo $ueErr;?></span>
					</td>
				</tr>
				<tr>
					<td>
					Phone :
					</td>
					<td>
					 <input type ="text" name ="up"/><span class="error">* <?php echo $upErr;?></span>
					</td>
				</tr>
				<tr>
					<td>
					Password :
					</td>
					<td>
					 <input type ="password" name ="pw"/><span class="error">* <?php echo $pwErr;?></span>
					</td>
				</tr>
				<tr>
					<td>
					Confirm Password :
					</td>
					<td>
					 <input type ="password" name ="cpw"/><span class="error">* <?php echo $cpwErr;?></span>
					</td>
				</tr>
				<tr>
				<tr>
					<td>
					Gender :
					</td>
					<td>
					 <input type ="radio" name ="gen" value="Male"/>Male
					 <input type ="radio" name ="gen" value="Female"/>Female
					 <input type ="radio" name ="gen" value="Other"/>Other
					 <span class="error">* <?php echo $genErr;?></span>
					</td>
				</tr>
				<tr>
					<td>
					Education :
					</td>
					<td>
					 <input type="checkbox" name="edu[]" value="SSC">SSC
					 <input type="checkbox" name="edu[]" value="HSC">HSC
					 <input type="checkbox" name="edu[]" value="BSC">BSC
					 <input type="checkbox" name="edu[]" value="MSC">MSC
					 <span class="error">* <?php echo $eduErr;?></span>
					</td>
				</tr>
				<tr>
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
