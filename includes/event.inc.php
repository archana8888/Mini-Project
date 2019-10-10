<?php
$conn= mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'loginsystem');
$sql = "SELECT `name`,`email`,`category`,`desc`,`date`,`from`,`to`,`venue`,`price`,`image` FROM organise";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>
<div class="container pt-5">
<div class="row card-deck">
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card text-center" >
        <img class="card-img-top" src="<?php echo $record['image']; ?>" alt="Card image cap" style="height:12rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $record['name']; ?></h5>
          <p class="card-text"><?php echo $record['desc']; ?></p>
          <div class="desc">VENUE:<?php echo $record['venue']; ?></div>
          <div class="card-body">FROM:<?php echo $record['from']; ?></div>
          <div class="card-body">TO:<?php echo $record['to']; ?></div>
          <a href="workshop.php" class="btn btn-primary stretched-link">Explore</a>
        </div>
      </div>
    </div>
</div>
<!--<div class="card hovercard">
<div class="cardheader">
<div class="avatar">
<img alt="" src="<?php echo $record['image']; ?>">
</div>
</div>
<div class="card-body info">
<div class="title">
<a href="#"><?php echo $record['name']; ?></a>
</div>
<div class="desc"> <a target="_blank" href="<?php echo $record['category']; ?>"> </a></div>
<div class="desc"><?php echo $record['desc']; ?></div>
<div class="desc"><?php echo $record['venue']; ?></div>
<div class="desc"><?php echo $record['from']; ?><?php echo $record['to']; ?></div>
</div>
<div class="card-footer bottom">
<div class="desc"><?php echo $record['date']; ?></div>

</div>
</div>-->
<?php }
?>