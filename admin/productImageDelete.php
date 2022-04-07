<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/config/config.php";
include_once $filepath."/libraries/Database.php";
$db = new Database();

      if (isset($_GET['id']) && ($_GET['productId'])) {
          $id = trim($_GET['id']);
          $productId = trim($_GET['productId']);
          $select = "SELECT * FROM product_images WHERE id=:id";
          $db->query($select);
          $db->bind(':id',$id);
          $db->execute();
         $row = $db->single();
         if ($row){
             unlink('uploads/products/'.$row->product_image);
         }

         /*delete this record*/
          $select = "DELETE FROM product_images WHERE id=:id";
          $db->query($select);
          $db->bind(':id',$id);

            if ( $db->execute()){
                header('location:productImage.php?id='.$productId);
            }

      }

