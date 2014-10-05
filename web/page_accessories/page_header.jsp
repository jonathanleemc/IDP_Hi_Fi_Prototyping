<body class="page-header-fixed" onload="startTime();">  
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">    
        <a href="./admin_page.jsp">
         <img src="theme/assets/admin/layout/img/App-logo.jpg" alt="logo" class="logo-default"/>
        <!--ADD IN LOGO-->
        </a>        
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <div class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->      
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu" style="vertical-align:middle;">          
            <div class="nav navbar-nav pull-right" style='vertical-align:middle;'> 
                <br>
                <!-- BEGIN USER LOGIN DROPDOWN -->             
                <div style="color:white;vertical-align:middle;">
                    Currently logged in as: <b><u>Sophia Heng</u></b>
                
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <?php
                        $no_of_updates = NewsfeedDAO::countNewsfeedByUserIDAfterCertainTime($_SESSION['user_id'], $_SESSION['last_visted']);
                        if($no_of_updates != 0) {
                    ?>
                    <span class="badge badge-danger"> <?php echo NewsfeedDAO::countNewsfeedByUserIDAfterCertainTime($_SESSION['user_id'], $_SESSION['last_visted']); ?> </span>
                    <?php
                        }
                    ?>
                    <a href="<?php echo URL . '/core/dashboard'; ?>" title="Newsfeeds">
                        <i class="fa fa-bell"></i>
                    </a>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href="<?php echo URL . '/core/personal_details'; ?>" title="View Profile">
                        <i class="fa fa-user"></i>                      
                    </a>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href="./index.jsp" title="Logout">
                        <i class="fa fa-key"></i>                    
                    </a>
                 </div>
                <!-- END USER LOGIN DROPDOWN -->       
            </div>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>