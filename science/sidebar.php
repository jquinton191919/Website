<? 
//logs IP of visitor and referring address to send to my email
$v_ip = $_SERVER['REMOTE_ADDR'];
$v_top_level = substr($v_ip,0,3);


//find out if the ip is a google search engine
$v_ip_tot = 0;
$dots = array();
$dotsIndex = 0;
$nums = array();
$diff = array();
$diff[0] = 0;
$numsIndex = 0;
$ipIntString = "Not Google";
$z = 0;

//finds the position of the dots/bit separator in the ip addy
for($i=0; $i < strlen($v_ip); $i++){
	if(substr($v_ip,$i,1) == "."){
		$dots[$dotsIndex] = $i;
		if($z > 0){
			$diff[$dotsIndex] = $i - $dots[$dotsIndex-1];
			
		}
		$dotsIndex++;
		$z++;
	}
}
//gets the integers in between the '.'
$nums[0] = substr($v_ip,0,$dots[0]);
$nums[1] = substr($v_ip,++$dots[0],($dots[1] - $dots[0]) );
$nums[2] = substr($v_ip,++$dots[1],($dots[2] - $dots[1]) );
$nums[3] = substr($v_ip,++$dots[2]);

//find out if the ip address is in Google's search engine range
//by comparing each byte in the ip address
if($nums[0] == "66"){
	if($nums[1] == "249"){
		if( ($nums[2] >= 64) && ($nums[2] <= 95)){
			$v_top_level = "Google Search Engine";
				}
		else{$ipIntString = "Not Google";}
		}
	else{$ipIntString = "Not Google";}
	}
else{$ipIntString = "Not Google";}

//find out if the ip address is in Boeing's IP range
//by comparing each byte in the ip address
if($nums[0] == "130"){
	if($nums[1] == "76"){
			$v_top_level = "Boeing ISP";
				}
	else{$ipIntString = "Not Google";}
	}
else{$ipIntString = "Not Google";}

//performance systems international search engine
if($v_top_level == "38.")
$v_top_level = "Performance Systems International Inc.";

//RIPE Network Coordination Centre
if( ($v_top_level == "81.")  || ($v_top_level == "78.") || ($v_top_level == "92.") )
$v_top_level = "RIPE Network Coordination Centre";

$v_refer = $_SERVER['HTTP_REFERER'];
$v_date = date("l d F H:i:s");


//find out if the requested URI is an image
$isImg = false;
if( strpos($v_refer,".png") !== false) { $isImg = true;}
if( strpos($v_refer,".jpg") !== false) { $isImg = true;}
if( strpos($v_refer,".gif") !== false) { $isImg = true;}

//mail ips to myself
$to      = 'jquinton191919@gmail.com';
$subject = 'Science Website Monitoring - from '.$v_top_level;
$message = "IP: http://ws.arin.net/whois/?queryinput=".$v_ip ." browsing http://www.deusdiapente.net".$_SERVER['REQUEST_URI']. " from page ". $v_refer ." - DATE: $v_date\n\n";
$headers = 'From: science@deusdiapente.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if($isImg == false){
if($v_top_level != "70."){
if($v_top_level != "94."){
if($v_top_level != "Google Search Engine"){
mail($to, $subject, $message, $headers);
}
}
}
}
/*php code for the sidebars*/

$uri = $_SERVER['REQUEST_URI'];

//finds out where the last slash is
$lastSlash = strrchr($uri,"/");

//deletes that last slash from the string
$minusLastSlash = trim($lastSlash, "/");

//finds where the extention .php is at in the original string
$findPHP = strpos($minusLastSlash,".php");

//finds the substring that occurs in the string minus the slash and the .php extention
$page = substr($minusLastSlash,0,$findPHP);
/*

*/

