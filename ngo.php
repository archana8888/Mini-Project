<?php
session_start();
include 'header.php';
?>
<html>
  <head>
  <style>
.containers {
  position: relative;
  width: 50%;
}

.image {
  opacity: 1;
  display: block;
  
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
#display{
  float:left;
  margin: 35px 35px 35px 35px;
}
#foot{
  width:100%;
  float:right;
}
</style>
</head>
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
           <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
           </li>';
           echo '<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-clipboard"></i></a></li>';
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



<main>

  <?php
$conn= mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'loginsystem');
$sql = "SELECT * FROM organise where category='Ngos'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_array($resultset) ) {
?>
<section>
<div class="container ">
<div id="display" class="card" style="width: 18rem;">
<!-- <div class="row card-deck">
    <div class="col-lg-4 col-md-4 col-12"> -->
        <div class="card text-center image " >
        <img class="card-img-top" style="height:18rem" <?php echo "<img src='includes/uploads/".$record['image']."' >"; ?>
        
        <div class="card-body ">
          <h3 class="card-title"><?php echo $record['event']; ?></h3>
          
          <!--<p class="card-text"><?php echo $record['desc']; ?></p><hr>-->
          <div class="card-footer">DATE:<?php echo $record['date']; ?><hr>
          VENUE:<?php echo $record['venue']; ?><hr>
          FROM:<?php echo $record['from']; ?><br>
          TO:<?php echo $record['to']; ?><hr>
          PRICE: Rs.<?php echo $record['price']; ?><hr>
          CONTACT:<br><?php echo $record['email']; ?></div></div>
    </div>
    <?php //echo $record['id'];?>
    <?php $_SESSION['buy']=$record['id']?>
    
       <a href="payment.php" id="btn" name="buy" type="button"  class="btn btn-primary stretched-link middle">BUY TICKETS</a>
</div>
</div>
</section>

<?php }
?>
<div id="foot">
  <?php include 'footer.php' ?>
</div>
<script text="text/javascript">
$('input[type=button]').click(function(e){
  var id=e.target.name;
  
  $.ajax({
    		type:'POST',
    		url:'payment.php',

    		data: {name:id},

    		success:function(response){
          window.open("payment.php");
    			//alert("Marked as Approved");
    			//location.reload();
    		}
    	});
    	//window.open("status.php");
		
	});
    
    });
</script>
   