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
        $query = "SELECT courses.name as course, countries.name as country, countries.id as country_id, courses.id as course_id, countries.content FROM countries,courses,universities WHERE universities.country=countries.id AND universities.course_id = courses.id AND countries.name = '$country' AND courses.name = '$course'";
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