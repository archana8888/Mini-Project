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
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="images/logo3.jpg" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon bg-dark "></span>
      <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarResponsive">
     <ul class="navbar-nav ml-auto">
      <li>
         <a class="nav-link  " href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="event.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="organise.php">Organise</a>
      </li>
     
      
        
      <?php

          if (isset($_SESSION['userUId'])) 
           {
             
           echo '<li class="nav-item logout" data-toggle="modal" data-target="#exampleModalLong">
            <a class="nav-link" href="includes/logout.inc.php" >Logout</a>
           </li>';
           }
          else
           {
          echo'
         
          <li class="nav-item signup" data-toggle="modal" data-target="#exampleModalLong1">
          <a class="nav-link"  >Sign Up</a>
        </li>
        <li class="nav-item login" data-toggle="modal" data-target="#exampleModalLong2">
          <a class="nav-link" >Login</a>
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




  <span class="border ">
   <form  class="container form-horizontal" action="includes/organiser.inc.php" enctype="multipart/form-data" method="post">
   <input type="hidden" name="size" value="1000000" >
   <div class="form-row">
      <div class="form-group col-sm-6 ">
        <label class="control-label col-sm-4" for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
      </div>
      
        <div class="form-group col-sm-6">
          <label class="control-label col-sm-4" for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email">  
        </div>
    </div> 

  <div class="form-row">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-4" for="en">Event Name:</label>
          <input type="text" class="form-control" name="event" placeholder="Enter Event Name">
    </div>

	      <div class="form-group col-sm-6">
          <label class="control-label col-sm-4" for="Category">Category:</label>  
          <select class="form-control" id="Category" name="category">
            <option value="" selected disabled>Please select category</option>
            <option>Workshops</option>
            <option>Art</option>
            <option>Sports tournaments</option>
            <option>Educational talks</option>
            <option>Treks</option>
            <option>NGOs</option>
            <option>Competitions</option>
          </select>
         </div>
  </div>

     <div class="form-group">
        <label class="control-label col-sm-2" for="desc">Description:</label>
        
          <!-- <input type="text" class="form-control" id="desc" placeholder="Enter Event Description"> -->
          <textarea class="form-control" rows="3" name="desc"></textarea>
        </textarea>
      </div>

   <div class="d-inline-flex"> 
        <div class="form-group col-sm-4 ">
          <label  for="date">Date :</label>
          <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group col-sm-4 ">
          <label  for="time">From :  </label>
          <input type="time" class="form-control" id="time" name="from">
        </div>
        <div class="form-group col-sm-4">
          <label for="duration">To :  </label>
          <input type="time" class="form-control" id="duration" name="to">
          </div>

          <div class="form-group col-sm-4">
          <label class="control-label col-sm-4" for="venue">Venue:</label>  
          <select class="form-control" id="venue" name="venue">
            <option value="" selected disabled>Please select city</option>
            <option>Mumbai</option>
            <option>New Delhi</option>
            <option>Chennai</option>
            <option>Bangalore</option>
            <option>Pune</option>
            <option>Kolkata</option>
            <option>Hyderabad</option>
            <option>Ahmedabad</option>
          </select>
         </div>
    </div>

<span class="container form-horizontal">



      <div class="form-group">
          <label class="control-label col-sm-2" for="price">Ticket price:</label>
            <input type="number" class="form-control" id="price" placeholder="Enter Ticket's Price" name="price">
        </div>
  
     <div class="form-group">
            <label class="control-label col-sm-2" for="img" >Cover image:</label>
              <input type="file" class="form-control" id="img" placeholder="Upload image" name="image">
          </div> 
        
       <div class="form-group"> 
         <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-dark border-dark" name="insert-data">Submit</button>
         
         </div>
        </div>
  </span>
  </form>
    </span>
    <?php include 'footer.php' 
    ?>
 
