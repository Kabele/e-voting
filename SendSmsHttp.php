<?php 
include('connect.php');
include('functions.php');
include('category.php'); 
?>
<?php 

/*Requrire the PostRequest function for posting the API request to the server */
require ("PostRequest.php");
	
$username = $_POST['kabeli@etextmail.com'] ;
$password = $_POST['1magined'] ;
$senderId = $_POST['E-Franchise'];
$destination = $_POST['$phone'];
$longSms = 0;
if(isset($_POST['ckcLongSms']))
{
 $longSms = $_POST['ckcLongSms'];
}

$message = $_POST['Thanks! Your vote has been duly recorded!'];

/* ==================================================
SUBMIT A REQUEST TO SEND THE SMS TO VIA THE HTTP API
=====================================================*/

$phone = mysql_query("SELECT sy FROM students WHERE studid = '".$s."' group by studid");
$destination = mysql_fetch_array($phone);

// submit these variables to the server
$data = array(	'shammah@etextmail.com' => $username, 
			  	'bingham123' => $password,
			 	'E-Franchise' => $senderId,
				 $destination,
				'L' => $longSms, 
				'Thanks, your vote has been recorded!' => $message);

// send a request to the API url
list($header, $content) = PostRequest("http://mail.etextmail.com/smsapi/Send.aspx?", $data);

// display the result of the request
//echo $content . '<br>';

$tok = strtok($content, " "); //Split the $content result into workds

if($tok == "OK") //Success
{
	$tok = strtok(" ");
	echo "Sms sent succesfully using " .$tok . " SMS credits(s).";
}
else{
	//Diaply the full error message
	echo "The following error occured: <br> ".  $content . "<br>";
}

/* =========================================================================
SUBMIT ANOTHER REQUEST TO GET THE NUMBER OF SMS BALANCE IN THE ACCOUNT
============================================================================*/
//submit these variables to the server
$data2 = array(	'shammah@etextmail.com' => $username, 
			  	'bingham123' => $password);

list($header2, $content2) = PostRequest("http://mail.etextmail.com/smsapi/GetCreditBalance.aspx?", $data);

//If you are a Web Hosting Customer, please replace mail.etextmail.com with mail.Your_Domain_Name.com
//String url = "http://mail.Your_Domain_Name.com/smsapi/GetCreditBalance.aspx?" 


// display the result of the request
//echo $content . '<br>';

$tok2 = strtok($content2, " "); //Split the $content result into workds

if($tok2 == "OK") //Success
{
	$tok2 = strtok(" ");
	echo "<br>Account SMS Credit Balance: " . $tok2 . "<br>" ;
}
else{
	//Diaply the full error message
	echo "The following error occured: <br> ".  $content2 . "<br>";
}

?>

