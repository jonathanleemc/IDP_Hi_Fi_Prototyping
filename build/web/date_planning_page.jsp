<%-- 
    Document   : admin
    Created on : Oct 3, 2014, 3:46:38 PM
    Author     : Ho_Jin_Wei_Benedict
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>


<!DOCTYPE html>
<%@ include file="page_accessories/page_start.jsp" %> 
<%@ include file="page_accessories/page_header.jsp" %> 


<!-- BEGIN CONTAINER -->
<div class="page-container">
    <br>
    <!--START SIDEBAR-->
    <%@ include file="page_accessories/page_sidebar.jsp" %> 
    <!--END SIDEBAR-->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h1 class="page-title">
                Dates Planning <small>set the important dates for interviews</small>
            </h1>
            <!-- BEGIN PAGE CONTENT--> 
            <!--Top Half -->
            <div class="halfpage">



            </div>
            <!-- End Top Half 
            <!--Btm Half -->
            <div class="halfpage">



            </div>
            <!-- End Btm Half -->







        </div>






    </div> 
    <!-- END PAGE CONTENT -->

</div>
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="theme/assets/global/plugins/respond.min.js"></script>
<script src="theme/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

<form id="javascript-form" action="#" method="post">
    <input type="hidden" id="filter-phrase" name="filter-phrase" value="<?php echo $filter_phrase; ?>">
    <input type="hidden" id="filter-order" name="filter-order" value="<?php echo $order; ?>">
    <input type="hidden" id="filter-type" name="filter-type" value="<?php echo $type; ?>">
</form>

<script src="theme/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="theme/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
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
<script src="theme/assets/admin/pages/scripts/table-editable.js"></script>
<script src="theme/assets/global/scripts/sidebar-organisation-rights.js"></script>
<script>
    jQuery(document).ready(function() {       
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        TableEditable.init();
    });
</script>
<script src="theme/assets/admin/pages/scripts/dashboard-filter.js"></script>
</body>
<!-- END BODY -->
</html>