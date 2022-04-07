<?php

class Category
{
    use SlugHelper,Notify;
    private $db;
    public function __construct()
    {
        $this->db = new  Database();
    }

    public function index()
    {
        $sql = "SELECT * FROM category";
        $this->db->query($sql);
        $this->db->execute();
        return   $this->db->resultSet();
    }
    public function insertCategory($data)
    {
        try {
            $selectCategory = "SELECT * FROM category WHERE name=:name";
            $this->db->query($selectCategory);
            $this->db->bind(':name', $data['category']);
            $this->db->execute();
            if ($this->db->rowCount() > 0) {
                return $this->notifyError('This category name already exists');
            } else{
                $slug = $this->str_slug($data['category']);
                $sql ="INSERT INTO category(name,slug)VALUES (:name,:slug)";
                $this->db->query($sql);
                $this->db->bind(':name',$data['category']);
                $this->db->bind(':slug',$slug);
                if ($this->db->execute()){
                    return $this->notifySuccess('Category Insert Successfully');
                }else{
                    return $this->notifyError('Category Insert Failed');
                }
            }

        }catch (PDOException $e){
            return $e->getMessage();
        }

    }

    public function edit($id)
    {
        $sql = "SELECT * FROM category WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        $this->db->execute();
        return   $this->db->single();
    }

    public function updateCategory($data,$id)
    {

        $slug   = $this->str_slug($data['category']);

        $sql ="UPDATE category SET name=:name,slug=:slug,status=:status WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        $this->db->bind(':name',$data['category']);
        $this->db->bind(':slug',$slug);
        $this->db->bind(':status',$data['status']);
        if ($this->db->execute()){
            return $this->notifySuccess('Category Update Successfully');
        }else{
            return $this->notifyError('Category Update Failed');
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM category WHERE id=:id";
            $this->db->query($sql);
            $this->db->bind(':id',$id);
            if ($this->db->execute()){
                return $this->notifySuccess('Category Delete Successfully');
            }else{
                return $this->notifyError('Category Delete Failed');
            }
        }catch (Exception $e){
            echo $e->getMessage();
        }


    }
}