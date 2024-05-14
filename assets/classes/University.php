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
        $UniversityId = $this->fm->validation($UniversityId);
        $query = "SELECT u.name as uname, u.image as uimage, c.name as cname, c.image as cimage, c.status FROM universities AS u JOIN countries AS c ON u.country = c.id WHERE u.id='$UniversityId' AND c.status=1;";
        // $query = "SELECT * FROM universities WHERE id = '$UniversityId' ";
        $result = $this->db->select($query);
        return $result;
    }

    public function getUniversityByName($name)
    {
        $name = $this->fm->validation($name);
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
        $name = $this->fm->validation($name);
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
        $id = $this->fm->validation($id);
        $query = "SELECT * FROM universities WHERE country = '$id'";
        $result = $this->db->select($query);
        if($result){
            return $result;
        }
        else{
            return false;
        }
    }

    public function getUniversityByCountryIdAndCourseId($country,$course)
    {
        $country = $this->fm->validation($country);
        $course = $this->fm->validation($course);
        $query = "SELECT * FROM universities WHERE country = $country AND course_id = $course";
        $result = $this->db->select($query);
        if($result){
            return $result;
        }
        else{
            return false;
        }
    }

    public function getUniversity($country,$course,$university)
    {
        $country = $this->fm->validation($country);
        $course = $this->fm->validation($course);
        $university = $this->fm->validation($university);
        $query = "SELECT * FROM universities WHERE universities.country = $country AND universities.course_id = $course AND universities.name LIKE '$university%' ";
        $result = $this->db->select($query);
        // echo $query;
        // die();
        if($result){
            return mysqli_fetch_array($result);
        }
        else{
            return false;
        }
    }
}

?>