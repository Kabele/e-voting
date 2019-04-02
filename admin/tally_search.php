<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
<?php
 
#  *** GENERATION INFORMATION *** 
#   
#  Project Name..............: tally1
#  Project Source............: C:\Documents and Settings\CSU-A\My Documents\My QwikSites\Projects\tally1\tally1.dbh
#  Project Session ..........: 9E6795DE-9ECB-43B3-97D3-8080D6786B0C
#  Group Name................: tally
#  Group GUID................: 1CC0B793-F53F-47DF-BF7B-BB66823412A6
#  Group SerialID............: 546
#  Page Name.................: Find tally
#  Page Type.................: 2 - Search Page
#  Page GUID.................: B7EE16CA-E3FE-423F-9705-D044BDD54D7A
#  Page SerialID.............: 548
#  Page File Name............: tally_search
#   
#  Generated on..............: Tuesday, October 28, 2008
#  Generation Timestamp......: 2008-28-10 11:36:22
#  Language..................: PHP
#   
#  3 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | Position                                 | 4   | [position]                               | Position                                 |
#  |   1 | Name                                     | 2   | [name]                                   | Name                                     |
#  |   2 | Sy                                       | 2   | [sy]                                     | Sy                                       |
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

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
require('qs_connection.php');
require('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
$row = "";
$err_string = "";
$strkeyword = "";
$sortstring = "";
$icon = "";
$sql = "";
$sql_ext = "";
$fields = array();
$fields[0] = "id";
$fields[1] = "position";
$fields[2] = "name";
$fields[3] = "platform";
$fields[4] = "picture";
$fields[5] = "votecount";
$fields[6] = "sy";
$arryitemvalue = array();
$arryitemvalue[0] = "";
$arryitemvalue[1] = "";
$arryitemvalue[2] = "";
$arryitemvalue[3] = "";
$arryitemvalue[4] = "";
$arryitemvalue[5] = "";
$arryitemvalue[6] = "";
$arryopt = array();
$arryopt[0] = "";
$arryopt[1] = "";
$arryopt[2] = "";
$arryopt[3] = "";
$arryopt[4] = "";
$arryopt[5] = "";
$arryopt[6] = "";
$arryandoropt = array();
$arryandoropt[0] = "";
$arryandoropt[1] = "";
$arryandoropt[2] = "";
$arryandoropt[3] = "";
$arryandoropt[4] = "";
$arryandoropt[5] = "";
$arryandoropt[6] = "";
//Field Related Declarations
$req_Position        = "search_fd1";
$req_Name            = "search_fd2";
$req_Sy              = "search_fd6";

//Assign Recordset Field Index
$rs_idx_id           = 0;
$rs_idx_position     = 1;
$rs_idx_name         = 2;
$rs_idx_platform     = 3;
$rs_idx_picture      = 4;
$rs_idx_votecount    = 5;
$rs_idx_sy           = 6;

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
$sql .= " Select\n";
    $sql .= "     candidate.`id`,\n";
    $sql .= "     candidate.`position`,\n";
    $sql .= "     candidate.`name`,\n";
    $sql .= "     candidate.`platform`,\n";
    $sql .= "     candidate.`picture`,\n";
    $sql .= "     candidate.`votecount`,\n";
    $sql .= "     candidate.`sy`\n";
    $sql .= " From\n";
    $sql .= "     candidate   candidate\n";

if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
$result = mysql_query($sqltemp . " " . $sql_ext . " limit 0,1")
          or die("Invalid query");
if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
}
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
if (isset($_POST["act"])) {
    $_SESSION["tally_tally"] = "";
    $_SESSION["tally_tally_PageNumber"] = "";
    $filter_string = "";
    $qry_string = "";
    $i = 0;
    while ($i < mysql_num_fields($result)) {
        $meta = mysql_fetch_field($result);
        $field_name = $meta->name;
        $field_type = $meta->type;
        //get field type
        $type_field = "";
        $type_field = returntype($field_type);
        //clear session
        $_SESSION["tally_search_fd" . $i] = "";
        $_SESSION["tally_multisearch_fd" . $i] = "";
        $_SESSION["tally_search_fd_" . $i] = "";
        if ((qsrequest("search_fd" . $i) != "") && (qsrequest("search_fd" . $i) != "*")) {
            $idata = qsrequest("search_fd" . $i);
            if (strlen($idata) > 1) {
                if ($idata[strlen($idata) - 1] == "*") {
                    $idata = substr($idata, 0, strlen($idata) - 1);
                }
            }
            $idata = str_replace("*", "%", $idata);
            $irealdata = $idata;
            if (qsrequest("search_optfd".$i) != "") {
              $idata = qsrequest("search_optfd". $i) . $idata ;
            }
            $iopt = substr($idata, 0, 2);
            if (($iopt == "<=") || ($iopt == "=<")) {
                $iopt = "<=";
                $irealdata = substr($idata, 2);
            } elseif (($iopt == ">=") || ($iopt == "=>")) {
                $iopt = ">=";
                $irealdata = substr($idata, 2);
            } elseif ($iopt == "==") {
                $iopt = "=";
                $irealdata = substr($idata, 2);
            } elseif ($iopt == "<>") {
                $irealdata = substr($idata, 2);
            } elseif ($iopt == "^^") {
                      $iopt = "*";
            	$idata =  $iopt . $irealdata . $iopt; // Contain
                  } elseif ($iopt == "^*") {
                      $iopt = "*";
            	$idata =  $irealdata . $iopt; // Start With
                  } elseif ($iopt == "*^") {
                      $iopt = "*";
            	$idata =  $iopt . $irealdata ; // End With
            } else {
                $iopt = substr($idata, 0, 1);
                if (($iopt == "<") || ($iopt == ">") || ($iopt == "=")) {
                    $irealdata = substr($idata,1);
                } else {
                    $iopt = "=";
                }
            }
            if (qsrequest("andor_optfd".$i) != "") {
                $idata = qsrequest("andor_optfd". $i) . $idata ;
            }
        if (!strcasecmp($idata,"{current date and time}")) {
            $idata = time();
        } elseif (!strcasecmp($idata,"{current date}")) {
            $idata = time();
        } elseif (!strcasecmp($idata,"{current time}")) {
            $idata = time();
        }
            if ($meta) {
                if ($type_field == "type_datetime") {
                    if ((($timestamp = strtotime($irealdata)) !== -1)) {
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . urlencode($idata);
                            $filter_string = $field_name . " like '%" . $idata . "%'";
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . urlencode($idata);
                            $filter_string .= " and " . $field_name . " like '%" . $idata . "%'";
                        }
                        if (qsrequest("search_fd" . $i . "_DateFormat") != ""){
                           $iDateFormat = qsrequest("search_fd" . $i . "_DateFormat"); 
                           $qry_string .= "&search_fd" . $i . "_DateFormat=" . $iDateFormat; 
                        } 
                    } else {
                        $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                        $err_string .= "Description: Invalid DateTime.<br>";
                    }
                } elseif ($type_field == "type_integer") {
                    if (is_numeric($irealdata)) {
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $idata;
                            $filter_string = $field_name . " " . $iopt . " " . $irealdata;
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $idata;
                            $filter_string .= " and " . $field_name . " " . $iopt . " " . $irealdata;
                        }
                    } else {
                        $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                        $err_string .= "Description: Type mismatch.<br>";
                    }
                } elseif ($type_field == "type_string") {
                    if ($qry_string == "") {
                        $qry_string = "search_fd" . $i . "=" . urlencode(stripslashes($idata));
                        $filter_string = $field_name . " like '" . $irealdata . "%'";
                    } else {
                        $qry_string .= "&search_fd" . $i . "=" . urlencode(stripslashes($idata));
                        $filter_string .= " and " . $field_name . " like '" . $irealdata . "%'";
                    }
                } else {
                    if ($qry_string == "") {
                        $qry_string = "search_fd" . $i . "=" . urlencode(stripslashes($idata));
                        $filter_string = $field_name . " = '" . $irealdata . "'";
                    } else {
                        $qry_string .= "&search_fd" . $i . "=" . urlencode(stripslashes($idata));
                        $filter_string .= " and " . $field_name . " = '" . $irealdata . "'";
                    }
                }
            }
        }
        if (qsrequest("multisearch_fd" . $i) != "") {
            if ($qry_string == "") {
                $qry_string = "multisearch_fd" . $i . "=" . qsrequest("multisearch_fd" . $i);
            } else {
                $qry_string = $qry_string . "&multisearch_fd" . $i . "=" . qsrequest("multisearch_fd" . $i);
            }
        }
        //begin search between see variable 'search_fd_(n)'
        if (qsrequest("search_fd_" . $i) != "") {
            $idata = qsrequest("search_fd_" . $i);
            if (strlen($idata) > 1) {
                if ($idata[strlen($idata) - 1] == "*") {
                    $idata = substr($idata, 0, strlen($idata) - 1);
                }
            }
            $idata = str_replace("*", "%", $idata);
            $irealdata = $idata;
            if (qsrequest("search_optfd_".$i) != "") {
                $idata = qsrequest("search_optfd_". $i) . $idata ;
            }
            $iopt = qsrequest("search_optfd_". $i);
            if ($meta) {
                if ($type_field == "type_datetime") {
                   if ((($timestamp = strtotime($irealdata)) !== -1)) {
                       if ($qry_string == "") {
                           $qry_string = "search_fd_" . $i . "=" . urlencode($idata);
                           $filter_string = $field_name . " like '%" . $idata . "%'";
                       } else {
                           $qry_string .= "&search_fd_" . $i . "=" . urlencode($idata);
                           $filter_string .= " and " . $field_name . " like '%" . $idata . "%'";
                       }
                        if (qsrequest("search_fd_" . $i . "_DateFormat") != ""){
                           $iDateFormat = qsrequest("search_fd_" . $i . "_DateFormat"); 
                           $qry_string .= "&search_fd_" . $i . "_DateFormat=" . $iDateFormat; 
                        } 
                   } else {
                       $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                       $err_string .= "Description: Invalid DateTime.<br>";
                   }
                } elseif ($type_field == "type_integer") {
                   if (is_numeric($irealdata)) {
                       if ($qry_string == "") {
                           $qry_string = "search_fd_" . $i . "=" . $idata;
                           $filter_string = $field_name . " " . $iopt . " " . $irealdata;
                       } else {
                           $qry_string .= "&search_fd_" . $i . "=" . $idata;
                           $filter_string .= " and " . $field_name . " " . $iopt . " " . $irealdata;
                       }
                   } else {
                        $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                        $err_string .= "Description: Type mismatch.<br>";
                   }
               }
           }
        }
        $i++;
    }
    if ($result > 0) {mysql_free_result($result);}
  if (qsrequest("search_sort") <> "") {
	    $sortstring = qsrequest("search_sort");
  }
  if (qsrequest("page_size") <> "") {
	    $page_size = qsrequest("page_size");
  }
