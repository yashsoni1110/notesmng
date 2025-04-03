<?php
require('inc/essentials.php');
require('inc/db_config.php');
adminLogin();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Papers </title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>


    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Papers</h3>
                <div class="card border-0 shadow-sm mb-4">
                    
                </div>


                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body ">

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Papers</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" 
                            data-bs-target="#papers-s">
                                <i class="bi bi-pencil-square"></i> Add</button>
                        </div>

                        <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead >
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">pdf</th>
                                        <th scope="col">subject</th>  
                                        <th scope="col">course</th>
                                        <th scope="col">year</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="papers-data">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             

            </div>
        </div>
    </div>


    <!-- Features modal  -->


    <!-- Facilities modal  -->
    <div class="modal fade" id="papers-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form id="papers_s_form">

              <div class="modal-content">
             
                <div class="modal-header">
                  <h5 class="modal-title">Add Paper</h5>
                </div>
                <div class="modal-body">
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: PDF accept less then 35MB.
                </span>
                  <div class="mb-3">
                    <label class="form-label fw-bold">subject</label>
                    <input type="text" name="papers_subject"  class="form-control shadow-none" required />
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">course</label>
                    <input type="text" name="papers_course"  class="form-control shadow-none" required />
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">Paper pdf</label>
                    <input type="file" name="papers_pdf"  accept=".pdf " class="form-control shadow-none" required />


                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">Year</label>
                    <input type="year" name="papers_year"  accept=".pdf " class="form-control shadow-none" required />
                  </div>
            

                </div>
                <div class="modal-footer">
                  <button type="reset"  class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                  <button type="submit" class="btn btn-dark shadow-none">SUBMIT</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    

    <?php require('inc/scripts.php'); ?>

   <script src="script/papers.js"></script>
  

</body>

</html>