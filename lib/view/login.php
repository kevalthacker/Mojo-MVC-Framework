<?php
/*********************************
MANAGEMANT SYSTEM : CUSTOM MVC FRAMWORK
VERSION : 1.0 BETA
DEVELOPED BY : KEVAL THACKER
WEBSITE : http://adroittechnosys.com/
***********/
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo sitename; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo sitename; ?>">
    <meta name="author" content="<?php echo sitename; ?>">        
    <link href="<?php echo URL; ?>/assets/css/theme.css" rel="stylesheet">
    <link href="<?php echo URL; ?>/assets/css/theme-responsive.css" rel="stylesheet"> 
    <link href="<?php echo URL; ?>/assets/css/login.css" rel="stylesheet">      
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body id="login" >
   <div class="container">   
   		
        <form action="" method="post" class="form-signin" >
		<h1><?php echo sitename; ?></h1>       
        <hr>
    	 <?php echo $msg; ?>     
        <label>Username:</label><input type="text" placeholder="Admin" class="" name="username"  style="width:97.5%;">
        <label>Password:</label><input type="password" class="" placeholder="Password" name="password"  style="width:97.5%;">
        <input type="submit" class="btn  btn-primary span2" value="Login"  name="btn_login" />		
        </form>
	</div>
  </body>
</html>