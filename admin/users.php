<?php
require('inc/essentials.php');
require('inc/db_config.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — Users</title>
    <?php require('inc/links.php'); ?>
</head>

<body>
    <?php require('inc/header.php'); ?>

    <div id="admin-main">
        <div class="admin-page-header">
            <h1>👤 Users</h1>
            <p>All registered users on the NotesHub platform.</p>
        </div>

        <div class="admin-card">
            <div class="admin-card-header">
                <h5>All Users</h5>
            </div>
            <div class="admin-card-body">
                <div class="table-responsive">
                    <table class="admin-table" style="min-width:900px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No.</th>
                                <th>Location</th>
                                <th>Date of Birth</th>
                            </tr>
                        </thead>
                        <tbody id="users-data"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
    <script src="script/users.js"></script>
</body>

</html>