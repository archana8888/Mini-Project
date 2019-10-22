<?php
session_start();
include 'header.php';

//$db = mysqli_select_db($conn,'loginsystem');

//Initialize message variable
$conn= mysqli_connect("localhost","root","");
  $db = mysqli_select_db($conn,'loginsystem');
  $Id=$_POST['name'];
if (isset($_SESSION['userUId'])) 
{
    echo"1";
   
    
   
    if(isset($_POST['$id']))
    {

        
        echo"Buy Button selected successfully";
       
        $sql ="SELECT * FROM organise WHERE id='$Id'";
        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        
        if(!$resultset)
        {
            header("Location: ../index.php?error=sqlerror");
        }else {
            header("Location: ../index.php?successful");
        }
        //while( $record = mysqli_fetch_array($resultset) ) 
        //{
        //    echo $record['name'];
        //}


        //$result=mysqli_query($details);

     }
}
else {
    echo "You need to login first";
}


/**if(isset($_POST['buy']))
{




    <div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>*/