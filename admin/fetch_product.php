<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/config/config.php";
include_once $filepath."/libraries/Database.php";
$db  = new  Database();

    if ($_POST['id']) {
        $id   = $_POST['id'];

        $sql = "SELECT id,product_name,price,feature_image FROM product WHERE id=:id";
        $db->query($sql);
        $db->bind(':id', $id);
        $db->execute();
        $row = $db->singleArrayValue();
       echo json_encode($row);
    }
?>

