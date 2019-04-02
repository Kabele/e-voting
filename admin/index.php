<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
?>
<?php
 
#  *** GENERATION INFORMATION *** 
#   
#  Project Name..............: log
#  Project Source............: C:\Documents and Settings\CSU-A\My Documents\My QwikSites\Projects\log\log.dbh
#  Project Session ..........: A7F7035E-E02B-47A3-9F0E-78C8E82255E2
#  Group Name................: Admin
#  Group GUID................: C0AF8721-5DB0-4C8E-9EEC-36F1629E3810
#  Group SerialID............: 385
#  Page Name.................: Login To Admin
#  Page Type.................: 6 - Login Page
#  Page GUID.................: DF9ADF82-F417-43A2-B171-95A29A082613
#  Page SerialID.............: 397
#  Page File Name............: admin_login
#   
#  Generated on..............: Tuesday, October 28, 2008
#  Generation Timestamp......: 2008-28-10 11:23:20
#  Language..................: PHP
#   
#  3 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | Username                                 | 1   | username                                 | Username                                 |
#  |   1 | Password                                 | 1   | password                                 | Password                                 |
#  |   2 | Leve                                     | 0   | leve                                     | Leve                                     |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#   
#  Field Types Definition:
#     0 - TEXT       
#     1 - IMAGE      
#     2 - TEXTBOX    
#     3 - RADIOBUTTON
#     4 - LISTMENU   
#     5 - STATICTEXT 
#     6 - HIDDEN     
#     8 - UPLOAD     
#     7 - DATEPICKER 
#     9 - FIELD      
#    10 - CHECKBOX   
#   
#  *** END OF GENERATION INFORMATION *** 
#   

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
require('qs_connection.php');
require_once('admin_users.php');
require_once('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
$err_string = "";
// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
@ob_start();
if (isset($_POST["act"])) {
    $userlevel = 0;
// >> START OF "before check user login" [SECCHK004] [PRE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check user login" [SECCHK004] [PRE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
    $sql = "";
$sql .= "  SELECT `username` , `password` , `leve` , `leve` FROM `admin`\n";
    $sql .= " WHERE ";
    $sql .= " `username` = '".qsrequest("User"). "'" ;
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
// >> START OF "after check user login" [SECCHK004] [POST] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check user login" [SECCHK004] [POST] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
// >> START OF "before check secure level" [SECCHK003] [PRE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check secure level" [SECCHK003] [PRE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
    if ($userlevel > 0) {
        $_SESSION["Admin_Logon"] = "TRUE";
        $_SESSION["Admin_UserLogon"] = qsrequest("User");
        $_SESSION["Admin_UserLevel"] = $userlevel;
        $RedirectURL = qssession("Admin_RedirectURL");
        if ($RedirectURL == "") {
          $RedirectURL = "./home.php";
        }
        if (qssession("firstredirecturl") == "") {
          $_SESSION["firstredirecturl"] = $RedirectURL;
        }
        header ("Location: $RedirectURL");
// >> START OF "on init login redirect" [SECREDIR002] [INLINE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on init login redirect" [SECREDIR002] [INLINE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
        @ob_end_flush();
        exit;
    } else {
        $err_string = "Login failed";
    }
// >> START OF "after check secure level" [SECCHK003] [POST] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check secure level" [SECCHK003] [POST] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
} else{
    if ((qssession("Admin_UserLogon") != "") && (qssession("Admin_Logon") == "FALSE")) {
        $err_string = "Permission failed";
    }
}
?>
<HTML>
<HEAD>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../pictures/fav.jpg">

<Title>System Bios</Title>
<link rel="stylesheet" type="text/css" href="candidate.css">

<!-- The code section below is extracted from [dbQwikSiteInstallPath\Data\Includes\YUI-JSLoader.txt] file -->   
<!-- This file is included in all generated pages, right after JS basic initialization -->   
<!-- If you need more of the Yahoo UI libraries for your own custom use, you may add libraries here. -->   
<!-- This file is included in generated code BEFORE the 'ClientIncludes' Custom Code insertion point. -->
<!-- So you may chose to add other libraries via the 'ClientIncludes' Custom Code insertion point. -->

<!-- Load the YUI Loader scripts needed by dbQwikSite -->   

<script type="text/javascript">

  // Invoke dbQwikSite Page OnLoad controller as soon as the page is ready 
  // This should always happen first, any user custom-code should run after
  YAHOO.util.Event.onDOMReady( function() { qsPageOnLoadController(); } );  

</script>

<!-- END OF STD-Loader.txt -->

<!-- The code section below is extracted from [dbQwikSiteInstallPath\Data\Includes\STD-Loader.txt] file -->   
<!-- This file is included in all generated pages, right after Javascript basic initialization -->   

<!-- You may write JS File Includes, CSS includes or inline JavaScript code as needed. -->   
<!-- This file is included in generated code BEFORE the 'ClientIncludes' Custom Code insertion point. -->

<!-- Add all your customization below -->

	<link rel="stylesheet" type="text/css" href="./css/ContentLayout.css"></link>


<!-- END OF STD-Loader.txt -->


<script type="text/javascript">

// Declares all constants and arrays
// for all page items used on the page

// Declare Field Indexes for all page items
var qsPageItemsCount = 3
var _Username                                 = 0;
var _Password                                 = 1;
var _Leve                                     = 2;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Username] = "Username";
fieldPrompts[_Password] = "Password";
fieldPrompts[_Leve] = "Leve";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Username] = "Username";
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
  document.getElementsByName("4")[0].id = fieldTechNames[_Username];
  document.getElementsByName("5")[0].id = fieldTechNames[_Password];
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
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




