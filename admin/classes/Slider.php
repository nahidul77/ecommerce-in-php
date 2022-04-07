<?php


class Slider
{
    use Notify;
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getSliders()
    {
        $sql = "SELECT * FROM slider";
        $this->db->query($sql);
        $this->db->execute();
        return $this->db->resultSet();

    }
    public function store($data,$image)
    {
        $sliderImageName = $_FILES['slider_image']['name'];
        $sliderImageTmpName = $_FILES['slider_image']['tmp_name'];

        $ext        = strtolower(pathinfo($sliderImageName, PATHINFO_EXTENSION));
        $newImage   = time().'-'.uniqid().'.'.$ext;
        $uploadDir  = "uploads/slider/";
        $uploadFeatureImage = $uploadDir.$newImage;
        move_uploaded_file($sliderImageTmpName,$uploadFeatureImage);

        $sql ="INSERT INTO slider (product_id, title, sub_title, price, image, status)VALUES(:productId,:title,:subTitle,:price,:sliderImage,:status)";
        $this->db->query($sql);
        $this->db->bind(":productId",$data['product_id']);
        $this->db->bind(":title",$data['title']);
        $this->db->bind(":subTitle",$data['sub_title']);
        $this->db->bind(":price",$data['price']);
        $this->db->bind(":sliderImage",$uploadFeatureImage);
        $this->db->bind(":status",$data['status']);
        if (  $this->db->execute()){
                return $this->notifySuccess('Slider insert Successfully');
            }else{
                return $this->notifyError('Slider insert Failed');
            }
    }

    public function edit($id){

        $sql = "SELECT * FROM slider WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id);
        $this->db->execute();
        return   $this->db->single();
    }

    public function update($data,$image)
    {


        $sliderImageName = $_FILES['slider_image']['name'];
        $sliderImageTmpName = $_FILES['slider_image']['tmp_name'];
        if($sliderImageName){
            $ext        = strtolower(pathinfo($sliderImageName, PATHINFO_EXTENSION));
            $newImage   = time().'-'.uniqid().'.'.$ext;
            $uploadDir  = "uploads/slider/";
            $uploadFeatureImage = $uploadDir.$newImage;
            unlink($data['sliderOldImage']);
            move_uploaded_file($sliderImageTmpName,$uploadFeatureImage);
        }else{
            $uploadFeatureImage = $data['sliderOldImage'];
        }
        
        $sql ="UPDATE slider SET product_id=:productId, title=:title, sub_title=:subTitle, price=:price, image=:sliderImage,status=:status WHERE id=:sliderId";
        $this->db->query($sql);
        $this->db->bind(":sliderId",$data['sliderId']);
        $this->db->bind(":productId",$data['product_id']);
        $this->db->bind(":title",$data['title']);
        $this->db->bind(":subTitle",$data['sub_title']);
        $this->db->bind(":price",$data['price']);
        $this->db->bind(":sliderImage",$uploadFeatureImage);
        $this->db->bind(":status",$data['status']);
        if (  $this->db->execute()){
                return $this->notifySuccess('Slider udpate Successfully');
            }else{
                return $this->notifyError('Slider update Failed');
            }
    }

}