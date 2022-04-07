<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/config/config.php";
include_once $filepath."/libraries/Database.php";
$db = new Database();

if (isset($_POST['productId'])) {

    $productId = trim($_POST['productId']);

    $select = "SELECT id,feature_image FROM product WHERE id=:productId";
    $db->query($select);
    $db->bind(':productId',$productId);
    $db->execute();
    $row = $db->single();
    if ($row){
        unlink($row->feature_image);
    }

        /*delete this record*/
    $select = "SELECT * FROM product_images WHERE product_id=:productId";
    $db->query($select);
    $db->bind(':productId',$productId);
    $db->execute();
    $productImages = $db->resultSet();
    if ($productImages !=null){
        foreach ($productImages as $productImage){
            unlink('uploads/products/'.$productImage->product_image);
        }
    }

    /*delete product record*/
    $select = "DELETE FROM product WHERE id=:productId";
    $db->query($select);
    $db->bind(':productId',$productId);
    if ( $db->execute()){
        header('location:productIndex.php');
    }

}

