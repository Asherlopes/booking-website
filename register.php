<!-- n
<?php
/*
include("db_connect.php");
//if(isset($_POST['post'])){
if($_SERVER['REQUEST_METHOD']=='POST'){
  $id = $_GET['catid'];
   
echo $id;
  //done changes
 $v_name=$_POST['v_name'];
 
 $email=$_POST['email'];
 $ratings=$_POST['ratings'];
 $img=$_FILES['img']['name'];
 
 $msg=$_POST['description'];
 $address=$_POST['address'];
 $target = "upload/".basename($img); //images check
 move_uploaded_file($_FILES['img']['tmp_name'],$target);

 $sql=" INSERT INTO `view` ( `v_name`, `description`, `address`, `img`, `email`,`ratings`,`posted_at`) 
 VALUES ( '$v_name', '$msg',' $address', '$img','$email','$ratings', current_timestamp)";


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
*/

?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p style="background-image: url(https://source.unsplash.com/2400x700/?booking);">
</body>
</html>
