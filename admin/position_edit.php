<?php
require('qs_connection.php');
require('qs_functions.php');

$row = "";
@session_start();
$err_string = "";
$quotechar = "`";
$quotedate = "'";
$sql = "";
$sql_ext = "";
$fields = array();
$fields[0] = "`position`.`position`";
$fields[1] = "`position`.`IDNo`";
$fields[2] = "`position`.`Limit`";
$formatdate = array();
$formatdate[0] = "";
$formatdate[1] = "";
$formatdate[2] = "";
$seperatedate = array();
$seperatedate[0] = " ";
$seperatedate[1] = " ";
$seperatedate[2] = " ";
$fields = array();
$fields[0] = "`position`.`position`";
$fields[1] = "`position`.`IDNo`";
$fields[2] = "`position`.`Limit`";

$fieldcons = array();
$fieldcons[0] = "`position`.`position`";
$fieldcons[1] = "`position`.`IDNo`";
$fieldcons[2] = "`position`.`Limit`";
$isEditables = array();
$isEditables[0] = 1;
$isEditables[1] = 1;
$isEditables[2] = 1;

$sql .= " Select\n";
    $sql .= "     `position`.`position`,\n";
    $sql .= "     `position`.`IDNo`,\n";
	$sql .= "     `position`.`Limit`\n";
    $sql .= " From\n";
    $sql .= "     `position`   `position`\n";

//Field Related Declarations
$req_Position        = "edit_fd0";
$req_Noparticipant   = "edit_fd1";

//Assign Recordset Field Index
$rs_idx_position     = 0;
$rs_idx_noparticipant = 1;

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
$result = mysql_query($sqltemp . " " . $sql_ext . " limit 0,1")
          or die("Invalid query");