<!-- >> START OF "Login To Admin -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]-->
<!-- << END OF "Login To Admin -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]-->




<script>

function usrEvent__Login_To_Admin__onload() {
  // >> START OF "Login To Admin -> On Load" [onload] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
  // << END OF "Login To Admin -> On Load" [onload] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
}



function usrEvent__Login_To_Admin__onunload() {
  // >> START OF "Login To Admin -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
  // << END OF "Login To Admin -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
}



function usrEvent__Login_To_Admin__onresize() {
  // >> START OF "Login To Admin -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
  // << END OF "Login To Admin -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
}



// This function controls the OnUnload event dispatching
function qsPageOnUnloadController() {   
}



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






function usrEvent__Login_To_Admin__onsubmit(frm) {
  // >> START OF "Login To Admin -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
  // << END OF "Login To Admin -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
}



function usrEvent__Login_To_Admin__onreset() {
  // >> START OF "Login To Admin -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
  // << END OF "Login To Admin -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [DF9ADF82-F417-43A2-B171-95A29A082613]
}



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

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="generator" content="dbQwikSite Ecommerce"><meta name="dbQwikSitePE" content="QSFREEPE">
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
                <a class="navbar-brand topnav" href="../index.php">E-Franchise</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="../res.php">Results</a>
                    </li>
                    <li>
                        <a href="../contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="index.php">Bios</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<Center>
<br>

<A NAME=top></A>

<table width="453" height="267" id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td width="18" id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">

        </div>
    </td>
    <td width="404" id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">

        </div>
    </td>
    <td width="15" id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">

        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td height="213" id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">

        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">


<Form name="qs_login_form" method="post" action="./index.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >

<Table height="113" Border="0" align="center" Cellpadding="2" Cellspacing="1" BgColor="#FFFFFF">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows">System Bios</td>
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
<td height="24" class="ThRows">&nbsp;</td>
<td class="TrOdd" align=Default>
<input type="hidden" name="act" value="n">
<input type="submit" name="QS_Submit" value="Submit">&nbsp;&nbsp;
<input type="reset" name="Reset" value="Reset">
</td>
</tr>
</Table><br>
<A HREF="admin_password.php"></A>
<?php
// >> START OF "after login form" [LOGINFRM001] [POST] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after login form" [LOGINFRM001] [POST] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
?>
</Form>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [DF9ADF82-F417-43A2-B171-95A29A082613] [Login To Admin]
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
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