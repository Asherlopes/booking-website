<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="partials/7982821.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <title>Moodiess!!!</title>
</head>

<body>
    <?php
    require("partials/header.php");
    include("db_connect.php");
    ?>



    <?php
     
    //$catid = $_GET['catid'];
    /* $sql = "SELECT name from `category` where s_no= $catid";
     $result = mysqli_query($conn, $sql);
   
       // We can fetch in a better way using the while loop
      
       while($row = mysqli_fetch_assoc($result)){
          //  echo var_dump($row);
       // echo ".$row['category_id'].";
        
           $title = $row["name"];
           //echo $title;
   
    
       }
    */
    ?>
    <!-- seperate-->
   
   
   
   
   
 
    <?php
     //  $cat_id=$row["category_id"];
    $id= $_GET['catid'];
   // $cat_id=$row["category_id"];
    $sql = "SELECT name FROM `category` WHERE s_no = $id";
    $result = mysqli_query($conn, $sql);
  
      // We can fetch in a better way using the while loop
     
      while($row = mysqli_fetch_assoc($result)){
      //  $cat_id=$row["category_id"];
     // echo $id;
      $title=$row['name'];
     // $c_desc=$row['c_description'];
      // need to display the title n description from database by using category id
         
       
      }
    
    ?>
<!-- Button trigger modal --
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

 Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <img src="partials/7982821.png" class="rounded me-2" alt="..." width="25px">
      <h5 class="modal-title" id="exampleModalLabel">Register: <?php echo $title ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo $_SERVER['REQUEST_URI']?>" class="row g-3" method="post">

<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
</div>
<div class="col-md- 12">
    <label for="inputname" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputname" placeholder="please fill name"
        name="v_name" required>
</div>
<div class="col-md-12">
    <label for="inputdescription" class="form-label">Description</label>
    <textarea name="description" id="" cols="20" class="form-control" rows="2" required></textarea>
</div>
<div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress"
        placeholder="please fill complete address" name="address" required>
</div>

<div class="col-md-6">
    <label for="image" class="form-label">type</label>
    <input type="text" id="image" name="img" class="form-control"
        placeholder="hotel-clubs-restaurant" required>
</div>
<div class="col-md-6">
    <label for="inputState" class="form-label">Ratings</label>
    <select id="inputState" class="form-select" name=ratings required>
        <option selected></option>
        <option>&#9733;</option>
        <option>&#9733;&#9733;</option>
        <option>&#9733;&#9733;&#9733;</option>
        <option>&#9733;&#9733;&#9733;&#9733;</option>
        <option>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
    </select>

</div>   
<div class="col-md-12">
    <button type="submit" class="btn btn-outline-primary form-control" name="post" value="post">Register</button>
</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!--<button type="submit" class="btn btn-outline-primary" name="post" value="post" data-bs-dismiss="modal">Register</button>
    --> </div>
    </div>
  </div>
</div>







    
<?php

//if(isset($_POST['post'])){
if($_SERVER['REQUEST_METHOD']=='POST'){
  $id = $_GET['catid'];
   
echo $id;
  //done changes
 $v_name=$_POST['v_name'];
 
 $email=$_POST['email'];
 $ratings=$_POST['ratings'];
 $img=$_POST['img'];
 
 $msg=$_POST['description'];
 $address=$_POST['address'];
 

 $sql=" INSERT INTO `view` ( `v_name`, `description`, `address`, `img`, `email`,`ratings`,`posted_at`,`cat_id`) 
 VALUES ( '$v_name', '$msg',' $address', '$img','$email','$ratings', current_timestamp,'$id')";


//$sql=" INSERT INTO `explore` ( 'thread_cat_id',`thread_name`, `thread_desc`) VALUES ('$cat_id','$title', '$desc')";
$result = mysqli_query($conn,$sql);
if($result){
    $msg="Registered succesfully";
    echo '<script language="javascript">';
    echo "alert('$msg');";
    echo 'window.location="http://localhost/food/index.php"';
    echo '</script>';
    
   
}else{
    echo "not submitted".mysqli_error($conn);
}
}


?>
<h3 class="text-center">List of <?php echo $title?></h3>
<div class="container my-4">
<?php 



 $id= $_GET['catid'];
 $sql = "SELECT * FROM `view` WHERE cat_id = $id";
 $result = mysqli_query($conn, $sql);
  
      // We can fetch in a better way using the while loop
     $no_result = true;
      while($row = mysqli_fetch_assoc($result)){
      $no_result = false;
        //  $cat_id=$row["category_id"];
        $titlev=$row['v_name'];
        $desc= $row['description'];
        $img = $row['img'];
        $time = $row['posted_at'];
     //   $view_id = $row['id'];
      // need to display the title n description from database by using category id
    echo'  
    <div class="card mb-3" ">
      <img src="https://source.unsplash.com/2400x700/?'.$img.'" class="card-img-top" alt="..." height="300px">
      <div class="card-body">
        <h5 class="card-title">'.$titlev.'</h5>
        <p class="card-text">'.$desc.'.</p>
        <p class="card-text"><small class="text-muted">Posted at: '.$time.'</small></p>
        <a href="info.php?view_id='.$row['id'].'"> <button class="btn btn-primary">know more</button></a>
      </div>
    </div>';
    

      }
if($no_result){
  //echo"no result found";
  echo' <div class="container">
  <div class="jumbotron">
  <h1>NO RESULT FOUND!!</h1>
  <p>BE THE FIRST PERSON TO ASK THE QUESTION</p>
</div>
</div>
  ';
}









?>


</div>

   
   
   
   
   

  
   
   
   
   
   
   
   

    <?php 
require("partials/footer.php");

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
  
    
    
    
    
    
    
    
    
    
    <script>
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
        toastTrigger.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
        })
    }
    </script>

</body>

</html>


