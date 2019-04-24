<?php
    require('database.php');
    require('functions.php');

$product_id = filter_input(INPUT_POST, 'Product_ID', 
            FILTER_VALIDATE_INT);

echo $product_id;
    if ($product_id == NULL || $product_id == FALSE) {
        $error = "Missing or incorrect product id or category id.";
        echo $error;
        #include('../errors/error.php');
    } else { 
        global $db;

    #$query = 'DELETE FROM product
              #WHERE Product_ID = :product_id';
    #$statement = $db->prepare($query);
    #$statement->bindValue(':product_id', $product_id);
    #$statement->execute();
    #$statement->closeCursor();
        delete_product($product_id);
        header("Location: admin.php?");
    }
?>