<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
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
#  Page Name.................: tally Data
#  Page Type.................: 1 - Data Page
#  Page GUID.................: E9DD7270-3CF2-473E-8A8E-513B25156014
#  Page SerialID.............: 547
#  Page File Name............: tally
#   
#  Generated on..............: Tuesday, October 28, 2008
#  Generation Timestamp......: 2008-28-10 11:36:21
#  Language..................: PHP
#   
#  7 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | Id                                       | 0   | [id]                                     | Id                                       |
#  |   1 | Position                                 | 0   | [position]                               | Position                                 |
#  |   2 | Name                                     | 0   | [name]                                   | Name                                     |
#  |   3 | Platform                                 | 0   | [platform]                               | Platform                                 |
#  |   4 | Picture                                  | 0   | [picture]                                | Picture                                  |
#  |   5 | Votecount                                | 0   | [votecount]                              | Votecount                                |
#  |   6 | Sy                                       | 0   | [sy]                                     | Sy                                       |
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

// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
$_SESSION["SkipConnectMySQL"] = "";
// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
require('qs_connection.php');
require('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
$err_string="";
$quotechar = "`";
$quotedate = "'";
$sql = "";
$sql_ext = "";
$SQL_GroupOnly = "";
$sqlmaster = "";
$sql_extmaster = "";
$cellvalue = "";
$istrdata = "";
$icon = "";
$ioldcon = "";
$sortstring = "";
$parammaster = array();
$fields = array();
$intColCount = 0;
$intColIndex = 0;
$fields[0] = "candidate.`id`";
$parammaster[0] = "";
$fields[1] = "candidate.`position`";
$parammaster[1] = "";
$fields[2] = "candidate.`name`";
$parammaster[2] = "";
$fields[3] = "candidate.`platform`";
$parammaster[3] = "";
$fields[4] = "candidate.`picture`";
$parammaster[4] = "";
$fields[5] = "candidate.`votecount`";
$parammaster[5] = "";
$fields[6] = "candidate.`sy`";
$parammaster[6] = "";
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


$searchmode = array();
$stdsearchopt = array();
$searchmode[0] = 0;
$stdsearchopt[0]=0;
$searchmode[1] = 0;
$stdsearchopt[1]=1;
$searchmode[2] = 0;
$stdsearchopt[2]=0;
$searchmode[3] = 0;
$stdsearchopt[3]=0;
$searchmode[4] = 0;
$stdsearchopt[4]=0;
$searchmode[5] = 0;
$stdsearchopt[5]=0;
$searchmode[6] = 0;
$stdsearchopt[6]=0;
//Field Related Declarations
//Assign Recordset Field Index
$rs_idx_id           = 0;
$rs_idx_position     = 1;
$rs_idx_name         = 2;
$rs_idx_platform     = 3;
$rs_idx_picture      = 4;
$rs_idx_votecount    = 5;
$rs_idx_sy           = 6;

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
if(!$result = @mysql_query($sqltemp . " " . $sql_ext . " limit 0,1")){
    $err_string .= "<strong>Error:</strong>while connecting to database<br>" . mysql_error();
// >> START OF "on connect error" [DBCONNERR001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on connect error" [DBCONNERR001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
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
} //==end if $err_string != ""
// >> START OF "before request clear session" [REQCLRSESS001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before request clear session" [REQCLRSESS001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
if (qsrequest("clearsession") == "1") {
// >> START OF "on clear session" [CLEARSESS001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on clear session" [CLEARSESS001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
    $_SESSION["tally_tally"] = "";
    $_SESSION["tally_tally_PageNumber"] = "";
} //==end if clearsession
// >> START OF "after request clear session" [REQCLRSESS001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after request clear session" [REQCLRSESS001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
$filter_string = "";
$filter_stringmaster = "";
$qry_string = "";
$i = 0;
$searchendkey ="";
$searchstartkey = "";
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
while ($i < mysql_num_fields($result)) {
    $meta = mysql_fetch_field($result);
    $field_name  = $meta->name;
    $field_table = $meta->table;
    $field_type  = $meta->type;
    $type_field = "";
    $type_field = returntype($field_type);
    if (($searchmode[$i])==0) { # 0 = Std, 1 = Advance
        if (($stdsearchopt[$i])==0) { //==0=Contain , 1 = Equal : for standard mode
            $searchstartkey = "%";
            $searchendkey = "%";
        } else {
            $searchstartkey = "";
            $searchendkey = "";
        }
    } else { //==end if searchmode = 0
        $searchstartkey= "";
        $searchendkey = "";
    } //==end if searchmode <> 0
    if (qsrequest("clearsession") == "1") {
        $_SESSION["tally_search_fd" . $i] = "";
        $_SESSION["tally_multisearch_fd" . $i] = "";
        $_SESSION["tally_search_fd_" . $i] = "";
        $_SESSION["tally_search_fd" . $i . "_DateFormat"] = "";
        $_SESSION["tally_search_fd_" . $i . "_DateFormat"] = "";
    } //==end if clearsession
    if (qsrequest("search_fd" . $i) != "") {
        $_SESSION["tally_search_fd" . $i] = qsrequest("search_fd" . $i);
    }
    if (qsrequest("multisearch_fd" . $i) != "") {
        $_SESSION["tally_multisearch_fd" . $i] = qsrequest("multisearch_fd" . $i);
    }
    if (qsrequest("search_fd_" . $i) != "") {
        $_SESSION["tally_search_fd_" . $i] = qsrequest("search_fd_" . $i);
    }
    //Prepare date format of each item search to Session
    if (qsrequest("search_fd" . $i . "_DateFormat") != "") { 
      $_SESSION["tally_search_fd" . $i . "_DateFormat"] = qsrequest("search_fd" . $i . "_DateFormat"); 
    }
    if (qsrequest("search_fd_" . $i . "_DateFormat") != "") { 
      $_SESSION["tally_search_fd_" . $i . "_DateFormat"] = qsrequest("search_fd_" . $i . "_DateFormat"); 
    }
    if ((qssession("tally_search_fd" . $i) != "") && (qssession("tally_search_fd" . $i) != "*")) {
        $idata = qssession("tally_search_fd" . $i);
        $icon = " AND ";
        $ioldcon = "";
        if (substr($idata, 0, 2) == "||") {
            $icon = " Or ";
            $ioldcon = "||";
            $iopt = substr($idata, 2, 2);
            $idata = substr($idata, 2);
        }else{
            $iopt = substr($idata, 0, 2);
        }
        $idata = str_replace("*", "%", $idata);
        $irealdata = $idata;
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
        } else {
            $iopt = substr($idata, 0, 1);
            if (($iopt == "<") || ($iopt == ">") || ($iopt == "=")) {
                $irealdata = substr($idata,1);
            } else {
                $iopt = "=";
            }
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
                    if (($iopt)=="="){
                        $conditionstr = " = ";
                    		 $istrdata = str_replace("=", "", $istrdata);
                    } else {
                        $conditionstr = $iopt;
                    		 $istrdata = $irealdata;
                    		 $searchstartkey = "";
                    		 $searchendkey   = "";
                    }
                    //Prepare  date format for each item search then convert to compatible format 
                    if (qssession("tally_search_fd" . $i . "_DateFormat") != ""){ 
                      $iDateFormat = qssession("tally_search_fd" . $i . "_DateFormat"); 
                    } else { 
                      $iDateFormat = ""; 
                    } 
                    if ((qssession("tally_multisearch_fd" . $i) != "")) {
                        $multisearch = qssession("tally_multisearch_fd" . $i);
                        $searcharray = split(",",$multisearch);
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("tally_multisearch_fd" . $i);
                            $filter_string = "(" . $fields[$i] . $conditionstr . " ". $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex]  . $conditionstr . " ". $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            }
                            $filter_string .= ")";
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("tally_multisearch_fd" . $i);
                            $filter_string .= " AND (" . $fields[$i]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            }
                            $filter_string .= ")";
                        }
                    } else {
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $filter_string = $fields[$i]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            if ($parammaster[$i] != ""){
                                $filter_stringmaster = $parammaster[$i]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            }
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $filter_string .= $icon . $fields[$i]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            if ($parammaster[$i] != ""){
                                $filter_stringmaster .= $icon . $parammaster[$i]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            }
                        }
                    }
                } else {
                    $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                    $err_string .= "Description: Invalid DateTime.<br>";
                }
            //==end $type_field == "type_datetime"
            } elseif ($type_field == "type_integer") {
                $irealdata = str_replace("%", "", $irealdata);
                if (is_numeric($irealdata)) {
                    if ((qssession("tally_multisearch_fd" . $i) != "")) {
                        $multisearch = qssession("tally_multisearch_fd" . $i);
                        $searcharray = split(",",$multisearch);
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . $idata;
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("tally_multisearch_fd" . $i);
                            $filter_string = "(" . $fields[$i] . " " . $iopt . " " . $irealdata;
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex] . " " . $iopt . " " . $irealdata;
                            }
                            $filter_string .= ")";
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . $idata;
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("tally_multisearch_fd" . $i);
                            $filter_string .= " AND (" . $fields[$i] . " " . $iopt . " " . $irealdata;
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex] . " " . $iopt . " " . $irealdata;
                            }
                            $filter_string .= ")";
                        }
                    } else {
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . $idata;
                            $filter_string = $fields[$i] . " " . $iopt . " " . $irealdata;
                            if ($parammaster[$i] != ""){
                                $filter_stringmaster = $parammaster[$i] . " " . $iopt . " " . $irealdata;
                            }
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . $idata;
                            $filter_string .= $icon . $fields[$i] . " " . $iopt . " " . $irealdata;
                            if ($parammaster[$i] != ""){
                                $filter_stringmaster .= $icon . $parammaster[$i] . " " . $iopt . " " . $irealdata;
                            }
                        }
                    }
                } else {
                    $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                    $err_string .= "Description: Type mismatch.<br>";
                }
            //==end $type_field == "type_integer"
            } elseif ($type_field == "type_string") {
                if (($iopt)=="="){
                    $conditionstr = " Like ";
                    	 $istrdata = str_replace("=", "", $istrdata);
                 } else {
                      $conditionstr = $iopt;
                  		 $istrdata = $irealdata;
                  		 $searchstartkey = "";
                  		 $searchendkey   = "";
                 }
                 if ((qssession("tally_multisearch_fd" . $i) != "")) {
                        $multisearch = qssession("tally_multisearch_fd" . $i);
                        $searcharray = split(",",$multisearch);
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("tally_multisearch_fd" . $i);
                            $filter_string = "(" . $fields[$i] . $conditionstr . " '" .$searchstartkey.  ereg_replace("'","''",stripslashes($irealdata)). $searchendkey . "'";
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex]  . $conditionstr . " '" .$searchstartkey.  ereg_replace("'","''",stripslashes($irealdata)). $searchendkey . "'";
                            }
                            $filter_string .= ")";
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("tally_multisearch_fd" . $i);
                            $filter_string .= " AND (" . $fields[$i]  . $conditionstr . " '" .$searchstartkey. ereg_replace("'","''",stripslashes($irealdata)) . $searchendkey . "'";
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex]  . $conditionstr . " '" .$searchstartkey. ereg_replace("'","''",stripslashes($irealdata)) . $searchendkey . "'";
                            }
                            $filter_string .= ")";
                        }
                    } else {
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $filter_string = $fields[$i]  . $conditionstr . " '" .$searchstartkey. ereg_replace("'","''",stripslashes($irealdata)) . $searchendkey . "'";
                            if ($parammaster[$i] != ""){
                                 $filter_stringmaster = $parammaster[$i]  . $conditionstr . " '" .$searchstartkey. ereg_replace("'","''",stripslashes($irealdata)) . $searchendkey . "'";
                            }
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $filter_string .= $icon . $fields[$i]  . $conditionstr . " '" .$searchstartkey. ereg_replace("'","''",stripslashes($irealdata)) . $searchendkey . "'";
                            if ($parammaster[$i] != ""){
                                 $filter_stringmaster .= $icon . $parammaster[$i]  . $conditionstr . " '" .$searchstartkey. ereg_replace("'","''",stripslashes($irealdata)) . $searchendkey . "'";
                            }
                        }
                    }
            //==end $type_field == "type_string"
            } else {
                if ((qssession("tally_multisearch_fd" . $i) != "")) {
                    $multisearch = qssession("tally_multisearch_fd" . $i);
                    $searcharray = split(",",$multisearch);
                    $irealdata = str_replace("%", "",  $irealdata);
                    if ($qry_string == "") {
                        $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                        $qry_string .= "&multisearch_fd" . $i . "=" . qssession("tally_multisearch_fd" . $i);
                        $filter_string = "(" . $fields[$i] . " = '" . ereg_replace("'","''",stripslashes($irealdata)) . "'";
                        $j = 0;
                        for ($j = 0; $j < count($searcharray); $j++) {
                            $searchindex = $searcharray[$j];
                            $filter_string .= " OR " . $fields[$searchindex] . " = '" . ereg_replace("'","''",stripslashes($irealdata)) . "'";
                        }
                        $filter_string .= ")";
                    } else {
                        $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                        $qry_string .= "&multisearch_fd" . $i . "=" . qssession("tally_multisearch_fd" . $i);
                        $filter_string .= " AND (" . $fields[$i] . " = '" . ereg_replace("'","''",stripslashes($irealdata)) . "'";
                        $j = 0;
                        for ($j = 0; $j < count($searcharray); $j++) {
                            $searchindex = $searcharray[$j];
                            $filter_string .= " OR " . $fields[$searchindex] . " = '" . ereg_replace("'","''",stripslashes($irealdata)) . "'";
                        }
                        $filter_string .= ")";
                    }
                } else {
                    if ($qry_string == "") {
                        $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                        $filter_string = $fields[$i] . " like '" . ereg_replace("'","''",stripslashes($irealdata)) . "'";
                        if ($parammaster[$i] != ""){
                            $filter_stringmaster = $parammaster[$i] . " like '" . ereg_replace("'","''",stripslashes($irealdata)) . "'";
                        }
                    } else {
                        $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                        $filter_string .= $icon . $fields[$i] . " like '" . ereg_replace("'","''",stripslashes($irealdata)) . "'";
                        if ($parammaster[$i] != ""){
                            $filter_stringmaster .= $icon . $parammaster[$i] . " like '" . ereg_replace("'","''",stripslashes($irealdata)) . "'";
                        }
                    }
                }
            } //==end $type_field == "type_unknown
        } //==end if ($meta)
    } //==end if search_fd(n) <> ""
    //==Begin Search between
    if (qssession("tally_search_fd_" . $i)) {
        $idata = qssession("tally_search_fd_" . $i);
        $idata = str_replace("*", "%", $idata);
        $irealdata = $idata;
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
        } else {
            $iopt = substr($idata, 0, 1);
            if (($iopt == "<") || ($iopt == ">") || ($iopt == "=")) {
                $irealdata = substr($idata,1);
            } else {
                $iopt = "=";
            }
        }
        if ($meta) {
            if ($type_field == "type_datetime") {
                if ((($timestamp = strtotime($irealdata)) !== -1)) {
                    if (($iopt)=="="){
                        $conditionstr = " = ";
                        $istrdata = str_replace("=", "", $istrdata);
                    } else {
                        $conditionstr = $iopt;
                        $istrdata = $irealdata;
                        $searchstartkey = "";
                        $searchendkey   = "";
                    }
                }
                    //Prepare  date format for each item search then convert to compatible format 
                    if (qssession("tally_search_fd_" . $i . "_DateFormat") != ""){ 
                      $iDateFormat = qssession("tally_search_fd_" . $i . "_DateFormat"); 
                    } else { 
                      $iDateFormat = ""; 
                    } 
                if ($qry_string == "") {
                    $qry_string = "search_fd_" . $i . "=" . $iopt . urlencode(stripslashes($irealdata));
                    $filter_string = $fields[$i]  . $conditionstr . " " . $quotedate .$searchstartkey . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $searchendkey . $quotedate;
                } else {
                    $qry_string .= "&search_fd_" . $i . "=" . $iopt . urlencode(stripslashes($irealdata));
                    $filter_string .= " AND " . $fields[$i]  . $conditionstr . " " . $quotedate . $searchstartkey . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $searchendkey . $quotedate;
                }
            //==end $type_field == "type_datetime"
            } elseif ($type_field == "type_integer") {
                $irealdata = str_replace("%", "", $irealdata);
                if (is_numeric($irealdata)) {
                    if ($qry_string == "") {
                        $qry_string = "search_fd_" . $i . "=" . $iopt . $irealdata;
                        $filter_string = $fields[$i] . " " . $iopt . " " . $irealdata;
                    } else {
                        $qry_string .= "&search_fd_" . $i . "=" . $iopt . $irealdata;
                        $filter_string .= " AND " . $fields[$i] . " " . $iopt . " " . $irealdata;
                    }
                } else {
                    $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                    $err_string .= "Description: Type mismatch.<br>";
                }
            } //==end $type_field == "type_integer"
        } //==end if ($meta)
    } //==end if search_fd_(n) <> "" for between search
    $i++;
} //==end while loop field index
if ($result > 0) {mysql_free_result($result);}
if ($filter_string != "") {
    $filter_string = "(" . $filter_string . ")";
    if (strpos(strtoupper($sql), " WHERE ")) {
         $sql .= " And " . $filter_string;
    }else{
         $sql .= " Where " . $filter_string;
    }
}
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
// >> START OF "before set page and size" [SETPAGESIZE001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before set page and size" [SETPAGESIZE001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
$n = 0;
if (qssession("tally_tally") != "") {
    $parampage = explode("||", qssession("tally_tally"));
    $n = count($parampage);
}
$current_page = 1;
$page_size  = 10;
if ($n > 0) {
    if ($parampage[0] != "") {
        $current_page = $parampage[0];
    }
    if ($parampage[1] != "") {
        $page_size = $parampage[1];
    }
}
if (qsrequest("page")<>"") {
    $current_page = qsrequest("page");
}
else if (qssession("tally_tally_PageNumber")) {
    $current_page = qssession("tally_tally_PageNumber");
}
else {
    $current_page = 1;
}
$_SESSION["tally_tally_PageNumber"] = $current_page;
if (qsrequest("page_size")<>"") {
    if(qsrequest("page_size") != $page_size) {
        $current_page = 1;
    }
    $page_size = qsrequest("page_size");
}
// >> START OF "after set page and size" [SETPAGESIZE001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after set page and size" [SETPAGESIZE001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
// >> START OF "before set sort field" [SETSORTFLD001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before set sort field" [SETSORTFLD001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
$_SESSION["tally_tally"] = $current_page . "||" . $page_size;
if (qsrequest("sortfield") != "") {
    $_SESSION["tally_sortfield"] = qsrequest("sortfield");
}
if (qsrequest("sortby") != "") {
    $_SESSION["tally_sortby"] = qsrequest("sortby");
}
if (qssession("tally_sortfield")) {
    $sql = $sql . " " . $SQL_GroupOnly;
    $sql = $sql . " Order By " . stripslashes(qssession("tally_sortfield")) . " " . stripslashes(qssession("tally_sortby"));
    $sortstring = "&sortfield=" . qssession("tally_sortfield") . "&sortby="  . qssession("tally_sortby");
} else {
    $sql = $sql . " " . $sql_ext;
}
// >> START OF "after set sort field" [SETSORTFLD001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after set sort field" [SETSORTFLD001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<Title>tally Data</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>

