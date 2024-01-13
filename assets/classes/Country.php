<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/../lib/Database.php');
include_once($filepath.'/../helpers/Format.php');
?>

<?php 
class Country
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function countryInsert($countryName)
    {
        $countryName = $this->fm->validation($countryName);
        $countryName = mysqli_real_escape_string($this->db->link, $countryName);
        if (empty($countryName)) {
            $msg = "<span class='error'>Country field must not be empty!</span>";
            return $msg;
        } else {
            $query = "INSERT INTO countries(name) VALUES('$countryName')";
            $countryinsert = $this->db->insert($query);
            if ($countryinsert) {
                $msg = "<span class='success'>Country Inserted Successfully</span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Country Not Inserted.</span>";
                return $msg;
            }
        }
    }

    public function getAllCountry()
    {
        $query = "SELECT * FROM countries WHERE status=1";
        $result = $this->db->select($query);
        return $result;
    }


    public function getCountryById($Countryid)
    {
        $query = "SELECT * FROM countries WHERE id = '$Countryid' AND status=1";
        $result = $this->db->select($query);
        return $result;
    }


    public function getCountryByCountryName($name)
    {
        $query = "SELECT * FROM countries WHERE `name` = '$name' AND status=1";
        $result = $this->db->select($query);
        if($result){
            return mysqli_fetch_assoc($result);
        }
        else{
            return false;
        }
    }

    public function CountryUpdate($CountryName, $Countryid)
    {
        $CountryName = $this->fm->validation($CountryName);
        $CountryName = mysqli_real_escape_string($this->db->link, $CountryName);
        $Countryid = mysqli_real_escape_string($this->db->link, $Countryid);
        if (empty($CountryName)) {
            $msg = "<span class='error'>Country field must not be empty!</span>";
            return $msg;
        } else {
            $query = "UPDATE countries
        	SET
        	name = '$CountryName'
        	WHERE id = '$Countryid'";
            $updated_row = $this->db->update($query);
            if ($updated_row) {
                $msg = "<span class='success'>Country Updated Successfully</span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Country Not Updated.</span>";
                return $msg;
            }
        }
    }
    public function delCountryById($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM countries WHERE id = '$id'";
        $deldata = $this->db->delete($query);
        if ($deldata) {
            $msg = "<span class='success'>Country Deleted Successfully</span>";
            return $msg;
        } else {
            $msg = "<span class='error'>Country Not Deleted!</span>";
            return $msg;
        }
    }
}

?>