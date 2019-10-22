<?php
session_start();
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Adamina&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/0e6745b2a3.js"></script>
    <script src="https://kit.fontawesome.com/f0fe6fadbc.js" crossorigin="anonymous"></script>
    </head>
<!-- NAVBAR -->
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <li class="navbar-brand "><i class="fas fa-star-of-david" style="font-size:30px;color: white padding:45px"></i> Polaris</li>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon bg-dark "></span>
      <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarResponsive">
     <ul class="navbar-nav ml-auto">
      <li>
         <a class="nav-link  " href="index.php"><i class="fas fa-home" style="padding:5px"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="event.php"><i class="fas fa-calendar-week" style="padding:5px"></i>Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="organise.php"><i class="fas fa-marker" style="padding:4px"></i>Organise</a>
      </li>
     
      
        
      <?php

          if (isset($_SESSION['userUId'])) 
           {
             
           echo '<li class="nav-item logout" data-toggle="modal" data-target="#exampleModalLong">
            <a class="nav-link" href="includes/logout.inc.php" ><i class="fas fa-user-minus" style="padding:5px"></i>Logout</a>
           </li>';
           echo'<li class="nav-item">
           <a class="nav-link" href="payment2.php"><i class="fas fa-shopping-cart"></i></a>
           </li>';
           echo '<li class="nav-item"><a class="nav-link" href="cart.php"><i class="fas fa-clipboard"></i></a></li>';
           }
          else
           {
          echo'
         
          <li class="nav-item signup" data-toggle="modal" data-target="#exampleModalLong1">
          <a class="nav-link"  ><i class="fas fa-user-plus" style="padding:4px" ></i>Sign Up</a>
        </li>
        <li class="nav-item login" data-toggle="modal" data-target="#exampleModalLong2">
          <a class="nav-link" ><i class="fas fa-user-circle " style="padding:5px"></i>Login</a>
        </li>';
          }
          ?>

      
      
     
   
  
  
      
      
    <li class="dropleft">
    <button class="bg-dark border-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-map-marker-alt" style="font-size: 24px;color: white"> </i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="mumbai.php">Mumbai</a>
              <a class="dropdown-item" href="delhi.php">New Delhi</a>
              <a class="dropdown-item" href="chennai.php">Chennai</a>
              <a class="dropdown-item" href="bangalore.php">Bangalore</a>
              <a class="dropdown-item" href="pune.php">Pune</a>
              <a class="dropdown-item" href="kolkata.php">Kolkata</a>
              <a class="dropdown-item" href="hyderabad.php">Hyderabad</a>
              <a class="dropdown-item" href="ahmedabad.php">Ahmedabad</a>
    </div>
</li>
</ul>
</div>
</div>
</nav>
</header>

<body background="images/surface.jpg">
<section>
<div class="container pt-5">
<div class="row card-deck">
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card text-center" >
        <img class="card-img-top" src="images/workshop.jpg" alt="Card image cap" style="height:12rem;">
        <div class="card-body">
          <h5 class="card-title">Workshops</h5>
          <p class="card-text">Workshops that are led by experienced graduate students, faculty and staff from departments throughout the University.</p>
          <a href="workshop.php" class="btn btn-primary stretched-link">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card text-center" >
        <img class="card-img-top" src="images/competitions.jpg" alt="Card image cap" style="height:12rem;">
        <div class="card-body">
          <h5 class="card-title">Competitions</h5>
          <p class="card-text">For knowing the capability of the students, various competitions for the students will be held in different cities across India.</p>
          <a href="competitions.php" class="btn btn-primary stretched-link">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card text-center" >
        <img class="card-img-top" src="images/trek.jpg" alt="Card image cap" style="height:12rem;">
        <div class="card-body">
          <h5 class="card-title">Trek</h5>
          <p class="card-text">If you are adventurer and looking for treks that will not only give you an adrenaline rush but also excellent photo opportunities.</p>
          <a href="trek.php" class="btn btn-primary stretched-link">Explore</a>
        </div>
      </div>
    </div>
    
    
   </div>
</div>
<div class="container pt-5">
    <div class="row card-deck">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/ngo.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">NGO</h5>
              <p class="card-text">If you want to do something for your society on a broad scale then NGOs play a critical part in developing society, improving communities.</p>
              <a href="ngo.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/talks.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Talks</h5>
              <p class="card-text">If you are looking for inspiration then this is the right platform where you'll find talks on every topic you need.</p>
              <a href="talks.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/paint.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Art</h5>
              <p class="card-text">Art is often considered the process of deliberately arranging elements in a way that appeals the senses so this is the platform where you can explore your creativity.</p>
              <a href="art.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
      
    
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card text-center " >
                <img class="card-img-top " src="images/cycle.jpg" alt="Card image cap" style="height:12rem;">
                <div class="card-body ">
                  <h5 class="card-title">Sports</h5>
                  <p class="card-text">If you want to play some amazing sports and show your talent to others then this is the right platform.</p>
                  
                  <a href="sports.php" class="btn btn-primary stretched-link ">Explore</a>
                  </div>
           </div>
        </div>
        </div>
     </div>
        
        
  </section>
  
  <?php include 'footer.php' ?>
</main>
</body>