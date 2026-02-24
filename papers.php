<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title><?php echo $settings_r['site_title'] ?> - Papers</title>
    <link rel="stylesheet" href="boot.css">
</head>

<body>
    <?php require('inc/header.php'); ?>

    <!-- BREADCRUMB -->
    <div class="breadcrumb-hero">
        <div class="container breadcrumb-hero-content text-center">
            <h1>📄 Question Papers</h1>
            <p style="color:rgba(255,255,255,0.65);font-size:1rem;margin-bottom:20px;">Previous year exam papers to help
                you prepare and ace your exams.</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Papers</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- INTRO -->
    <section style="background:var(--bg-light);padding:60px 0 30px;">
        <div class="container">
            <div style="background:white;border-radius:var(--radius-xl);padding:40px;border:1px solid var(--border-color);box-shadow:var(--shadow-md);text-align:center;"
                class="appear-animation">
                <h2 style="font-size:1.7rem;margin-bottom:12px;">Ace Your Exams with Confidence</h2>
                <p style="color:var(--text-muted);font-size:1rem;max-width:650px;margin:0 auto;line-height:1.75;">
                    Browse previous year question papers for BCA and BBA — sorted by course and year.
                    Understand the exam pattern, practice with real questions, and walk in prepared.
                </p>
            </div>
        </div>
    </section>

    <!-- BCA PAPERS -->
    <section style="background:var(--bg-light);padding:30px 0 60px;" class="appear-animation">
        <div class="container">
            <div class="course-heading">
                <div class="course-badge">🖥️ BCA</div>
                <h2>Bachelor of Computer Applications</h2>
            </div>

            <div class="papers-list">
                <?php
                $pre_q = "SELECT * FROM `papers` WHERE `course`=? ORDER BY `year`";
                $values = ['BCA'];
                $res = select($pre_q, $values, 's');
                $path = PAPERS_IMG_PATH;
                $count = 0;

                while ($row = mysqli_fetch_assoc($res)) {
                    $count++;
                    if (!$settings_r['shutdown']) {
                        $login = 0;
                        if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                            $login = 1;
                        }
                        if ($login) {
                            $btn = "<a href='$path$row[pdf]' class='btn-paper-download' download>
                        <i class='bi bi-download'></i> Download
                      </a>";
                        } else {
                            $btn = "<button onclick='checkLoginToBook($login)' class='btn-paper-locked'>
                        <i class='bi bi-lock'></i> Login
                      </button>";
                        }
                    } else {
                        $btn = '';
                    }
                    echo <<<data

          <div class="paper-item appear-animation">
            <div class="paper-item-info">
              <div class="paper-item-icon">📄</div>
              <div>
                <div class="paper-item-title">$row[subject]</div>
                <div class="paper-item-meta">📅 Year: $row[year] &nbsp;·&nbsp; 🎓 BCA</div>
              </div>
            </div>
            $btn
          </div>

          data;
                }

                if ($count === 0) {
                    echo '<div class="text-center py-5" style="color:var(--text-muted);">
                  <div style="font-size:3rem;margin-bottom:16px;">📭</div>
                  <p>No BCA papers available yet. Check back soon!</p>
                </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- BBA PAPERS -->
    <section style="background:white;padding:60px 0;" class="appear-animation">
        <div class="container">
            <div class="course-heading">
                <div class="course-badge"
                    style="background:linear-gradient(135deg,var(--secondary),var(--secondary-dark));">💼 BBA</div>
                <h2>Bachelor of Business Administration</h2>
            </div>

            <div class="papers-list">
                <?php
                $pre_q = "SELECT * FROM `papers` WHERE `course`=? ORDER BY `year`";
                $values = ['BBA'];
                $res = select($pre_q, $values, 's');
                $path = PAPERS_IMG_PATH;
                $count = 0;

                while ($row = mysqli_fetch_assoc($res)) {
                    $count++;
                    if (!$settings_r['shutdown']) {
                        $login = 0;
                        if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                            $login = 1;
                        }
                        if ($login) {
                            $btn = "<a href='$path$row[pdf]' class='btn-paper-download' download style='background:linear-gradient(135deg,var(--secondary),var(--secondary-dark));'>
                        <i class='bi bi-download'></i> Download
                      </a>";
                        } else {
                            $btn = "<button onclick='checkLoginToBook($login)' class='btn-paper-locked'>
                        <i class='bi bi-lock'></i> Login
                      </button>";
                        }
                    } else {
                        $btn = '';
                    }
                    echo <<<data

          <div class="paper-item appear-animation" style="border-left:3px solid var(--secondary);padding-left:21px;">
            <div class="paper-item-info">
              <div class="paper-item-icon" style="background:rgba(6,182,212,0.1);color:var(--secondary);">📄</div>
              <div>
                <div class="paper-item-title">$row[subject]</div>
                <div class="paper-item-meta">📅 Year: $row[year] &nbsp;·&nbsp; 💼 BBA</div>
              </div>
            </div>
            $btn
          </div>

          data;
                }

                if ($count === 0) {
                    echo '<div class="text-center py-5" style="color:var(--text-muted);">
                  <div style="font-size:3rem;margin-bottom:16px;">📭</div>
                  <p>No BBA papers available yet. Check back soon!</p>
                </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background:var(--bg-light);padding:40px 0 60px;" class="appear-animation">
        <div class="container">
            <div class="text-center"
                style="background:linear-gradient(135deg,var(--primary),var(--primary-dark));border-radius:var(--radius-xl);padding:48px 32px;color:white;">
                <h3 style="color:white;font-weight:800;margin-bottom:12px;">📖 Looking for Notes Too?</h3>
                <p style="color:rgba(255,255,255,0.75);margin-bottom:28px;">We have comprehensive notes for all subjects
                    alongside these papers.</p>
                <a href="notes.php" class="btn-hero-primary">Browse All Notes →</a>
            </div>
        </div>
    </section>

    <?php require('inc/footer.php'); ?>
</body>

</html>