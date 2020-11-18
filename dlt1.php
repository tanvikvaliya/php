<?php
  $servername = "localhost";
  $username = "tanvik";
  $password = "root";
  $dbname = "cateDB";

  extract($_POST);
  $conn = new mysqli($servername, $username, $password, $dbname);
$new_str = implode($chk,',');
if(isset($chk)){
  $sql1 = "DELETE FROM category WHERE id IN($new_str)";
  mysqli_query($conn,$sql1);
  echo mysqli_error($conn);
    header('Location: list_categories.php?page=1');
}

// die();
 $id=$_GET['did'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to delete a record
$sql = "DELETE FROM category WHERE id = $id";


if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: list_categories.php?page=1'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>
