<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if($id != ""){
   $delete = $db->delete("film", $id);
   echo "<center>data deleted";
echo "
         <br>
         <a href='index.php'>Back to Table</a></center>
         ";
}
