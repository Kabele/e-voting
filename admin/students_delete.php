<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<?php
 
#  *** GENERATION INFORMATION *** 
#   
#  Project Name..............: voting system
#  Project Source............: C:\Documents and Settings\CSU-A\My Documents\My QwikSites\Projects\voting system\voting system.dbh
#  Project Session ..........: 03B6A788-1390-401D-87E7-13E99BF0F36C
#  Group Name................: Students
#  Group GUID................: 534F8770-A600-4D43-962A-45132980B727
#  Group SerialID............: 534
#  Page Name.................: Delete Students
#  Page Type.................: 5 - Delete Page
#  Page GUID.................: F3697960-4307-488D-B6FF-555A2EE445E5
#  Page SerialID.............: 539
#  Page File Name............: students_delete
#   
#  Generated on..............: Monday, October 27, 2008
#  Generation Timestamp......: 2008-27-10 21:46:53
#  Language..................: PHP
#   
#  7 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | Studid                                   | 5   | [studid]                                 | Studid                                   |
#  |   1 | Name                                     | 5   | [name]                                   | Name                                     |
#  |   2 | Course                                   | 5   | [course]                                 | Course                                   |
#  |   3 | Year                                     | 5   | [year]                                   | Year                                     |
#  |   4 | Sec                                      | 5   | [sec]                                    | Sec                                      |
#  |   5 | Password                                 | 5   | [password]                               | Password                                 |
#  |   6 | Sy                                       | 5   | [sy]                                     | Sy                                       |
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

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
require('qs_connection.php');
require('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
$err_string = "";
$quotechar = "`";
$quotedate = "'";
$sql = "";
$sql_ext = "";
$fields = array();
$fields[0] = "students.studid";
$fields[1] = "students.name";
$fields[2] = "students.course";
$fields[3] = "students.`year`";
$fields[4] = "students.sec";
$fields[5] = "students.password";
$fields[6] = "students.sy";
$fields = array();
$fields[0] = "students.studid";
$fields[1] = "students.name";
$fields[2] = "students.course";
$fields[3] = "students.`year`";
$fields[4] = "students.sec";
$fields[5] = "students.password";
$fields[6] = "students.sy";

$fieldcons = array();
$fieldcons[0] = "students.studid";
$fieldcons[1] = "students.name";
$fieldcons[2] = "students.course";
$fieldcons[3] = "students.`year`";
$fieldcons[4] = "students.sec";
$fieldcons[5] = "students.password";
$fieldcons[6] = "students.sy";

$sql .= " Select\n";
    $sql .= "     students.`studid`,\n";
    $sql .= "     students.`name`,\n";
    $sql .= "     students.`course`,\n";
    $sql .= "     students.`year`,\n";
    $sql .= "     students.`sec`,\n";
    $sql .= "     students.`password`,\n";
    $sql .= "     students.`sy`\n";
    $sql .= " From\n";
    $sql .= "     students   students\n";

if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
//Field Related Declarations
$req_Studid          = "del_fd0";
$req_Name            = "del_fd1";
$req_Course          = "del_fd2";
$req_Year            = "del_fd3";
$req_Sec             = "del_fd4";
$req_Password        = "del_fd5";
$req_Sy              = "del_fd6";

//Assign Recordset Field Index
$rs_idx_studid       = 0;
$rs_idx_name         = 1;
$rs_idx_course       = 2;
$rs_idx_year         = 3;
$rs_idx_sec          = 4;
$rs_idx_password     = 5;
$rs_idx_sy           = 6;

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
$result = mysql_query($sqltemp . " " . $sql_ext . " limit 0,1")
          or die("Invalid query");
if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
}
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
$qry_string = "";
$value_sql = "";
$currentrow_sql = "";
$hidden_tag = "";
$hiddenrow_tag = "";
$i = 0;
while ($i < mysql_num_fields($result)) {
    $meta = mysql_fetch_field($result);
    $field_name = $meta->name;
    $field_type = $meta->type;
    $type_field = "";
    $type_field = returntype($field_type);
    $quotedata = "";
    switch ($type_field) {
      case "type_datetime": $quotedata = $quotedate; break;
      case "type_string": $quotedata = "'"; break;
      case "type_integer": $quotedata = ""; break;
      case "type_unknown": $quotedata = "'"; break;
      default: $quotedata = "'";
    } 
    if (qsrequest("currentrow_fd" .$i) != "") {
        if ($currentrow_sql == "") {
            $currentrow_sql  = $fields[$i] . " = " . $quotedata . qsrequest("currentrow_fd" . $i) . $quotedata . "";
        } else {
            $currentrow_sql .= " and " . $fields[$i] . " = " . $quotedata . qsrequest("currentrow_fd" . $i) . $quotedata . "";
        }
        $hiddenrow_tag .= "<input type=\"hidden\" name=\"currentrow_fd" . $i . "\" value=\"" . qsrequest("currentrow_fd" . $i) . "\">\n";
    }
    $i++;
}
//Create recordset data 
    if ($result > 0) {mysql_free_result($result);}
    $sql = "";
