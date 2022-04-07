<?php


class HomeController
{
    private  $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getSliders()
    {
        $sql = "SELECT * FROM slider WHERE status=true";
        $this->db->query($sql);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getCategory()
    {
         $sql = "SELECT * FROM category WHERE status=true";
        $this->db->query($sql);
        $this->db->execute();
        return $this->db->resultSet();
   }

    public function getSubCategory($id)
    {
        $sql ="SELECT * FROM sub_category WHERE category_id=:categoryId";
        $this->db->query($sql);
        $this->db->bind(":categoryId",$id);
        $this->db->execute();
        return $this->db->resultSet();
   }

    public function getFeatureProduct()
    {
            $sql = "SELECT product.id,product.product_name,product.slug,product.price,product.discount,product.discount_price,product.feature_image,category.name as categoryName FROM product
                INNER JOIN category ON product.category_id = category.id WHERE (product.is_featured =true AND product.status=true)
                ORDER BY product.id";
            $this->db->query($sql);
            $this->db->execute();
            return $this->db->resultSet();
    }

}