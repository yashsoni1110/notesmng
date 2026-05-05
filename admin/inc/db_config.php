<?php

// Database connection parameters
// Database connection parameters
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1' || $_SERVER['HTTP_HOST'] == '::1') {
	$hname = 'localhost';
	$uname = 'root';
	$pass = '';
	$db = 'notesmng';
} else {
	// Live Server Credentials
	$hname = 'sql105.infinityfree.com';
	$uname = 'if0_41839180';
	$pass = 'B08i5sgqQbcp85K';
	$db = 'if0_41839180_notes';
}

// Establishing database connection
try {
	$con = mysqli_connect($hname, $uname, $pass, $db);
	if (!$con) {
		die("Cannot Connect to Database: " . mysqli_connect_error());
	}
} catch (Exception $e) {
	die("Database Error: " . $e->getMessage());
}

// Function to filter input data
function filteration($data)
{
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
function selectAll($table)
{
	$con = $GLOBALS['con'];
	$res = mysqli_query($con, "SELECT * FROM $table");
	return $res;
}

// Function to execute a SELECT query
function select($sql, $values, $datatypes)
{
	$con = $GLOBALS['con'];
	
	// Fallback for environments without mysqlnd (like InfinityFree)
	// We manually escape values and construct the query so mysqli_query returns a native mysqli_result object.
	$parts = explode('?', $sql);
	$final_sql = $parts[0];
	for ($i = 0; $i < count($values); $i++) {
		$val = mysqli_real_escape_string($con, $values[$i]);
		$final_sql .= "'" . $val . "'" . $parts[$i + 1];
	}

	$res = mysqli_query($con, $final_sql);
	if ($res) {
		return $res;
	} else {
		die("Query cannot be executed - Select: " . mysqli_error($con));
	}
}

// Function to execute an UPDATE query
function update($sql, $values, $datatypes)
{
	$con = $GLOBALS['con'];
	$parts = explode('?', $sql);
	$final_sql = $parts[0];
	for ($i = 0; $i < count($values); $i++) {
		$val = mysqli_real_escape_string($con, $values[$i]);
		$final_sql .= "'" . $val . "'" . $parts[$i + 1];
	}

	if (mysqli_query($con, $final_sql)) {
		return mysqli_affected_rows($con);
	} else {
		die("Query cannot be executed - update: " . mysqli_error($con));
	}
}

// Function to execute an INSERT query
function insert($sql, $values, $datatypes)
{
	$con = $GLOBALS['con'];
	$parts = explode('?', $sql);
	$final_sql = $parts[0];
	for ($i = 0; $i < count($values); $i++) {
		$val = mysqli_real_escape_string($con, $values[$i]);
		$final_sql .= "'" . $val . "'" . $parts[$i + 1];
	}

	if (mysqli_query($con, $final_sql)) {
		return mysqli_affected_rows($con);
	} else {
		die("Query cannot be executed - Insert: " . mysqli_error($con));
	}
}

// Function to execute a DELETE query
function delete($sql, $values, $datatypes)
{
	$con = $GLOBALS['con'];
	$parts = explode('?', $sql);
	$final_sql = $parts[0];
	for ($i = 0; $i < count($values); $i++) {
		$val = mysqli_real_escape_string($con, $values[$i]);
		$final_sql .= "'" . $val . "'" . $parts[$i + 1];
	}

	if (mysqli_query($con, $final_sql)) {
		return mysqli_affected_rows($con);
	} else {
		die("Query cannot be executed - Delete: " . mysqli_error($con));
	}
}

?>