<?php
include 'header.php';

?>

<main>
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="images/logo3.jpg"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon bg-dark "></span>
      <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarResponsive">
     <ul class="navbar-nav ml-auto">
      <li>
         <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="event.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="organise.php">Organise</a>
      </li>
      <li class="nav-item login" data-toggle="modal" data-target="#exampleModalLong">
          <a class="nav-link" >Login</a>
        </li>
      <li class="nav-item signup" data-toggle="modal" data-target="#exampleModalLong1">
          <a class="nav-link"  >Sign Up</a>
        </li>
      
     </ul>
   </div>
  </div>
  </nav>

  <?php
$conn= mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'loginsystem');
$sql = "SELECT `name`,`email`,`event`,`category`,`desc`,`date`,`from`,`to`,`venue`,`price`,`image` FROM organise where category='Competitions'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>
<section>
<div class="container pt-5">
<div class="row card-deck">
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card text-center" >
        <img class="card-img-top" src="uploads/" alt="Card image cap" style="height:12rem;">
        <div class="card-body">
          <h3 class="card-title"><?php echo $record['event']; ?></h3>
          
          <p class="card-text"><?php echo $record['desc']; ?></p><hr>
          <div class="desc">DATE:<?php echo $record['date']; ?></div><hr>
          <div class="desc">VENUE:<?php echo $record['venue']; ?></div><hr>
          <div class="desc">FROM:<?php echo $record['from']; ?></div>
          <div class="desc">TO:<?php echo $record['to']; ?></div><hr>
          <div class="desc">PRICE:<?php echo $record['price']; ?></div><hr>
          <div class="desc">For Further Details Contact:<?php echo $record['email']; ?></div>
          <a href="workshop.php" class="btn btn-primary stretched-link">BUY TICKETS</a>
        </div>
      </div>
    </div>
</div>
</section>
<?php }
?>
  <?php include 'footer.php' ?>
   