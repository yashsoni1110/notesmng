
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<?php
session_start();
date_default_timezone_set("Asia/Kolkata");

require('admin/inc/db_config.php');
require('admin/inc/essentials.php');
$setting_q = "SELECT * FROM `settings` WHERE `sr_no`=?";
$values = [1];
$settings_r = mysqli_fetch_assoc(select($setting_q, $values, 'i'));

if ($settings_r['shutdown']) {
    echo <<<alertbar
    <div class='bg-danger text-center p-2 fw-bold'>
    <i class='bi-exclamation-triangle-fill'></i>
    Booking are temporarily closed!
    </div>
    alertbar;
}

?>
