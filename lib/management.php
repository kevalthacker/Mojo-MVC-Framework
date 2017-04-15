<?php
/*********************************
MOJO MVC FRAMEWORK
VERSION : 1.0 BETA
DEVELOPED BY : KEVAL THACKER
WEBSITE : http://adroittechnosys.com/
***********/
class Management
{
    public $db = null;
    public $model = null;
    public $controller = null;	
    public $action = null;	
    public $action_id = null;			
		

    public function __construct() {		
        $this->openDatabaseConnection();		
        $this->loadModel();	
        $this->loadController();        				
    }
	
    public function openDatabaseConnection() {	
         $this->db = new PDO("mysql:host=".db_host.";dbname=".db_name, db_user, db_pass);
  		 $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			 
    }	

	public function loadController() {	
		/* Check Whether Session is Setup Or Not */
		$sessionresponse = $this->checkSession();		
		$action = '';
		$action_id = '';
		if($sessionresponse==0) { 
			include(LIB."controller".DIRECTORY_SEPARATOR."login.php");				
			$filename = "login";		
		}
		else if(FILE_PATH=="") {
			include(LIB."controller".DIRECTORY_SEPARATOR."home.php");	
			$filename = "home";
		}else  {
			/* IDENTIFY THE ACTION ROUTE TO PERFORM */	
			$action_arr =explode("/",FILE_PATH);			
			if(isset($action_arr[1])) {
				$this->action = $action_arr[1];
				if(isset($action_arr[2])) {
					$this->action_id =$action_arr[2];
				}
			}
			include(LIB."controller".DIRECTORY_SEPARATOR.$action_arr[0].".php");				
			$filename = ucfirst(strtolower($action_arr[0]));			
		}				
		$this->controller = new $filename();
		$this->controller->index($this->model,$this->action,$this->action_id);
	}
	 	
	 public function loadModel() {	
	 	include(LIB."model".DIRECTORY_SEPARATOR."model.php");
		$this->model = new Model($this->db);
	 }
	 
	 public function checkSession() {
			if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_name'])) {
				return 1;
			}
			return 0;
	 }
}