if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
}
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
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
    if (qsvalidRequest("search_fd" .$i)) {
        if ($qry_string == "") {
            $qry_string = "search_fd" . $i . "=" . qsrequest("search_fd" . $i);
        } else {
            $qry_string .= "&search_fd" .$i . "=" . qsrequest("search_fd" . $i);
        }
        $hidden_tag .= "<input type=\"hidden\" name=\"search_fd" . $i . "\" value=\"" . qsrequest("search_fd" . $i) . "\">\n";
        if ($qry_string == "") {
            $qry_string = "multisearch_fd" . $i . "=" . urlencode(stripslashes(qsrequest("multisearch_fd" . $i)));
        } else {
            $qry_string .= "&multisearch_fd" .$i . "=" . urlencode(stripslashes(qsrequest("multisearch_fd" . $i)));
        }
        $hidden_tag .= "<input type=\"hidden\" name=\"multisearch_fd" .$i . "\" value=\"" . qsreplace_html_quote(stripslashes(qsrequest("multisearch_fd" . $i))) . "\">\n";
    }
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
    if ($meta) {
        if (qsrequest("currentrow_fd" .$i) != "") {
            if ($currentrow_sql == "") {
                $currentrow_sql  = $fields[$i] . " = " . $quotedata . ereg_replace("'","''",stripslashes(qsrequest("currentrow_fd" . $i))) . $quotedata;
            } else {
                $currentrow_sql .= " and " .$fields[$i] . " = " . $quotedata . ereg_replace("'","''",stripslashes(qsrequest("currentrow_fd" . $i))) . $quotedata;
            }
            $hiddenrow_tag .= "<input type=\"hidden\" name=\"currentrow_fd" . $i . "\" value=\"" . qsreplace_html_quote(stripslashes(qsrequest("currentrow_fd" . $i))) . "\">\n";
        }
      if($isEditables[$i])
      {
        if ($type_field == "type_datetime") {
            if (qsvalidRequest("edit_fd" . $i)) {
                $idata = qsrequest("edit_fd" . $i);
// >> START OF "before add date/time form field to sql (php)" [ITEMBEFADDTOSQLDTM] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add date/time form field to sql (php)" [ITEMBEFADDTOSQLDTM] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]

                $value_sql .= "," . $quotechar . $field_name . $quotechar . " = " . $quotedate . qsconvertdate2ansi($idata,$formatdate[$i],$seperatedate[$i]) . $quotedate;
            }
            else if($isEditables[$i] != 2) {
		             $value_sql .= "," . $quotechar . $field_name . $quotechar . " = null"; 
	           }
        } elseif ($type_field == "type_integer") {
            if (qsvalidRequest("edit_fd" . $i)) {
                $idata = qsrequest("edit_fd" . $i);
                $idata = QSConvert2EngNumber($idata); 
// >> START OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]

                if (is_numeric($idata)) {
                        $value_sql  .= "," . $quotechar . $field_name . $quotechar . " = " . $idata;
                } else {
                    $err_string .= "<strong>Error:</strong>while updating<strong>" . $field_name . "</strong>.<br>";
                    $err_string .= "Description: Type mismatch.<br>";
                }
            }
			       else if($isEditables[$i] != 2) {
		             $value_sql .= "," . $quotechar . $field_name . $quotechar . " = null"; 
	           }
        } elseif ($type_field == "type_string") {
            if (qsvalidRequest("edit_fd" . $i)) {
                $idata = qsrequest("edit_fd" . $i);
// >> START OF "before add string form field to sql (php)" [ITEMBEFADDTOSQLSTRING] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add string form field to sql (php)" [ITEMBEFADDTOSQLSTRING] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]

                $value_sql  .= "," . $quotechar . $field_name . $quotechar . " = '" . ereg_replace("'","''",stripslashes($idata)) . "'";
            }
			       else if($isEditables[$i] != 2) {
		             $value_sql .= "," . $quotechar . $field_name . $quotechar . " = null"; 
	           }
        } else {
            if (qsvalidRequest("edit_fd" . $i)) {
                $idata = qsrequest("edit_fd" . $i);
// >> START OF "before add other form field to sql (php)" [ITEMBEFADDTOSQLOTHER] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add other form field to sql (php)" [ITEMBEFADDTOSQLOTHER] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]

                $value_sql  .= "," . $quotechar . $field_name . $quotechar . " = '" . ereg_replace("'","''",stripslashes($idata)) . "'";
            }
			       else if($isEditables[$i] != 2) {
		             $value_sql .= "," . $quotechar . $field_name . $quotechar . " = null"; 
	           }
        }
// >> START OF "after add form field to sql (php)" [ITEMAFTADDTOSQL] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after add form field to sql (php)" [ITEMAFTADDTOSQL] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]

      }//if ($isEditables[$i])
    }//if ($meta)
