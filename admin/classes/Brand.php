<?php

class Brand
{
    use SlugHelper;
    private $db;
    public function __construct()
    {
        $this->db = new  Database();
    }

    public function index()
    {
        $sql = "SELECT * FROM brand";
        $this->db->query($sql);
        $this->db->execute();
        return   $this->db->resultSet();
    }
    public function store($data)
    {
        $slug = $this->str_slug($data['brand_name']);
        $sql ="INSERT INTO brand(name,slug)VALUES (:name,:slug)";
        $this->db->query($sql);
        $this->db->bind(':name',$data['brand_name']);
        $this->db->bind(':slug',$slug);
        if ($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id)
    {
        $sql = "SELECT * FROM brand WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        $this->db->execute();
        return   $this->db->single();
    }

    public function update($data,$id)
    {
        $slug   = $this->str_slug($data['brand_name']);

        $sql ="UPDATE brand SET name=:name,slug=:slug,status=:status WHERE id=:brandId";
        $this->db->query($sql);
        $this->db->bind(':brandId',$id);
        $this->db->bind(':name',$data['brand_name']);
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
        $sql = "DELETE FROM brand WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        return  $this->db->execute();

    }
}