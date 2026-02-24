<!-- NAVBAR -->
<nav id="nav-bar" class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      📚 Notes<span style="color:var(--secondary);-webkit-text-fill-color:initial;">Hub</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
      aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <line x1="3" y1="6" x2="21" y2="6" />
        <line x1="3" y1="12" x2="21" y2="12" />
        <line x1="3" y1="18" x2="21" y2="18" />
      </svg>
    </button>
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav mx-auto gap-1">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="notes.php">Notes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="papers.php">Papers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>

      <div class="d-flex align-items-center gap-2">
        <?php
        if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
          $uname = htmlspecialchars($_SESSION['uName']);
          echo '
          <div class="btn-group">
            <button type="button" class="btn-user-menu dropdown-toggle shadow-none"
              data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              ' . $uname . '
            </button>
            <ul class="dropdown-menu dropdown-menu-lg-end shadow-lg border-0" style="border-radius:12px;padding:8px;">
              <li>
                <a class="dropdown-item rounded px-3 py-2 text-danger" href="logout.php"
                  style="font-weight:600;font-size:0.9rem;">
                  🚪 Logout
                </a>
              </li>
            </ul>
          </div>';
        } else {
          echo '
          <button type="button" class="btn-nav-login" data-bs-toggle="modal" data-bs-target="#loginModel">
            Login
          </button>
          <button type="button" class="btn-nav-register" data-bs-toggle="modal" data-bs-target="#registerModel">
            Get Started &rarr;
          </button>';
        }
        ?>
      </div>
    </div>
  </div>
</nav>

<!-- LOGIN MODAL -->
<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form id="login-form">
        <div class="modal-header">
          <h5 class="modal-title">👋 Welcome Back</h5>
          <button type="reset" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p style="color:var(--text-muted);font-size:0.9rem;margin-bottom:24px;">Sign in to access and download your
            notes.</p>
          <div class="mb-3">
            <label class="form-label">📧 Email / Mobile</label>
            <input type="text" name="email_mob" required class="form-control shadow-none"
              placeholder="Enter your email or phone" />
          </div>
          <div class="mb-4">
            <label class="form-label">🔒 Password</label>
            <input type="password" name="pass" required class="form-control shadow-none"
              placeholder="Enter your password" />
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <button type="submit" class="btn-modal-submit">Login →</button>
            <button type="button" class="btn-link-forgot" data-bs-toggle="modal" data-bs-target="#forgotModel"
              data-bs-dismiss="modal">
              Forgot Password?
            </button>
          </div>
          <hr style="margin:24px 0;border-color:var(--border-color);">
          <p style="text-align:center;font-size:0.875rem;color:var(--text-muted);margin:0;">
            Don't have an account?
            <button type="button" class="btn-link-forgot" data-bs-toggle="modal" data-bs-target="#registerModel"
              data-bs-dismiss="modal">
              Sign up free →
            </button>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- REGISTER MODAL -->
<div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <form id="register-form">
        <div class="modal-header">
          <h5 class="modal-title">🚀 Create Your Account</h5>
          <button type="reset" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p style="color:var(--text-muted);font-size:0.9rem;margin-bottom:24px;">Join thousands of students accessing
            quality study materials.</p>
          <div class="container-fluid p-0">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input name="name" type="text" class="form-control shadow-none" required placeholder="Your full name" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Email Address</label>
                <input name="email" type="email" class="form-control shadow-none" required
                  placeholder="your@email.com" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone Number</label>
                <input name="phonenum" type="number" class="form-control shadow-none" required
                  placeholder="10-digit number" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Date of Birth</label>
                <input name="dob" type="date" class="form-control shadow-none" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Password</label>
                <input name="pass" type="password" class="form-control shadow-none" required
                  placeholder="Min. 8 characters" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Confirm Password</label>
                <input name="cpass" type="password" class="form-control shadow-none" required
                  placeholder="Repeat password" />
              </div>
            </div>
            <div class="text-center mt-4">
              <button type="submit" class="btn-modal-submit">Create Account →</button>
            </div>
            <hr style="margin:20px 0;border-color:var(--border-color);">
            <p style="text-align:center;font-size:0.875rem;color:var(--text-muted);margin:0;">
              Already have an account?
              <button type="button" class="btn-link-forgot" data-bs-toggle="modal" data-bs-target="#loginModel"
                data-bs-dismiss="modal">
                Sign in →
              </button>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- FORGOT PASSWORD MODAL -->
<div class="modal fade" id="forgotModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form id="forgot-form">
        <div class="modal-header">
          <h5 class="modal-title">🔑 Reset Password</h5>
          <button type="reset" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3 p-3 rounded-3"
            style="background:rgba(79,70,229,0.06);border:1px solid rgba(79,70,229,0.15);">
            <p style="color:var(--primary);font-size:0.875rem;margin:0;">💡 A password reset link will be sent to your
              email address.</p>
          </div>
          <div class="mb-4">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" required class="form-control shadow-none" placeholder="your@email.com" />
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <button type="button" class="btn-link-forgot text-secondary" data-bs-toggle="modal"
              data-bs-target="#loginModel" data-bs-dismiss="modal">← Back to Login</button>
            <button type="submit" class="btn-modal-submit">Send Link →</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>