$i++;
}
if (isset($_POST["act"])) {
   $ProcessForm  = "Y"; 
// >> START OF "before server form processing" [FORMPROCESS001] [PRE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before server form processing" [FORMPROCESS001] [PRE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
   if ($ProcessForm  == "Y") { 
if (($err_string)=="") {
    if (($value_sql)!="") {
        if (substr($value_sql, 0, 1) == ",") {
           $value_sql = substr($value_sql, 1);
        }
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
        $sql  = "";
        $sql  = "update " . $quotechar . mysql_field_table($result,0) . $quotechar;
        $sql .= " set " . $value_sql;
        $sql .= " where ";
        $sql .= $currentrow_sql;
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
      if ($result > 0) {mysql_free_result($result);}
      if (!$result = @mysql_query($sql)){
        $err_string .= "<strong>Error:</strong>while updating<br>" . mysql_error();
// >> START OF "on update data error" [UPDATEDATAERR001] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on update data error" [UPDATEDATAERR001] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
      } else {
// >> START OF "on update data success" [UPDATEDATASUCCESS001] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on update data success" [UPDATEDATASUCCESS001] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
      }
    }
#----get submit url page----
    $submiturl = "./position.php?";
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
  } //end if ProcessForm 
// >> START OF "after server form processing" [FORMPROCESS001] [POST] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after server form processing" [FORMPROCESS001] [POST] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
}
else
{
    if ($result > 0) {mysql_free_result($result);}
    $sql = "";
$sql .= " Select\n";
    $sql .= "     `position`.`position`,\n";
    $sql .= "     `position`.`IDNo`,\n";
	$sql .= "     `position`.`Limit`\n";
    $sql .= " From\n";
    $sql .= "     `position`   `position`\n";
  if ($currentrow_sql != "") {
    $sql .= " where ".$currentrow_sql ;
  }
    $result =  mysql_query($sql) or die("Invalid query");
    $row = mysql_fetch_array($result);
}
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
?>
<Title>Update Position</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
?>
<link rel="stylesheet" type="text/css" href="position_edit.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
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
var qsPageItemsCount = 2
var _Position                                 = 0;
var _Noparticipant                            = 1;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Position] = "Position";
fieldPrompts[_IDNo] = "IDNo";
fieldPrompts[_Limit] = "Limit";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Position] = "Position";
fieldTechNames[_IDNo] = "IDNo";
fieldTechNames[_Limit] = "Limit";

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
  document.getElementsByName("edit_fd0")[0].id = fieldTechNames[_Position];
  document.getElementsByName("edit_fd1")[0].id = fieldTechNames[_IDNo];
  document.getElementsByName("edit_fd2")[0].id = fieldTechNames[_Limit];
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_edit_form")[0];   //Define Form Object by Name.
  pgitm_Position                           = document.getElementsByName("edit_fd0")[0];
  pgitm_IDNo		                       = document.getElementsByName("edit_fd1")[0];
  pgitm_Limit 		                       = document.getElementsByName("edit_fd2")[0];
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Update Position -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]-->
<!-- << END OF "Update Position -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]-->




<script>

function usrEvent__Update_Position__onload() {
  // >> START OF "Update Position -> On Load" [onload] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]
  // << END OF "Update Position -> On Load" [onload] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]
}



function usrEvent__Update_Position__onunload() {
  // >> START OF "Update Position -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]
  // << END OF "Update Position -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]
}



function usrEvent__Update_Position__onresize() {
  // >> START OF "Update Position -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]
  // << END OF "Update Position -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]
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
  pgitm_Position.focus();
   return true;                                        
}                                                      


