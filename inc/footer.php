<!-- <div class="container-fluid mt-5 footer">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">
        <?php echo $settings_r['site_title'] ?></h3>
      <p>
        <?php echo $settings_r['site_about'] ?>.
      </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Link</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br />
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Papers</a><br />
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Faciliti</a><br />
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br />
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-twitter me-1"></i>Twitter </a><br />
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-facebook me-1"></i>facebook </a><br />
      <a href="#" class="d-inline-block text-dark text-decoration-none">
        <i class="bi bi-instagram me-1"></i>facebook </a><br />
    </div>
  </div>
</div> -->
<!-- FOOTER -->

<div class="card text-center bg-dark text-light w-100">
  <div class="card-header">
  NOTES MANAGEMENT
  </div>
  <div class="card-body">
    <h5 class="card-title">info@site.com</h5>
    <p class="card-text"> &COPY; 2024 by NOTES Managemnet. </p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // const navEl = document.querySelector(".navbar");

  // window.addEventListener("scroll", () => {
  //   if (window.scrollY >= 60) {
  //     navEl.classList.add("navbar-scrolled");


  //   } else {
  //     navEl.classList.remove("navbar-scrolled");

  //   }
  // });


  function setActive() {
    let navbar = document.getElementById('nav-bar');
    let a_tags = navbar.getElementsByTagName('a');

    for (i = 0; i < a_tags.length; i++) {
      let file = a_tags[i].href.split('/').pop();
      let file_name = file.split('.')[0];

      if (document.location.href.indexOf(file_name) >= 0) {
        a_tags[i].classList.add('active');

      }
    }

  }






  function alert(type, msg, position = 'body') {
    let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = `
              <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
            <strong class="me-3">${msg}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          `;

    if (position == 'body') {
      document.body.append(element);
      element.classList.add('custom-alert');
    } else {
      document.getElementById(position).appendChild(element);
    }


    setTimeout(remAlert, 3000);
  }

  function remAlert() {
    document.getElementsByClassName('alert')[0].remove();
  }




  let register_form = document.getElementById('register-form');
  register_form.addEventListener('submit', function(e) {

    e.preventDefault();
    let data = new FormData();

    data.append('name', register_form.elements['name'].value);
    data.append('email', register_form.elements['email'].value);
    data.append('phonenum', register_form.elements['phonenum'].value);
    // data.append('profile', register_form.elements['profile'].files[0]);
    // data.append('address', register_form.elements['address'].value);
    // data.append('pincode', register_form.elements['pincode'].value);
    data.append('dob', register_form.elements['dob'].value);
    data.append('pass', register_form.elements['pass'].value);
    data.append('cpass', register_form.elements['cpass'].value);

    data.append('register', '');


    var myModal = document.getElementById('registerModel');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();


    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/login_register.php", true);

    xhr.onload = function() {
      if (this.responseText == 'pass_mismatch') {
        alert('error', 'Password Mismatch!');
      } else if (this.responseText == 'email_already') {
        alert('error', 'Email is already registered!');

      } else if (this.responseText == 'phonenum_already') {
        alert('error', 'Phone number is already regsitered!');
      } else if (this.responseText == 'inv_img') {
        alert('error', 'Only JPG, WEBP & PNG image are allowed!');

      } else if (this.responseText == 'upd_failed') {
        alert('error', 'Image upload failed!');
      } else if (this.responseText == 'mail_failed') {
        alert('error', 'Cannot send confirmation email! Server down!');

      } else if (this.responseText == 'ins_failed') {
        alert('error', 'Registration failed! Server down!');

      } else {
        alert('success', 'Regitrationsuccessful. Login with Email and password!');
        register_form.reset();
      }
    }

    xhr.send(data);
  });

  let login_form = document.getElementById('login-form');
  login_form.addEventListener('submit', function(e) {

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

    xhr.onload = function() {
      if (this.responseText == 'inv_email_mob') {
        alert('error', 'invalid Email or Mobil Number!');

      } else if (this.responseText == 'not_verified') {
        alert('error', 'Email is not verified!');

      } else if (this.responseText == 'inactive') {
        alert('error', 'Account Suspended! Please contact Admin');
      } else if (this.responseText == 'invalid_pass') {
        alert('error', 'Incorrect Pasword!');

      } else {
        let fileurl = window.location.href.split('/').pop().split('?').shift();
        if(fileurl == 'room_details.php'){
          window.location= window.location.href;
        }
        else{

        window.location = window.location.pathname;
        }
      }
    }

    xhr.send(data);
  });

  let forgot_form = document.getElementById('forgot-form');
  forgot_form.addEventListener('submit', function(e) {

    e.preventDefault();
    let data = new FormData();

    data.append('email', forgot_form.elements['email'].value);
    data.append('forgot_pass', '');


    var myModal = document.getElementById('forgotModel');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();


    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/login_register.php", true);

    xhr.onload = function() {
      if (this.responseText == 'inv_email') {
        alert('error', 'invalid Email!');

      } else if (this.responseText == 'not_verified') {
        alert('error', 'Email is not verified! Contact Admin');

      } else if (this.responseText == 'inactive') {
        alert('error', 'Account Suspended! Please contact Admin');
      } else if (this.responseText == 'mail_failed') {
        alert('error', 'Cannot send email!');

      }  else if (this.responseText == 'upd_failed') {
        alert('error', 'Account recovery failed Server Down');

      }else {
        alert('success', 'Reset link send to email!');
        forgot_form.reset();
      }
    }

    xhr.send(data);
  });


  function checkLoginToBook(status,$row_id){
    if(status){
     
    }
    else{
      alert('error','Please login to download!');
    }

  }

  setActive();
</script>