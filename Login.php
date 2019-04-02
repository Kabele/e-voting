<?php
    require('includes/mysql_connect.php');
// check that form is sumitted
    if (isset($_POST['login'])){
	    $mat_num= $_POST['mat_num'];
		
		// encrypt password with md5()
        $password= md5($_POST['password']);
		
		$query ="SELECT * FROM user_info WHERE mat_num = '$mat_num' AND password = '$password' ";
		$result = mysql_query($query);
		$count = mysql_num_rows($result);
		if  ($count == 1) {
			echo "You are authenticated";

		}
		else{
			echo "<fontsize'40' color = 'red'>Wrong username or Password</font>";
		}
	}

?> 