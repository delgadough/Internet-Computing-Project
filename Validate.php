<?php
    #-------------------------------------------------------------------------------
    #           Santiago Rivera
    #               Hw - 4
    #              4/13/2019
    #-------------------------------------------------------------------------------

    session_start();
    $dsn = 'mysql:host=localhost;dbname=FinalProject';
    $username = 'super';
    $password = 'super';

    $Email = $_POST['Email']; #to get the actual Email
    $pass = $_POST['pass'];

    try {
        $db = new PDO($dsn, $username, $password);
        #echo "PDO object created right";
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p> An error ocurred while connecting to the database: $error_message </p>";
    }

?>

<?php
    $query = "SELECT * FROM userr WHERE Email like" ."'".$Email."'";
    $statement = $db->prepare($query);
    #$statement->bindValue(':Email', $Email);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();

    #echo $Email;
    #echo $user['email'];
    $User_Password = $user['Pass'];
    $Name = $user['F_Name'];
    $Last_Name = $user['L_Name'];

?>

<?php
    if ($User_Password == $pass) { ?>
        <?php $_SESSION['is_valid_user'] = true; ?>
        <h1>Good job! <?php echo $Name." ".$Last_Name; ?>, Successfully login!!</h1>
<?php }
    else {
        $_SESSION['is_valid_user'] = false;
        header("Location:.?error=1");
    } ?>

