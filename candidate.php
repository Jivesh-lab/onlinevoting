<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }
</style>
</head>
<body>
  <div class="container-fluid" id="cont-3">
    <header id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="index.html"  style="color: white; font-weight: 600; margin-top: 15px;">GO VOTE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
            <li class="nav-item" >
              <a class="nav-link" href="index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="year.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Candidate</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="result.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Result</a>
            </li>
          
            <li class="nav-item" >
              <a class="nav-link" href="about.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">About</a>
            </li>
          
          </ul>
        </div>
    </nav>
</header>
<div class="container">
         
         <div class="row">
           <div class="col-md-12" >
          
           <h1 class="text-center" style="margin-bottom: 10px;">Online Voting System</h1>
           <p class="text-center" style="margin-bottom: 50px;">1<sup>st</sup> Year Candidates</p>
         </div>
         <?php 
   
      

   $sql = "select * from candidates where approve_status=1";
   include("dbConnect.php");
    
       $result= $pdo->query($sql);
     
     $rs =   $result->fetchAll();
      
     
?>
     <?php foreach($rs as $row): ?>
    <!-- Card Start -->
    <div class="col-md-3" style="margin-left: 25px; padding-top: 30px;">
        <div class="card" style="width: 18rem;">
            <!-- Use the dynamic image filename from the database -->
            <img class="card-img-top" src="img/<?php echo $row['image_filename']; ?>" alt="<?php echo $row['name']; ?>" height="350px">
            <div class="card-body">
                <h2 class="card-title"><?php echo $row['name']; ?></h2>
                <p class="card-text"><?php echo $row['branch']; ?></p>
                <!-- You may want to pass candidate information to the confirmation page, modify the href accordingly -->
                <a href="confirmation.php?candidate_id=<?php echo $row['id']; ?>" class="btn btn-primary">Vote Now</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Card End -->


          </div>
        </div>
      </section>
      <!------------------  Footer Section ------------------>

      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <hr>
              <div class="Footer">
              <ul style="display: flex;">
                  <li style="list-style: none; padding: 10px; "><a href="index.html" style="text-decoration: none; color: #a517ba;">Home</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="about.php" style="text-decoration: none; color: #a517ba;">About</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="suggestion.html" style="text-decoration: none; color: #a517ba;">Suggestion</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="contact_form.php" style="text-decoration: none; color: #a517ba;">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <hr>
              <div class="social-icon">
                <ul >
                                <li>
                                    <a href="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
              </div>
            </div>
          </div>
        </div>
        </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>