<?php
/*********************************
MOJO MVC FRAMEWORK
VERSION : 1.0 BETA
DEVELOPED BY : KEVAL THACKER
WEBSITE : http://adroittechnosys.com/
***********/
class Login
{
    public function index($model,$action,$action_id) {	
		$msg = '';
		if(isset($_POST['btn_login'])) {
			$msg = $model->checkLogin($_POST['username'],$_POST['password']);
			if($msg==1) {
				header("Location: ".URL);	
			}
		}
	    require_once(LIB."view".DIRECTORY_SEPARATOR."login.php");			
    }
	
}