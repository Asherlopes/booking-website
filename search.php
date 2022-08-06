<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="partials/7982821.png"> 
    <title>search</title>
</head>
<body>
    <?php 
    include('partials/header.php');
    include('db_connect.php'); 
    ?>
<?php 
      $noresults = true;
        $query = $_GET["search"];
    
        $sql = "SELECT * from view where match (v_name, description) against ('$query')"; 
        $result = mysqli_query($conn, $sql);
        echo '<h4>SEARCHING RESULT FOR : '.$query.'</h4>';
        while($row = mysqli_fetch_assoc($result)){
            $title = $row['v_name'];
            $desc = $row['description']; 
        
      
          $url = "info.php?view_id=". $row['id'] ;
   
            $noresults = false; 
          echo'<div class="jumbotron jumbotron-fluid">
           <div class="container"> 
           <h1>'. $title. '</h1>
             <p>'. $desc .'</p></p>
             <a href="'.$url.'"><button class="btn btn-primary">know more</button></a>
           </div>
         </div>';
           
           
                }
        if ($noresults){
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Results Found</p>
                        <p class="lead"> Suggestions: <ul>
                                <li>Make sure that all words are spelled correctly.</li>
                                <li>Try different keywords.</li>
                                <li>Try more general keywords. </li></ul>
                        </p>
                    </div>
                 </div>';
        }        
    ?>

   
<?php  include('partials/footer.php'); 
?>
</body>
</html>