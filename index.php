<?php
/*
========================================================

   01/22/2016 12:34:07 PM
   [Project Name]
   [Page Description]
   Adam D.
   Corus Entertainment
   adam.drake@corusent.com
   www.corusent.com

   --

   Modification Log:
   01/22/2016 12:34:07 PM: Created

========================================================
*/
ini_set('display_errors', 1); 
error_reporting(E_ALL);
define ("g_dbhost","localhost");
define ("g_dbusr","adamdtest");
define ("g_dbpass","MR8ePUP63jTbGaVG");
define ("g_dbname","adamdtest");
date_default_timezone_set('America/New_York');
$yearout = date ("Y");
$todaydate = date ("D, M jS Y");
$todaydateraw = date("Y-m-d");
$out="<p>This line is output using php.</p>";
$debug=0;
$debugout="<hr noshade size=\"1\">\n<p><i><b>Debug Output</b></i></p>\n";
$error=0;
$errorout="";
/*
$sql="select distinct testid, post_date, title, message from test_table order by testid desc;";
$db = new PDO('mysql:host='.g_dbhost.';dbname='.g_dbname.';charset=utf8', g_dbusr, g_dbpass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	try {
		$stmt=$db->query($sql);
				while($db_row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$out.="<p><strong>Date:</strong> ".$db_row["post_date"]."<br />\r\n<strong>Title:</strong> ".$db_row["title"]."<br />\r\n<strong>Message:</strong> ".$db_row["message"]."</p>\r\n";
				}
	} catch(PDOException $ex) {
		$out.="<p>An Error occured! [".$ex->getMessage()."]</p>";
	}
$db=null;*/
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
   <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <meta http-equiv="Content-Language" content="en-us" />
   <meta name="medium" content="blog" />
   <meta name="viewport" content="width=1000" />
   <style type="text/css">
   <!--
   html {margin: 0 auto;}
   html, body, div, span, applet, object, iframe {
   margin:0;padding:0;border:0;outline:0;font-weight:inherit;font-style:inherit;font-size:100%;font-family:inherit;vertical-align:baseline;}
   :focus {outline:0;}
   ol, ul {list-style:none;}
   .small {font:10px verdana, arial, helvetica;color:#663300;margin-top:0in;margin-bottom:.0in;line-height:12px}
   body {position:absolute;top:0px;left:0px;background:#fff;display:block;width:100%;font:12px verdana, arial, helvetica;margin:0 auto;}
   a {color:#cc0000;text-decoration:none;}
   a:visited {color:#999999;text-decoration:none;}
   a:hover {color:#cc0000;text-decoration:underline;}
   .hideit {display:none;}
   .main {font-family:verdana;font-size:11px;}
   .caption {font-family:verdana;font-size:11px;color:#777;}
   .ind {text-indent:1.8em;}
   #clearit {clear:both;}
   -->
   </style>
<title>Adam D. Micro Website Test!</title>
</head>
<body>
   <div id="wrapper">
   <h2>Adam D. Micro Website Test!</h2>
   <?php
   echo $out;
   ?>
   </div>
<script type="text/javascript">
</script>
    <?php
       if($debug==1){
          print($debugout);
       }
    ?>
</body>
</html>
