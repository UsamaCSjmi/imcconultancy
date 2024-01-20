<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/../lib/Database.php');
include_once($filepath.'/../helpers/Format.php');
?>

<?php 
class University
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function getAllUniversities()
    {
        $query = "SELECT u.name as uname, u.image as uimage, c.name as cname, c.image as cimage, c.status FROM universities AS u JOIN countries AS c ON u.country = c.id WHERE c.status=1;";
        $result = $this->db->select($query);
        return $result;
    }


    public function getUniversityById($UniversityId)
    {
        $query = "SELECT u.name as uname, u.image as uimage, c.name as cname, c.image as cimage, c.status FROM universities AS u JOIN countries AS c ON u.country = c.id WHERE u.id='$UniversityId' AND c.status=1;";
        // $query = "SELECT * FROM universities WHERE id = '$UniversityId' ";
        $result = $this->db->select($query);
        return $result;
    }

    public function getUniversityByName($name)
    {
        $query = "SELECT u.*, c.name as cname, c.image as cimage, c.status FROM universities AS u JOIN countries AS c ON u.country = c.id WHERE LOWER(u.name) LIKE '%$name%' AND c.status=1;";
        // $query = "SELECT * FROM universities WHERE id = '$UniversityId' ";
        $result = $this->db->select($query);
        if($result){
            $result = mysqli_fetch_assoc($result);
            return $result;
        }
        else{
            return "false";
        }
    }


    public function getUniversityByCountryName($name)
    {
        
        $query = "SELECT u.*, c.* FROM universities AS u JOIN countries AS c ON u.country = c.id WHERE c.name = '$name' AND u.status=1;";
        $result = $this->db->select($query);
        if($result){
            return mysqli_fetch_assoc($result);
        }
        else{
            return false;
        }
    }


    public function getUniversityByCountryId($id)
    {
        
        $query = "SELECT * FROM universities WHERE country = '$id'";
        $result = $this->db->select($query);
        if($result){
            return $result;
        }
        else{
            return false;
        }
    }
}

?>