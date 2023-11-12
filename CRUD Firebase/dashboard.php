<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>
<!doctype html>
<html lang="en">
<title>CRUD Firebase</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" crossorigin="anonymous">
<body>
   <div class="container">
      <div class="mt-4">
         <?php
            if(!isset($_SESSION['user'])){
               header("location: login.php");
            }else{
               echo "Hello <b>{$_SESSION['user']['name']}</b>, Welcome!<br>";
               echo "<a href='logout.php'>Logout</a>";
            }
         ?>
         <h1 class="text-center">CRUD Interface using Firebase</h1>
         <a href="add.php"><button class="btn btn-dark">ADD DATA</button></a><br><br>
         <table class="table table-hover table-bordered rounded-bottom">
            <thead class="thead-dark">
               <tr align="center">
                  <th scope="col">Thumbnail</th>
                  <th scope="col">Title</th>
                  <th scope="col">Year</th>
                  <th scope="col">Rating</th>
                  <th scope="col" colspan="2">Action</th>
               </tr>
            </thead>
            <?php
            $data = $db->retrieve("film");
            $data = json_decode($data, 1);
            
            if(is_array($data)){
               foreach($data as $id => $film){
                  echo "<tr>
                  <th scope='row'><img src='{$film['thumbnail']}'></th>
                  <td>{$film['title']}</td>
                  <td>{$film['year']}</td>
                  <td>{$film['rating']}</td>
                  <td><a href='edit.php?id=$id'>EDIT</a></td>
                  <td><a href='delete.php?id=$id'>DELETE</a></td>
               </tr>";
               }
            }
            ?>
         </table>
      </div>
   </div>

   <footer class="bg-light text-center text-lg-start">
  <div class="container p-4">
    <div class="row">

      <div class="col-lg-12 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Members</h5>
        <p>
          Jason F. Pascual<br>
          Crislie Blancia<br>
          Andrea Ambrona<br>
        </p>
      </div>
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Output:
    <a class="text-dark" href="">BSIS 3-A Login, Sign-up and CRUD using Firebase</a>
  </div>
</footer>
</body>
</html>