$sql .= " Select\n";
    $sql .= "     students.`studid`,\n";
    $sql .= "     students.`name`,\n";
    $sql .= "     students.`course`,\n";
    $sql .= "     students.`year`,\n";
    $sql .= "     students.`sec`,\n";
    $sql .= "     students.`password`,\n";
    $sql .= "     students.`sy`\n";
    $sql .= " From\n";
    $sql .= "     students   students\n";
    $sql .= " where ".$currentrow_sql ;
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
    $result =  mysql_query($sql) or die("Invalid query");
    if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
    }
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
    $row = mysql_fetch_array($result);

//Check form submit 
if (isset($_POST["act"])) {
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
    $sql  = "";
    $sql  = "delete from " . $quotechar. mysql_field_table($result,0) . $quotechar;
    $sql .= " where ";
    $sql .= qsreplace_backslashes(stripslashes($currentrow_sql));
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
#----get submit url page----
    $submiturl = "./students.php?";
    if ($result > 0) {mysql_free_result($result);}
    if ($err_string == "") {
    if (!$result = @mysql_query($sql)){
        $err_string .= "<strong>Error:</strong>while updating<br>" . mysql_error();
// >> START OF "on delete data error" [DELDATAERR001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on delete data error" [DELDATAERR001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
    } else { 
// >> START OF "on delete data success" [DELETEDATASUCCESS001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on delete data success" [DELETEDATASUCCESS001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
    }
    if ($err_string == "") {
        if ($qry_string != "") {
            $URL= $submiturl . "&" . $qry_string;
        } else {
            $URL= $submiturl;
        }
            header ("Location: $URL");
            exit;
        }
    }
} //end if act
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<Title>Delete Students</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<link rel="stylesheet" type="text/css" href="students_delete.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>

<!-- The code section below is extracted from [dbQwikSiteInstallPath\Data\Includes\YUI-JSLoader.txt] file -->   
<!-- This file is included in all generated pages, right after JS basic initialization -->   
<!-- If you need more of the Yahoo UI libraries for your own custom use, you may add libraries here. -->   
<!-- This file is included in generated code BEFORE the 'ClientIncludes' Custom Code insertion point. -->
<!-- So you may chose to add other libraries via the 'ClientIncludes' Custom Code insertion point. -->

<!-- Load the YUI Loader scripts needed by dbQwikSite -->   
<script type="text/javascript" src="./js/yahoo-min.js" ></script>
<script type="text/javascript" src="./js/dom-min.js" ></script>
<script type="text/javascript" src="./js/event-min.js" ></script>

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
var qsPageItemsCount = 7
var _Studid                                   = 0;
var _Name                                     = 1;
var _Course                                   = 2;
var _Year                                     = 3;
var _Sec                                      = 4;
var _Password                                 = 5;
var _Sy                                       = 6;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Studid] = "Studid";
fieldPrompts[_Name] = "Name";
fieldPrompts[_Course] = "Course";
fieldPrompts[_Year] = "Year";
fieldPrompts[_Sec] = "Sec";
fieldPrompts[_Password] = "Password";
fieldPrompts[_Sy] = "Sy";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Studid] = "Studid";
fieldTechNames[_Name] = "Name";
fieldTechNames[_Course] = "Course";
fieldTechNames[_Year] = "Year";
fieldTechNames[_Sec] = "Sec";
fieldTechNames[_Password] = "Password";
fieldTechNames[_Sy] = "Sy";

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
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_delete_form")[0];   //Define Form Object by Name.







}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Delete Students -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]-->
<!-- << END OF "Delete Students -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]-->




