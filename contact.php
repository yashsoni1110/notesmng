<!DOCTYPE html>
<html>

<head>
<?php require('inc/links.php'); ?>

  <title><?php echo $settings_r['site_title']?> - Contact</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="boot.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
      />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity ="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <style>

  </style>
</head>

<body>
  <?php require('inc/header.php'); ?>
  <div class="cont">
 <div class="container">
     <!-- Breadcrumb Section Begin -->
  <div class="breadcrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-text text-center">
            <h2>CONTACT US</h2>

            <div class="bt-option">
              <a href="index.php">Home</a>
              <span>Contact</span>
              <div class="h-line bg-dark"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb Section End-->
     <form id="contactForm"  method="POST">
              <label class="form-label" >Name</label>
              <input name="name" required type="text" class="form-control shadow-none" />
           
              <label class="form-label" style="font-weight: 500">Email</label>
              <input name="email" required type="email" class="form-control shadow-none" />
            
           
              <label class="form-label" style="font-weight: 500">Subject</label>
              <input name="subject" required type="text" class="form-control shadow-none" />
       
      
              <label class="form-label" style="font-weight: 500">Message</label>
              <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none"> </textarea>
        
            <button type="submit" name="send" class="bnt shadow">
            Submit
            </button>
          </form>
          <div class="social-links">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">LinkedIn</a>
        </div>
        <div class="services">
            <h2>Our Services</h2>
            <p>We provide the best hand-written notes for students to help them in their studies. Our notes cover a wide range of subjects and topics, ensuring comprehensive assistance for students at all levels of education.</p>
        </div>
        </div>
      </div>
    </div> 
</div>
  <?php
  if (isset($_POST['send'])) {
    $frm_data = filteration($_POST);

    $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
    $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

    $res = insert ($q,$values,'ssss');
    if ($res == 1) {
      alert('success', 'Mail sent!');
    } else {
      alert('error', 'Server Down! Try again later.');
    }
  }
  ?>

  <?php require('inc/footer.php'); ?>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>