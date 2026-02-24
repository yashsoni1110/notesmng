<!-- FOOTER -->
<footer class="site-footer">
  <div class="container">
    <div class="row g-5">
      <!-- Brand Column -->
      <div class="col-lg-4">
        <div class="footer-brand-name">📚 NotesHub</div>
        <p class="footer-brand-desc">
          Your one-stop platform for BCA, BBA, MCA, and MBA study materials.
          Access quality notes and previous year papers — all in one place.
        </p>
        <div class="footer-social-links">
          <a href="#" class="footer-social-btn" title="Instagram">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="#" class="footer-social-btn" title="Facebook">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="#" class="footer-social-btn" title="Twitter">
            <i class="bi bi-twitter-x"></i>
          </a>
          <a href="#" class="footer-social-btn" title="GitHub">
            <i class="bi bi-github"></i>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-4 col-6">
        <h6 class="footer-heading">Quick Links</h6>
        <ul class="footer-links">
          <li><a href="index.php">🏠 Home</a></li>
          <li><a href="notes.php">📖 Notes</a></li>
          <li><a href="papers.php">📄 Papers</a></li>
          <li><a href="aboutus.php">👥 About Us</a></li>
          <li><a href="contact.php">✉️ Contact</a></li>
        </ul>
      </div>

      <!-- Courses -->
      <div class="col-lg-2 col-md-4 col-6">
        <h6 class="footer-heading">Courses</h6>
        <ul class="footer-links">
          <li><a href="notes.php">BCA Notes</a></li>
          <li><a href="notes.php">BBA Notes</a></li>
          <li><a href="papers.php">BCA Papers</a></li>
          <li><a href="papers.php">BBA Papers</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-4 col-md-4">
        <h6 class="footer-heading">Get In Touch</h6>
        <ul class="footer-links">
          <li>
            <a href="mailto:info@noteshub.com">
              <i class="bi bi-envelope"></i> info@noteshub.com
            </a>
          </li>
          <li>
            <a href="contact.php">
              <i class="bi bi-chat-dots"></i> Send us a message
            </a>
          </li>
        </ul>
        <div class="mt-4 p-3 rounded-3" style="background:rgba(79,70,229,0.08);border:1px solid rgba(79,70,229,0.15);">
          <p style="color:#a5b4fc;font-size:0.85rem;margin:0;font-weight:500;">
            🎓 Made for students, by students. <br>
            <span style="color:#64748b;">Supporting academic excellence since 2024.</span>
          </p>
        </div>
      </div>
    </div>
  </div>

  <hr class="footer-divider">

  <div class="footer-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
        <p>&copy; 2024 <strong style="color:#a5b4fc;">NotesHub</strong>. All rights reserved. Built with ❤️ for
          students.</p>
        <p>
          <a href="#">Privacy Policy</a> &nbsp;·&nbsp;
          <a href="#">Terms of Use</a>
        </p>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Set active nav link — exact filename match to avoid false positives
  function setActive() {
    let navbar = document.getElementById('nav-bar');
    if (!navbar) return;
    // Get just the current page filename (e.g. "notes" from "notes.php")
    let currentPage = document.location.pathname.split('/').pop().split('.')[0];
    let a_tags = navbar.getElementsByTagName('a');
    for (let i = 0; i < a_tags.length; i++) {
      let linkFile = a_tags[i].href.split('/').pop().split('.')[0];
      if (linkFile !== '' && linkFile === currentPage) {
        a_tags[i].classList.add('active');
      }
    }
  }

  // Navbar scroll effect
  window.addEventListener('scroll', () => {
    const nav = document.getElementById('nav-bar');
    if (nav) {
      if (window.scrollY > 60) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
    }
  });

  // Alert function
  function alert(type, msg, position = 'body') {
    let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = `
      <div class="alert ${bs_class} alert-dismissible fade show shadow-lg rounded-3" role="alert" style="min-width:280px;">
        <strong>${type === 'success' ? '✅' : '❌'} ${msg}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`;
    if (position == 'body') {
      document.body.append(element);
      element.classList.add('custom-alert');
    } else {
      document.getElementById(position).appendChild(element);
    }
    setTimeout(remAlert, 4000);
  }

  function remAlert() {
    const el = document.getElementsByClassName('alert')[0];
    if (el) el.remove();
  }

  // Register form
  let register_form = document.getElementById('register-form');
  if (register_form) {
    register_form.addEventListener('submit', function (e) {
      e.preventDefault();
      let data = new FormData();
      data.append('name', register_form.elements['name'].value);
      data.append('email', register_form.elements['email'].value);
      data.append('phonenum', register_form.elements['phonenum'].value);
      data.append('dob', register_form.elements['dob'].value);
      data.append('pass', register_form.elements['pass'].value);
      data.append('cpass', register_form.elements['cpass'].value);
      data.append('register', '');

      var myModal = document.getElementById('registerModel');
      var modal = bootstrap.Modal.getInstance(myModal);
      modal.hide();

      let xhr = new XMLHttpRequest();
      xhr.open("POST", "ajax/login_register.php", true);
      xhr.onload = function () {
        if (this.responseText == 'pass_mismatch') alert('error', 'Password Mismatch!');
        else if (this.responseText == 'email_already') alert('error', 'Email is already registered!');
        else if (this.responseText == 'phonenum_already') alert('error', 'Phone number is already registered!');
        else if (this.responseText == 'inv_img') alert('error', 'Only JPG, WEBP & PNG images allowed!');
        else if (this.responseText == 'upd_failed') alert('error', 'Image upload failed!');
        else if (this.responseText == 'mail_failed') alert('error', 'Cannot send confirmation email!');
        else if (this.responseText == 'ins_failed') alert('error', 'Registration failed! Server down!');
        else { alert('success', 'Registration successful! Login with your credentials.'); register_form.reset(); }
      };
      xhr.send(data);
    });
  }

  // Login form
  let login_form = document.getElementById('login-form');
  if (login_form) {
    login_form.addEventListener('submit', function (e) {
      e.preventDefault();
      let data = new FormData();
      data.append('email_mob', login_form.elements['email_mob'].value);
      data.append('pass', login_form.elements['pass'].value);
      data.append('login', '');

      var myModal = document.getElementById('loginModel');
      var modal = bootstrap.Modal.getInstance(myModal);
      modal.hide();

      let xhr = new XMLHttpRequest();
      xhr.open("POST", "ajax/login_register.php", true);
      xhr.onload = function () {
        if (this.responseText == 'inv_email_mob') alert('error', 'Invalid Email or Mobile Number!');
        else if (this.responseText == 'not_verified') alert('error', 'Email is not verified!');
        else if (this.responseText == 'inactive') alert('error', 'Account Suspended! Contact Admin.');
        else if (this.responseText == 'invalid_pass') alert('error', 'Incorrect Password!');
        else window.location = window.location.pathname;
      };
      xhr.send(data);
    });
  }

  // Forgot form
  let forgot_form = document.getElementById('forgot-form');
  if (forgot_form) {
    forgot_form.addEventListener('submit', function (e) {
      e.preventDefault();
      let data = new FormData();
      data.append('email', forgot_form.elements['email'].value);
      data.append('forgot_pass', '');

      var myModal = document.getElementById('forgotModel');
      var modal = bootstrap.Modal.getInstance(myModal);
      modal.hide();

      let xhr = new XMLHttpRequest();
      xhr.open("POST", "ajax/login_register.php", true);
      xhr.onload = function () {
        if (this.responseText == 'inv_email') alert('error', 'Invalid Email!');
        else if (this.responseText == 'not_verified') alert('error', 'Email not verified! Contact Admin.');
        else if (this.responseText == 'inactive') alert('error', 'Account Suspended! Contact Admin.');
        else if (this.responseText == 'mail_failed') alert('error', 'Cannot send email!');
        else if (this.responseText == 'upd_failed') alert('error', 'Account recovery failed!');
        else { alert('success', 'Reset link sent to your email!'); forgot_form.reset(); }
      };
      xhr.send(data);
    });
  }

  function checkLoginToBook(status) {
    if (!status) {
      alert('error', '🔒 Please login to download this resource!');
    }
  }

  setActive();
</script>