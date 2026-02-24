<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('inc/links.php'); ?>
  <title><?php echo $settings_r['site_title'] ?> - About Us</title>
  <link rel="stylesheet" href="boot.css">
</head>

<body>
  <?php require('inc/header.php'); ?>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-hero">
    <div class="container breadcrumb-hero-content text-center">
      <h1>👥 About NotesHub</h1>
      <p style="color:rgba(255,255,255,0.65);font-size:1rem;margin-bottom:20px;">Our mission, values, and the story
        behind NotesHub.</p>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">About Us</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- MISSION SECTION -->
  <section style="background:var(--bg-light);" class="appear-animation">
    <div class="container">
      <div
        style="background:white;border-radius:var(--radius-xl);padding:56px 48px;border:1px solid var(--border-color);box-shadow:var(--shadow-md);">
        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="section-tag">🎯 Our Mission</div>
            <h2 class="section-title" style="text-align:left;">Empowering Students Through<br>Knowledge</h2>
            <p style="color:var(--text-muted);font-size:1rem;line-height:1.8;">
              Our mission is to empower students by providing easy access to high-quality academic resources. We believe
              that knowledge should be shared freely, and our platform serves as a bridge between learners and the
              information they need to excel in their studies.
            </p>
            <p style="color:var(--text-muted);font-size:1rem;line-height:1.8;">
              Built by students, for students — we understand the challenges of academic life and are committed to
              making study materials universally accessible.
            </p>
          </div>
          <div class="col-lg-6">
            <div class="row g-3">
              <div class="col-6">
                <div class="value-card">
                  <span class="value-icon">🆓</span>
                  <div class="value-title">Free Access</div>
                  <p class="value-desc">All materials are free to registered students. No subscriptions.</p>
                </div>
              </div>
              <div class="col-6">
                <div class="value-card">
                  <span class="value-icon">✅</span>
                  <div class="value-title">Quality First</div>
                  <p class="value-desc">Curated and reviewed content you can trust for your studies.</p>
                </div>
              </div>
              <div class="col-6">
                <div class="value-card">
                  <span class="value-icon">🤝</span>
                  <div class="value-title">Community</div>
                  <p class="value-desc">Built by students who understand your academic challenges.</p>
                </div>
              </div>
              <div class="col-6">
                <div class="value-card">
                  <span class="value-icon">🚀</span>
                  <div class="value-title">Always Growing</div>
                  <p class="value-desc">New content added regularly to support your learning journey.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW WE WORK SECTION -->
  <section style="background:white;" class="appear-animation">
    <div class="container">
      <div class="text-center mb-5">
        <div class="section-tag">⚙️ How We Work</div>
        <h2 class="section-title">Built on Three Core Pillars</h2>
        <p class="section-subtitle">Every decision we make is guided by our commitment to students, quality, and
          continuous growth.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="pillar-card appear-animation">
            <div class="pillar-icon-wrap pillar-purple">
              <i class="bi bi-book-half"></i>
            </div>
            <h5 class="pillar-title">Curated Content</h5>
            <p class="pillar-desc">Every note and paper on our platform is reviewed and organized by subject experts and
              top-performing students to ensure accuracy and usefulness.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pillar-card appear-animation">
            <div class="pillar-icon-wrap pillar-cyan">
              <i class="bi bi-shield-check"></i>
            </div>
            <h5 class="pillar-title">Student-First Approach</h5>
            <p class="pillar-desc">We make all study materials freely accessible to registered students with no hidden
              fees, no subscriptions, and no paywalls — ever.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pillar-card appear-animation">
            <div class="pillar-icon-wrap pillar-green">
              <i class="bi bi-arrow-repeat"></i>
            </div>
            <h5 class="pillar-title">Continuous Updates</h5>
            <p class="pillar-desc">Our platform evolves with academic syllabi. New notes, papers, and features are added
              regularly to stay aligned with current curriculum requirements.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TIMELINE / JOURNEY -->
  <section style="background:var(--bg-light);" class="appear-animation">
    <div class="container">
      <div class="text-center mb-5">
        <div class="section-tag">📅 Our Journey</div>
        <h2 class="section-title">Growing With Every Student</h2>
        <p class="section-subtitle">From a small idea to a platform trusted by thousands of students across India.</p>
      </div>
      <div class="journey-grid">
        <div class="journey-item appear-animation">
          <div class="journey-year">2024</div>
          <div class="journey-content">
            <h6 class="journey-title">Platform Launched</h6>
            <p class="journey-desc">NotesHub went live with BCA and BBA notes, serving our first batch of students.</p>
          </div>
        </div>
        <div class="journey-item appear-animation">
          <div class="journey-year">2024</div>
          <div class="journey-content">
            <h6 class="journey-title">Question Papers Added</h6>
            <p class="journey-desc">Expanded the platform with previous year exam papers to help students prepare
              strategically.</p>
          </div>
        </div>
        <div class="journey-item appear-animation">
          <div class="journey-year">2025</div>
          <div class="journey-content">
            <h6 class="journey-title">1,000+ Students Milestone</h6>
            <p class="journey-desc">Crossed 1,000 registered students — a proud moment reflecting the trust students
              place in us.</p>
          </div>
        </div>
        <div class="journey-item appear-animation">
          <div class="journey-year">2025</div>
          <div class="journey-content">
            <h6 class="journey-title">Platform Redesigned</h6>
            <p class="journey-desc">Completely revamped the UI with a premium, modern design for an even better study
              experience.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <div class="stats-section appear-animation">
    <div class="container">
      <div class="row g-0">
        <div class="col-6 col-md-3">
          <div class="stat-item">
            <div class="stat-item-number">4</div>
            <div class="stat-item-label">Team Members</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-item">
            <div class="stat-item-number">2024</div>
            <div class="stat-item-label">Founded</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-item">
            <div class="stat-item-number">1000+</div>
            <div class="stat-item-label">Students Helped</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-item">
            <div class="stat-item-number">100%</div>
            <div class="stat-item-label">Passion</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <section style="background:var(--bg-light);" class="appear-animation">
    <div class="container">
      <div class="text-center" style="max-width:600px;margin:0 auto;">
        <h3 style="font-size:1.8rem;margin-bottom:12px;">Have questions for us?</h3>
        <p style="color:var(--text-muted);margin-bottom:28px;">We'd love to hear from you. Reach out via our contact
          page.</p>
        <a href="contact.php" class="btn-card-action">✉️ Contact Us →</a>
      </div>
    </div>
  </section>

  <?php require('inc/footer.php'); ?>
</body>

</html>