<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
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
var _Id                                       = 0;
var _Position                                 = 1;
var _Name                                     = 2;
var _Platform                                 = 3;
var _Picture                                  = 4;
var _Votecount                                = 5;
var _Sy                                       = 6;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Id] = "Id";
fieldPrompts[_Position] = "Position";
fieldPrompts[_Name] = "Name";
fieldPrompts[_Platform] = "Platform";
fieldPrompts[_Picture] = "Picture";
fieldPrompts[_Votecount] = "Votecount";
fieldPrompts[_Sy] = "Sy";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Id] = "Id";
fieldTechNames[_Position] = "Position";
fieldTechNames[_Name] = "Name";
fieldTechNames[_Platform] = "Platform";
fieldTechNames[_Picture] = "Picture";
fieldTechNames[_Votecount] = "Votecount";
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
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>





<link href="candidate.css" rel="stylesheet" type="text/css">
<!-- >> START OF "tally Data ->
<style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>
 Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [E9DD7270-3CF2-473E-8A8E-513B25156014]-->
<!-- << END OF "tally Data -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [E9DD7270-3CF2-473E-8A8E-513B25156014]-->




<script>

function usrEvent__tally_Data__onload() {
  // >> START OF "tally Data -> On Load" [onload] [PAGEEVENT] [START] [JS] [E9DD7270-3CF2-473E-8A8E-513B25156014]
  // << END OF "tally Data -> On Load" [onload] [PAGEEVENT] [START] [JS] [E9DD7270-3CF2-473E-8A8E-513B25156014]
}



