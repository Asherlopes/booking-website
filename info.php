<!DOCTYPE html>
<html lang="en">
<head>
  <title>Moodiess</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="partials/7982821.png"> 
  
  <style>
  /* Make the image fully responsive */
  carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
    <body>
    <?php
include("partials/header.php");
include("db_connect.php");
?>

<?php
$view_id=$_GET['view_id'];
$sql = "SELECT * FROM `view` WHERE id = $view_id";
 $result = mysqli_query($conn, $sql);

  


  
      // We can fetch in a better way using the while loop

       while($row = mysqli_fetch_assoc($result)){
 
        //  $cat_id=$row["category_id"];
        $title=$row['v_name'];
        $desc= $row['description'];
        $img = $row['img'];
        $time = $row['posted_at'];
        $ratings=$row['ratings'];
        $address=$row['address'];
        // can add contact no n more info over here
     echo '<div id="demo" class="carousel slide " data-ride="carousel">
     <ul class="carousel-indicators">
       <li data-target="#demo" data-slide-to="0" class="active"></li>
       <li data-target="#demo" data-slide-to="1"></li>
       <li data-target="#demo" data-slide-to="2"></li>
     </ul>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="https://source.unsplash.com/2400x700/?'.$img.'" alt="Los Angeles" height="550px"  width="1300px">
         <div class="carousel-caption text-">
           <h3> <button class="btn btn-outline-light" >'.strtoupper ($title).'</button></h3>
           <p> <button class="btn btn-outline-light" >'.ucfirst ($desc).'!</button></p>
          <a href="book.php?viewid='.$view_id.'"> <button class="btn btn-primary">Book Now  </button></a>
         </div>   
       </div>
       <div class="carousel-item">
         <img src="https://source.unsplash.com/2400x700/?'.$img.'" alt="Chicago"height="550px"  width="1300px" >
         <div class="carousel-caption">
           <h3>ADDRESS:</h3>
           <p> <button class="btn btn-outline-light" >'.ucfirst($address).'</button></p>
           <a href="book.php?viewid='.$view_id.'"> <button class="btn btn-primary">Book Now  </button></a>
         </div>   
       </div>
       <div class="carousel-item">
         <img src="https://source.unsplash.com/2400x700/?'.$img.'" alt="New York"height="550px"  width="1300px">
         <div class="carousel-caption">
           <h3>RATINGS:</h3>
           <p> <button class="btn btn-outline-light" >'.$ratings.'</button></p>
           <a href="book.php?viewid='.$view_id.'"> <button class="btn btn-primary">Book Now  </button></a>
         </div>   
       </div>
     </div>
     <a class="carousel-control-prev" href="#demo" data-slide="prev">
       <span class="carousel-control-prev-icon"></span>
     </a>
     <a class="carousel-control-next" href="#demo" data-slide="next">
       <span class="carousel-control-next-icon"></span>
     </a>
   </div>
   
   
     ';

      }

?>


<?php
include("partials/footer.php");

?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
