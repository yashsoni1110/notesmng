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

  <!-- INTRO -->
  <section style="background:var(--bg-light);padding:60px 0 40px;">
    <div class="container">
      <div
        style="background:white;border-radius:var(--radius-xl);padding:40px;border:1px solid var(--border-color);box-shadow:var(--shadow-md);text-align:center;"
        class="appear-animation">
        <h2 style="font-size:1.7rem;margin-bottom:12px;">Simplify Your Academic Journey</h2>
        <p style="color:var(--text-muted);font-size:1rem;max-width:650px;margin:0 auto;line-height:1.75;">
          Welcome to NotesHub — your ultimate destination for managing and accessing academic notes.
          Browse by course, download PDFs, and excel in your studies.
        </p>
      </div>
    </div>
  </section>

  <!-- BCA NOTES -->
  <section style="background:var(--bg-light);padding:60px 0;" class="appear-animation">
    <div class="container">
      <div class="course-heading">
        <div class="course-badge">🖥️ BCA</div>
        <h2>Bachelor of Computer Applications</h2>
      </div>

      <div class="row g-4">
        <?php
        $pre_q = "SELECT * FROM `notes` WHERE `course`=?";
        $values = ['BCA'];
        $res = select($pre_q, $values, 's');
        $path = NOTES_IMG_PATH;
        $count = 0;

        while ($row = mysqli_fetch_assoc($res)) {
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
                  <p>No BCA notes available yet. Check back soon!</p>
                </div>';
        }
        ?>
      </div>
    </div>
  </section>

  <!-- BBA NOTES -->
  <section style="background:white;padding:60px 0;" class="appear-animation">
    <div class="container">
      <div class="course-heading">
        <div class="course-badge" style="background:linear-gradient(135deg,var(--secondary),var(--secondary-dark));">💼
          BBA</div>
        <h2>Bachelor of Business Administration</h2>
      </div>

      <div class="row g-4">
        <?php
        $pre_q = "SELECT * FROM `notes` WHERE `course`=?";
        $values = ['BBA'];
        $res = select($pre_q, $values, 's');
        $path = NOTES_IMG_PATH;
        $count = 0;

        while ($row = mysqli_fetch_assoc($res)) {
          $count++;
          $book_btn = "";
          if (!$settings_r['shutdown']) {
            $login = 0;
            if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
              $login = 1;
            }
            if ($login) {
              $book_btn = "<a href='$path$row[pdf]' class='btn-download' download style='background:linear-gradient(135deg,var(--secondary),var(--secondary-dark));box-shadow:0 4px 15px rgba(6,182,212,0.3);'>
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
            <div class="note-card appear-animation" style="border-top-color:var(--secondary);">
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="note-card-icon" style="background:linear-gradient(135deg,rgba(6,182,212,0.1),rgba(6,182,212,0.05));">💼</div>
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
                  <p>No BBA notes available yet. Check back soon!</p>
                </div>';
        }
        ?>
      </div>
    </div>
  </section>

  <?php require('inc/footer.php'); ?>
</body>

</html>
