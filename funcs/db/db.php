<?php

function getDBConnection(){
	$db_name='ch375071_admin';
	$db_user='ch375071_admin';
	$db_pass='welcome3$IBM';
	$conn=mysqli_connect('localhost',$db_user, $db_pass, $db_name) or die("error occured on getConnection " . mysqli_error($conn));
	return $conn;
}
function executeSQL($sql){
	if (!mysqli_query(getDBConnection(), $sql))
	{
		die($sql . ' - executeSQL Error: ' . mysqli_error());
	}	
}

function selectSQL($sql){
	$query= mysqli_query(getDBConnection(), $sql) or die ("error occured in selectSQL ".mysqli_error()." sql - ".$sql);
	return $query;
}


function getFetchArray($sql){
	$conn=getDBConnection();
	$result= mysqli_query($conn, $sql) or die ("Er:getFetchArray ".mysqli_error()." sql - ".$sql);
	$rows=null;
	while ($row=mysqli_fetch_array($result, MYSQLI_BOTH)){
		$rows[] = $row;
	}
	/* free result set */
	mysqli_free_result($result);
	/* close connection */
	mysqli_close($conn);	
	return $rows; 
}

function getSingleValue($sql){
	$conn=getDBConnection();
	$result= mysqli_query(getDBConnection(), $sql) or die ("Er:getFetchArray ".mysqli_error()." sql - ".$sql);
	$value=null;
	if(count($result) > 0){
		while ($row=mysqli_fetch_array($result, MYSQLI_BOTH)){
			$value = $row[0];
		}
	}

	/* free result set */
	mysqli_free_result($result);
	/* close connection */
	mysqli_close($conn);
	return $value;
}

function cheNull($value){
	if(is_null($value) || strlen($value) == 0){
		return 'NULL';
	}else{
		return $value;
	}
}

function cheSNull($value){
	if(is_null($value) || strlen($value)==0){
		return 'NULL';
	}else{
		return "'".$value."'";
	}
}

?>