#----get submit url page----
    $submiturl = "./tally.php?";
    if ($err_string == "") {
        if ($qry_string != "") {
            $URL= $submiturl . "&" . $qry_string;
        } else {
            $URL= $submiturl;
        }
        header ("Location: $URL");
        exit;
    }
} else {
    $sortstring  = "";
    if (qssession("sortfield") != "") {
         $sortstring = "&sortfield=" . urlencode(stripslashes(qssession("sortfield"))) . "&sortby=" . urlencode(stripslashes(qssession("sortby")));
    }
    if (qssession("page_size") != "") {
         $page_size = urlencode(stripslashes(qssession("page_size")));
    }
    $i=0;
    while ($i < mysql_num_fields($result)) {
$strkeyword = "";
$iopt = "";
$idata = "";
if ((!isset($_GET["search_fd".$i])) && (!isset($_POST["search_fd".$i]))) {
    $arryitemvalue[$i] = "";
    $arryopt[$i]="";
} else {
    # Check value for advance search
    $idata = qsrequest("search_fd" . $i);
    $icon = "";
    if (substr($idata, 0, 2) == "||") {
        $icon = "||";
        $idata = substr($idata, 2);
    }
    $iopt = substr($idata, 0, 2); // Get 2 of left keyword
    if (($iopt == "<=") || ($iopt == "=<")){
        $iopt  = "<=";
        $strkeyword = substr($idata, 2);
    }elseif (($iopt == ">=") || ($iopt == "=>")){
        $iopt = ">=";
        $strkeyword = substr($idata, 2);
    }elseif ($iopt == "==" ){
        $iopt = "==";
        $strkeyword = substr($idata, 2);
    }elseif ($iopt == "<>"){
        $strkeyword = substr($idata, 2);
    } else {
        $startstrdata = substr($idata,0,1) ;
        $endstrdata = $idata[strlen($idata) - 1];
        if (($startstrdata != "%" ) && ($endstrdata != "%")){
            if (($startstrdata == "<") || ($startstrdata == ">") || ($startstrdata == "=")) {
                if ($startstrdata == "<") {
                    $strkeyword = str_replace("<","", $idata) ;
                    $iopt = "<";
                }elseif($startstrdata == ">")  {
                    $strkeyword = str_replace(">","", $idata) ;
                    $iopt = ">";
                } else {
                    $strkeyword = str_replace("=","", $idata) ;
                    $iopt = "=";
                }
            }else {
                $arryitemvalue[$i] = $idata;
                $strkeyword = $idata;
            }
        }else {
            if (($startstrdata == "%" ) && ($endstrdata == "%")) {  # Contain Case
                $startstrdata = str_replace("%","", $idata) ;
                $strkeyword  = substr($idata,1, (strlen($idata)-2));
                $iopt = "^^" ;
            }elseif (($startstrdata != "%" ) && ($endstrdata == "%")) {  # Start With Case xx*
                $strkeyword  = substr($idata,0, (strlen($idata)-1));
                $iopt = "^*";
            }elseif (($startstrdata == "%" ) && ($endstrdata != "%")) { # End With Case *xx
                $strkeyword  = substr($idata,1, (strlen($idata)));
                $iopt = "*^";
            }
        }// end eheck one charator
   }//end of check 2 first character
   $arryitemvalue[$i] = $strkeyword;
   $arryopt[$i] = $iopt;
   $arryandoropt[$i] = $icon;
}
$i += 1;
}// end while
if ($result > 0) {mysql_free_result($result);}
}
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
<Title>Find tally</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>

