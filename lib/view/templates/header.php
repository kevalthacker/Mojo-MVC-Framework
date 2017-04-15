<div class="row-fluid">
<div class="span12">

            <div class="header-top">

                <div class="header-wrapper">

                    <a href="#" class="logo"><h1> <img src="<?php echo URL; ?>/assets/images/<?php echo logoname;?>" alt=""></h1></a>


                    <div class="header-right">
                        <!-- Notification end -->
                        <div class="user-panel header-divider">
                            <div class="user-info">
                                <img src="<?php echo URL; ?>/assets/images/icons/user.png" alt="">
                                <a href="#"><?php echo $_SESSION['admin_name'];?></a>
                            </div>
                        </div><!-- User panel end -->

                    </div><!-- End header right -->

                </div><!-- End header wrapper -->

            </div><!-- End header -->

        </div>
        
</div>        
    <div class="row-fluid">
        <!-- Sidebar statrt -->
        <div class="span2 sidebar-container">
        	 <div class="sidebar">
                <div class="nav-collapse collapse leftmenu">                
                    <ul>
                    	<li><a href="<?php echo URL; ?>" class="smronju" title="Dashboard" >Dashboard</a></li>
                    	<li><a href="<?php echo URL; ?>/students" class="smronju" title="Students" >Students</a></li>                        
                    	<li><a href="<?php echo URL; ?>/logout" class="smronju" title="Logout" >Logout</a></li>                                                
                    </ul>
                </div>
            </div>        
        </div>
        <div class="span10 body-container">