<?php
/*********************************
MOJO MVC FRAMEWORK
VERSION : 1.0 BETA
DEVELOPED BY : KEVAL THACKER
WEBSITE : http://adroittechnosys.com/
***********/
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR."framework". DIRECTORY_SEPARATOR);
// set a constant that holds the project's "config" folde, like.
define('CONFIG', ROOT . 'config' . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "lib" folder
define('LIB', ROOT . 'lib' . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "assets" folder
define('ASSETS', ROOT . 'assets' . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "current Active Page" 
define ('FILE_NAME', basename(strtok($_SERVER["REQUEST_URI"],'?')));
define ('FILE_PATH', str_replace("/framework/","",strtok($_SERVER["REQUEST_URI"],'?')));
/**************************************
***************************************
***************************************
   LOAD GENERAL SETTING CLASS
***************************************
***************************************  
***/
include(CONFIG."general.php");
/**************************************
***************************************
***************************************
   LOAD DATABASE SETTING CLASS
***************************************
***************************************  
***/
include(CONFIG."database.php");
// load initialize application
include LIB."init.php";
