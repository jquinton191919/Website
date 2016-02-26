<%!  //method declaration jsp tag

public String getResource(String url) {
String file=null;
int last=0, slash=0;
        StringBuffer bufferUrl = new StringBuffer(url);
        
        //find out where the ".jsp" is at in the string
        for(int i=0; i<url.length(); i++) {
            if(url.charAt(i) == '.'){
                if(url.charAt(i+1) == 'j') {
                    if(url.charAt(i+2) == 's') {
                        if(url.charAt(i+3) == 'p') {
                            last = i--;
                            break;
                        }//end if p
                    }//end if s
                }//end if j
            }//end if .
        }//end for loop
        
        //find out where the slash is in the string right before the "."
        for(int i=last; i>0; i--){
            if(url.charAt(i) == '/') {
                slash = i+1;
                break;
            }
        }
        
file = bufferUrl.substring(slash,last);
return file;
}//end getResource method

public String sidebar(String url){
String jspPage = null;
String resource = getResource(url);

//here come a whole bunch of "if" statements...
if(resource.equals("index")){
jspPage = "";
jspPage += "<!-- LEFT TABLE -->";
jspPage += "<table class=\"left\">";
jspPage +=   "<tr> ";
jspPage +=     "<td> <b>Personal Links</b> <hr> <p>- <i>Bio</i>";
jspPage +=       "<p>- <a href=\"theory.jsp\">Music Theory</a>";
jspPage += 	  "<p>- <a href=\"philo.jsp\">Personal Philosophy</a>";
jspPage += 	  "<p>- <a href=\"writing.jsp\">Prior Writings</a>";
jspPage += 	  "<p>- <a href=\"Type Greek.html\">Greek Type</a>";
jspPage += 	  "<p>- <a href=\"abjadConversion.htm\">Hebrew Type</a>";
jspPage +=   "</tr>";
jspPage += "</table>";
jspPage += "<!-- end LEFT TABLE -->";
}

if(resource.equals("philo")){
jspPage = "";
jspPage += "<!-- LEFT TABLE -->";
jspPage += "<table class=\"left\">";
jspPage +=   "<tr> ";
jspPage +=     "<td> <b>Personal Links</b> <hr> <p>- <a href=\"index.jsp\">Bio</a>";
jspPage +=       "<p>- <a href=\"theory.jsp\">Music Theory</a>";
jspPage += 	  "<p>- <i>Personal Philosophy</i>";
jspPage += 	  "<p>- <a href=\"writing.jsp\">Prior Writings</a>";
jspPage += 	  "<p>- <a href=\"Type Greek.html\">Greek Type</a>";
jspPage += 	  "<p>- <a href=\"abjadConversion.htm\">Hebrew Type</a>";
jspPage +=   "</tr>";
jspPage += "</table>";
jspPage += "<!-- end LEFT TABLE -->";
}

if( (resource.equals("theory")) || 
	(resource.equals("theory2")) 
	){
jspPage = "";
jspPage += "<!-- LEFT TABLE -->";
jspPage += "<table class=\"left\">";
jspPage +=   "<tr> ";
jspPage +=     "<td> <b>Personal Links</b> <hr> <p>- <a href=\"index.jsp\">Bio</a>";
jspPage +=       "<p>- <i>Music Theory</i>";
jspPage += 	  "<p>- <a href=\"philo.jsp\">Personal Philosophy</a>";
jspPage += 	  "<p>- <a href=\"writing.jsp\">Prior Writings</a>";
jspPage += 	  "<p>- <a href=\"Type Greek.html\">Greek Type</a>";
jspPage += 	  "<p>- <a href=\"abjadConversion.htm\">Hebrew Type</a>";
jspPage +=   "</tr>";
jspPage += "</table>";
jspPage += "<!-- end LEFT TABLE -->";
}

if(resource.equals("writing")){
jspPage = "";
jspPage += "<!-- LEFT TABLE -->";
jspPage += "<table class=\"left\">";
jspPage +=   "<tr> ";
jspPage +=     "<td> <b>Personal Links</b> <hr> <p>- <a href=\"index.jsp\">Bio</a>";
jspPage +=       "<p>- <a href=\"theory.jsp\">Music Theory</a>";
jspPage += 	  "<p>- <a href=\"philo.jsp\">Personal Philosophy</a>";
jspPage += 	  "<p>- <i>Prior Writings</i>";
jspPage += 	  "<p>- <a href=\"Type Greek.html\">Greek Type</a>";
jspPage += 	  "<p>- <a href=\"abjadConversion.htm\">Hebrew Type</a>";
jspPage +=   "</tr>";
jspPage += "</table>";
jspPage += "<!-- end LEFT TABLE -->";
}

if(resource.equals("Type Greek")){
jspPage = "";
jspPage += "<!-- LEFT TABLE -->";
jspPage += "<table class=\"left\">";
jspPage +=   "<tr> ";
jspPage +=     "<td> <b>Personal Links</b> <hr> <p>- <a href=\"index.jsp\">Bio</a>";
jspPage +=       "<p>- <a href=\"theory.jsp\">Music Theory</a>";
jspPage += 	  "<p>- <a href=\"philo.jsp\">Personal Philosophy</a>";
jspPage += 	  "<p>- <a href=\"writing.jsp\">Prior Writings</a>";
jspPage += 	  "<p>- <i>Greek Type</i>";
jspPage += 	  "<p>- <a href=\"abjadConversion.htm\">Hebrew Type</a>";
jspPage +=   "</tr>";
jspPage += "</table>";
jspPage += "<!-- end LEFT TABLE -->";
}

if(resource.equals("abjadConversion")){
jspPage = "";
jspPage += "<!-- LEFT TABLE -->";
jspPage += "<table class=\"left\">";
jspPage +=   "<tr> ";
jspPage +=     "<td> <b>Personal Links</b> <hr> <p>- <a href=\"index.jsp\">Bio</a>";
jspPage +=       "<p>- <a href=\"theory.jsp\">Music Theory</a>";
jspPage += 	  "<p>- <a href=\"philo.jsp\">Personal Philosophy</a>";
jspPage += 	  "<p>- <a href=\"writing.jsp\">Prior Writings</a>";
jspPage += 	  "<p>- <a href=\"Type Greek.html\">Greek Type</a>";
jspPage += 	  "<i>- Hebrew Type</i>";
jspPage +=   "</tr>";
jspPage += "</table>";
jspPage += "<!-- end LEFT TABLE -->";
}
return jspPage;

}//end sidebar method

%>