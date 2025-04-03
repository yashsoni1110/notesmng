<?php 
	
	// Database connection parameters
	$hname = 'localhost';
	$uname = 'root';
	$pass = '';
	$db = 'adi';

	// Establishing database connection
	$con = mysqli_connect($hname,$uname,$pass,$db);

	// Checking connection
	if (!$con) {
		die("Cannot Connect to Database".mysqli_connect_error());
	}

	// Function to filter input data
	function filteration($data){
		foreach ($data as $key => $value) {
			// Basic data sanitization
			$value = trim($value);
			$value = stripslashes($value);
			$value = strip_tags($value);
			$value = htmlspecialchars($value);
			
			$data[$key] = $value;
		}
		return $data;
	}

	// Function to select all records from a table
	function selectAll($table){
		$con = $GLOBALS['con'];
		$res = mysqli_query($con ,"SELECT * FROM $table");
		return $res;
	}

	// Function to execute a SELECT query
	function select($sql,$values,$datatypes)
	{
		$con = $GLOBALS['con'];
		if ($stmt = mysqli_prepare($con,$sql)) {
			mysqli_stmt_bind_param($stmt,$datatypes,...$values);
			if (mysqli_stmt_execute($stmt)){
				$res = mysqli_stmt_get_result($stmt);
				mysqli_stmt_close($stmt);
				return $res;
			}
			else{
				mysqli_stmt_close($stmt);
				die("Query cannot be executed - Select");
			}
		}
		else{
			die("Query cannot be prepared - Select");
		}
	}

	// Function to execute an UPDATE query
	function update($sql,$values,$datatypes)
	{
		$con = $GLOBALS['con'];
		if ($stmt = mysqli_prepare($con,$sql)) {
			mysqli_stmt_bind_param($stmt,$datatypes,...$values);
			if (mysqli_stmt_execute($stmt)){
				$res = mysqli_stmt_affected_rows($stmt);
				mysqli_stmt_close($stmt);
				return $res;
			}
			else{
				mysqli_stmt_close($stmt);
				die("Query cannot be executed - update");
			}
		}
		else{
			die("Query cannot be prepared - update");
		}
	}

	// Function to execute an INSERT query
	function insert($sql, $values, $datatypes)
	{
		$con = $GLOBALS['con'];
		if ($stmt = mysqli_prepare($con, $sql)) {
			mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
			if (mysqli_stmt_execute($stmt)) {
				$res = mysqli_stmt_affected_rows($stmt);
				mysqli_stmt_close($stmt);
				return $res;
			}
			else {
				mysqli_stmt_close($stmt);
				die("Query cannot be executed - Insert");
			}
		}
		else {
			die("Query cannot be prepared - Insert");
		}
	}

	// Function to execute a DELETE query
	function delete($sql, $values, $datatypes)
	{
		$con = $GLOBALS['con'];
		if ($stmt = mysqli_prepare($con, $sql)) {
			mysqli_stmt_bind_param($stmt, $datatypes,...$values);
			if (mysqli_stmt_execute($stmt)) {
				$res = mysqli_stmt_affected_rows($stmt);
				mysqli_stmt_close($stmt);
				return $res;
			}
			else {
				mysqli_stmt_close($stmt);
				die("Query cannot be executed - Delete");
			}
		}
		else {
			die("Query cannot be prepared - Delete");
		}
	}
	
?>