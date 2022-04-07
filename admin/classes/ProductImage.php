<?php

class ProductImage
{
    use SlugHelper,Notify;
    private $db;
    public function __construct()
    {
        $this->db = new  Database();
    }

    public function getImages($id)
    {
        $sql = "SELECT * FROM product_images WHERE product_id=:productId";
         $this->db->query($sql);
        $this->db->bind(':productId',$id);
        $this->db->execute();
        return   $this->db->resultSet();
    }
    public function store($data)
    {
       return $data;

//        $slug = $this->str_slug($data['brand_name']);
//        $sql ="INSERT INTO brand(name,slug)VALUES (:name,:slug)";
//        $this->db->query($sql);
//        $this->db->bind(':name',$data['brand_name']);
//        $this->db->bind(':slug',$slug);
//        if ($this->db->execute()){
//            return true;
//        }else{
//            return false;
//        }

    }

    public function delete($id)
    {
        $sql = "DELETE FROM brand WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        return  $this->db->execute();

    }
}