<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/../lib/Database.php');
include_once($filepath.'/../helpers/Format.php');
?>

<?php 
class Course
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function getAllCourses()
    {
        $query = "SELECT * FROM courses WHERE status=1";
        $result = $this->db->select($query);
        return $result;
    }
    
    public function getCourseByCourseName($name)
    {
        $query = "SELECT * FROM courses WHERE name LIKE '$name%' ";
        $result = $this->db->select($query);
        if($result){
            return mysqli_fetch_array($result);
        }
        else{
            return false;
        }
    }

    public function getCoursesInIndia(){
        $sql = "SELECT universities.course_id, courses.name FROM universities JOIN courses ON universities.course_id = courses.id WHERE universities.country = 6 GROUP BY course_id";
        $result = $this->db->select($sql);
        if($result){
            return $result;
        }
        else{
            return false;
        }
    }

    public function getCourseDetailsByCourseAndCountry($country,$course)
    {
        $query = "SELECT courses.*, course_in_country.content,course_in_country.title, course_in_country.description FROM courses JOIN course_in_country ON courses.id = course_in_country.course WHERE courses.name LIKE '$course%' AND course_in_country.country = $country";
        $result = $this->db->select($query);
        if($result){
            return mysqli_fetch_assoc($result);
        }
        else{
            return false;
        }
    }


}

?>