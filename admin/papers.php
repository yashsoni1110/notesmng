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
  <title>Admin — Papers</title>
  <?php require('inc/links.php'); ?>
</head>

<body>
  <?php require('inc/header.php'); ?>

  <div id="admin-main">
    <div class="admin-page-header">
      <h1>📄 Question Papers</h1>
      <p>Manage all previous year question papers uploaded to the platform.</p>
    </div>

    <div class="admin-card">
      <div class="admin-card-header">
        <h5>All Papers</h5>
        <button type="button" class="btn-admin-primary" data-bs-toggle="modal" data-bs-target="#papers-s">
          <i class="bi bi-plus-lg"></i> Add Paper
        </button>
      </div>
      <div class="admin-card-body">
        <div class="table-responsive">
          <table class="admin-table">
            <thead>
              <tr>
                <th>#</th>
                <th>PDF</th>
                <th>Subject</th>
                <th>Course</th>
                <th>Year</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="papers-data"></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Papers Modal -->
  <div class="modal fade" id="papers-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <form id="papers_s_form">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add Question Paper</h5>
          </div>
          <div class="modal-body">
            <div class="note-pill">
              <i class="bi bi-info-circle me-1"></i> PDF must be less than 35MB
            </div>
            <div class="mb-3">
              <label class="form-label">Subject Name</label>
              <input type="text" name="papers_subject" class="form-control" placeholder="e.g. Data Structures"
                required />
            </div>
            <div class="mb-3">
              <label class="form-label">Course</label>
              <input type="text" name="papers_course" class="form-control" placeholder="e.g. BCA" required />
            </div>
            <div class="mb-3">
              <label class="form-label">PDF File</label>
              <input type="file" name="papers_pdf" accept=".pdf" class="form-control" required />
            </div>
            <div class="mb-1">
              <label class="form-label">Year</label>
              <input type="text" name="papers_year" class="form-control" placeholder="e.g. 2023" required />
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn-cancel" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn-submit">Upload Paper</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php require('inc/scripts.php'); ?>
  <script src="script/papers.js"></script>
</body>

</html>