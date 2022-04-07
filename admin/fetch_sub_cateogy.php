<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/config/config.php";
include_once $filepath."/libraries/Database.php";
$db  = new  Database();

    if ($_POST['id']) {
        $id = $_POST['id'];
        $sql = "SELECT * FROM sub_category WHERE category_id=:id";
        $db->query($sql);
        $db->bind(':id', $id);
        $db->execute();
        $row = $db->resultSet();
    }
?>

<option value="" selected>Select Sub Category</option>
<?php
    if (isset($row)){
        foreach ($row as $item){?>
            <option value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
<?php        }
    }
?>
