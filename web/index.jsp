<head>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="theme/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="theme/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="theme/assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="theme/assets/global/plugins/select2/select2-metronic.css" rel="stylesheet" type="text/css"/>
<link href="theme/assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="theme/assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="theme/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="theme/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="theme/assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="theme/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="login">
<!-- retrieves URL global variable from config/dev.php file -->

<!-- end retrieval of URL global variable from config/dev.php --> 
<!-- BEGIN LOGO -->
<div class="logo">
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN FORM -->
<div class="content">
   
    <!-- BEGIN LOGIN FORM -->      
    <form id="login-form" action="admin_page.jsp" method="post">
        <h3 class="form-title">Login to your account</h3> 
        <font style="color:grey;">Note: Password is case-sensitive.</font>
        <br><br>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">UserID</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input id="login_userid" class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="UserID" name="user_id" value=""/>                  
            </div>
            <div id="user_id_data_validation" style="color:red"></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input id="login_password" class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" value=""/>                   
            </div>
            <div id="password_data_validation" style="color:red"></div>
        </div>
        <div class="form-actions">
            <label><br></label>
            <button type="button" id="login-btn" class="btn green pull-right">
                Login <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
        <div class="forget-password">
            <h4>Forgot your password ?</h4>
            <p>
                no worries, click <a href="/core/forget" id="forget-password">
                    here </a>
                to reset your password.
            </p>
        </div>
        <div class="create-account">
            <p>
                Don't have an account yet ?&nbsp; <a href="<?php echo URL ?>/core/register" id="register-btn">
                    Create an account </a>     
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->      
</div>
<!-- END FORM -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
        <script src="<?php echo URL ?>/theme/assets/global/plugins/respond.min.js"></script>
        <script src="<?php echo URL ?>/theme/assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo URL ?>/theme/assets/global/plugins/respond.min.js"></script>
<script src="<?php echo URL ?>/theme/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="theme/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="theme/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="theme/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="theme/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="theme/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="theme/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="theme/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="theme/assets/global/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="theme/assets/global/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="theme/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="theme/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="theme/assets/admin/pages/scripts/login.js"></script>
<script>
    jQuery(document).ready(function() {     
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>