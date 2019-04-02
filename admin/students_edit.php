<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
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
#  Page Name.................: Update Students
#  Page Type.................: 4 - Edit Page
#  Page GUID.................: 50275662-FD65-42E7-B3C6-C62E9D903743
#  Page SerialID.............: 538
#  Page File Name............: students_edit
#   
#  Generated on..............: Monday, October 27, 2008
#  Generation Timestamp......: 2008-27-10 21:46:52
#  Language..................: PHP
#   
#  7 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | Studid                                   | 2   | [studid]                                 | Studid                                   |
#  |   1 | Name                                     | 2   | [name]                                   | Name                                     |
#  |   2 | Course                                   | 2   | [course]                                 | Course                                   |
#  |   3 | Year                                     | 4   | [year]                                   | Year                                     |
#  |   4 | Sec                                      | 4   | [sec]                                    | Sec                                      |
#  |   5 | Password                                 | 2   | [password]                               | Password                                 |
#  |   6 | Sy                                       | 2   | [sy]                                     | Sy                                       |
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

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
require('qs_connection.php');
require('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
$row = "";
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
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
$formatdate = array();
$formatdate[0] = "";
$formatdate[1] = "";
$formatdate[2] = "";
$formatdate[3] = "";
$formatdate[4] = "";
$formatdate[5] = "";
$formatdate[6] = "";
$seperatedate = array();
$seperatedate[0] = " ";
$seperatedate[1] = " ";
$seperatedate[2] = " ";
$seperatedate[3] = " ";
$seperatedate[4] = " ";
$seperatedate[5] = " ";
$seperatedate[6] = " ";
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

$isEditables = array();
$isEditables[0] = 1;
$isEditables[1] = 1;
$isEditables[2] = 1;
$isEditables[3] = 1;
$isEditables[4] = 1;
$isEditables[5] = 1;
$isEditables[6] = 1;

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

//Field Related Declarations
$req_Studid          = "edit_fd0";
$req_Name            = "edit_fd1";
$req_Course          = "edit_fd2";
$req_Year            = "edit_fd3";
$req_Sec             = "edit_fd4";
$req_Password        = "edit_fd5";
$req_Sy              = "edit_fd6";

//Assign Recordset Field Index
$rs_idx_studid       = 0;
$rs_idx_name         = 1;
$rs_idx_course       = 2;
$rs_idx_year         = 3;
$rs_idx_sec          = 4;
$rs_idx_password     = 5;
$rs_idx_sy           = 6;

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
$result = mysql_query($sqltemp . " " . $sql_ext . " limit 0,1")
          or die("Invalid query");
if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
}
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
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
// >> START OF "before add date/time form field to sql (php)" [ITEMBEFADDTOSQLDTM] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add date/time form field to sql (php)" [ITEMBEFADDTOSQLDTM] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]

                $value_sql .= "," . $quotechar . $field_name . $quotechar . " = " . $quotedate . qsconvertdate2ansi($idata,$formatdate[$i],$seperatedate[$i]) . $quotedate;
            }
            else if($isEditables[$i] != 2) {
		             $value_sql .= "," . $quotechar . $field_name . $quotechar . " = null"; 
	           }
        } elseif ($type_field == "type_integer") {
            if (qsvalidRequest("edit_fd" . $i)) {
                $idata = qsrequest("edit_fd" . $i);
                $idata = QSConvert2EngNumber($idata); 
// >> START OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]

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
// >> START OF "before add string form field to sql (php)" [ITEMBEFADDTOSQLSTRING] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add string form field to sql (php)" [ITEMBEFADDTOSQLSTRING] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]

                $value_sql  .= "," . $quotechar . $field_name . $quotechar . " = '" . ereg_replace("'","''",stripslashes($idata)) . "'";
            }
			       else if($isEditables[$i] != 2) {
		             $value_sql .= "," . $quotechar . $field_name . $quotechar . " = null"; 
	           }
        } else {
            if (qsvalidRequest("edit_fd" . $i)) {
                $idata = qsrequest("edit_fd" . $i);
// >> START OF "before add other form field to sql (php)" [ITEMBEFADDTOSQLOTHER] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add other form field to sql (php)" [ITEMBEFADDTOSQLOTHER] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]

                $value_sql  .= "," . $quotechar . $field_name . $quotechar . " = '" . ereg_replace("'","''",stripslashes($idata)) . "'";
            }
			       else if($isEditables[$i] != 2) {
		             $value_sql .= "," . $quotechar . $field_name . $quotechar . " = null"; 
	           }
        }
