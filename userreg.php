<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password ="";

$con = mysqli_connect($server,  $username, $password);
      
if(!$con){
    die("connection to this database failed due to" .
    mysqli_connect_error());
}
 // echo "success connecting to the db";

 $name = $_POST['name'];
 $email = $_POST['email'];
 $sql= "INSERT INTO `us`.`user` ( `name`, `email`, `dt`) VALUES ('$name', '$email', current_timestamp());";
  //echo $sql;

if($con->query($sql) == true){
   // echo "Successfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();

}
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="userreg.css">

</head>

<body>


    <form action="stream.php" method="post">

        
    <div class="info">
        <div class="container">
           
   <h2>User Information:</h2><br>
        <label for= "name">Enter Your Name </label> <input type="text" name="name" required  id="name"><br>
        <label for= "name">Enter Your Email </label> <input type="email" name="email"  required id="email"><br>
        
        
        <button class="button"> submit </button>

            
         </div>
</div>

    </form>
    </body>
    </html>
