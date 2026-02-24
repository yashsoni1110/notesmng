<?php
require('inc/essentials.php');
require('inc/db_config.php');
adminLogin();

if (isset($_GET['seen'])) {
    $frm_data = filteration($_GET);
    if ($frm_data['seen'] == 'all') {
        $q = "UPDATE `user_queries` SET `seen`=?";
        $values = [1];
        if (update($q, $values, 'i'))
            alert('success', 'Marked all as read');
        else
            alert('error', 'Operation Failed');
    } else {
        $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
        $values = [1, $frm_data['seen']];
        if (update($q, $values, 'ii'))
            alert('success', 'Marked as read');
        else
            alert('error', 'Operation Failed');
    }
}

if (isset($_GET['del'])) {
    $frm_data = filteration($_GET);
    if ($frm_data['del'] == 'all') {
        $q = "DELETE FROM `user_queries`";
        if (mysqli_query($con, $q))
            alert('success', 'All queries deleted!');
        else
            alert('error', 'Operation failed!');
    } else {
        $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
        $values = [$frm_data['del']];
        if (delete($q, $values, 'i'))
            alert('success', 'Query deleted!');
        else
            alert('error', 'Operation failed!');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — User Queries</title>
    <?php require('inc/links.php'); ?>
</head>

<body>
    <?php require('inc/header.php'); ?>

    <div id="admin-main">
        <div class="admin-page-header">
            <h1>💬 User Queries</h1>
            <p>Messages sent through the contact form by users.</p>
        </div>

        <div class="admin-card">
            <div class="admin-card-header">
                <h5>All Messages</h5>
                <div class="d-flex gap-2">
                    <a href="?seen=all" class="btn-admin-success">
                        <i class="bi bi-check2-all"></i> Mark All Read
                    </a>
                    <a href="?del=all" class="btn-admin-danger">
                        <i class="bi bi-trash"></i> Delete All
                    </a>
                </div>
            </div>
            <div class="admin-card-body">
                <div class="table-responsive">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $q = "SELECT * FROM `user_queries` ORDER BY `sr_no` DESC";
                            $data = mysqli_query($con, $q);
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($data)) {
                                $seen_btn = '';
                                if ($row['seen'] != 1) {
                                    $seen_btn = "<a href='?seen=$row[sr_no]' class='btn-admin-success mb-1'><i class='bi bi-check2'></i> Mark Read</a><br>";
                                }
                                $del_btn = "<a href='?del=$row[sr_no]' class='btn-admin-danger'><i class='bi bi-trash'></i> Delete</a>";
                                echo <<<query
                  <tr>
                    <td>$i</td>
                    <td><strong>$row[name]</strong></td>
                    <td>$row[email]</td>
                    <td>$row[subject]</td>
                    <td style="max-width:220px;white-space:normal;">$row[message]</td>
                    <td>$row[date]</td>
                    <td>$seen_btn $del_btn</td>
                  </tr>
                  query;
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
</body>

</html>