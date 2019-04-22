<?php
    #-------------------------------------------------------------------------------
    #           Script to INSERT account on our database
    #-------------------------------------------------------------------------------

    $dsn = 'mysql:host=localhost;dbname=FinalProject';
    $username = 'super';
    $password = 'super';

    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $F_Name=$_POST['F_Name'];
    $L_Name=$_POST['L_Name'];
    $Phone=$_POST['Phone'];
    $Address=$_POST['Address'];

    try {
        $db = new PDO($dsn, $username, $password);
        #echo "PDO object created right";
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p> An error ocurred while connecting to the database: $error_message </p>";
    }

    $hash_password = password_hash($Password, PASSWORD_DEFAULT);
    $type = "Client"; // for clients only

    $query = "insert into USERR (Email, Pass, Type, F_Name, L_Name, Phone, Address)
                VALUES (:Email, :hash_password, :type, :F_Name, :L_Name, :Phone, :Address)";

    $statement = $db->prepare($query);
    $statement->bindValue(':Email', $Email);
    $statement->bindValue(':hash_password', $hash_password);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':F_Name', $F_Name);
    $statement->bindValue(':L_Name', $L_Name);
    $statement->bindValue(':Phone', $Phone);
    $statement->bindValue(':Address', $Address);
    $statement->execute();
    $statement->closeCursor();

    header("Location:index.php?");

    #echo "Account Created!!!!";



?>