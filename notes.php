<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('inc/links.php'); ?>
  <title><?php echo $settings_r['site_title'] ?> - Notes</title>
  <link rel="stylesheet" href="boot.css">
</head>

<body>
  <?php require('inc/header.php'); ?>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-hero">
    <div class="container breadcrumb-hero-content text-center">
      <h1>📚 Academic Notes</h1>
      <p style="color:rgba(255,255,255,0.65);font-size:1rem;margin-bottom:20px;">Download notes by course — organized
        and ready to study.</p>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Notes</li>
        </ol>
      </nav>
    </div>
  </div>



  <!-- DYNAMIC COURSE SECTIONS -->
  <?php
  $course_res = selectAll('courses');
  $path = NOTES_IMG_PATH;

  while ($course_row = mysqli_fetch_assoc($course_res)) {
    $course_name = $course_row['name'];
    $bg_color = ($course_row['id'] % 2 == 0) ? 'white' : 'var(--bg-light)';
    
    // Fetch notes for this specific course
    $note_q = "SELECT * FROM `notes` WHERE `course`=?";
    $note_res = select($note_q, [$course_name], 's');
    ?>
    <section style="background:<?php echo $bg_color; ?>;padding:60px 0;" class="appear-animation">
      <div class="container">
        <div class="course-heading">
          <div class="course-badge"><?php echo ($course_row['id'] % 2 == 0) ? '💼' : '🖥️'; ?> <?php echo $course_name; ?></div>
          <h2><?php echo $course_row['full_name']; ?> Notes</h2>
        </div>

        <div class="row g-4">
          <?php
          $count = 0;
          while ($row = mysqli_fetch_assoc($note_res)) {
            $count++;
            $book_btn = "";
            if (!$settings_r['shutdown']) {
              $login = 0;
              if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                $login = 1;
              }
              if ($login) {
                $book_btn = "<a href='$path$row[pdf]' class='btn-download' download>
                              <i class='bi bi-download'></i> Download PDF
                            </a>";
              } else {
                $book_btn = "<button onclick='checkLoginToBook($login)' class='btn-download-locked'>
                              <i class='bi bi-lock'></i> Login to Download
                            </button>";
              }
            }
            echo <<<data
            <div class="col-lg-4 col-md-6">
              <div class="note-card appear-animation">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="note-card-icon">📘</div>
                  <h5 class="note-card-title mb-0" style="flex:1;">$row[name]</h5>
                </div>
                <p class="note-card-desc">$row[description]</p>
                $book_btn
              </div>
            </div>
            data;
          }

          if ($count === 0) {
            echo '<div class="col-12 text-center py-5 text-muted">
                    <div style="font-size:3rem;margin-bottom:16px;">📭</div>
                    <p>No notes available for ' . $course_name . ' yet. Check back soon!</p>
                  </div>';
          }
          ?>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php require('inc/footer.php'); ?>
</body>

</html>
