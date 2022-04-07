<?php
class ProductController
{

    private  $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProduct()
    {
        $sql = "SELECT product.id,product.product_name,product.slug,product.price,product.discount,product.discount_price,product.feature_image,category.name as categoryName FROM product
        INNER JOIN category ON product.category_id = category.id WHERE product.status=true
        ORDER BY product.id";
        $this->db->query($sql);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function productDetail($slug)
    {
        $sql = "SELECT product. * ,category.name as categoryName FROM product
        INNER JOIN category ON product.category_id = category.id WHERE  product.slug =:slug";
        $this->db->query($sql);
        $this->db->bind(":slug",$slug);
        $this->db->execute();
        return $this->db->single();
    }

    public function getProductImage($id)
    {
        $sql = "SELECT * FROM product_images WHERE product_id=:productId";
        $this->db->query($sql);
        $this->db->bind(":productId",$id);
        $this->db->execute();
        return $this->db->resultSet();
    }
}
