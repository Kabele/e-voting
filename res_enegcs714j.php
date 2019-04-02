
<?php
error_reporting(0);
require('qs_connection.php');
require_once('admin_users.php');
require_once('qs_functions.php');
$
$err_string = "";

@session_start();
$_SESSION["Admin_UserLogon"] = ""
?>
<HTML>

<HEAD>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <meta http-equiv="refresh" content="2" />
<Title>Results</Title>

<meta http-equiv="" content="3" > 

<script type="text/javascript" src="PHP/js/yahoo-min.js" ></script>
<script type="text/javascript" src="PHP/js/dom-min.js" ></script>
<script type="text/javascript" src="PHP/js/event-min.js" ></script>

<script type="text/javascript">

   YAHOO.util.Event.onDOMReady( function() { qsPageOnLoadController(); } );  

</script>


	<link rel="stylesheet" type="text/css" href="PHP/css/ContentLayout.css"></link>


<script type="text/javascript">

var qsPageItemsCount = 3
var _Studid                                   = 0;
var _Password                                 = 1;
var _Leve                                     = 2;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Studid] = "Studid";
fieldPrompts[_Password] = "Password";
fieldPrompts[_Leve] = "Leve";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Studid] = "Studid";
fieldTechNames[_Password] = "Password";
fieldTechNames[_Leve] = "Leve";

// This function dynamically assigns element 'ID' attributes to all relevant elements
function qsAssignElementIDs() {

  // STEP 1: Assign an ID to all field PROMPTS (TD captions)
  // Scan all table TD tags for those that match field prompts
  var TDs = document.getElementsByTagName("td");
  for (var i=0; i < TDs.length; i++) {
    var element = TDs[i];
    // Check if the TD found is one of the Page Items header
    // This can only be an approximation as some TDs other than the actual field prompts
    // may contain the same caption. In that case all TDs found will carry the same ID.
    if (element.className == "ThRows" || element.className == "TrOdd") {
      for (var f=0; f < qsPageItemsCount; f++) {
        if (element.innerHTML == fieldPrompts[f]) {
            element.id = fieldTechNames[f] + "_caption_cell";
          element.innerHTML = "<div id='" + fieldTechNames[f] + "_caption_div'>" + element.innerHTML + "</div>";
        }
      }
    }
  }

  // STEP 2: Assign an ID to all Input controls on the form
  document.getElementsByName("4")[0].id = fieldTechNames[_Studid];
  document.getElementsByName("5")[0].id = fieldTechNames[_Password];
}

function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_login_form")[0];   //Define Form Object by Name.



}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>





<link href="admin/candidate.css" rel="stylesheet" type="text/css">

</style>
 
<script>

function usrEvent__Login_To_Admin__onload() { }
function usrEvent__Login_To_Admin__onunload() { }
function usrEvent__Login_To_Admin__onresize() { }

// This function controls the OnUnload event dispatching
function qsPageOnUnloadController() { }

// This function controls the OnResize event dispatching
function qsPageOnResizeController() {   
   var lastResult = false                              
   return true;                                        
}                                                      

// This function controls the OnLoad events dispatching
function qsPageOnLoadController() {   
   var lastResult = false                              

   // Invoke the technical field names abstraction initialization
   qsPageItemsAbstraction();

   // Invoke the Element IDs assignment function
   qsAssignElementIDs();

   // Invoke the Page Items custom events assignments
   qsAssignPageItemEvents();
   // Assign Event Handlers for page-level events
   YAHOO.util.Event.addListener(window, "beforeunload", qsPageOnUnloadController);
   YAHOO.util.Event.addListener(window, "resize", qsPageOnResizeController);
   // Set focus on first enterable page item available
  document.getElementsByName("User")[0].focus(); 
   return true;                                        
}                                                      

function usrEvent__Login_To_Admin__onsubmit(frm) { }
function usrEvent__Login_To_Admin__onreset() { }

// This function controls the OnSubmit event dispatching
function qsFormOnSubmitController(frm) {                 
   var lastResult = false                              
   return true;                                        
}                                                      

// This function controls the OnReset event dispatching
function qsPageOnResetController() {   
   var lastResult = false                              
   return true;                                        
}                                                      


</script>

<style type="text/css">
<!--
.style1 {font-size: 16px}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</HEAD>
<style type="text/css">
<!-- DIV.scrambledGenWarning {display:block;text-align:center;width:320px;position:absolute;top:130px;right:10px;border:1px solid #cc9911;background:#FEFFCE;padding:2px 0 8px 8px;font-weight: bold;font-family:Arial;font-size: 12px;font-weight: normal; color: black} .style6 {font-size: 24px}
.style12 {
	color: #6600FF;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
--> 
</style>
<BODY bgcolor="white" link="#DBFFFF">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">My Website</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="res.php">Results</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="admin/index.php">Admin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
 <!-- Caption Style -->
    <style> 
        .captionOrange, .captionBlack
        {
            color: #fff;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }
        .captionOrange
        {
            background: #EB5100;
            background-color: rgba(235, 81, 0, 0.6);
        }
        .captionBlack
        {
        	font-size:16px;
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        a.captionOrange, A.captionOrange:active, A.captionOrange:visited
        {
        	color: #ffffff;
        	text-decoration: none;
        }
        a.captionOrange:hover
        {
            color: #eb5100;
            text-decoration: underline;
            background-color: #eeeeee;
            background-color: rgba(238, 238, 238, 0.7);
        }
        .bricon
        {
            background: url(../img/browser-icons.png);
        }
    </style>







<Center>
  <center>
  </center>

<table width="1003" border="0" align="center">
  <tr>
    <td width="634"><div align="center"><font size="5"></font></div>
    <Table width="996" height="85" border="1">
        <?php 

$sqlcandi = mysql_query("select * from position");
while($rowcandi=mysql_fetch_array($sqlcandi))
{
?>
        <tr>
          <td colspan="3" align="center" class="ThRows style1"><span class="style6"><?php echo $rowcandi['position']; ?></span> </td>
        </tr>
        <?php
  $sqlvote6 = mysql_query("select * from candidate where position = '".$rowcandi['position']."' order by position, votecount desc");
	//$stud_query=mysql_query("SELECT result FROM votecount where position like 'president'");
	//$re=mysql_num_rows($stud_query);
	
	$percent_query=mysql_query("SELECT * FROM votecount where position like 'president'");
	while($tot_percent=mysql_num_rows($percent_query)){
	//$tot_stud = mysql_num_rows($stud_query);
while($row16 = mysql_fetch_array($sqlvote6)) {
	$count = $row16['votecount'];
	if($count > 0){ 
		$percent = ($count/$tot_percent)*100; 
	} else {
		$percent = 0;
	}
}

?>
        <tr>
          <td width="249" class="TrOdd"><span class="style6"><?php echo $row16['name']; ?></span></td>
          <td width="204" class="TrOdd"><span class="style6"><?php echo $row16['votecount']." - ".number_format ($percent, 2, '.', ' ')." %"; ?></span></td>
          
        </tr>
        <?php
}
?>
        <tr>
          <td colspan="3" align="center" class="TrHover style6">&nbsp;</td>
        </tr>
        <?php
}
?>
      </Table></td>
    
  </tr>
</table>
</Center>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</BODY>

</HTML>


<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>