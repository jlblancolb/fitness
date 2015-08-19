<?php session_start();?>
<!--#***************************************************************************
	#*                           autotienda.sh
	#*                            -------------------
	#*   begin                : Thursday, 13 March, 2014
	#*   owner                : Juanlu Blanco
	#*   email                : juanlu@jerezfam.com
	#*
	#*
	#***************************************************************************/
	#***************************************************************************
	#*
	#*   Este programa es un script que automatiza la instalación de prestashop
	#*   mediante ssh, cambia permisos y ejecuta un script en php para
	#*   creación de base de datos y email de un cpanel con tan sólo escribir 3
	#*   parámetros en el script.
	#*   Para más información juanlu@jerezfam.com
	#*
	#***************************************************************************/-->
	
<?php
$usernamedb = "jerezfam";
$passworddb = "juanlu18789";

if(gethostname() == "vz004.xerintel.com"){
	$hostname = "localhost";
}
else{$hostname = "jerezfam.com";}

$user = $_POST['user'];$pass = base64_encode($_POST['pass']);
$dbhandle = mysql_connect($hostname, $usernamedb, $passworddb) or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("jerezfam_joomla",$dbhandle) or die("Could not select jerezfam_joomla");

//execute the SQL query and return records
$query = 'select * from admin_autotienda where user="'.$user.'" and pass="'.$pass.'"';$result = mysql_query($query);
if(mysql_num_rows($result))
{
	$_SESSION["username"] = $user;
	$_SESSION["pass"] = $_POST['pass'];
	echo '<script>location.href = "menu.php"</script>';
}
	else {echo "ERROR: you cannot access here!";}

//close the connection
mysql_close($dbhandle);
?>