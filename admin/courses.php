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
  <title>Admin — Courses</title>
  <?php require('inc/links.php'); ?>
</head>

<body>
  <?php require('inc/header.php'); ?>

  <div id="admin-main">
    <div class="admin-page-header">
      <h1>🎓 Manage Courses</h1>
      <p>Add or remove courses (e.g. BCA, BBA, BTech) for organizing notes and papers.</p>
    </div>

    <div class="admin-card">
      <div class="admin-card-header">
        <h5>Existing Courses</h5>
        <button type="button" class="btn-admin-primary" data-bs-toggle="modal" data-bs-target="#course-s">
          <i class="bi bi-plus-lg"></i> Add Course
        </button>
      </div>
      <div class="admin-card-body">
        <div class="table-responsive">
          <table class="admin-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Short Name</th>
                <th>Full Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="course-data"></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Course Modal -->
  <div class="modal fade" id="course-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <form id="course_s_form">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add New Course</h5>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Short Name (e.g. BCA)</label>
              <input type="text" name="course_name" class="form-control" placeholder="BCA" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Full Name (e.g. Bachelor of Computer Applications)</label>
              <input type="text" name="course_full_name" class="form-control" placeholder="Bachelor of Computer Applications" required />
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn-cancel" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn-submit">Add Course</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php require('inc/scripts.php'); ?>
  <script src="script/courses.js"></script>
</body>

</html>
