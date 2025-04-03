<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require('inc/links.php'); ?>
    <title><?php echo $settings_r['site_title']?> - Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="boot.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
      />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity ="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

  

  </head>
  <body>
    <!-- NAVBAR -->
    <?php require('inc/header.php'); ?>


    <!-- CAROUSEL  -->
    <div id="carouselExampleCaptions" class="carousel slide y-2-5 " data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <!-- FIRST IMG -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>COMPUTER SCIENCE </h5>
            <p>You can find notes for BCA and other computer science fields.</p>
          </div>
        </div>
        <!-- SECOND  IMG -->
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1529119368496-2dfda6ec2804?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>BUSINESS COURSES</h5>
            <p> Business courses like B.B.A(Becholre in Business Administration) also available.</p>
          </div>
        </div>
        <!-- THIRD  IMG -->
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>QUESTION PAPERS</h5>
            <p>We provide you previous  year question papers and a QUESTION BANK to improve learning.</p>
          </div>
        </div>
      </div>
      <!-- BUTTONS -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> 

<!-- ------------------------------------------------------------------------------------------------------ -->
    <hr class="m-5 shadow p-3 mb-5 bg-white rounded ">

<!--JUMBOTRON STRATED  -->
    <div class="jumbotron m-5 my-4 mx-4 ">
      <!-- JUMBOTRON SECTION-1 -->
      <div class="shadow p-3 mb-5 bg-white rounded appear-animation">
      <h1 class="display-4 text-center">How Our Program Works ?</h1>
      <p class="lead text-center m-5">Here at Notes Managemnet,our students are always at the heart of what we do. That's why our online learning program is easily adopted and customized to meet every student's need's no matter where they are located. With a passionate team off pass-out's,every course come with full support through phone ,email or video sessions.</p></div>
      <!-- horizontal line -->

      <hr class=" shadow p-1 mb-5 bg-white rounded">
      <!-- JUMBOTRON SECTION -2 -->
      <div class="shadow p-3 mt-5 mb-5 bg-white rounded appear-animation">
      <p class=" m-5 text-center "> We want to provide NOTES to everyone.</p></div>
      <!-- <p class="lead">
         <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> 
      </p> -->
    </div>
<!-- ------------------------------------------------------------------------------------------------------ -->

<hr class="m-5 shadow p-3 mb-5 border bg-white rounded "> 

<!--   OUR SERVICES  -->
   <div class="appear-animation">
    <!-- SECTION 1 START -->
     <h1 class=" my-4 text-center appear-animation">OUR SERVICES</h1>
     <!-- container started -->
    <div class=" container d-flex justify-content-evenly flex-wrap  appear-animation">
     <!-- CARD 1 -->
      <div class="card my-2 rounded shadow p-3 mb-5 bg-white rounded pop" style="width: 18rem;">
          <!-- IMG -->
        <img src="https://images.unsplash.com/photo-1517842645767-c639042777db?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
          <!-- CARD BODY -->
        <div class="card-body">
          <h5 class="card-title">NOTES</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="notes.php" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="card my-2 rounded shadow p-3 mb-5 bg-white rounded pop " style="width: 18rem;">
        <!-- IMG -->
        <img src="https://images.unsplash.com/photo-1631651693480-97f1132e333d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
        <!-- CARD BODY -->
        <div class="card-body">
          <h5 class="card-title">PAPERS</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="papers.php" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <!-- CARD 3 -->
      <div class="card my-2 rounded shadow p-3 mb-5 bg-white rounded pop" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">QUESTION BANK</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    </div>
    
    <!-- --------------------------------------shadow p-3 mb-5 bg-white rounded---------------------------------------------------------------- -->
      <hr class="m-5 shadow p-3 mb-5 bg-white rounded">
      <!--  SECTION  -->
<div class="container d-flex justify-content-between rounded my-5 mx-auto px-0  bg-secondary text-white shadow-black appear-animation" >
  <img class="card-img-top" style="max-width: 40%;" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image cap">
  <div class="m-auto "style="max-width: 40%;">
    
    <p class="text-center">We are committed to continually improving our platform. Regular updates bring new features and enhancements, ensuring you always have the best tools at your disposal. Our dedicated support team is here to help with any questions or issues, providing you with the assistance you need to maximize your productivity.</p>
  <h5 class="card-titles text-center" >...........</h5>
  </div>
</div>
<hr class="m-5 shadow p-3 mb-5 bg-white rounded">
<!-- SAME SECTION -->
<div class="container d-flex justify-content-between rounded my-5 mx-auto px-0  bg-secondary text-white shadow-black appear-animation" >
  
  <div class="m-auto "style="max-width: 40%;">
    <p class="text-center">Collaboration is key in today's connected world. Our platform allows you to share notes with colleagues, classmates, or friends, enabling seamless collaboration on projects, group studies, or team meetings. Real-time updates ensure everyone stays on the same page.</p>
  <h5 class="card-titles text-center" >.........</h5>
  </div>
  <img class="card-img-top" style="max-width: 40%;" src="https://images.unsplash.com/photo-1543269865-96ae30571b5a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Card image cap">
</div>
<hr class="m-5 shadow p-3 mb-5 bg-white rounded">

<!-- FOOTER -->
<!-- <div class="card text-center bg-dark text-light">
  <div class="card-header">
  NOTES MANAGEMENT
  </div>
  <div class="card-body">
    <h5 class="card-title">info@site.com</h5>
    <p class="card-text"> &COPY; 2024 by NOTES Managemnet. Proudly created by team Creative Brain..</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> 
  </div>
</div> -->
<!-- FOOTER -->
<?php require('inc/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>