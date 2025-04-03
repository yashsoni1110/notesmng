<!DOCTYPE html>
<html>
  <head>
  <?php require('inc/links.php'); ?>
    <title><?php echo $settings_r['site_title']?> - Notes</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="boot.css">
   
    <style>
      .pop:hover {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
      }
    </style>
  </head>
  <body>
    <?php require('inc/header.php'); ?>

   
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section appear-animation">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-text text-center">
              <h2>NOTES</h2>
             
              <div class="bt-option">
                <a href="index.php">Home</a>
                <span>Notes</span>
                <div class="h-line bg-dark"></div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section End -->
           <!--  CONTENT HEREE -->
<div class="jumbotron  my-4 mx-auto shadow p-3 mb-5 bg-white rounded appear-animation">
    <h1 class="display-4 text-center">Simplify Your Academic Journey with Our Notes Management System</h1>
    <p class="lead text-center m-5">Welcome to the ultimate destination for managing and accessing academic notes across various streams. Our platform is designed to help students of BCA, BBA, MCA, and MBA efficiently organize their notes, collaborate with peers, and excel in their studies. Whether you're looking to store your notes securely or share them with classmates, our system offers everything you need in one convenient place.</p>
 </div>
 <hr class=" mt-5 w-50 mx-auto shadow p-3 mb-5 bg-white rounded appear-animation">
 <!-- Heading -->
<div class="BCA text-center m-5 appear-animation">
  <h1 > BCA NOTES HERE</h1>
</div>
<!-- Content here -->


    <div class="container w-100">
      <div class="row">
      <?php
  $pre_q = "SELECT * FROM `notes` WHERE `course`=?";
  $values= ['BCA'];
  $res = select($pre_q, $values, 's');


$path = NOTES_IMG_PATH;


while($row = mysqli_fetch_assoc($res)){
  $book_btn = "";
  if (!$settings_r['shutdown']) {
    $login = 0;
    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
      $login = 1;
    }

    if ($login) {
      $book_btn = "<a href='$path$row[pdf]' class='btn btn-sm w-100 text-white  btn-primary shadow-none mb-2' download>
                      Download
                  </a>";
  } else {
      $book_btn = "<button  onclick='checkLoginToBook($login)' class='btn btn-sm w-100 text-white btn-primary  shadow-none mb-2'>
                      Download
                  </button>";
  }
    
  }
  echo<<<data
  
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4  pop">
        <div class="d-flex align-items-center mb-2">  
        <h5 class="m-0 ms-3 text-center text-capitalize">$row[name]</h5> 
        </div>
        <p> $row[description]</p>
        <td>$book_btn</td>
      </div>
    </div>

  data;
}
?>
        
      </div>
    </div>


<!-- Heading -->
<div class="BCA text-center m-5 appear-animation">
  <h1 > BBA NOTES HERE</h1>
</div>
<!-- Content here -->


    <div class="container">
      <div class="row">
      <?php
  $pre_q = "SELECT * FROM `notes` WHERE `course`=?";

  //  this is course name
  
  $values= ['BBA'];
  $res = select($pre_q, $values, 's');


$path = NOTES_IMG_PATH;


while($row = mysqli_fetch_assoc($res)){
  $book_btn = "";
  if (!$settings_r['shutdown']) {
    $login = 0;
    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
      $login = 1;
    }

    if ($login) {
      $book_btn = "<a href='$path$row[pdf]' class='btn btn-sm w-100 text-white btn-primary shadow-none mb-2' download>
                      Download
                  </a>";
  } else {
      $book_btn = "<button  onclick='checkLoginToBook($login)' class='btn btn-sm w-100 text-white btn-primary shadow-none mb-2'>
                      Download
                  </button>";
  }
    
  }
  echo<<<data
  
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">  <h5 class="m-0 ms-3 text-center text-capitalize">$row[name]</h5> 
        </div>
        <p> $row[description]</p>
        <td>$book_btn</td>
      </div>
    </div>

  data;
}
?>
        
      </div>
    </div>

    
    <?php require('inc/footer.php'); ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->
  </body>
</html>
