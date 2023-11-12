<!doctype html>
<html lang="en">
<title>CRUD Firebase</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" crossorigin="anonymous">
<body>
   <div class="container">
      <div class="mt-4">
         <form method="post" action="action_add.php">
            <table class="table table-hover table-bordered rounded-bottom">
               <tr>
                  <td>Title:</td>
                  <td><input type="text" name="title" class="form-control"></td>
               </tr>
               <tr>
                  <td>Thumbnail:</td>
                  <td><input type="text" name="thumbnail" class="form-control"></td>
               </tr>
               <tr>
                  <td>Year:</td>
                  <td><input type="text" name="year" class="form-control"></td>
               </tr>
               <tr>
                  <td>Rating:</td>
                  <td><input type="text" name="rating" class="form-control"></td>
               </tr>
               <tr>
                  <td colspan="2"><input type="submit" value="SAVE" class="btn btn-dark">&nbsp;<a href="index.php" class="btn btn-secondary">CANCEL</a></td>
               </tr>
            </table>
         </form>
      </div>
   </div>
</body>
</html>