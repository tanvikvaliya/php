<?php
$catname = $_POST['category'];

$servername = "localhost";
  $username = "tanvik";
  $password = "root";
  $dbname = "cateDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(isset($_POST['submit'])){
if(ctype_alpha($catname)== TRUE){
$sql="INSERT INTO category(cat_name)
          VALUES ('$catname')";

if ($conn->query($sql) === TRUE) {
    header('Location: list_categories.php?page=1');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
}

?>
