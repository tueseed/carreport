<?php
	//phpinfo()	
 	ini_set('display_errors', 1);
 	error_reporting(~0);

    $serverName = "172.30.200.118";
    $userName = "MINIBI";
    $userPassword = "MINIBI";
    $dbName = "MINIBI";
  
    $connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword,"CharacterSet"  => 'UTF-8');

    $conn = sqlsrv_connect( $serverName, $connectionInfo);

 	if($conn)
 	{
 		//echo "Database Connected.";
 	}
 	else
 	{
 		die( print_r( sqlsrv_errors(), true));
 	}

	//  $sql = "SELECT * FROM CMNDB_EMPLOYEE_INFO WHERE EMPLOYEE_ID = '00500290'"; 
	//  $stmt = sqlsrv_query( $conn, $sql);
	//  $obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC);
	// //  
	// echo json_encode($obj);
 	
?>