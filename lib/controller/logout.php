<?php
/*********************************
MOJO MVC FRAMEWORK
VERSION : 1.0 BETA
DEVELOPED BY : KEVAL THACKER
WEBSITE : http://adroittechnosys.com/
***********/
class Logout
{
    public function index($model,$action,$action_id) {	
		session_destroy();
		header("Location: ".URL);	
    }
	
}