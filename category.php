<?php

require('connect.php');
require('functions.php');
@session_start();

if($_SESSION["Admin_UserLogon"] == ""){
		$admin="<meta http-equiv=\"Refresh\" content=\"0;url=./index.php\">";
		echo($admin); 
}else{

$stud = mysql_query("select * from students where studid = '".$_SESSION["Admin_UserLogon"]."' group by studid");
$s = mysql_fetch_array($stud);
$we = mysql_query("select name from students where studid = '".$_SESSION["Admin_UserLogon"]."' group by studid");
$w = mysql_fetch_array($we);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Choose wisely</title>
<link href="res.css" rel="stylesheet" type="text/css">
<link rel="icon" href="pictures/fav.jpg">
<style type="text/css">
<!--
.style1 {color: #0000CC}
.style2 {
	font-size: 24pt;
	color: #FFCC66;
	font-weight: bold;
}
.style3 {
	color: #FFCC66;
	font-size: 16pt;
}
body,td,th {
	color: #FFFFFF;
}
a:visited {
	color: #990000;
}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<table width="845" border="0" align="center">
  
  <tr>
  	<th width="170" align="left"><span class="style1">Welcome, <br><?php echo $w['name']; ?></span></th>
    <th width="128" align="left" scope="col">&nbsp;</th>
    <th height="41" colspan="2" align="left" scope="col"><span class="style1">Open Categories</span> </th>
  </tr>
 <?php 
  $vote = mysql_query("SELECT position, IDNo FROM position order by IDNo");
		while($me = mysql_fetch_array($vote))
		{
			$voto = mysql_query("SELECT * FROM votecount where StudID='".$_SESSION["Admin_UserLogon"]."' AND Position = '".$me['position']."'");		
			$me2 = mysql_fetch_array($voto);
  ?>
 
  <tr>
    <th scope="col">&nbsp;</th>
    <th width="102" scope="col">&nbsp;</th>
    <th width="601" height="41" align="left" scope="col">
	<?php 
		
		if(mysql_num_rows($voto)> 0  || $me2['Result'] !=0) {
		$_SESSION[$me['position']] = $me2['Result']; 
		echo $me['position'];
		
		} else {
		?>
      <a href="votepage.php?cat=<?php echo $me['position']; ?>"><?php echo $me['position']; ?></a><br>
	  <?php 
	 $_SESSION[$me['position']] = $me2['Result']; 
	  }
	  ?>	</th>
  </tr>
   <?php
  
  
}
   ?>
  <tr>
    <th scope="col">&nbsp;</th>
    <th height="41" colspan="2" scope="col"><a href="index.php">Log - out</a></th>
  </tr>
 
</table>
</body>
</html>
<?php
}
?>