<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
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

	


<!-- END OF STD-Loader.txt -->


<script type="text/javascript">

// Declares all constants and arrays
// for all page items used on the page

// Declare Field Indexes for all page items
var qsPageItemsCount = 3
var _Position                                 = 0;
var _Name                                     = 1;
var _Sy                                       = 2;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Position] = "Position";
fieldPrompts[_Name] = "Name";
fieldPrompts[_Sy] = "Sy";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Position] = "Position";
fieldTechNames[_Name] = "Name";
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
  document.getElementsByName("search_fd1")[0].id = fieldTechNames[_Position];
  document.getElementsByName("search_fd2")[0].id = fieldTechNames[_Name];
  document.getElementsByName("search_fd6")[0].id = fieldTechNames[_Sy];
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_search_form")[0];   //Define Form Object by Name.
  pgitm_Position                           = document.getElementsByName("search_fd1")[0];
  pgitm_Name                               = document.getElementsByName("search_fd2")[0];
  pgitm_Sy                                 = document.getElementsByName("search_fd6")[0];
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>





<link href="candidate.css" rel="stylesheet" type="text/css">

<!-- << END OF "Find tally -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A]-->




<script>

function usrEvent__Find_tally__onload() {
  // >> START OF "Find tally -> On Load" [onload] [PAGEEVENT] [START] [JS] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A]
  // << END OF "Find tally -> On Load" [onload] [PAGEEVENT] [START] [JS] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A]
}



