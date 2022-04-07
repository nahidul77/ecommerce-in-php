<?php

class Product
{
    use SlugHelper, Notify;
    private $db;
    public function __construct()
    {
        $this->db = new  Database();
    }

    public function index()
    {
        $sql = "SELECT product.id,product.product_name,product.price,product.quantity,product.is_featured,product.status, category.name as categoryName,sub_category.name as subCategoryName,brand.name as brandName FROM product INNER JOIN category ON product.category_id=category.id INNER JOIN sub_category ON product.sub_category_id=sub_category.id INNER JOIN brand ON product.brand_id=brand.id ORDER BY product.id;";
        $this->db->query($sql);
        $this->db->execute();
        return   $this->db->resultSet();
    }
    public function store($data, $imageData)
    {
        try {
            $featureImageName     = $_FILES['feature_image']['name'];
            $featureImageTmpName  = $_FILES['feature_image']['tmp_name'];

            $ext        = strtolower(pathinfo($featureImageName, PATHINFO_EXTENSION));
            $newImage   = time() . '-' . uniqid() . '.' . $ext;
            $uploadDir  = "uploads/products/";
            $uploadFeatureImage = $uploadDir . $newImage;
            move_uploaded_file($featureImageTmpName, $uploadFeatureImage);

            $sql = "INSERT INTO product(category_id, sub_category_id,brand_id,product_name,slug,short_description,description,price,discount,discount_price,quantity,feature_image,is_featured,status )VALUES(:categoryId,:subCategoryId,:brandId,:productName,:slug,:short_description,:description,:price,:discount,:discount_price,:quantity,:feature_image,:is_featured,:status)";

            $this->db->query($sql);
            $this->db->bind(':categoryId', $data['category']);
            $this->db->bind(':subCategoryId', $data['sub_category']);
            $this->db->bind(':brandId', $data['brand']);
            $this->db->bind(':productName', $data['product_name']);
            $this->db->bind(':slug', $data['product_slug']);
            $this->db->bind(':short_description', $data['short_description']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':discount', $data['discount']);
            $this->db->bind(':discount_price', $data['discount_price']);
            $this->db->bind(':quantity', $data['quantity']);
            $this->db->bind(':feature_image', $uploadFeatureImage);
            $this->db->bind(':is_featured', $data['is_featured']);
            $this->db->bind(':status', $data['status']);
            $this->db->execute();

            $productLastId = $this->db->lastId();

            $extension = array('jpeg', 'jpg', 'png');

            foreach ($_FILES['product_images']['tmp_name'] as $key => $value) {

                $filename       = $_FILES['product_images']['name'][$key];
                $filename_tmp   = $_FILES['product_images']['tmp_name'][$key];
                // echo '<br>';
                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                $finalimg = '';
                if (in_array($ext, $extension)) {
                    if (!file_exists($uploadDir . $filename)) {
                        move_uploaded_file($filename_tmp, $uploadDir . $filename);
                        $finalimg = $filename;
                    } else {
                        $filename = str_replace('.', '-', basename($filename, $ext));
                        $newfilename = $filename . time() . "." . $ext;
                        move_uploaded_file($filename_tmp, $uploadDir . $newfilename);
                        $finalimg = $newfilename;
                    }

                    $sql = "INSERT INTO product_images(product_id,product_image) VALUES (:productId,:productImage)";
                    $this->db->query($sql);
                    $this->db->bind(':productId', $productLastId);
                    $this->db->bind(':productImage', $finalimg);
                    $this->db->execute();
                } else {
                    return $this->notifyError('Only jpg,png & jpeg file allow');
                }
            }

            if ($productLastId) {
                return $this->notifySuccess('Product Insert Successfully');
            } else {
                return $this->notifyError('Product Insert Failed');
            }
        } catch (PDOException $exception) {

            return $exception->getMessage();
        }
    }

    public function show($id)
    {
        $sql = "SELECT product.*, category.name as categoryName,sub_category.name as subCategoryName,brand.name as brandName FROM product INNER JOIN category ON product.category_id=category.id INNER JOIN sub_category ON product.sub_category_id=sub_category.id INNER JOIN brand ON product.brand_id=brand.id WHERE product.id=:productId";
        $this->db->query($sql);
        $this->db->bind(':productId', $id);
        $this->db->execute();
        return   $this->db->single();
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM product WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return   $this->db->single();
    }

    public function udpate($data)
    {
        try {



            $sql = "UPDATE product SET category_id=:categoryId, sub_category_id=:subCategoryId,brand_id=:brandId,product_name=:productName,slug=:slug,short_description=:short_description,description=:description,price=:price,discount=:discount,discount_price=:discount_price,quantity=:quantity,feature_image=:feature_image,is_featured=:is_featured,status=:status WHERE id=:productId";

            $this->db->query($sql);
            $this->db->bind(':productId', $data['productId']);
            $this->db->bind(':categoryId', $data['category']);
            $this->db->bind(':subCategoryId', $data['sub_category']);
            $this->db->bind(':brandId', $data['brand']);
            $this->db->bind(':productName', $data['product_name']);
            $this->db->bind(':slug', $data['product_slug']);
            $this->db->bind(':short_description', $data['short_description']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':price', $data['price']);

            if ($data['discount']) {
                $this->db->bind(':discount', $data['discount']);
            } else {
                $this->db->bind(':discount', NULL);
            }
            if ($data['discount_price']) {
                $this->db->bind(':discount_price', $data['discount_price']);
            } else {
                $this->db->bind(':discount_price', NULL);
            }

            $this->db->bind(':quantity', $data['quantity']);
            $this->db->bind(':feature_image', $data['feature_image']);
            $this->db->bind(':is_featured', $data['is_featured']);
            $this->db->bind(':status', $data['status']);

            if ($this->db->execute()) {
                return $this->notifySuccess('Product Update Successfully');
            } else {
                return $this->notifyError('Product Update Failed');
            }
        } catch (PDOException $exception) {
            return $exception->getMessage();
        }
    }

    public function getProductForSlider()
    {
        $sql = "SELECT id, product_name FROM product";
        $this->db->query($sql);
        $this->db->execute();
        return     $this->db->resultSet();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);
        return  $this->db->execute();
    }
}
