<?php
/*********************************
MOJO MVC FRAMEWORK
VERSION : 1.0 BETA
DEVELOPED BY : KEVAL THACKER
WEBSITE : http://adroittechnosys.com/
***********/
class Students
{
    public function index($model,$action,$action_id) {
        require_once(LIB."view".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."head.php");
        require_once(LIB."view".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."header.php");			
		if($action==""){
			$this->main($model);
		}elseif($action_id=="") {
			$this->$action($model);			
		}else {
			$this->$action($model,$action_id);	
		}
        require_once(LIB."view".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."footer.php");			
    }
	
	public function main($model) {
        $students = $model->getAllStudents();			
	    require_once(LIB."view".DIRECTORY_SEPARATOR."students.php");				
	}
	
	public function add($model) {
		$msg = '';
		if(isset($_POST['student_add'])) {
			$msg = $model->addStudent($_POST['s_name'],$_POST['s_email_id']);
		}
	    require_once(LIB."view".DIRECTORY_SEPARATOR."student-add.php");			
	}
	
	public function edit($model,$action_id) {
		$msg = '';
		if(isset($_POST['student_edit'])) {
			$msg = $model->editStudent($_POST['s_name'],$_POST['s_email_id'],$action_id);
		}		
		$student = $model->getStudentById($action_id);
	    require_once(LIB."view".DIRECTORY_SEPARATOR."student-edit.php");			
	}
	
	public function delete($model,$action_id) {
		$msg = '';
		$msg = $model->deleteStudent($action_id);
		$this->index($model,"","");
		//header("Location: ".URL."/students?action=success");				
	}		
	
}