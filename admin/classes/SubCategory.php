<?php

class SubCategory
{
    use SlugHelper;
    private $db;
    public function __construct()
    {
        $this->db = new  Database();
    }

    public function index()
    {
        $sql ="SELECT sub_category.* ,category.name as CategoryName FROM sub_category
           INNER  JOIN category ON sub_category.category_id = category.id ";
        $this->db->query($sql);
        $this->db->execute();
        return   $this->db->resultSet();
    }
    public function store($data)
    {
        $slug = $this->str_slug($data['subCategory']);
        $sql ="INSERT INTO sub_category(category_id,name,slug)VALUES (:categoryId,:name,:slug)";
        $this->db->query($sql);
        $this->db->bind(':categoryId',$data['category']);
        $this->db->bind(':name',$data['subCategory']);
        $this->db->bind(':slug',$slug);
        if ($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id)
    {
        $sql = "SELECT * FROM sub_category WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        $this->db->execute();
        return   $this->db->single();
    }

    public function udpate($data,$id)
    {
//        $sql ="UPDATE category SET name=:name,slug=:slug,status=:status WHERE id=:id";
        $slug = $this->str_slug($data['subCategory']);

        $sql ="UPDATE  sub_category SET category_id=:catId,name=:subCatName,slug=:slug,status=:status WHERE id=:subCatId";
        $this->db->query($sql);
        $this->db->bind(':subCatId',$id);
        $this->db->bind(':catId',$data['category']);
        $this->db->bind(':subCatName',$data['subCategory']);
        $this->db->bind(':slug',$slug);
        $this->db->bind(':status',$data['status']);
        if ($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM sub_category WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        return  $this->db->execute();

    }
}