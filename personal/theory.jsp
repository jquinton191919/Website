<%@ page import="com.mysql.jdbc.Driver" import="java.sql.*" %>
<% SystemOut = out; %>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../myStyle.css"/>
<link rel="Shortcut Icon" href="../favicon.ico"/>
<title>
Music Theory - Deus Diapente
</title>
<style type="text/css">
.hidden {
position:absolute;
z-index:6;
visibility:hidden;
background-color:#BBBBBB;
border-width:1px;
}
</style>
</head>

<body onLoad="javascript:changeWidth();">



<!-- TAB TABLE -->
<script language="javascript" src="../myScript.js">
</script>
<noscript>
<%@ include file="tab.jsp" %> 
<% out.println(tab());%>
</noscript>
<!-- end TAB TABLE -->

<%@ include file="sidebar.jsp" %>
<% String url = request.getRequestURI(); out.println(sidebar(url)); %>

<!-- MAIN TABLE -->
<table class="main" id="main">
<tr>
<td>
<h1>Music Theory</h1>
<hr>
<p>
<%
//connect to database
String names = "deusd3_q";
String pwds = "tisha9519";
Connection conn=null;
PreparedStatement ps=null;
ResultSet rs=null;
Class.forName("com.mysql.jdbc.Driver").newInstance();
conn = DriverManager.getConnection("jdbc:mysql://deusdiapente.net/deusd3_personal?user="+names+"&password="+pwds);

try{
getLesson(request.getParameter("topic"));
ps = conn.prepareStatement("SELECT * FROM `theory` where `name`=\""+request.getParameter("topic")+"\" "); 
rs = ps.executeQuery();
while(rs.next()){
out.println(rs.getString("text"));
}
}//end try

//catch exception if there is "no value" in the request.getParameter() method
catch(NullPointerException npe) {
ps = conn.prepareStatement("SELECT * FROM `theory` WHERE `name`=\"index\"");
rs = ps.executeQuery();

while(rs.next())
out.println(rs.getString("text"));
}
catch(Exception e) {
out.println("<!--"+e.toString()+" -->");
}




%>
</td>
</tr>
</table>
<!-- end MAIN TABLE -->

</body>


<%!
//method declaration - note the "!"

/*create a JspWriter object called "SystemOut" that will be used to mimic the regular "out" object of
JspWriter*/
javax.servlet.jsp.JspWriter SystemOut;


public void getLesson(String txt) throws java.io.IOException {
if(txt.equals("null")) {
SystemOut.println("<p align=\"center\">");
SystemOut.print("| Intro");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=scales\">Scales</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=chord-naming\">Chord Naming</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=modes\">Modes</a>"); 
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=chord-scale\">Chord-Scale</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=advanced\">Advanced</a>");
SystemOut.print(" | ");

}


else if(txt.equals("scales")){
SystemOut.println("<p align=\"center\">");
SystemOut.print("| <a href=\"theory.jsp\">Intro</a>");
SystemOut.print(" | ");

SystemOut.print("| Scales");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=chord-naming\">Chord Naming</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=modes\">Modes</a>"); 
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=chord-scale\">Chord-Scale</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=advanced\">Advanced</a>");
SystemOut.print(" | ");
}

else if(txt.equals("chord-naming")){
SystemOut.println("<p align=\"center\">");
SystemOut.print("| <a href=\"theory.jsp\">Intro</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=scales\">Scales</a>");
SystemOut.print(" | ");

SystemOut.print("| Chord Naming");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=modes\">Modes</a>"); 
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=chord-scale\">Chord-Scale</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=advanced\">Advanced</a>");
SystemOut.print(" | ");
}

else if(txt.equals("modes")){
SystemOut.println("<p align=\"center\">");
SystemOut.print("| <a href=\"theory.jsp\">Intro</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=scales\">Scales</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=chord-naming\">Chord Naming</a>");
SystemOut.print(" | ");

SystemOut.print("| Modes"); 
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=chord-scale\">Chord-Scale</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=advanced\">Advanced</a>");
SystemOut.print(" | ");
}

else if(txt.equals("chord-scale")){
SystemOut.println("<p align=\"center\">");
SystemOut.print("| <a href=\"theory.jsp\">Intro</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=scales\">Scales</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=chord-naming\">Chord Naming</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=modes\">Modes</a>"); 
SystemOut.print(" | ");

SystemOut.print("| Chord-Scale");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=advanced\">Advanced</a>");
SystemOut.print(" | ");
}

else if(txt.equals("advanced")){
SystemOut.println("<p align=\"center\">");
SystemOut.print("| <a href=\"theory.jsp\">Intro</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=scales\">Scales</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=chord-naming\">Chord Naming</a>");
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=modes\">Modes</a>"); 
SystemOut.print(" | ");

SystemOut.print("| <a href=\"?topic=chord-scale\">Chord-Scale</a>");
SystemOut.print(" | ");

SystemOut.print("| Advanced");
SystemOut.print(" | ");
}



else{
SystemOut.println(txt);
}

}//end method getLesson()

%>




</html>