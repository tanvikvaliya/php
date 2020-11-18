<?php
  $servername = "localhost";
  $username = "tanvik";
  $password = "root";
  $dbname = "cateDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(isset($_POST['submit'])){
extract($_POST);
$img_name=$_FILES['img1']['name'];
$tmp_name=$_FILES['img1']['tmp_name'];
$image="images/".$img_name;
move_uploaded_file($_FILES['img1']['tmp_name'],$image);
$sql="INSERT INTO product(name, price, pimage, cat_name) VALUES ('$firstname',$price,'$image','$catname')";
if ($conn->query($sql) === TRUE) {
  header('Location: list_products.php?page=1');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>
