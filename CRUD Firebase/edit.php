<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("film/$id");
$data = json_decode($retrieve, 1);

?>
<!doctype html>
<html lang="en">
<title>CRUD Firebase</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" crossorigin="anonymous">
<body>
   <div class="container">
      <div class="mt-4">
         <form method="post" action="action_edit.php">
            <table class="table table-hover table-bordered rounded-bottom">
               <tr>
                  <td>Title</td>
                  <td><input type="text" name="title" value="<?php echo $data['title']?>" class="form-control"></td>
               </tr>
               <tr>
                  <td>Thumbnail</td>
                  <td><input type="text" name="thumbnail" value="<?php echo $data['thumbnail']?>" class="form-control"></td>
               </tr>
               <tr>
                  <td>Year</td>
                  <td><input type="text" name="year" value="<?php echo $data['year']?>" class="form-control"></td>
               </tr>
               <tr>
                  <td>Rating</td>
                  <td><input type="text" name="rating" value="<?php echo $data['rating']?>" class="form-control"></td>
               </tr>
               <tr>
                  <td colspan="2">
                     <input type="hidden" name="id" value="<?php echo $id?>">
                     <input type="submit" value="SAVE" class="btn btn-dark">&nbsp;<a href="index.php" class="btn btn-secondary">CANCEL</a>
                  </td>
               </tr>
            </table>
         </form>
      </div>
   </div>
</body>
</html>
