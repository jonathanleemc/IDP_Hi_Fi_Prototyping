<%@page import="Model.EventDAO"%>
<%@page import="Model.EventDAO"%>
<%@page import="java.util.ArrayList"%>
<%@page import="Model.Event"%>
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-auto-scroll="false" data-auto-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!--ASSESS THE USER TO ACCESS RIGHTS -->

            </li>
            <!-- BEGIN SIDEBAR MENU -->
            <!--HOME PAGE-->
            <li>
                <br>
                <a href='./admin_page.jsp'>
                    <i class="fa fa-home"></i>
                    <span class="title">Home</span>
                </a>
            </li>
            <!--DATE PLANNING-->
            <li>
                <a href='./date_planning_page.jsp'>
                    <i class="fa fa-calendar"></i>
                    <span class="title">Dates Planning</span>
                </a>
            </li>
            <!--INTERVIEWER SELECTION-->
            <li>
                <a href='./interviewer_selection_page.jsp'>
                    <i class="fa fa-hand-o-up"></i>
                    <span class="title">Interviewer Selection</span>
                </a>
            </li>
             <!--CONSTRAINTS-->
            <li>
                <a href='./constraints_page.jsp'>
                    <i class="fa fa-magic "></i>
                    <span class="title">Constraints</span>
                </a>
            </li>
            <!-- END SIDEBAR MENU -->
            <li>
                <br>
                <div class="col-md-12 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet paddingless">

                        <div class="portlet-body">
                            <!--BEGIN TABS-->
                            <div class="tabbable tabbable-custom">

                                <div class="tab-content">

                                    <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible="0">
                                        <ul class="feeds">
                                            <li>
                                                <%

                                                    ArrayList<Event> eventList = EventDAO.getAllEvents();

                                                    for (Event tempEvnt : eventList) {
                                                        out.println("<li>");
                                                        out.println("<a href=\"#\">");
                                                        out.println("<div class=\"col1\">");
                                                        out.println("<div class=\"cont\">");
                                                        out.println("<div class=\"cont-col1\">");
                                                        out.println("<div class=\"label label-sm label-success\">");
                                                        out.println("<i class=\"fa fa-bell-o\"></i>");
                                                        out.println("</div>");
                                                        out.println("</div>");
                                                        out.println("<div class=\"cont-col2\">");
                                                        out.println("<div class=\"desc\">");
                                                        out.println(tempEvnt.getEvent_details());
                                                        out.println("</div>");
                                                        out.println("</div>");
                                                        out.println("</div>");
                                                        out.println("</div>");
                                                        out.println("<div class=\"col2\">");
                                                        out.println("<div class=\"date\">");
                                                        out.println("2hrs");
                                                        out.println("</div>");
                                                        out.println("</div>");
                                                        out.println("</a>");
                                                        out.println("</li>");

                                                    }
                                                %>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!--END TABS-->
                        </div>
                    </div>


                </div>
            </li>
        </ul>

    </div>   



    <!-- END SIDEBAR -->
    <div id="sidebar-form-javascript"></div>
    <input id="url2" type="hidden" value="<?php echo URL ?>">