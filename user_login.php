
<?php
 
require('qs_connection.php');
require_once('admin_users.php');
require_once('qs_functions.php');

$err_string = "";

@session_start();

@ob_start();
if (isset($_POST["act"])) {
    $userlevel = 0;

    $sql = "";
$sql .= "  SELECT `studid` , `password` , `leve` , `leve` FROM `students`\n";
    $sql .= " WHERE ";
    $sql .= " `studid` = '".qsrequest("User"). "'" ;
    $sql .= " AND `password` = '" .qsrequest("Password"). "'";
if(!$result = @mysql_query($sql)){
    $err_string .= "<strong>Error:</strong> while connecting to database<br>" . mysql_error();
}else{
    $num_rows = mysql_num_rows($result);
    $row = mysql_fetch_array($result);
}
if ($err_string != "") {
    print "<Center><Table Border=\"0\" Cellspacing=\"1\" bgcolor=\"#CCCCCC\" >";
    print "<tr>";
    print "<td height=\"80\" align=\"Default\" bgcolor=\"#FFFFFF\">";
    print "<font color=\"#000099\" size=\"2\">";
    print $err_string;
    print "</font>";
    print "</td>";
    print "</tr>";
    print "</Table></Center>";
    exit;
}
    if ($num_rows >0) {
        $userlevel = $row[2];
    }
    if ($result > 0) {mysql_free_result($result);}

    if ($userlevel > 0) {
        $_SESSION["Admin_Logon"] = "TRUE";
        $_SESSION["Admin_UserLogon"] = qsrequest("User");
        $_SESSION["Admin_UserLevel"] = $userlevel;
        $RedirectURL = qssession("Admin_RedirectURL");
        if ($RedirectURL == "") {
          $RedirectURL = "./category.php";
        }
        if (qssession("firstredirecturl") == "") {
          $_SESSION["firstredirecturl"] = $RedirectURL;
        }
        header ("Location: $RedirectURL");

        @ob_end_flush();
        exit;
    } else {
        $err_string = "Login failed";
    }

} else{
    if ((qssession("Admin_UserLogon") != "") && (qssession("Admin_Logon") == "FALSE")) {
        $err_string = "Permission failed";
    }
}
?>
<HTML>

<HEAD>

<Title>Login To Vote</Title>

<script type="text/javascript" src="PHP/js/yahoo-min.js" ></script>
<script type="text/javascript" src="PHP/js/dom-min.js" ></script>
<script type="text/javascript" src="PHP/js/event-min.js" ></script>

<script type="text/javascript">

   YAHOO.util.Event.onDOMReady( function() { qsPageOnLoadController(); } );  

</script>


	 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<style type="text/css"><!-- DIV.scrambledGenWarning {display:block;text-align:center;width:320px;position:absolute;top:130px;right:10px;border:1px solid #cc9911;background:#FEFFCE;padding:2px 0 8px 8px;font-weight: bold;font-family:Arial;font-size: 12px;font-weight: normal; color: black} --> </style>
<BODY>
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.php">E-Franchise</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="res.php">Results</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="admin/index.php">Bios</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<Center>

<br><br><br><br><br>


<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">

        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">

        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">


<Form name="qs_login_form" method="post" action="user_login.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >

<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#D4D4D4" class="table table-bordered table-hover table-striped">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows" align="center">Login To Vote </td>
</tr>
<?php
if ($err_string != "") {
    print "<tr>";
    print "<td class=\"ThRows\"><Strong>Error:</Strong></td>";
    print "<td class=" . $css_class . " align=Default>" . $err_string . "</td>";
    print "</tr>";
}
?>
<tr>
<td class="ThRows">Login:</td>
<td class="TrOdd" align=Default><input name="User" type="text"></td>
</tr>
<tr>
<td class="ThRows">Password:</td>
<td class="TrOdd" align=Default><input name="Password" type="password"></td>
</tr>
<tr>
<td class="ThRows">&nbsp;</td>
<td class="TrOdd" align=Default>
<input type="hidden" name="act" value="n">
<input type="submit" name="QS_Submit" value="Login" class="btn btn-primary btn-lng">
&nbsp;&nbsp;
<input type="reset" name="Reset" value="Reset" class="btn btn-danger btn-lng">
</td>
</tr>
</Table><br>
<A HREF="PHP/admin_password.php"></A>

</Form>
<a href="source/reset-pwd-req.php" class="btn btn-primary">forgot password</a>

        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
</Center>
</BODY>

</HTML>

