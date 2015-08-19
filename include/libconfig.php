<!--#***************************************************************************
	#*                           FTP CONF
	#*                        -------------------
	#*   begin                : Thursday, 13 March, 2014
	#*   owner                : Juanlu Blanco
	#*   email                : juanlu@jerezfam.com
	#*
	#*
	#***************************************************************************/
	#***************************************************************************
	#*  
	#*   Para más información juanlu@jerezfam.com
	#*
	#***************************************************************************/-->

<?php

	function subida_script($ftp_server, $ftp_user, $ftp_pass)
	{


		// set up basic connection 
		$conn_id = ftp_connect($ftp_server); 
		if(!$conn_id) echo "<div class='alert alert-warning' style='width:300px;margin:auto'>Connection established</div>";

		// login with username and password 
		$login_result = ftp_login($conn_id, $ftp_user, $ftp_pass); 
		if($login_result) echo "<div class='alert alert-success' style='width:300px;margin:auto'>Connection established</div>";
		
		ftp_chdir($conn_id, 'public_html');
		ftp_mkdir($conn_id,'search');
		ftp_chdir($conn_id, 'search');
		ftp_mkdir($conn_id,'css');
		ftp_chdir($conn_id,'css');
		echo ftp_pwd($conn_id);
		ftp_chdir($conn_id, '../../autotienda/search');
		echo ftp_pwd($conn_id);
		//Uploading files...
			//to be uploaded 
		$file = "search/.htaccess";
		$fp = fopen($file, 'r');
		ftp_fput($conn_id, $file, $fp, FTP_ASCII);
		
		echo ftp_pwd($conn_id);
		// close the connection 
		ftp_close($conn_id); 
		fclose($fp);
	}
	
?>