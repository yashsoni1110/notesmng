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
  <title>Admin — Notes</title>
  <?php require('inc/links.php'); ?>
</head>

<body>
  <?php require('inc/header.php'); ?>

  <div id="admin-main">
    <div class="admin-page-header">
      <h1>📘 Notes</h1>
      <p>Manage all academic notes uploaded to the platform.</p>
    </div>

    <div class="admin-card">
      <div class="admin-card-header">
        <h5>All Notes</h5>
        <button type="button" class="btn-admin-primary" data-bs-toggle="modal" data-bs-target="#notes-s">
          <i class="bi bi-plus-lg"></i> Add Note
        </button>
      </div>
      <div class="admin-card-body">
        <div class="table-responsive">
          <table class="admin-table">
            <thead>
              <tr>
                <th>#</th>
                <th>PDF</th>
                <th>Name</th>
                <th>Course</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="notes-data"></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Notes Modal -->
  <div class="modal fade" id="notes-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <form id="notes_s_form">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add New Note</h5>
          </div>
          <div class="modal-body">
            <div class="note-pill">
              <i class="bi bi-info-circle me-1"></i> PDF must be less than 35MB
            </div>
            <div class="mb-3">
              <label class="form-label">Note Name</label>
              <input type="text" name="notes_name" class="form-control" placeholder="e.g. Operating Systems" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Course</label>
              <input type="text" name="notes_course" class="form-control" placeholder="e.g. BCA" required />
            </div>
            <div class="mb-3">
              <label class="form-label">PDF File</label>
              <input type="file" name="notes_pdf" accept=".pdf" class="form-control" required />
            </div>
            <div class="mb-1">
              <label class="form-label">Description</label>
              <textarea name="notes_desc" class="form-control" rows="3"
                placeholder="Brief description of this note..."></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn-cancel" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn-submit">Upload Note</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php require('inc/scripts.php'); ?>
  <script src="script/notes.js"></script>
</body>

</html>