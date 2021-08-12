<?php 

        setcookie("name","",time()-60*60);
		setcookie("password","",time()-60*60);

		$_POST['admin'] = ""; 
		$_POST['passw'] = ""; 

		header("location: admin_validate.php");


 ?>