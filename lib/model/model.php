<?php
/*********************************
MOJO MVC FRAMEWORK
VERSION : 1.0 BETA
DEVELOPED BY : KEVAL THACKER
WEBSITE : http://adroittechnosys.com/
***********/
class Model
{
	public $msg = null;
	
	function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
	
	public function checkLogin($username,$password) {
		$validation_status = $this->validateLogin($username,$password);		
		if($validation_status==0) {
				return $this->msg;
		}
		$statement = $this->db->prepare("select * from `".db_prefix."student_admin` where `username`='".$username."' and `password`='".$password."' ");
	 	$statement->execute();
		$records = $statement->fetchAll();
		if(count($records)<1) {
			$this->msg = str_replace("%msg%",$this->errorCodes(2),error_msg);
			return $this->msg;	
		}
		$_SESSION['admin_id']= $records[0]['admin_id'];
		$_SESSION['admin_name']= $records[0]['admin_name'];		
		return 1;
	}
	
	public function getAllStudents() {
		$statement = $this->db->prepare("select * from ".db_prefix."students ");
        $statement->execute();
        return $statement->fetchAll();
	}
	
	public function addStudent($s_name,$s_email_id) {
		$validation_status = $this->validateStudent($s_name,$s_email_id);
		if($validation_status==1) {
			$sql = "INSERT INTO ".db_prefix."students (student_name, student_email_id, date_added) VALUES ('".$s_name."','".$s_email_id."', '".date("Y-m-d h:i:s")."')";
   			$this->db->exec($sql);
		}
		$this->msg = str_replace("%msg%",$this->successCodes(1),success_msg);
		return $this->msg;
	}	
	
	public function editStudent($s_name,$s_email_id,$student_id) {
		$validation_status = $this->validateStudent($s_name,$s_email_id);
		if($validation_status==1) {
			$sql = "update ".db_prefix."students set student_name='".$s_name."', student_email_id='".$s_email_id."' where student_id='".$student_id."'";
   			$this->db->exec($sql);
		}
		$this->msg = str_replace("%msg%",$this->successCodes(2),success_msg);
		return $this->msg;
	}		
	
	public function deleteStudent($student_id) {
		$sql = "delete from ".db_prefix."students where student_id='".$student_id."'";
		$this->db->exec($sql);		
	}
	
	public function validateLogin($username,$password) {
		if($username=="" || $password==""){
			 $this->msg = str_replace("%msg%",$this->errorCodes(1),error_msg);
			 return 0;
		}		
		return 1;
	}
		
	public function validateStudent($s_name,$s_email_id) {
		if($s_name=="" || $s_email_id==""){
			 $this->msg = str_replace("%msg%",$this->errorCodes(1),error_msg);
			 return 0;
		}		
		return 1;
	}
	
	public function getStudentById($student_id) {
		$statement = $this->db->prepare("select * from ".db_prefix."students where student_id='".$student_id."'");
        $statement->execute();
        return $statement->fetchAll();
	}	
	
	public function errorCodes($code) {
		if($code=='1') {
			return "All fields are required.";	
		}
		if($code=='2') {
			return "Invalid login credential.";	
		}		
	}
	
	public function successCodes($code) {
		if($code=='1') {
			return "Students record inserted successfully.";	
		}
		if($code=='2') {
			return "Students record updated successfully.";	
		}		
	}	
}