<?php
/*********************************
MOJO MVC FRAMEWORK
VERSION : 1.0 BETA
DEVELOPED BY : KEVAL THACKER
WEBSITE : http://adroittechnosys.com/
***********/
class Home
{
    public function index($model,$action,$action_id) {		
        require_once(LIB."view".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."head.php");
        require_once(LIB."view".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."header.php");			
	    require_once(LIB."view".DIRECTORY_SEPARATOR."home.php");			
        require_once(LIB."view".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."footer.php");	
    }
	
}