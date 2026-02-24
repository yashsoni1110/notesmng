<?php
require('inc/essentials.php');
require('inc/db_config.php');

session_start();

if ((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
	redirect('users.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login — NotesHub</title>
	<?php require('inc/links.php'); ?>
</head>

<body class="admin-login-page">

	<div class="login-card">
		<div
			class="login-logo">
			<div
				class="login-logo-icon">
				<i class="bi bi-journals"
					style="color:white;"></i>
			</div>
			<h1>NotesHub
			</h1>
			<p>Admin Portal — Secure Access
			</p>
		</div>

		<form method="POST">
			<label
				class="login-label">Username</label>
			<input name="admin_name" required type="text" class="login-input"
				placeholder="Enter admin username"
				autocomplete="off">

			<label
				class="login-label">Password</label>
			<input name="admin_pass" required type="password" class="login-input"
				placeholder="••••••••">

			<button name="login" type="submit"
				class="btn-login">
				<i
					class="bi bi-shield-lock me-2"></i>Sign
				In
				to
				Admin
			</button>
		</form>
	</div>

	<?php
	if (isset($_POST['login'])) {
		$frm_data = filteration($_POST);

		$query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass` = ?";
		$values = [$frm_data['admin_name'], $frm_data['admin_pass']];

		$res = select($query, $values, "ss");

		if ($res->num_rows == 1) {
			$row = mysqli_fetch_assoc($res);
			$_SESSION['adminLogin'] = true;
			$_SESSION['adminId'] = $row['sr_no'];
			redirect('users.php');
		} else {
			alert('error', 'Login failed — Invalid credentials!');
		}
	}
	?>

	<?php require('inc/scripts.php') ?>
</body>

</html>