// >> START OF "after add form field to sql (php)" [ITEMAFTADDTOSQL] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after add form field to sql (php)" [ITEMAFTADDTOSQL] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]

      }//if ($isEditables[$i])
    }//if ($meta)
$i++;
}
if (isset($_POST["act"])) {
   $ProcessForm  = "Y"; 
// >> START OF "before server form processing" [FORMPROCESS001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before server form processing" [FORMPROCESS001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
   if ($ProcessForm  == "Y") { 
if (($err_string)=="") {
    if (($value_sql)!="") {
        if (substr($value_sql, 0, 1) == ",") {
           $value_sql = substr($value_sql, 1);
        }
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
        $sql  = "";
        $sql  = "update " . $quotechar . mysql_field_table($result,0) . $quotechar;
        $sql .= " set " . $value_sql;
        $sql .= " where ";
        $sql .= $currentrow_sql;
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
      if ($result > 0) {mysql_free_result($result);}
      if (!$result = @mysql_query($sql)){
        $err_string .= "<strong>Error:</strong>while updating<br>" . mysql_error();
// >> START OF "on update data error" [UPDATEDATAERR001] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on update data error" [UPDATEDATAERR001] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
      } else {
// >> START OF "on update data success" [UPDATEDATASUCCESS001] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on update data success" [UPDATEDATASUCCESS001] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
      }
    }
#----get submit url page----
    $submiturl = "./students.php?";
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
// >> START OF "after server form processing" [FORMPROCESS001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after server form processing" [FORMPROCESS001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
}
else
{
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
  if ($currentrow_sql != "") {
    $sql .= " where ".$currentrow_sql ;
  }
    $result =  mysql_query($sql) or die("Invalid query");
    $row = mysql_fetch_array($result);
}
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<Title>Update Students</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<link rel="stylesheet" type="text/css" href="students_edit.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
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
  document.getElementsByName("edit_fd0")[0].id = fieldTechNames[_Studid];
  document.getElementsByName("edit_fd1")[0].id = fieldTechNames[_Name];
  document.getElementsByName("edit_fd2")[0].id = fieldTechNames[_Course];
  document.getElementsByName("edit_fd3")[0].id = fieldTechNames[_Year];
  document.getElementsByName("edit_fd4")[0].id = fieldTechNames[_Sec];
  document.getElementsByName("edit_fd5")[0].id = fieldTechNames[_Password];
  document.getElementsByName("edit_fd6")[0].id = fieldTechNames[_Sy];
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_edit_form")[0];   //Define Form Object by Name.
  pgitm_Studid                             = document.getElementsByName("edit_fd0")[0];
  pgitm_Name                               = document.getElementsByName("edit_fd1")[0];
  pgitm_Course                             = document.getElementsByName("edit_fd2")[0];
  pgitm_Year                               = document.getElementsByName("edit_fd3")[0];
  pgitm_Sec                                = document.getElementsByName("edit_fd4")[0];
  pgitm_Password                           = document.getElementsByName("edit_fd5")[0];
  pgitm_Sy                                 = document.getElementsByName("edit_fd6")[0];
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Update Students -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]-->
<!-- << END OF "Update Students -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]-->




<script>

function usrEvent__Update_Students__onload() {
  // >> START OF "Update Students -> On Load" [onload] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]
  // << END OF "Update Students -> On Load" [onload] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]
}



function usrEvent__Update_Students__onunload() {
  // >> START OF "Update Students -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]
  // << END OF "Update Students -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]
}



function usrEvent__Update_Students__onresize() {
  // >> START OF "Update Students -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]
  // << END OF "Update Students -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]
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
  pgitm_Studid.focus();
   return true;                                        
}                                                      


function usrEvent__Studid__onfocus(HTMLElement) {
  // >> START OF "Studid -> On Focus" [onfocus] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Focus" [onfocus] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onblur(HTMLElement) {
  // >> START OF "Studid -> On Blur (loss of focus)" [onblur] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Blur (loss of focus)" [onblur] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onclick(HTMLElement) {
  // >> START OF "Studid -> On Click" [onclick] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Click" [onclick] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__ondblclick(HTMLElement) {
  // >> START OF "Studid -> On Double Click" [ondblclick] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Double Click" [ondblclick] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onkeydown(HTMLElement) {
  // >> START OF "Studid -> On Key Down" [onkeydown] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Key Down" [onkeydown] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onkeypress(HTMLElement) {
  // >> START OF "Studid -> On Key Press" [onkeypress] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Key Press" [onkeypress] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onkeyup(HTMLElement) {
  // >> START OF "Studid -> On Key Up" [onkeyup] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Key Up" [onkeyup] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onchange(HTMLElement) {
  // >> START OF "Studid -> On Change" [onchange] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Change" [onchange] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onmousedown(HTMLElement) {
  // >> START OF "Studid -> On Mouse Down" [onmousedown] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Mouse Down" [onmousedown] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onmousemove(HTMLElement) {
  // >> START OF "Studid -> On Mouse Move" [onmousemove] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Mouse Move" [onmousemove] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onmouseout(HTMLElement) {
  // >> START OF "Studid -> On Mouse Out" [onmouseout] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Mouse Out" [onmouseout] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onmouseover(HTMLElement) {
  // >> START OF "Studid -> On Mouse Over" [onmouseover] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Mouse Over" [onmouseover] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onmouseup(HTMLElement) {
  // >> START OF "Studid -> On Mouse Up" [onmouseup] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Mouse Up" [onmouseup] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}
function usrEvent__Studid__onselect(HTMLElement) {
  // >> START OF "Studid -> On Select" [onselect] [Studid] [START] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
  // << END OF "Studid -> On Select" [onselect] [Studid] [STOP] [JS] [34E666C9-D054-4B71-9A4F-8B9BB9187824]
}

function usrEvent__Name__onfocus(HTMLElement) {
  // >> START OF "Name -> On Focus" [onfocus] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Focus" [onfocus] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onblur(HTMLElement) {
  // >> START OF "Name -> On Blur (loss of focus)" [onblur] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Blur (loss of focus)" [onblur] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onclick(HTMLElement) {
  // >> START OF "Name -> On Click" [onclick] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Click" [onclick] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__ondblclick(HTMLElement) {
  // >> START OF "Name -> On Double Click" [ondblclick] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Double Click" [ondblclick] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onkeydown(HTMLElement) {
  // >> START OF "Name -> On Key Down" [onkeydown] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Key Down" [onkeydown] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onkeypress(HTMLElement) {
  // >> START OF "Name -> On Key Press" [onkeypress] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Key Press" [onkeypress] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onkeyup(HTMLElement) {
  // >> START OF "Name -> On Key Up" [onkeyup] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Key Up" [onkeyup] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onchange(HTMLElement) {
  // >> START OF "Name -> On Change" [onchange] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Change" [onchange] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onmousedown(HTMLElement) {
  // >> START OF "Name -> On Mouse Down" [onmousedown] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Mouse Down" [onmousedown] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onmousemove(HTMLElement) {
  // >> START OF "Name -> On Mouse Move" [onmousemove] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Mouse Move" [onmousemove] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onmouseout(HTMLElement) {
  // >> START OF "Name -> On Mouse Out" [onmouseout] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Mouse Out" [onmouseout] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onmouseover(HTMLElement) {
  // >> START OF "Name -> On Mouse Over" [onmouseover] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Mouse Over" [onmouseover] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onmouseup(HTMLElement) {
  // >> START OF "Name -> On Mouse Up" [onmouseup] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Mouse Up" [onmouseup] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}
function usrEvent__Name__onselect(HTMLElement) {
  // >> START OF "Name -> On Select" [onselect] [Name] [START] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
  // << END OF "Name -> On Select" [onselect] [Name] [STOP] [JS] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8]
}

function usrEvent__Course__onfocus(HTMLElement) {
  // >> START OF "Course -> On Focus" [onfocus] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Focus" [onfocus] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onblur(HTMLElement) {
  // >> START OF "Course -> On Blur (loss of focus)" [onblur] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Blur (loss of focus)" [onblur] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onclick(HTMLElement) {
  // >> START OF "Course -> On Click" [onclick] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Click" [onclick] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__ondblclick(HTMLElement) {
  // >> START OF "Course -> On Double Click" [ondblclick] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Double Click" [ondblclick] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onkeydown(HTMLElement) {
  // >> START OF "Course -> On Key Down" [onkeydown] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Key Down" [onkeydown] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onkeypress(HTMLElement) {
  // >> START OF "Course -> On Key Press" [onkeypress] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Key Press" [onkeypress] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onkeyup(HTMLElement) {
  // >> START OF "Course -> On Key Up" [onkeyup] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Key Up" [onkeyup] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onchange(HTMLElement) {
  // >> START OF "Course -> On Change" [onchange] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Change" [onchange] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onmousedown(HTMLElement) {
  // >> START OF "Course -> On Mouse Down" [onmousedown] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Mouse Down" [onmousedown] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onmousemove(HTMLElement) {
  // >> START OF "Course -> On Mouse Move" [onmousemove] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Mouse Move" [onmousemove] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onmouseout(HTMLElement) {
  // >> START OF "Course -> On Mouse Out" [onmouseout] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Mouse Out" [onmouseout] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onmouseover(HTMLElement) {
  // >> START OF "Course -> On Mouse Over" [onmouseover] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Mouse Over" [onmouseover] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onmouseup(HTMLElement) {
  // >> START OF "Course -> On Mouse Up" [onmouseup] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Mouse Up" [onmouseup] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}
function usrEvent__Course__onselect(HTMLElement) {
  // >> START OF "Course -> On Select" [onselect] [Course] [START] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
  // << END OF "Course -> On Select" [onselect] [Course] [STOP] [JS] [D0552110-B8C5-4FC1-9627-1A8DBD03B973]
}

function usrEvent__Year__onfocus(HTMLElement) {
  // >> START OF "Year -> On Focus" [onfocus] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Focus" [onfocus] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__onblur(HTMLElement) {
  // >> START OF "Year -> On Blur (loss of focus)" [onblur] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Blur (loss of focus)" [onblur] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__onclick(HTMLElement) {
  // >> START OF "Year -> On Click" [onclick] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Click" [onclick] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__ondblclick(HTMLElement) {
  // >> START OF "Year -> On Double Click" [ondblclick] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Double Click" [ondblclick] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__onkeydown(HTMLElement) {
  // >> START OF "Year -> On Key Down" [onkeydown] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Key Down" [onkeydown] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__onkeypress(HTMLElement) {
  // >> START OF "Year -> On Key Press" [onkeypress] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Key Press" [onkeypress] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__onkeyup(HTMLElement) {
  // >> START OF "Year -> On Key Up" [onkeyup] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Key Up" [onkeyup] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__onchange(HTMLElement) {
  // >> START OF "Year -> On Change" [onchange] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Change" [onchange] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__onmousedown(HTMLElement) {
  // >> START OF "Year -> On Mouse Down" [onmousedown] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Mouse Down" [onmousedown] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__onmousemove(HTMLElement) {
  // >> START OF "Year -> On Mouse Move" [onmousemove] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Mouse Move" [onmousemove] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__onmouseout(HTMLElement) {
  // >> START OF "Year -> On Mouse Out" [onmouseout] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Mouse Out" [onmouseout] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__onmouseover(HTMLElement) {
  // >> START OF "Year -> On Mouse Over" [onmouseover] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Mouse Over" [onmouseover] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}
function usrEvent__Year__onmouseup(HTMLElement) {
  // >> START OF "Year -> On Mouse Up" [onmouseup] [Year] [START] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
  // << END OF "Year -> On Mouse Up" [onmouseup] [Year] [STOP] [JS] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7]
}

function usrEvent__Sec__onfocus(HTMLElement) {
  // >> START OF "Sec -> On Focus" [onfocus] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Focus" [onfocus] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__onblur(HTMLElement) {
  // >> START OF "Sec -> On Blur (loss of focus)" [onblur] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Blur (loss of focus)" [onblur] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__onclick(HTMLElement) {
  // >> START OF "Sec -> On Click" [onclick] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Click" [onclick] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__ondblclick(HTMLElement) {
  // >> START OF "Sec -> On Double Click" [ondblclick] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Double Click" [ondblclick] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__onkeydown(HTMLElement) {
  // >> START OF "Sec -> On Key Down" [onkeydown] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Key Down" [onkeydown] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__onkeypress(HTMLElement) {
  // >> START OF "Sec -> On Key Press" [onkeypress] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Key Press" [onkeypress] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__onkeyup(HTMLElement) {
  // >> START OF "Sec -> On Key Up" [onkeyup] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Key Up" [onkeyup] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__onchange(HTMLElement) {
  // >> START OF "Sec -> On Change" [onchange] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Change" [onchange] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__onmousedown(HTMLElement) {
  // >> START OF "Sec -> On Mouse Down" [onmousedown] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Mouse Down" [onmousedown] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__onmousemove(HTMLElement) {
  // >> START OF "Sec -> On Mouse Move" [onmousemove] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Mouse Move" [onmousemove] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__onmouseout(HTMLElement) {
  // >> START OF "Sec -> On Mouse Out" [onmouseout] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Mouse Out" [onmouseout] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__onmouseover(HTMLElement) {
  // >> START OF "Sec -> On Mouse Over" [onmouseover] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Mouse Over" [onmouseover] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}
function usrEvent__Sec__onmouseup(HTMLElement) {
  // >> START OF "Sec -> On Mouse Up" [onmouseup] [Sec] [START] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
  // << END OF "Sec -> On Mouse Up" [onmouseup] [Sec] [STOP] [JS] [4537755F-7BD8-48BA-9501-D9002415590F]
}

function usrEvent__Password__onfocus(HTMLElement) {
  // >> START OF "Password -> On Focus" [onfocus] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Focus" [onfocus] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onblur(HTMLElement) {
  // >> START OF "Password -> On Blur (loss of focus)" [onblur] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Blur (loss of focus)" [onblur] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onclick(HTMLElement) {
  // >> START OF "Password -> On Click" [onclick] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Click" [onclick] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__ondblclick(HTMLElement) {
  // >> START OF "Password -> On Double Click" [ondblclick] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Double Click" [ondblclick] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onkeydown(HTMLElement) {
  // >> START OF "Password -> On Key Down" [onkeydown] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Key Down" [onkeydown] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onkeypress(HTMLElement) {
  // >> START OF "Password -> On Key Press" [onkeypress] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Key Press" [onkeypress] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onkeyup(HTMLElement) {
  // >> START OF "Password -> On Key Up" [onkeyup] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Key Up" [onkeyup] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onchange(HTMLElement) {
  // >> START OF "Password -> On Change" [onchange] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Change" [onchange] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onmousedown(HTMLElement) {
  // >> START OF "Password -> On Mouse Down" [onmousedown] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Mouse Down" [onmousedown] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onmousemove(HTMLElement) {
  // >> START OF "Password -> On Mouse Move" [onmousemove] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Mouse Move" [onmousemove] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onmouseout(HTMLElement) {
  // >> START OF "Password -> On Mouse Out" [onmouseout] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Mouse Out" [onmouseout] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onmouseover(HTMLElement) {
  // >> START OF "Password -> On Mouse Over" [onmouseover] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Mouse Over" [onmouseover] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onmouseup(HTMLElement) {
  // >> START OF "Password -> On Mouse Up" [onmouseup] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Mouse Up" [onmouseup] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}
function usrEvent__Password__onselect(HTMLElement) {
  // >> START OF "Password -> On Select" [onselect] [Password] [START] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
  // << END OF "Password -> On Select" [onselect] [Password] [STOP] [JS] [942253D0-074C-4C92-A870-D30CB838D321]
}

function usrEvent__Sy__onfocus(HTMLElement) {
  // >> START OF "Sy -> On Focus" [onfocus] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Focus" [onfocus] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onblur(HTMLElement) {
  // >> START OF "Sy -> On Blur (loss of focus)" [onblur] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Blur (loss of focus)" [onblur] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onclick(HTMLElement) {
  // >> START OF "Sy -> On Click" [onclick] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Click" [onclick] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__ondblclick(HTMLElement) {
  // >> START OF "Sy -> On Double Click" [ondblclick] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Double Click" [ondblclick] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onkeydown(HTMLElement) {
  // >> START OF "Sy -> On Key Down" [onkeydown] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Key Down" [onkeydown] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onkeypress(HTMLElement) {
  // >> START OF "Sy -> On Key Press" [onkeypress] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Key Press" [onkeypress] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onkeyup(HTMLElement) {
  // >> START OF "Sy -> On Key Up" [onkeyup] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Key Up" [onkeyup] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onchange(HTMLElement) {
  // >> START OF "Sy -> On Change" [onchange] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Change" [onchange] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onmousedown(HTMLElement) {
  // >> START OF "Sy -> On Mouse Down" [onmousedown] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Mouse Down" [onmousedown] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onmousemove(HTMLElement) {
  // >> START OF "Sy -> On Mouse Move" [onmousemove] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Mouse Move" [onmousemove] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onmouseout(HTMLElement) {
  // >> START OF "Sy -> On Mouse Out" [onmouseout] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Mouse Out" [onmouseout] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onmouseover(HTMLElement) {
  // >> START OF "Sy -> On Mouse Over" [onmouseover] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Mouse Over" [onmouseover] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onmouseup(HTMLElement) {
  // >> START OF "Sy -> On Mouse Up" [onmouseup] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Mouse Up" [onmouseup] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}
function usrEvent__Sy__onselect(HTMLElement) {
  // >> START OF "Sy -> On Select" [onselect] [Sy] [START] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
  // << END OF "Sy -> On Select" [onselect] [Sy] [STOP] [JS] [D7D04701-0C88-4874-83FC-DF4AC6752B61]
}


function usrEvent__Update_Students__onsubmit(frm) {
  // >> START OF "Update Students -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]
  // << END OF "Update Students -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]
}



function usrEvent__Update_Students__onreset() {
  // >> START OF "Update Students -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]
  // << END OF "Update Students -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [50275662-FD65-42E7-B3C6-C62E9D903743]
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
        szAlert += "- " +"'Studid' cannot be blank\n";
    }
    if (!RequiredField(frm.edit_fd1.value)) {
        nIndex++;
        szAlert += "- " +"'Name' cannot be blank\n";
    }
    if (!RequiredField(frm.edit_fd2.value)) {
        nIndex++;
        szAlert += "- " +"'Course' cannot be blank\n";
    }
    if (!RequiredField(frm.edit_fd3.value)) {
        nIndex++;
        szAlert += "- " +"'Year' cannot be blank\n";
    }
    if (!RequiredField(frm.edit_fd4.value)) {
        nIndex++;
        szAlert += "- " +"'Sec' cannot be blank\n";
    }
    if (!RequiredField(frm.edit_fd5.value)) {
        nIndex++;
        szAlert += "- " +"'Password' cannot be blank\n";
    }
    if (!RequiredField(frm.edit_fd6.value)) {
        nIndex++;
        szAlert += "- " +"'Sy' cannot be blank\n";
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
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<meta name="generator" content="dbQwikSite Ecommerce"><meta name="dbQwikSitePE" content="QSFREEPE">
<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<BODY>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<Center>
<center><hr /><font size="5">
Update Students
</font><hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<A NAME=top></A>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>


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


<Form name="qs_edit_form" method="post" action="./students_edit.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php
// >> START OF "before update form" [UPDATEFRM001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before update form" [UPDATEFRM001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<?php
print $hidden_tag;
print $hiddenrow_tag;
?>
<?php
// >> START OF "before data table" [DATATABLE001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before data table" [DATATABLE001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#D4D4D4">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows">Update Students</td>
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
$cellvalue = "";
if ((!isset($_GET["edit_fd0"])) && (!isset($_POST["edit_fd0"]))) {
    $itemvalue = $row[0];
} else {
    $itemvalue = qsrequest("edit_fd0");
}

    $cellvalue = "<input type=\"text\" name=\"edit_fd0\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"15\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Studid -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [34E666C9-D054-4B71-9A4F-8B9BB9187824] [Studid]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Studid -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [34E666C9-D054-4B71-9A4F-8B9BB9187824] [Studid]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Name</td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd1"])) && (!isset($_POST["edit_fd1"]))) {
    $itemvalue = $row[1];
} else {
    $itemvalue = qsrequest("edit_fd1");
}

    $cellvalue = "<input type=\"text\" name=\"edit_fd1\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"255\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8] [Name]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [9D2C9CCF-0ACE-4642-ABF1-2148492D56C8] [Name]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Course</td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd2"])) && (!isset($_POST["edit_fd2"]))) {
    $itemvalue = $row[2];
} else {
    $itemvalue = qsrequest("edit_fd2");
}

    $cellvalue = "<input type=\"text\" name=\"edit_fd2\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"100\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Course -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [D0552110-B8C5-4FC1-9627-1A8DBD03B973] [Course]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Course -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [D0552110-B8C5-4FC1-9627-1A8DBD03B973] [Course]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Year</td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd3"])) && (!isset($_POST["edit_fd3"]))) {
    $itemvalue = $row[3];
} else {
    $itemvalue = qsrequest("edit_fd3");
}

    $cellvalue = "<select name=\"edit_fd3\" ><option value=\"1st\"" . qscheckselected("1st",$itemvalue,"selected") . ">1st</option><option value=\"2nd\"" . qscheckselected("2nd",$itemvalue,"selected") . ">2nd</option><option value=\"3rd\"" . qscheckselected("3rd",$itemvalue,"selected") . ">3rd</option><option value=\"4th\"" . qscheckselected("4th",$itemvalue,"selected") . ">4th</option></select>";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Year -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7] [Year]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Year -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [D9D66B7A-DAEA-4FD9-9F08-A5A137381AC7] [Year]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Sec</td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd4"])) && (!isset($_POST["edit_fd4"]))) {
    $itemvalue = $row[4];
} else {
    $itemvalue = qsrequest("edit_fd4");
}

    $cellvalue = "<select name=\"edit_fd4\" ><option value=\"A\"" . qscheckselected("A",$itemvalue,"selected") . ">A</option><option value=\"B\"" . qscheckselected("B",$itemvalue,"selected") . ">B</option><option value=\"C\"" . qscheckselected("C",$itemvalue,"selected") . ">C</option><option value=\"D\"" . qscheckselected("D",$itemvalue,"selected") . ">D</option><option value=\"E\"" . qscheckselected("E",$itemvalue,"selected") . ">E</option><option value=\"F\"" . qscheckselected("F",$itemvalue,"selected") . ">F</option></select>";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sec -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [4537755F-7BD8-48BA-9501-D9002415590F] [Sec]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Sec -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [4537755F-7BD8-48BA-9501-D9002415590F] [Sec]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Password</td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd5"])) && (!isset($_POST["edit_fd5"]))) {
    $itemvalue = $row[5];
} else {
    $itemvalue = qsrequest("edit_fd5");
}

    $cellvalue = "<input type=\"text\" name=\"edit_fd5\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"15\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Password -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [942253D0-074C-4C92-A870-D30CB838D321] [Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Password -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [942253D0-074C-4C92-A870-D30CB838D321] [Password]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Phone No.</td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd6"])) && (!isset($_POST["edit_fd6"]))) {
    $itemvalue = $row[6];
} else {
    $itemvalue = qsrequest("edit_fd6");
}

    $cellvalue = "<input type=\"text\" name=\"edit_fd6\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"15\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [D7D04701-0C88-4874-83FC-DF4AC6752B61] [Sy]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [D7D04701-0C88-4874-83FC-DF4AC6752B61] [Sy]

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
<input type="submit" name="QS_Submit" value="Update">&nbsp;&nbsp;
<input type="reset" name="QS_Reset" value="Reset">
</td>
</tr>
</Table><br>
<?php
// >> START OF "after data table" [DATATABLE001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after data table" [DATATABLE001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<?php
// >> START OF "after update form" [UPDATEFRM001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after update form" [UPDATEFRM001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
</Form>
<?php
if ($link > 0) {mysql_close($link);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
</Center>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [50275662-FD65-42E7-B3C6-C62E9D903743] [Update Students]
?>
