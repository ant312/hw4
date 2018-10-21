<?php
session_start();
?>
<html>
    <head>

        <title>Home|Personal_information </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body bgcolor="#C0C0C0">
        <table border="1" width="980" align="center" cellpadding="5" >         
            <tr>
                <td height="80" width="90" colspan="3" align="center">
                <h1>Dashoboard</h1>
				<span><a style="float:right;" href="Logout.php">Logout</a></span>
                </td>
            </tr>
            
            <tr>               
                <td height="400" colspan="3" valign="top">
                    <h1 style="text-align:center;margin-top:150px;">Welcome <?php if (isset($_SESSION['fullname'])) {echo $_SESSION['fullname'];
                        # code...
                    ?><?php } ?>
                        
                    </h1>
                </td>
                
            </tr>
            
        </table>
        
        
    </body>
</html>
