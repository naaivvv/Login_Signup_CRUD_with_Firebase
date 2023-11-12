<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$insert = $db->insert("film", [
   "title"     => $_POST['title'],
   "thumbnail" => $_POST['thumbnail'],
   "year"      => $_POST['year'],
   "rating"    => $_POST['rating']
]);

echo "<center>data saved";
echo "
         <br>
         <a href='index.php'>Back to Table</a></center>
         ";
