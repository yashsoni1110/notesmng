<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="NotesHub - Your platform for BCA, BBA notes and previous year question papers.">
  <?php require('inc/links.php'); ?>
  <title><?php echo $settings_r['site_title'] ?> - Home</title>
  <link rel="stylesheet" href="boot.css">
</head>

<body>
  <!-- NAVBAR -->
  <?php require('inc/header.php'); ?>

  <!-- =================== HERO SECTION =================== -->
  <section class="hero-section">
    <div class="hero-orb hero-orb-1"></div>
    <div class="hero-orb hero-orb-2"></div>
    <div class="hero-orb hero-orb-3"></div>
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <div class="hero-content">
            <div class="hero-badge">
              <span class="badge-dot"></span>
              Free access to quality notes & papers
            </div>
            <h1 class="hero-title">
              Study Smarter<br>
              with <span class="gradient-text">NotesHub</span>
            </h1>
            <p class="hero-description">
              Access comprehensive notes for BCA, BBA, MCA & MBA. Browse previous year question papers and build your
              academic edge — all for free.
            </p>
            <div class="hero-actions">
              <a href="notes.php" class="btn-hero-primary">
                📖 Browse Notes <span>→</span>
              </a>
              <a href="papers.php" class="btn-hero-secondary">
                📄 View Papers
              </a>
            </div>
            <div class="hero-stats">
              <div class="hero-stat">
                <div class="hero-stat-number">500+</div>
                <div class="hero-stat-label">Study Notes</div>
              </div>
              <div class="hero-stat">
                <div class="hero-stat-number">4</div>
                <div class="hero-stat-label">Courses</div>
              </div>
              <div class="hero-stat">
                <div class="hero-stat-number">1K+</div>
                <div class="hero-stat-label">Students</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block">
          <div class="hero-image-wrap">
            <div class="hero-card-float">
              <div class="row g-3">
                <div class="col-6">
                  <div
                    style="background:rgba(255,255,255,0.08);border-radius:16px;padding:20px;text-align:center;border:1px solid rgba(255,255,255,0.12);">
                    <div style="font-size:2.2rem;margin-bottom:8px;">📚</div>
                    <div style="font-size:0.9rem;color:rgba(255,255,255,0.9);font-weight:700;">BCA Notes</div>
                    <div style="font-size:0.75rem;color:rgba(255,255,255,0.5);">Computer Science</div>
                  </div>
                </div>
                <div class="col-6">
                  <div
                    style="background:rgba(255,255,255,0.08);border-radius:16px;padding:20px;text-align:center;border:1px solid rgba(255,255,255,0.12);">
                    <div style="font-size:2.2rem;margin-bottom:8px;">💼</div>
                    <div style="font-size:0.9rem;color:rgba(255,255,255,0.9);font-weight:700;">BBA Notes</div>
                    <div style="font-size:0.75rem;color:rgba(255,255,255,0.5);">Business Admin</div>
                  </div>
                </div>
                <div class="col-6">
                  <div
                    style="background:rgba(79,70,229,0.3);border-radius:16px;padding:20px;text-align:center;border:1px solid rgba(79,70,229,0.4);">
                    <div style="font-size:2.2rem;margin-bottom:8px;">📄</div>
                    <div style="font-size:0.9rem;color:rgba(255,255,255,0.9);font-weight:700;">Past Papers</div>
                    <div style="font-size:0.75rem;color:rgba(255,255,255,0.5);">Previous Years</div>
                  </div>
                </div>
                <div class="col-6">
                  <div
                    style="background:rgba(6,182,212,0.2);border-radius:16px;padding:20px;text-align:center;border:1px solid rgba(6,182,212,0.3);">
                    <div style="font-size:2.2rem;margin-bottom:8px;">🎓</div>
                    <div style="font-size:0.9rem;color:rgba(255,255,255,0.9);font-weight:700;">Free Access</div>
                    <div style="font-size:0.75rem;color:rgba(255,255,255,0.5);">After Login</div>
                  </div>
                </div>
              </div>
              <div
                style="margin-top:20px;background:rgba(16,185,129,0.15);border:1px solid rgba(16,185,129,0.3);border-radius:12px;padding:14px;display:flex;align-items:center;gap:12px;">
                <div style="font-size:1.5rem;">🔓</div>
                <div>
                  <div style="font-size:0.85rem;font-weight:700;color:rgba(255,255,255,0.9);">Register & Download Free
                  </div>
                  <div style="font-size:0.75rem;color:rgba(255,255,255,0.5);">No subscription needed</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =================== STATS BANNER =================== -->
  <div class="stats-section appear-animation">
    <div class="container">
      <div class="row g-0">
        <div class="col-6 col-md-3">
          <div class="stat-item">
            <div class="stat-item-number">500+</div>
            <div class="stat-item-label">Notes Available</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-item">
            <div class="stat-item-number">4+</div>
            <div class="stat-item-label">Courses Covered</div>
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
            <div class="stat-item-label">Free to Access</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- =================== HOW IT WORKS =================== -->
  <section style="background:white;" class="appear-animation">
    <div class="container">
      <div class="text-center mb-5">
        <div class="section-tag">✨ How It Works</div>
        <h2 class="section-title">Simple. Fast. Free.</h2>
        <p class="section-subtitle">Get started in three easy steps and access all study materials instantly.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="text-center p-4">
            <div
              style="width:72px;height:72px;background:linear-gradient(135deg,rgba(79,70,229,0.1),rgba(79,70,229,0.05));border-radius:20px;display:flex;align-items:center;justify-content:center;font-size:1.8rem;margin:0 auto 20px;">
              📝</div>
            <div
              style="display:inline-block;background:linear-gradient(135deg,var(--primary),var(--primary-dark));color:white;width:28px;height:28px;border-radius:50%;font-size:0.85rem;font-weight:700;text-align:center;line-height:28px;margin-bottom:16px;">
              1</div>
            <h4 style="font-size:1.1rem;font-weight:700;margin-bottom:10px;">Create Account</h4>
            <p style="font-size:0.9rem;color:var(--text-muted);">Register for free with your email. Takes less than 30
              seconds.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center p-4">
            <div
              style="width:72px;height:72px;background:linear-gradient(135deg,rgba(6,182,212,0.1),rgba(6,182,212,0.05));border-radius:20px;display:flex;align-items:center;justify-content:center;font-size:1.8rem;margin:0 auto 20px;">
              🔍</div>
            <div
              style="display:inline-block;background:linear-gradient(135deg,var(--secondary),var(--secondary-dark));color:white;width:28px;height:28px;border-radius:50%;font-size:0.85rem;font-weight:700;text-align:center;line-height:28px;margin-bottom:16px;">
              2</div>
            <h4 style="font-size:1.1rem;font-weight:700;margin-bottom:10px;">Browse Resources</h4>
            <p style="font-size:0.9rem;color:var(--text-muted);">Explore notes by course — BCA, BBA, MCA, MBA — and find
              what you need.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center p-4">
            <div
              style="width:72px;height:72px;background:linear-gradient(135deg,rgba(16,185,129,0.1),rgba(16,185,129,0.05));border-radius:20px;display:flex;align-items:center;justify-content:center;font-size:1.8rem;margin:0 auto 20px;">
              ⬇️</div>
            <div
              style="display:inline-block;background:linear-gradient(135deg,var(--success),#059669);color:white;width:28px;height:28px;border-radius:50%;font-size:0.85rem;font-weight:700;text-align:center;line-height:28px;margin-bottom:16px;">
              3</div>
            <h4 style="font-size:1.1rem;font-weight:700;margin-bottom:10px;">Download & Study</h4>
            <p style="font-size:0.9rem;color:var(--text-muted);">Download PDFs instantly and study at your own pace,
              anytime.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =================== OUR SERVICES =================== -->
  <section style="background:var(--bg-light);" class="appear-animation">
    <div class="container">
      <div class="text-center mb-5">
        <div class="section-tag">📦 Our Services</div>
        <h2 class="section-title">Everything You Need to Succeed</h2>
        <p class="section-subtitle">Quality academic resources organized for your success.</p>
      </div>
      <div class="row g-4">
        <!-- Notes Card -->
        <div class="col-md-4">
          <div class="feature-card appear-animation">
            <div class="feature-card-img">
              <img src="https://images.unsplash.com/photo-1517842645767-c639042777db?q=80&w=800&auto=format&fit=crop"
                alt="Notes">
            </div>
            <div class="feature-card-body">
              <div class="feature-card-icon purple">📚</div>
              <h5 class="feature-card-title">Academic Notes</h5>
              <p class="feature-card-text">Comprehensive, well-organized notes covering every subject for BCA and BBA
                programs. Handcrafted by top students.</p>
              <a href="notes.php" class="btn-card-action">Browse Notes →</a>
            </div>
          </div>
        </div>

        <!-- Papers Card -->
        <div class="col-md-4">
          <div class="feature-card appear-animation">
            <div class="feature-card-img">
              <img src="https://images.unsplash.com/photo-1631651693480-97f1132e333d?q=80&w=800&auto=format&fit=crop"
                alt="Papers">
            </div>
            <div class="feature-card-body">
              <div class="feature-card-icon cyan">📄</div>
              <h5 class="feature-card-title">Question Papers</h5>
              <p class="feature-card-text">Previous year exam papers with solutions to help you understand question
                patterns and ace your exams.</p>
              <a href="papers.php" class="btn-card-action">View Papers →</a>
            </div>
          </div>
        </div>

        <!-- Question Bank Card -->
        <div class="col-md-4">
          <div class="feature-card appear-animation">
            <div class="feature-card-img">
              <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=800&auto=format&fit=crop"
                alt="Question Bank">
            </div>
            <div class="feature-card-body">
              <div class="feature-card-icon amber">🏦</div>
              <h5 class="feature-card-title">Question Bank</h5>
              <p class="feature-card-text">An extensive collection of practice questions curated to strengthen your
                concepts and improve exam readiness.</p>
              <a href="#" class="btn-card-action">Coming Soon</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =================== INFO SECTIONS =================== -->
  <section style="background:white;" class="appear-animation">
    <div class="container">
      <div class="info-section">
        <div class="row g-0 align-items-center">
          <div class="col-lg-5">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=800&auto=format&fit=crop"
              alt="Platform updates" class="info-section-img">
          </div>
          <div class="col-lg-7">
            <div class="info-section-body">
              <div class="section-tag">🚀 Always Improving</div>
              <h3>Constantly Updated &<br>Always Reliable</h3>
              <p>
                We are committed to continually improving our platform. Regular updates bring new notes, papers, and
                features. Our dedicated support team ensures you always have the best study experience and resources at
                your fingertips.
              </p>
              <a href="contact.php" class="btn-card-action" style="width:fit-content;">Contact Support →</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="background:var(--bg-light);" class="appear-animation">
    <div class="container">
      <div class="info-section">
        <div class="row g-0 align-items-center">
          <div class="col-lg-7 order-2 order-lg-1">
            <div class="info-section-body">
              <div class="section-tag">🤝 Study Together</div>
              <h3>Collaborate &<br>Learn Together</h3>
              <p>
                Collaboration is key in today's connected world. Share notes with classmates, study together, and build
                a stronger academic community. Our platform enables seamless peer collaboration on projects and group
                studies.
              </p>
              <a href="aboutus.php" class="btn-card-action" style="width:fit-content;">Meet the Team →</a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="https://images.unsplash.com/photo-1543269865-96ae30571b5a?q=80&w=800&auto=format&fit=crop"
              alt="Collaborate" class="info-section-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =================== CTA SECTION =================== -->
  <section class="appear-animation" style="background:white;">
    <div class="container">
      <div
        style="background:linear-gradient(135deg,#0f172a,#1e1b4b,#312e81);border-radius:var(--radius-xl);padding:70px 48px;text-align:center;position:relative;overflow:hidden;">
        <div
          style="position:absolute;inset:0;background:radial-gradient(ellipse 60% 70% at 50% 50%,rgba(79,70,229,0.3) 0%,transparent 70%);pointer-events:none;">
        </div>
        <div style="position:relative;z-index:2;">
          <div class="section-tag mb-4"
            style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:white;">🎓 Join Today</div>
          <h2
            style="font-size:clamp(1.8rem,4vw,2.8rem);color:white;font-weight:900;margin-bottom:16px;letter-spacing:-1px;">
            Start Your Learning Journey<br>Today — It's Free!
          </h2>
          <p style="color:rgba(255,255,255,0.7);font-size:1.05rem;max-width:480px;margin:0 auto 36px;">
            Join over 1,000 students already using NotesHub to ace their exams.
          </p>
          <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="#" class="btn-hero-primary" data-bs-toggle="modal" data-bs-target="#registerModel">
              🚀 Get Started Free
            </a>
            <a href="notes.php" class="btn-hero-secondary">
              📖 Browse Notes
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php require('inc/footer.php'); ?>
</body>

</html>