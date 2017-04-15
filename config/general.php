<?php
/*********************************
MOJO MVC FRAMEWORK - GENRAL SETTING
VERSION : 1.0 BETA
INITIALIZE ALL REQUIRED GENERAL SETTINGS
***********/
session_start();
define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL', URL_PROTOCOL.URL_DOMAIN."/framework");
define ('sitename', 'Adroit Technosys');
define ('primary_colorcode', '#1a4b76');
define ('logoname', 'logo.png');
define ('pdf_library', 'dompdf');
define ('db_prefix', '');
define ('error_msg', '<div class="alert alert-error"><strong>Error!</strong> %msg% </div>');
define ('success_msg', '<div class="alert alert-success"><strong>Success!</strong> %msg% </div>');