<script>

function usrEvent__Delete_Students__onload() {
  // >> START OF "Delete Students -> On Load" [onload] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]
  // << END OF "Delete Students -> On Load" [onload] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]
}



function usrEvent__Delete_Students__onunload() {
  // >> START OF "Delete Students -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]
  // << END OF "Delete Students -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]
}



function usrEvent__Delete_Students__onresize() {
  // >> START OF "Delete Students -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]
  // << END OF "Delete Students -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]
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

   return true;                                        
}                                                      










function usrEvent__Delete_Students__onsubmit(frm) {
  // >> START OF "Delete Students -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]
  // << END OF "Delete Students -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]
}



function usrEvent__Delete_Students__onreset() {
  // >> START OF "Delete Students -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]
  // << END OF "Delete Students -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [F3697960-4307-488D-B6FF-555A2EE445E5]
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

<?php
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<meta name="generator" content="dbQwikSite Ecommerce"><meta name="dbQwikSitePE" content="QSFREEPE">
<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<BODY>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<Center>
<center><hr /><font size="5">
Delete Students
</font><hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<A NAME=top></A>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>

<?php
// >> START OF "before delete form" [FRMDEL001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before delete form" [FRMDEL001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<Form name="qs_delete_form" method="post" action="./students_delete.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php
print $hidden_tag;
print $hiddenrow_tag;
?>
<?php
// >> START OF "before data table" [DATATABLE001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before data table" [DATATABLE001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#D4D4D4">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows">Delete Students</td>
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
<td class="ThRows">Studid</td>
<?php
$itemvalue = "" . $row[0] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Studid -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [4CD5E8CD-50C4-422A-92B0-CAC64241A459] [Studid]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Studid -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [4CD5E8CD-50C4-422A-92B0-CAC64241A459] [Studid]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Name</td>
<?php
$itemvalue = "" . $row[1] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [822A3057-5488-4E14-A6B8-F763AB02D7FF] [Name]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [822A3057-5488-4E14-A6B8-F763AB02D7FF] [Name]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Course</td>
<?php
$itemvalue = "" . $row[2] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Course -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [27101F2F-C000-411B-8356-6DF0A1977E90] [Course]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Course -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [27101F2F-C000-411B-8356-6DF0A1977E90] [Course]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Year</td>
<?php
$itemvalue = "" . $row[3] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Year -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [44E4EBAD-029F-4230-A860-C65C629FB84E] [Year]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Year -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [44E4EBAD-029F-4230-A860-C65C629FB84E] [Year]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Sec</td>
<?php
$itemvalue = "" . $row[4] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sec -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [F10FB8DA-FBD3-40CB-A939-C277B07D0A33] [Sec]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Sec -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [F10FB8DA-FBD3-40CB-A939-C277B07D0A33] [Sec]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Password</td>
<?php
$itemvalue = "" . $row[5] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Password -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [E668E50A-50B8-4507-8679-ECB91DB108F5] [Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Password -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [E668E50A-50B8-4507-8679-ECB91DB108F5] [Password]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Phone No.</td>
<?php
$itemvalue = "" . $row[6] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [1CB562C1-5DE2-44EA-908E-5DC9775889F4] [Sy]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [1CB562C1-5DE2-44EA-908E-5DC9775889F4] [Sy]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<?php
#----get back url page----
  $backurl = "./students.php?";
?>
<tr>
<td class="ThRows">&nbsp;</td>
<td class="TrOdd" align=Default>
<input type="hidden" name="act" value="n">
<input type="button" name="QS_Back" value="Back" OnClick="javascript:window.location='<?php print $backurl; ?>'">&nbsp;&nbsp;
<input type="submit" name="QS_Submit" value="Delete">&nbsp;&nbsp;
</td>
</tr>
</Table><br>
<?php
// >> START OF "after data table" [DATATABLE001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after data table" [DATATABLE001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<?php
// >> START OF "after delete form" [FRMDEL001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after delete form" [FRMDEL001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
</Form>
<?php
if ($result > 0) {mysql_free_result($result);}
if ($link > 0) {mysql_close($link);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
</Center>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [F3697960-4307-488D-B6FF-555A2EE445E5] [Delete Students]
?>
