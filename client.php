<?php
    session_start();
?>
<?php if ($_SESSION['is_valid_user'] && $_SESSION['userType'] == 'Client') { ?>
    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Front Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
<body>
    <div class="top">
        <table align="center">
            <tr>
                <td align="center" width="400"><img src="Images/santilogo2.png" width="350" height="100"></td>
                <td width="800" align="center" >
                    <h1>Sports Supply | Client </h1>
                </td>   
                <td >
                     <h2>Phone: (555)555-5555</h2> 
                     <h2>Address: 2 Central Ave, New Jersey.</h2>
                </td>
            </tr>            
        </table>
        
    </div>
    <br>
    
    <h2 align="right"> Hi <?php echo $_SESSION['userName']; ?> 
    | 
    <a href="cart.php"><img src="Images/cart2.png" width="30" height="30"></a> 
    |
    <a href="Logout.php"><button class="register" type="button">Log Out</button></a>
    </h2>
    



</body>
</html>

<?php } 
    else{
        header("Location:index.php");
    }
?>