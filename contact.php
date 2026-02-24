<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('inc/links.php'); ?>
  <title><?php echo $settings_r['site_title'] ?> - Contact</title>
  <link rel="stylesheet" href="boot.css">
</head>

<body>
  <?php require('inc/header.php'); ?>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-hero">
    <div class="container breadcrumb-hero-content text-center">
      <h1>✉️ Contact Us</h1>
      <p style="color:rgba(255,255,255,0.65);font-size:1rem;margin-bottom:20px;">We'd love to hear from you. Send us a
        message!</p>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- CONTACT SECTION -->
  <section style="background:var(--bg-light);">
    <div class="container">
      <div class="contact-wrapper appear-animation">
        <div class="row g-0">
          <!-- Contact Info Panel -->
          <div class="col-lg-5">
            <div class="contact-info-panel">
              <h3>Let's Talk 👋</h3>
              <p>Have a question, suggestion, or want to contribute notes? Reach out — we respond within 24 hours.</p>

              <div class="contact-info-item">
                <div class="contact-info-item-icon">📧</div>
                <div class="contact-info-item-text">
                  <h6>Email</h6>
                  <p>info@noteshub.com</p>
                </div>
              </div>

              <div class="contact-info-item">
                <div class="contact-info-item-icon">🕒</div>
                <div class="contact-info-item-text">
                  <h6>Response Time</h6>
                  <p>Within 24 hours on weekdays</p>
                </div>
              </div>

              <div class="contact-info-item">
                <div class="contact-info-item-icon">📍</div>
                <div class="contact-info-item-text">
                  <h6>Location</h6>
                  <p>India — serving students nationwide</p>
                </div>
              </div>

              <div class="contact-socials">
                <a href="#" class="contact-social-btn">
                  <i class="bi bi-facebook"></i> Facebook
                </a>
                <a href="#" class="contact-social-btn">
                  <i class="bi bi-twitter-x"></i> Twitter
                </a>
                <a href="#" class="contact-social-btn">
                  <i class="bi bi-instagram"></i> Instagram
                </a>
              </div>

              <!-- Our Services Box -->
              <div
                style="margin-top:36px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.15);border-radius:16px;padding:24px;">
                <h6 style="color:white;margin-bottom:12px;font-size:0.9rem;font-weight:700;">📦 Our Services</h6>
                <p style="color:rgba(255,255,255,0.65);font-size:0.85rem;margin:0;line-height:1.7;">
                  We provide quality notes & previous year question papers for BCA, BBA students. All resources are free
                  for registered users.
                </p>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="col-lg-7">
            <div class="contact-form-panel">
              <h3>Send a Message</h3>
              <p class="desc">Fill out the form below and our team will get back to you shortly.</p>

              <?php
              if (isset($_POST['send'])) {
                $frm_data = filteration($_POST);
                $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
                $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];
                $res = insert($q, $values, 'ssss');
                if ($res == 1) {
                  echo '<div class="mb-4 p-3 rounded-3" style="background:rgba(16,185,129,0.1);border:1px solid rgba(16,185,129,0.25);">
                          <p style="color:#059669;margin:0;font-weight:600;">✅ Your message was sent successfully! We\'ll get back to you soon.</p>
                        </div>';
                } else {
                  echo '<div class="mb-4 p-3 rounded-3" style="background:rgba(239,68,68,0.1);border:1px solid rgba(239,68,68,0.25);">
                          <p style="color:#dc2626;margin:0;font-weight:600;">❌ Server error! Please try again later.</p>
                        </div>';
                }
              }
              ?>

              <form id="contactForm" method="POST">
                <div class="row g-3 mb-1">
                  <div class="col-md-6">
                    <div class="form-floating-label">
                      <label>👤 Your Name</label>
                      <input name="name" required type="text" class="form-input" placeholder="John Doe" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating-label">
                      <label>📧 Email Address</label>
                      <input name="email" required type="email" class="form-input" placeholder="john@example.com" />
                    </div>
                  </div>
                </div>
                <div class="form-floating-label">
                  <label>📋 Subject</label>
                  <input name="subject" required type="text" class="form-input" placeholder="What's this about?" />
                </div>
                <div class="form-floating-label">
                  <label>💬 Message</label>
                  <textarea name="message" required class="form-input"
                    placeholder="Write your message here..."></textarea>
                </div>
                <button type="submit" name="send" class="btn-submit">
                  <i class="bi bi-send"></i> Send Message
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ or additional info -->
      <div class="row g-4 mt-4 appear-animation">
        <div class="col-md-4">
          <div class="value-card">
            <span class="value-icon">📖</span>
            <div class="value-title">Notes Issue?</div>
            <p class="value-desc">Report broken or missing notes via the contact form and we'll fix it fast.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="value-card">
            <span class="value-icon">🤝</span>
            <div class="value-title">Want to Contribute?</div>
            <p class="value-desc">Have good notes to share? Reach out and help fellow students learn better.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="value-card">
            <span class="value-icon">🔧</span>
            <div class="value-title">Technical Support</div>
            <p class="value-desc">Having trouble logging in or downloading? Our team is here to help.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require('inc/footer.php'); ?>
</body>

</html>