function usrEvent__tally_Data__onunload() {
  // >> START OF "tally Data -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [E9DD7270-3CF2-473E-8A8E-513B25156014]
  // << END OF "tally Data -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [E9DD7270-3CF2-473E-8A8E-513B25156014]
}



function usrEvent__tally_Data__onresize() {
  // >> START OF "tally Data -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [E9DD7270-3CF2-473E-8A8E-513B25156014]
  // << END OF "tally Data -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [E9DD7270-3CF2-473E-8A8E-513B25156014]
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









</script>

<?php
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<meta name="generator" content="dbQwikSite Ecommerce"><meta name="dbQwikSitePE" content="QSFREEPE">
<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<BODY>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<SCRIPT language=JavaScript>
function cell_over(cell, classname) {
    if (document.all || document.getElementById) {
        cell.classBackup = cell.className;
        cell.className   = classname;
    }
}
function cell_out(cell)
{
    if (document.all || document.getElementById) {
        cell.className   = cell.classBackup;
    }
}
</SCRIPT>

<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<Center>
<center><hr />
  <span class="style1"><font size="5">
Tally Sheet </font></span>
  <hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>

<?php
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
$result = mysql_query($sql)
          or die("Invalid query");
// >> START OF "on open recordset" [RSOPEN001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset" [RSOPEN001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
   if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
   }
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
$num_rows = mysql_num_rows($result);
$page_count = ceil($num_rows/$page_size);
if ($current_page > $page_count) { $current_page = 1; }
if ($current_page < 1) { $current_page = 1; }
if ($page_count < 1) { $page_count = 1; }
if ($filter_string !=""){
  print "Found ".$num_rows. " record(s)";
  print "<br>";
}
?>
<?php
// >> START OF "before top navigation toolbar" [TOPNAVBARTD001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before top navigation toolbar" [TOPNAVBARTD001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>