function usrEvent__Position__onfocus(HTMLElement) {
  // >> START OF "Position -> On Focus" [onfocus] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Focus" [onfocus] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onblur(HTMLElement) {
  // >> START OF "Position -> On Blur (loss of focus)" [onblur] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Blur (loss of focus)" [onblur] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onclick(HTMLElement) {
  // >> START OF "Position -> On Click" [onclick] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Click" [onclick] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__ondblclick(HTMLElement) {
  // >> START OF "Position -> On Double Click" [ondblclick] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Double Click" [ondblclick] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onkeydown(HTMLElement) {
  // >> START OF "Position -> On Key Down" [onkeydown] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Key Down" [onkeydown] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onkeypress(HTMLElement) {
  // >> START OF "Position -> On Key Press" [onkeypress] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Key Press" [onkeypress] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onkeyup(HTMLElement) {
  // >> START OF "Position -> On Key Up" [onkeyup] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Key Up" [onkeyup] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onchange(HTMLElement) {
  // >> START OF "Position -> On Change" [onchange] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Change" [onchange] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onmousedown(HTMLElement) {
  // >> START OF "Position -> On Mouse Down" [onmousedown] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Mouse Down" [onmousedown] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onmousemove(HTMLElement) {
  // >> START OF "Position -> On Mouse Move" [onmousemove] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Mouse Move" [onmousemove] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onmouseout(HTMLElement) {
  // >> START OF "Position -> On Mouse Out" [onmouseout] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Mouse Out" [onmouseout] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onmouseover(HTMLElement) {
  // >> START OF "Position -> On Mouse Over" [onmouseover] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Mouse Over" [onmouseover] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onmouseup(HTMLElement) {
  // >> START OF "Position -> On Mouse Up" [onmouseup] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Mouse Up" [onmouseup] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}
function usrEvent__Position__onselect(HTMLElement) {
  // >> START OF "Position -> On Select" [onselect] [Position] [START] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
  // << END OF "Position -> On Select" [onselect] [Position] [STOP] [JS] [B1E202BD-0A29-406A-8CFF-95A044E24FAC]
}

function usrEvent__Noparticipant__onfocus(HTMLElement) {
  // >> START OF "Noparticipant -> On Focus" [onfocus] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Focus" [onfocus] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onblur(HTMLElement) {
  // >> START OF "Noparticipant -> On Blur (loss of focus)" [onblur] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Blur (loss of focus)" [onblur] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onclick(HTMLElement) {
  // >> START OF "Noparticipant -> On Click" [onclick] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Click" [onclick] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__ondblclick(HTMLElement) {
  // >> START OF "Noparticipant -> On Double Click" [ondblclick] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Double Click" [ondblclick] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onkeydown(HTMLElement) {
  // >> START OF "Noparticipant -> On Key Down" [onkeydown] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Key Down" [onkeydown] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onkeypress(HTMLElement) {
  // >> START OF "Noparticipant -> On Key Press" [onkeypress] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Key Press" [onkeypress] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onkeyup(HTMLElement) {
  // >> START OF "Noparticipant -> On Key Up" [onkeyup] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Key Up" [onkeyup] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onchange(HTMLElement) {
  // >> START OF "Noparticipant -> On Change" [onchange] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Change" [onchange] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onmousedown(HTMLElement) {
  // >> START OF "Noparticipant -> On Mouse Down" [onmousedown] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Mouse Down" [onmousedown] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onmousemove(HTMLElement) {
  // >> START OF "Noparticipant -> On Mouse Move" [onmousemove] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Mouse Move" [onmousemove] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onmouseout(HTMLElement) {
  // >> START OF "Noparticipant -> On Mouse Out" [onmouseout] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Mouse Out" [onmouseout] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onmouseover(HTMLElement) {
  // >> START OF "Noparticipant -> On Mouse Over" [onmouseover] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Mouse Over" [onmouseover] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onmouseup(HTMLElement) {
  // >> START OF "Noparticipant -> On Mouse Up" [onmouseup] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Mouse Up" [onmouseup] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}
function usrEvent__Noparticipant__onselect(HTMLElement) {
  // >> START OF "Noparticipant -> On Select" [onselect] [Noparticipant] [START] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
  // << END OF "Noparticipant -> On Select" [onselect] [Noparticipant] [STOP] [JS] [2CF441BB-F56E-4148-8E17-747768A1785C]
}


function usrEvent__Update_Position__onsubmit(frm) {
  // >> START OF "Update Position -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]
  // << END OF "Update Position -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]
}



function usrEvent__Update_Position__onreset() {
  // >> START OF "Update Position -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]
  // << END OF "Update Position -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [55F77E47-CE80-4249-9EF7-678A457D2436]
}



// This function controls the OnSubmit event dispatching
function qsFormOnSubmitController(frm) {                 
   var lastResult = false                              
   // Call the standard dbQwikSite form validation rules
   lastResult = check(frm);                            
   if (lastResult == false) {                          
      return false;                                    
   }                                                   
   return true;                                        
}                                                      



// This function controls the OnReset event dispatching
function qsPageOnResetController() {   
   var lastResult = false                              
   return true;                                        
}                                                      


</script>

<script language='javascript' src='qwikcalendar.js'></script>
<script language="javascript">
function Trim(s){
    var temp = " ";
    var i = 0;
    while ((temp == " ") && (i <= s.length)) {
        temp = s.charAt(i);
        i++;
    }
    s = s.substring(i - 1, s.length);
    return(s);
}
function check(frm) {
    var szAlert = "Invalid\n";
    var nIndex = 0;
    if (!RequiredField(frm.edit_fd0.value)) {
        nIndex++;
        szAlert += "- " +"'Position' cannot be blank\n";
    }
    if (!RequiredField(frm.edit_fd1.value)) {
        nIndex++;
        szAlert += "- " +"'IDNo' cannot be blank\n";
    }
    if (!NumberValidate(frm.edit_fd1.value)) {
        nIndex++;
        szAlert += "- " +"'IDNo' invalid numeric format\n";
    }
	if (!RequiredField(frm.edit_fd2.value)) {
        nIndex++;
        szAlert += "- " +"'Limit' cannot be blank\n";
    }
    if (!NumberValidate(frm.edit_fd2.value)) {
        nIndex++;
        szAlert += "- " +"'Limitt' invalid numeric format\n";
    }
    if(nIndex > 0) {
       	alert(szAlert) ;
      	return false ;
    }
    return true ;
}
</script>
<script src="validate.js"></script>

<?php
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
?>
<meta name="generator" content="dbQwikSite Ecommerce"><meta name="dbQwikSitePE" content="QSFREEPE">
<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
?>
<BODY>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
?>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [55F77E47-CE80-4249-9EF7-678A457D2436] [Update Position]
?>
<Center>
<center><hr /><font size="5">
Update Position
</font><hr /></center><br>


<A NAME=top></A>

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


<script>
function getURLParam(strParamName){
var strReturn = "";
var strHref = window.location.href;
if ( strHref.indexOf("?") > -1 ){
  var strQueryString = strHref.substr(strHref.indexOf("?")).toLowerCase();
  var aQueryString = strQueryString.split("&");
  for ( var iParam = 0; iParam < aQueryString.length; iParam++ ){
    if (
	aQueryString[iParam].indexOf(strParamName + "=") > -1 ){
      var aParam = aQueryString[iParam].split("=");
      strReturn = aParam[1];
      break;
    }
  }
}
return strReturn;
}
</script>


<Form name="qs_edit_form" method="post" action="./position_edit.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >

<?php
print $hidden_tag;
print $hiddenrow_tag;
?>

<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#D4D4D4">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows">Update Position</td>
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
<td class="ThRows">IDNo </td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd1"])) && (!isset($_POST["edit_fd1"]))) {
    $itemvalue = $row[1];
} else {
    $itemvalue = qsrequest("edit_fd1");
}

    $cellvalue = "<input type=\"text\" name=\"edit_fd1\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>

<tr>
<td class="ThRows">Position</td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd0"])) && (!isset($_POST["edit_fd0"]))) {
    $itemvalue = $row[0];
} else {
    $itemvalue = qsrequest("edit_fd0");
}

    $cellvalue = "<input type=\"text\" name=\"edit_fd0\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"50\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [B1E202BD-0A29-406A-8CFF-95A044E24FAC] [Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [B1E202BD-0A29-406A-8CFF-95A044E24FAC] [Position]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>

<tr>
<td class="ThRows">Limit </td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd2"])) && (!isset($_POST["edit_fd2"]))) {
    $itemvalue = $row[2];
} else {
    $itemvalue = qsrequest("edit_fd2");
}

    $cellvalue = "<input type=\"text\" name=\"edit_fd2\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<?php
#----get back url page----
  $backurl = "./position.php?";
?>
<tr>
<td class="ThRows">&nbsp;</td>
<td class="TrOdd" align=Default>
<input type="hidden" name="act" value="n">
<input type="button" name="QS_Back" value="Back" OnClick="javascript:window.location='<?php print $backurl; ?>'">&nbsp;&nbsp;
<input type="submit" name="QS_Submit" value="Update">&nbsp;&nbsp;
<input type="reset" name="QS_Reset" value="Reset">
</td>
</tr>
</Table><br>

</Form>
<?php
if ($link > 0) {mysql_close($link);}
?>

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

