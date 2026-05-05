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



    <!-- DYNAMIC PAPER SECTIONS -->
    <?php
    $course_res = selectAll('courses');
    $path = PAPERS_IMG_PATH;

    while ($course_row = mysqli_fetch_assoc($course_res)) {
        $course_name = $course_row['name'];
        $bg_color = ($course_row['id'] % 2 == 0) ? 'white' : 'var(--bg-light)';
        
        // Fetch papers for this specific course
        $paper_q = "SELECT * FROM `papers` WHERE `course`=? ORDER BY `year` DESC";
        $paper_res = select($paper_q, [$course_name], 's');
        ?>
        <section style="background:<?php echo $bg_color; ?>;padding:60px 0;" class="appear-animation">
            <div class="container">
                <div class="course-heading">
                    <div class="course-badge"><?php echo ($course_row['id'] % 2 == 0) ? '💼' : '🖥️'; ?> <?php echo $course_name; ?></div>
                    <h2><?php echo $course_row['full_name']; ?> Question Papers</h2>
                </div>

                <div class="papers-list">
                    <?php
                    $count = 0;
                    while ($row = mysqli_fetch_assoc($paper_res)) {
                        $count++;
                        $btn = "";
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
                        }
                        echo <<<data
                        <div class="paper-item appear-animation">
                          <div class="paper-item-info">
                            <div class="paper-item-icon">📄</div>
                            <div>
                              <div class="paper-item-title">$row[subject]</div>
                              <div class="paper-item-meta">📅 Year: $row[year] &nbsp;·&nbsp; 🎓 $row[course]</div>
                            </div>
                          </div>
                          $btn
                        </div>
                        data;
                    }

                    if ($count === 0) {
                        echo '<div class="text-center py-5" style="color:var(--text-muted);">
                                <div style="font-size:3rem;margin-bottom:16px;">📭</div>
                                <p>No ' . $course_name . ' papers available yet. Check back soon!</p>
                              </div>';
                    }
                    ?>
                </div>
            </div>
        </section>
    <?php } ?>

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