<?php
if ($qry_string != "") {
  $navqry_string = "&" . $qry_string;
} else {
  $navqry_string = "";
}
print "<table height=\"30\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">";
print "<tr align=\"center\" valign=\"middle\">";


print "<form action=\"tally.php\" method=\"post\" name=\"QSSelectPage\">";
print "<td width=\"35\" align=\"center\"><A HREF=\"tally.php?clearsession=1" . "\"><img src=\"images/bt_qsshowall.gif\" border=\"0\" align=\"absmiddle\" title=\"Show All\"></A></td><td width=\"8\"></td>";
print "<td width=\"35\" align=\"center\"><A HREF=\"tally_search.php?" . $qry_string . "\"><img src=\"images/bt_qssearch.gif\" border=\"0\" align=\"absmiddle\" title=\"Search\"></A></td><td width=\"8\"></td>";
if ($current_page > 1) {
    print "<td width=\"35\" align=\"center\"><A HREF=\"tally.php?page=" . ($current_page - 1) . "\"><img src=\"images/bt_qsback.gif\" border=\"0\" align=\"absmiddle\" title=\"Previous\"></A></td><td width=\"8\"></td>";
} else {
    print "<td width=\"35\" align=\"center\"><img src=\"images/bt_qsback_inact.gif\" border=\"0\" align=\"absmiddle\" title=\"Previous\"></td><td width=\"8\"></td>";
}
print "<td width=\"35\" align=\"center\"><select name=\"page\"  onChange=\"window.location='tally.php?page=' + this.value; \">";
for ($i = 1; $i <= $page_count; $i++) {
    if ($i == $current_page) {
        print "<option value=\"". $i . "\" selected>" . ($i) . "</option>";
    } else {
        print "<option value=\"". $i . "\">" . ($i) . "</option>";
    }
}
print "</select></td><td width=\"8\"></td>";
if ($current_page < $page_count) {
    print "<td width=\"35\" align=\"center\"><A HREF=\"tally.php?page=" . ($current_page + 1) . "\"><img src=\"images/bt_qsnext.gif\" border=\"0\" align=\"absmiddle\" title=\"Next\"></A></td><td width=\"8\"></td>";
} else {
    print "<td width=\"35\" align=\"center\"><img src=\"images/bt_qsnext_inact.gif\" border=\"0\" align=\"absmiddle\" title=\"Next\"></td><td width=\"8\"></td>";
}
print "<td width=\"35\" align=\"center\"><A HREF=#BOTTOM><img src=\"images/bt_qsbottom.gif\" border=\"0\" align=\"absmiddle\" title=\"Bottom\"></A></td><td width=\"8\"></td>";
print "</form>";
print "</tr>";
print "</table>";
print "<br>";
?>
<?php
// >> START OF "after top navigation toolbar" [TOPNAVBARTD001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after top navigation toolbar" [TOPNAVBARTD001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<?php
if ($num_rows > 0) {
// >> START OF "on record found" [RECORDFOUND001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on record found" [RECORDFOUND001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<?php
// >> START OF "before data table" [DATATABLE001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before data table" [DATATABLE001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<Table  id="masterDataTable"  Border="0" Cellpadding="2" Cellspacing="1"BgColor="#FFFFFF">
<?php
// >> START OF "before data header row" [TBLHDR001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before data header row" [TBLHDR001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<tr>
<?php
// >> START OF "before header row first cell" [TBLDATAHDRCELL] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before header row first cell" [TBLDATAHDRCELL] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>

<?php
$nextsortasc = qssortasc(qssession("tally_sortfield"), $fields[0], qssession("tally_sortby"),  "Sort Ascending");
$nextsortdesc = qssortdesc(qssession("tally_sortfield"), $fields[0], qssession("tally_sortby"),  "Sort Descending");
?>

<?php
$nextsortasc = qssortasc(qssession("tally_sortfield"), $fields[1], qssession("tally_sortby"),  "Sort Ascending");
$nextsortdesc = qssortdesc(qssession("tally_sortfield"), $fields[1], qssession("tally_sortby"),  "Sort Descending");
?>
<td id="Position_caption_cell" class="ThRows"  NOWRAP ><a href="tally.php?sortfield=<?php print urlencode(stripslashes($fields[1]));?>&sortby=ASC<?php print $navqry_string; ?>"><?php print $nextsortasc; ?></a>
&nbsp;<span id="Position_caption_div">Position</span>&nbsp;
<a href="tally.php?sortfield=<?php print urlencode(stripslashes($fields[1]));?>&sortby=DESC<?php print $navqry_string; ?>"><?php print $nextsortdesc; ?></a></td>
<?php
$nextsortasc = qssortasc(qssession("tally_sortfield"), $fields[2], qssession("tally_sortby"),  "Sort Ascending");
$nextsortdesc = qssortdesc(qssession("tally_sortfield"), $fields[2], qssession("tally_sortby"),  "Sort Descending");
?>
<td id="Name_caption_cell" class="ThRows"  NOWRAP ><a href="tally.php?sortfield=<?php print urlencode(stripslashes($fields[2]));?>&sortby=ASC<?php print $navqry_string; ?>"><?php print $nextsortasc; ?></a>
&nbsp;<span id="Name_caption_div">Name</span>&nbsp;
<a href="tally.php?sortfield=<?php print urlencode(stripslashes($fields[2]));?>&sortby=DESC<?php print $navqry_string; ?>"><?php print $nextsortdesc; ?></a></td>
<?php
$nextsortasc = qssortasc(qssession("tally_sortfield"), $fields[3], qssession("tally_sortby"),  "Sort Ascending");
$nextsortdesc = qssortdesc(qssession("tally_sortfield"), $fields[3], qssession("tally_sortby"),  "Sort Descending");
?>
<td id="Platform_caption_cell" class="ThRows"  NOWRAP ><a href="tally.php?sortfield=<?php print urlencode(stripslashes($fields[3]));?>&sortby=ASC<?php print $navqry_string; ?>"><?php print $nextsortasc; ?></a>
&nbsp;<span id="Platform_caption_div">Platform</span>&nbsp;
<a href="tally.php?sortfield=<?php print urlencode(stripslashes($fields[3]));?>&sortby=DESC<?php print $navqry_string; ?>"><?php print $nextsortdesc; ?></a></td>
<?php
$nextsortasc = qssortasc(qssession("tally_sortfield"), $fields[4], qssession("tally_sortby"),  "Sort Ascending");
$nextsortdesc = qssortdesc(qssession("tally_sortfield"), $fields[4], qssession("tally_sortby"),  "Sort Descending");
?>
<?php
$nextsortasc = qssortasc(qssession("tally_sortfield"), $fields[5], qssession("tally_sortby"),  "Sort Ascending");
$nextsortdesc = qssortdesc(qssession("tally_sortfield"), $fields[5], qssession("tally_sortby"),  "Sort Descending");
?>
<td id="Votecount_caption_cell" class="ThRows"  NOWRAP ><a href="tally.php?sortfield=<?php print urlencode(stripslashes($fields[5]));?>&sortby=ASC<?php print $navqry_string; ?>"><?php print $nextsortasc; ?></a>
&nbsp;<span id="Votecount_caption_div">Votecount</span>&nbsp;
<a href="tally.php?sortfield=<?php print urlencode(stripslashes($fields[5]));?>&sortby=DESC<?php print $navqry_string; ?>"><?php print $nextsortdesc; ?></a></td>
<?php
$nextsortasc = qssortasc(qssession("tally_sortfield"), $fields[6], qssession("tally_sortby"),  "Sort Ascending");
$nextsortdesc = qssortdesc(qssession("tally_sortfield"), $fields[6], qssession("tally_sortby"),  "Sort Descending");
?>
<td id="Sy_caption_cell" class="ThRows"  NOWRAP ><a href="tally.php?sortfield=<?php print urlencode(stripslashes($fields[6]));?>&sortby=ASC<?php print $navqry_string; ?>"><?php print $nextsortasc; ?></a>
&nbsp;<span id="Sy_caption_div">Sy</span>&nbsp;
<a href="tally.php?sortfield=<?php print urlencode(stripslashes($fields[6]));?>&sortby=DESC<?php print $navqry_string; ?>"><?php print $nextsortdesc; ?></a></td><?php
// >> START OF "after header row last cell" [TBLDATAHDRCELL] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after header row last cell" [TBLDATAHDRCELL] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
</tr>
<?php
// >> START OF "after data header row" [TBLHDR001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after data header row" [TBLHDR001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<?php
$rowcount = 0;
$current_row = ($current_page - 1)*$page_size;
if (($num_rows > 0) && ($current_row < $num_rows)){
    mysql_data_seek($result, $current_row);
}
while (($row = mysql_fetch_array($result)) && ($rowcount < $page_size)) {
// >> START OF "on fetch data" [DATAFETCH001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on fetch data" [DATAFETCH001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]

// >> START OF "before table row" [ROWTR001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before table row" [ROWTR001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]

  $intColCount = 0;
// >> START OF "on row class style" [ROWCLASS001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on row class style" [ROWCLASS001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]

    if (($rowcount%2) == 0) {
        $css_class = "\"TrOdd\"";
    } else {
        $css_class = "\"TrRows\"";
    }
    print "<tr class=" . $css_class . " onmouseover=\"cell_over(this, 'TrHover')\"  onmouseout=\"cell_out(this)\">";
// >> START OF "before table column" [ROWTD001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before table column" [ROWTD001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]

   $intColCount++;
   $intColIndex = 0;

    $cellvalue = "" . number_format($row[0],0,".",",") . "";
// >> START OF "Id -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [03A1FD30-F9A6-43AE-A675-EE34CB3BFB77] [Id]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Id -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [03A1FD30-F9A6-43AE-A675-EE34CB3BFB77] [Id]

    
   $intColCount++;
   $intColIndex = 1;

    $cellvalue = "" . $row[1] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [49A59164-978D-4699-9B01-BCA7950EF625] [Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [49A59164-978D-4699-9B01-BCA7950EF625] [Position]

    print "<td align=Default >";
    print $cellvalue;
    print "</td>";
   $intColCount++;
   $intColIndex = 2;

    $cellvalue = "" . $row[2] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [9DDB8658-03B8-4402-80BE-249A17FDE053] [Name]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [9DDB8658-03B8-4402-80BE-249A17FDE053] [Name]

    print "<td align=Default >";
    print $cellvalue;
    print "</td>";
   $intColCount++;
   $intColIndex = 3;

    $cellvalue = "" . $row[3] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Platform -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [C034392B-501D-486E-B41E-27A4F813CC89] [Platform]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Platform -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [C034392B-501D-486E-B41E-27A4F813CC89] [Platform]

    print "<td align=Default >";
    print $cellvalue;
    print "</td>";
  
   $intColCount++;
   $intColIndex = 5;

    $cellvalue = "" . number_format($row[5],0,".",",") . "";
// >> START OF "Votecount -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [2A8DEE25-E631-4B28-8294-BBFEB0C057CB] [Votecount]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Votecount -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [2A8DEE25-E631-4B28-8294-BBFEB0C057CB] [Votecount]

    print "<td align=Right >";
    print $cellvalue;
    print "</td>";
   $intColCount++;
   $intColIndex = 6;

    $cellvalue = "" . $row[6] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [BAA91EF5-6AAF-4665-9768-1B52E371A8AD] [Sy]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [BAA91EF5-6AAF-4665-9768-1B52E371A8AD] [Sy]

    print "<td align=Default >";
    print $cellvalue;
    print "</td>";
// >> START OF "after table column" [ROWTD001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after table column" [ROWTD001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]

    print "</tr>";
// >> START OF "after table row" [ROWTR001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after table row" [ROWTR001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]

  $rowcount = $rowcount + 1;
}//end while
?>
<?php
// >> START OF "before end of data table" [BEFOREENDDATATABLE] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before end of data table" [BEFOREENDDATATABLE] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
    </Table>
<?php
// >> START OF "after data table" [DATATABLE001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after data table" [DATATABLE001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
  <br>
<?php
// >> START OF "before bottom navigation toolbar" [BOTNAVBARTD001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before bottom navigation toolbar" [BOTNAVBARTD001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<?php
}else{
// >> START OF "on no record found" [NORECFOUND001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on no record found" [NORECFOUND001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>

<?php
if ($filter_string != ""){
?><Table Border="0" Cellspacing="1" bgcolor="#CCCCCC" >
  <tr>
    <td height="80" align="Default" bgcolor="#FFFFFF">
      <font color="#000099" size="2">
        No record matched your search criteria.
      </font>
    </td>
  </tr>
</Table><br>

<?php
}else{
 ?><Table Border="0" Cellspacing="1" bgcolor="#CCCCCC" >
  <tr>
    <td height="80" align="Default" bgcolor="#FFFFFF">
      <font color="#000099" size="2">
        No record found.
      </font>
    </td>
  </tr>
</Table><br>

<?php
}
}
if ($qry_string != "") {
  $navqry_string = "&" . $qry_string;
} else {
  $navqry_string = "";
}
print "<table height=\"30\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">";
print "<tr align=\"center\" valign=\"middle\">";

print "<form action=\"tally.php\" method=\"post\" name=\"QSSelectPage\">";
print "<td width=\"35\" align=\"center\"><A HREF=\"tally.php?clearsession=1" . "\"><img src=\"images/bt_qsshowall.gif\" border=\"0\" align=\"absmiddle\" title=\"Show All\"></A></td><td width=\"8\"></td>";
print "<td width=\"35\" align=\"center\"><A HREF=\"tally_search.php?" . $qry_string . "\"><img src=\"images/bt_qssearch.gif\" border=\"0\" align=\"absmiddle\" title=\"Search\"></A></td><td width=\"8\"></td>";
if ($current_page > 1) {
    print "<td width=\"35\" align=\"center\"><A HREF=\"tally.php?page=" . ($current_page - 1) . "\"><img src=\"images/bt_qsback.gif\" border=\"0\" align=\"absmiddle\" title=\"Previous\"></A></td><td width=\"8\"></td>";
} else {
    print "<td width=\"35\" align=\"center\"><img src=\"images/bt_qsback_inact.gif\" border=\"0\" align=\"absmiddle\" title=\"Previous\"></td><td width=\"8\"></td>";
}
print "<td width=\"35\" align=\"center\"><select name=\"page\"  onChange=\"window.location='tally.php?page=' + this.value; \">";
for ($i = 1; $i <= $page_count; $i++) {
    if ($i == $current_page) {
        print "<option value=\"". $i . "\" selected>" . ($i) . "</option>";
    } else {
        print "<option value=\"". $i . "\">" . ($i) . "</option>";
    }
}
print "</select></td><td width=\"8\"></td>";
if ($current_page < $page_count) {
    print "<td width=\"35\" align=\"center\"><A HREF=\"tally.php?page=" . ($current_page + 1) . "\"><img src=\"images/bt_qsnext.gif\" border=\"0\" align=\"absmiddle\" title=\"Next\"></A></td><td width=\"8\"></td>";
} else {
    print "<td width=\"35\" align=\"center\"><img src=\"images/bt_qsnext_inact.gif\" border=\"0\" align=\"absmiddle\" title=\"Next\"></td><td width=\"8\"></td>";
}
print "<td width=\"35\" align=\"center\"><A HREF=#TOP><img src=\"images/bt_qstop.gif\" border=\"0\" align=\"absmiddle\" title=\"Top\"></A></td><td width=\"8\"></td>";
print "</form>";
print "</tr>";
print "</table>";
print "<br>";
?>
<?php
// >> START OF "after bottom navigation toolbar" [BOTNAVBARTD001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after bottom navigation toolbar" [BOTNAVBARTD001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<?php
if ($result > 0) {mysql_free_result($result);}
if ($link > 0) {mysql_close($link);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
        <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
        </div>
    </td>
  </tr>
</table>

<p><A NAME=bottom></A>
    <?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?></p>
<p><a href="home.php"> Home</a> || <a href="tally_rep.php">Print Report</a> || <a href="clear.php">Clear Vote</a> </p>
</Center>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
</BODY>
</HTML>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [E9DD7270-3CF2-473E-8A8E-513B25156014] [tally Data]
?>