switch($page) {
case "relative":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	  <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <i>Relativity</i> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a>
	  <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  
	<!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>	        
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->


';




	break;
	
/*case "religiosity":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	  <p>- <i>Science and Religion</i> 
      <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>	        
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->


';
	break;
	
*/
	
case "bbt":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	  <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <i>The Big Bang</i> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>	        
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->

';
	break;
	

case "evolution":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	  <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <i>Evolution</i> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>	        
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->
';
	break;
	
		
case "fallacies":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <i>Logical Fallacies</i> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE ->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>	        
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->

';
	break;
	
case "index":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <i>Philosophy of Science</i>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>	        
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->

';
	break;

	
	
	
/*
*
*
*
*
*
*
Religion Links
*
*
*
*
*
*
*
*/



case "anti-rationalism":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>
      <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>      
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
	break;
	

case "Cosmological":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <i>The Cosmological Argument</i> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>      
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
	break;


	
	
case "FineTuning":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <i>The Fine Tuning Argument</i>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>      
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
	break;
	
	
case "flood":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <i>Noah\'s Ark and The Flood</i>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>
      <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>      
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
	break;
	
	
case "gospels":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <i>The Gospels</i>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>      
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
	break;
	
	
/*case "hero-scale":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <i>The Mythical Hero Scale</i>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>      
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
	break;
	*/
	
case "induction":
	echo'
	<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>
      <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>      
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <i>The Inductive Argument</i> -->
	  </td>
	  
  </tr>
</table>
<!-- end XTIAN TABLE -->';
	break;
	
	


case "messiah":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compilation of the OT</a>  
	  <p>- <i>The Jewish Messiah</i> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>
      <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>      
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
break;

	
	case "nt":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <i>Compliation of the NT</i> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>	        
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
break;	

	
	
	
case "Ontological":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <i>The Ontological Argument</i> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>      
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
	break;
	
	
case "TAG":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <i>The Transcendental Argument</i>      
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
	break;

case "tnk":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <i>Compliation of the OT</i></p>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>
      <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>      
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
	break;	
	
	
case "revelation":
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <a href="index.php">Philosophy of Science</a>
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>
	  <p>- <i>The Argument from Personal Revelation</i>	        
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->';
	break;

	

default:
	echo '<!-- LEFT TABLE -->
<table class="left">
  <tr> 
    <td> <b>Science Links</b> <hr> <p>- <i>Philosophy of Science</i> 
	   <p>- <a href="fallacies.php">Logical Fallacies</a> 
      <hr> <p>- <a href="evolution.php">Evolution</a> 
      <p>- <a href="relative.php">Relativity</a> 
      <p>- <a href="bbt.php">The Big Bang</a> </td>
  </tr>
</table>
<!-- end LEFT TABLE -->

<!-- XTIAN TABLE -->
<table class="xtian" id="xtian">
  <tr> 
    <td> <b>Religion Links</b> <hr>
	  <p>- <a href="tnk.php">Compliation of the OT</a>
	  <p>- <a href="messiah.php">The Jewish Messiah</a> 
	  <p>- <a href="gospels.php">The Gospels</a>
	  <p>- <a href="nt.php">Compliation of the NT</a> 
      <p>- <a href="flood.php">Noah\'s Ark and The Flood</a>
	  <p>- <a href="http://www.earlychristianwritings.com" target="_blank">Early Christian Writings (offsite)</a>
	<p>- <a href="http://deusdiapente.blogspot.com" target="_blank">My Religion Blog</a>  <!--
	  
      <hr>                                                                                   
	  <b>Arguments for the Existence of God</b> 
      <p>- <a href="Cosmological.php">The Cosmological Argument</a> 
      <p>- <a href="FineTuning.php">The Fine Tuning Argument</a>
      <p>- <a href="Ontological.php">The Ontological Argument</a> 
      <p>- <a href="TAG.php">The Transcendental Argument</a>
	  <p>- <a href="revelation.php">The Argument from Personal Revelation</a>	        
	  <hr>
      <b>Arguments Against the Existence of God</b>
	  <p> - <a href="induction.php">The Inductive Argument</a> --> 
	  </td>
  </tr>
</table>
<!-- end XTIAN TABLE -->
';
	break;

}


?>
