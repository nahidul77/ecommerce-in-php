<?php

class Admin
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function login($data)
    {
        $email    = $data['email'];
        $password = $data['password'];

        $sql ="SELECT * FROM admin WHERE email=:email";
        $this->db->query($sql);
        $this->db->bind(':email',$email);
        $row = $this->db->single();
        if ($row){
            if (password_verify($password,$row->password)){
                Session::set('isAdmin',true);
                Session::set('name',$row->name);
                header("Location:dashboard.php");
            }else{
                echo '<span style="color: red">Password does not match</span>';
            }
        }else{
            echo '<span style="color: red">Email does not match</span>';
        }
    }

}