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
  <title>Admin — Branches</title>
  <?php require('inc/links.php'); ?>
</head>

<body>
  <?php require('inc/header.php'); ?>

  <div id="admin-main">
    <div class="admin-page-header">
      <h1>📂 Manage Branches</h1>
      <p>Add or remove branches/courses for organizing notes and papers.</p>
    </div>

    <div class="admin-card">
      <div class="admin-card-header">
        <h5>Existing Branches</h5>
        <button type="button" class="btn-admin-primary" data-bs-toggle="modal" data-bs-target="#branch-s">
          <i class="bi bi-plus-lg"></i> Add Branch
        </button>
      </div>
      <div class="admin-card-body">
        <div class="table-responsive">
          <table class="admin-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Branch Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="branch-data"></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Branch Modal -->
  <div class="modal fade" id="branch-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <form id="branch_s_form">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add New Branch</h5>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Branch Name</label>
              <input type="text" name="branch_name" class="form-control" placeholder="e.g. Computer Science" required />
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn-cancel" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn-submit">Add Branch</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php require('inc/scripts.php'); ?>
  <script src="script/branches.js"></script>
</body>

</html>
