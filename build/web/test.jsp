<%-- 
    Document   : test
    Created on : Oct 4, 2014, 9:19:42 PM
    Author     : Ho_Jin_Wei_Benedict
--%>

<%@page import="Model.EventDAO"%>
<%@page import="java.util.ArrayList"%>
<%@page import="Model.Event"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        
        <%
        ArrayList<Event> eventList = new ArrayList<Event>();
        eventList = EventDAO.getAllEvents();
        for(Event evnt : eventList){
            out.println("Here is " + evnt.getEvent_details());
        }
                

%>
    </body>
</html>
