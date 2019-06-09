<?php
session_start();
if(isset($_SESSION['sroll']))
{

	session_destroy();
   echo "<script>location.href='login.php'</script>";
}
else
{
	echo "error";
}

?>