function usrEvent__Find_tally__onunload() {
  // >> START OF "Find tally -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A]
  // << END OF "Find tally -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A]
}



function usrEvent__Find_tally__onresize() {
  // >> START OF "Find tally -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A]
  // << END OF "Find tally -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A]
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
  // >> START OF "Position -> On Focus" [onfocus] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Focus" [onfocus] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__onblur(HTMLElement) {
  // >> START OF "Position -> On Blur (loss of focus)" [onblur] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Blur (loss of focus)" [onblur] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__onclick(HTMLElement) {
  // >> START OF "Position -> On Click" [onclick] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Click" [onclick] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__ondblclick(HTMLElement) {
  // >> START OF "Position -> On Double Click" [ondblclick] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Double Click" [ondblclick] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__onkeydown(HTMLElement) {
  // >> START OF "Position -> On Key Down" [onkeydown] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Key Down" [onkeydown] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__onkeypress(HTMLElement) {
  // >> START OF "Position -> On Key Press" [onkeypress] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Key Press" [onkeypress] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__onkeyup(HTMLElement) {
  // >> START OF "Position -> On Key Up" [onkeyup] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Key Up" [onkeyup] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__onchange(HTMLElement) {
  // >> START OF "Position -> On Change" [onchange] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Change" [onchange] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__onmousedown(HTMLElement) {
  // >> START OF "Position -> On Mouse Down" [onmousedown] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Mouse Down" [onmousedown] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__onmousemove(HTMLElement) {
  // >> START OF "Position -> On Mouse Move" [onmousemove] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Mouse Move" [onmousemove] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__onmouseout(HTMLElement) {
  // >> START OF "Position -> On Mouse Out" [onmouseout] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Mouse Out" [onmouseout] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__onmouseover(HTMLElement) {
  // >> START OF "Position -> On Mouse Over" [onmouseover] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Mouse Over" [onmouseover] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}
function usrEvent__Position__onmouseup(HTMLElement) {
  // >> START OF "Position -> On Mouse Up" [onmouseup] [Position] [START] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
  // << END OF "Position -> On Mouse Up" [onmouseup] [Position] [STOP] [JS] [C617D999-39FB-456E-8E91-F2897DC51391]
}

function usrEvent__Name__onfocus(HTMLElement) {
  // >> START OF "Name -> On Focus" [onfocus] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Focus" [onfocus] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onblur(HTMLElement) {
  // >> START OF "Name -> On Blur (loss of focus)" [onblur] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Blur (loss of focus)" [onblur] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onclick(HTMLElement) {
  // >> START OF "Name -> On Click" [onclick] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Click" [onclick] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__ondblclick(HTMLElement) {
  // >> START OF "Name -> On Double Click" [ondblclick] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Double Click" [ondblclick] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onkeydown(HTMLElement) {
  // >> START OF "Name -> On Key Down" [onkeydown] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Key Down" [onkeydown] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onkeypress(HTMLElement) {
  // >> START OF "Name -> On Key Press" [onkeypress] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Key Press" [onkeypress] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onkeyup(HTMLElement) {
  // >> START OF "Name -> On Key Up" [onkeyup] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Key Up" [onkeyup] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onchange(HTMLElement) {
  // >> START OF "Name -> On Change" [onchange] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Change" [onchange] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onmousedown(HTMLElement) {
  // >> START OF "Name -> On Mouse Down" [onmousedown] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Mouse Down" [onmousedown] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onmousemove(HTMLElement) {
  // >> START OF "Name -> On Mouse Move" [onmousemove] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Mouse Move" [onmousemove] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onmouseout(HTMLElement) {
  // >> START OF "Name -> On Mouse Out" [onmouseout] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Mouse Out" [onmouseout] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onmouseover(HTMLElement) {
  // >> START OF "Name -> On Mouse Over" [onmouseover] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Mouse Over" [onmouseover] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onmouseup(HTMLElement) {
  // >> START OF "Name -> On Mouse Up" [onmouseup] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Mouse Up" [onmouseup] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}
function usrEvent__Name__onselect(HTMLElement) {
  // >> START OF "Name -> On Select" [onselect] [Name] [START] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
  // << END OF "Name -> On Select" [onselect] [Name] [STOP] [JS] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE]
}

function usrEvent__Sy__onfocus(HTMLElement) {
  // >> START OF "Sy -> On Focus" [onfocus] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Focus" [onfocus] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onblur(HTMLElement) {
  // >> START OF "Sy -> On Blur (loss of focus)" [onblur] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Blur (loss of focus)" [onblur] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onclick(HTMLElement) {
  // >> START OF "Sy -> On Click" [onclick] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Click" [onclick] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__ondblclick(HTMLElement) {
  // >> START OF "Sy -> On Double Click" [ondblclick] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Double Click" [ondblclick] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onkeydown(HTMLElement) {
  // >> START OF "Sy -> On Key Down" [onkeydown] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Key Down" [onkeydown] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onkeypress(HTMLElement) {
  // >> START OF "Sy -> On Key Press" [onkeypress] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Key Press" [onkeypress] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onkeyup(HTMLElement) {
  // >> START OF "Sy -> On Key Up" [onkeyup] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Key Up" [onkeyup] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onchange(HTMLElement) {
  // >> START OF "Sy -> On Change" [onchange] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Change" [onchange] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onmousedown(HTMLElement) {
  // >> START OF "Sy -> On Mouse Down" [onmousedown] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Mouse Down" [onmousedown] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onmousemove(HTMLElement) {
  // >> START OF "Sy -> On Mouse Move" [onmousemove] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Mouse Move" [onmousemove] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onmouseout(HTMLElement) {
  // >> START OF "Sy -> On Mouse Out" [onmouseout] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Mouse Out" [onmouseout] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onmouseover(HTMLElement) {
  // >> START OF "Sy -> On Mouse Over" [onmouseover] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Mouse Over" [onmouseover] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onmouseup(HTMLElement) {
  // >> START OF "Sy -> On Mouse Up" [onmouseup] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Mouse Up" [onmouseup] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}
function usrEvent__Sy__onselect(HTMLElement) {
  // >> START OF "Sy -> On Select" [onselect] [Sy] [START] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
  // << END OF "Sy -> On Select" [onselect] [Sy] [STOP] [JS] [A6D6813A-9F12-433B-AFEF-1381200EA8F9]
}


function usrEvent__Find_tally__onsubmit(frm) {
  // >> START OF "Find tally -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A]
  // << END OF "Find tally -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A]
}



function usrEvent__Find_tally__onreset() {
  // >> START OF "Find tally -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A]
  // << END OF "Find tally -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A]
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


<script language='javascript' src='qwikcalendar.js'></script>
<?php
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
<meta name="generator" content="dbQwikSite Ecommerce"><meta name="dbQwikSitePE" content="QSFREEPE">
<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
<BODY>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
<Center>
<center><hr /><font size="5">
Find tally
</font><hr /></center>
<p><br>
  
    <?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
  
</p>
<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>

<A NAME=top></A>
<Form name="qs_search_form" method="post" action="./tally_search.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php
// >> START OF "before search form" [FRMSRCH001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before search form" [FRMSRCH001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
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


<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#FFFFFF">

<tr>
<td colspan="2" class="ThRows">Find tally</td>
</tr>
<?php
$css_class = "\"TrOdd\"";
if ($err_string != "") {
    print "<tr>";
    print "<td class=\"ThRows\"><Strong>Error:</Strong></td>";
    print "<td class=" . $css_class . " align=Default>" . $err_string . "</td>";
    print "</tr>";
}
?>
<tr>
<td class="ThRows">Position</td>
<?php
$cellvalue = "";
if ((!isset($_GET["search_fd1"])) && (!isset($_POST["search_fd1"]))) {
    $itemvalue = "";
} else {
    $itemvalue = $arryitemvalue[1];
}

    $cellvalue = "<select name=\"search_fd1\" ><option value=\"\"" . qscheckselected("",$itemvalue,"selected") . ">ALL</option>" . qsmysqlgen_listbox("  Select Distinct `position`,`position` From `position` Order by `position` Asc ","search_fd1","position","position",$itemvalue) . "</select>" . "<input type=\"hidden\" name=\"multisearch_fd1\" value=\"\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [C617D999-39FB-456E-8E91-F2897DC51391] [Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [C617D999-39FB-456E-8E91-F2897DC51391] [Position]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Name</td>
<?php
$cellvalue = "";
if ((!isset($_GET["search_fd2"])) && (!isset($_POST["search_fd2"]))) {
    $itemvalue = "";
} else {
    $itemvalue = $arryitemvalue[2];
}

    $cellvalue = "<input type=\"text\" name=\"search_fd2\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"50\" >" . "<input type=\"hidden\" name=\"multisearch_fd2\" value=\"\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE] [Name]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [369B1C81-4D0A-4E6B-B189-8F820C5EB2FE] [Name]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Sy</td>
<?php
$cellvalue = "";
if ((!isset($_GET["search_fd6"])) && (!isset($_POST["search_fd6"]))) {
    $itemvalue = "";
} else {
    $itemvalue = $arryitemvalue[6];
}

    $cellvalue = "<input type=\"text\" name=\"search_fd6\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"15\" >" . "<input type=\"hidden\" name=\"multisearch_fd6\" value=\"\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [A6D6813A-9F12-433B-AFEF-1381200EA8F9] [Sy]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [A6D6813A-9F12-433B-AFEF-1381200EA8F9] [Sy]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<?php
#----get back url page----
  $backurl = "./tally.php?";
?>
<tr>
<td colspan="2" class="ThRows" align=Center>
<input type="hidden" name="act" value="n">
<input type="button" name="QS_Back" value="Back" OnClick="javascript:window.location='<?php print $backurl; ?>'">&nbsp;&nbsp;
<input type="submit" name="QS_Submit" value="Search">&nbsp;&nbsp;
<input type="button" name="QS_Clear" value="Clear" OnClick="location='tally_search.php'">
</td>
</tr>
</Table><br>
<?php
// >> START OF "after search form" [FRMSRCH001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after search form" [FRMSRCH001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
</Form>
<?php
if ($link > 0) {mysql_close($link);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
</Center>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
?>
