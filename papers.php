<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <!-- BOOTstrap -->
    <link rel="stylesheet" href="boot.css">
    <title><?php echo $settings_r['site_title']?> - Papers</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
      />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity ="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #8d6ea7b8;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            margin-top: 50px;
        }

        .stream {
            padding: 41px;
            margin: 30px;
            border: 1px solid black;
            background: linear-gradient(45deg, #796b77ec, #4c157e00);
        }

        h2 {
            font-size: 2em;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-top: 10vh;
        }
            .pdf_dow{border: none;
    background-color: white;
    color: blue;
            }

        /* a {
            margin: 20px;
            padding: 10px 20px;
            background: linear-gradient(45deg, #a769b08f, #7732a2c8);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover { transition: all 0.1s ease-in 0.1s;
            background:linear-gradient(45deg,#a769b08f, #0056b3, #7816b5c8);
            padding: 20px;
        } */
    </style> -->
</head>

<body>
<?php require('inc/header.php'); ?>

   
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text text-center">
          <h2>PAPERS</h2>
         
          <div class="bt-option">
            <a href="index.php">Home</a>
            <span>Papers</span>
            <div class="h-line bg-dark"></div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section End -->
    <div class="container">
        <h1>Previous Year Question Papers</h1>
        <div class="stream">
            <h2>BCA</h2>
            <ul>
            <?php
                $pre_q = "SELECT * FROM `papers` WHERE `course`=?  ORDER BY `year`";
                // course name 
                $values= ['BCA'];
                $res = select($pre_q, $values, 's');


                $path = PAPERS_IMG_PATH;


                while($row = mysqli_fetch_assoc($res)){
                $book_btn = "";
                if (!$settings_r['shutdown']) {
                    $login = 0;
                    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                    $login = 1;
                    }

                    if ($login) {
                    $book_btn = "<a href='$path$row[pdf]' class='pdf_dow' download>
                                     Download $row[subject] Question Papers $row[year]
                                </a>";
                } else {
                    $book_btn = "<a  onclick='checkLoginToBook($login)'class='pdf_dow'>
                                    Download $row[subject] Question Papers $row[year]
                                </a>";
                }
                    
                }
                echo<<<data
                
                <li>$book_btn</li>
                

                data;
                }
                ?>    
        </div>

        <div class="stream">
            <h2>BBA</h2>
            <ul>
            <?php
                $pre_q = "SELECT * FROM `papers` WHERE `course`=?  ORDER BY `year`";
                 // course name 
                $values= ['BBA'];
                $res = select($pre_q, $values, 's');


                $path = PAPERS_IMG_PATH;


                while($row = mysqli_fetch_assoc($res)){
                $book_btn = "";
                if (!$settings_r['shutdown']) {
                    $login = 0;
                    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                    $login = 1;
                    }

                    if ($login) {
                    $book_btn = "<a href='$path$row[pdf]'class='pdf_dow' download>
                                    Download $row[subject] Question Papers $row[year]
                                </a>";
                } else {
                    $book_btn = "<a  onclick='checkLoginToBook($login)'class='pdf_dow' >
                                     Download $row[subject] Question Papers $row[year]
                                </a>";
                }
                    
                }
                echo<<<data
                
                <li>$book_btn</li>
                

                data;
                }
                ?>
            </ul>
        </div>

    </div>
   
    <?php require('inc/footer.php'); ?>
</body>

</html>