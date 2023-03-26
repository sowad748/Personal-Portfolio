<?php  
include ('conn.php');
?>

<?php

$sql  = "SELECT * FROM blogs";
$query = mysqli_query($conn,$sql);

if(isset($_REQUEST["new_post"])){
$title = $_POST["title"];
$content = $_POST["content"];



$sql = "INSERT INTO blogs(Title,Content) VALUES ('$title','$content')";
mysqli_query($conn,$sql);

header("Location: add.php?info=added");
exit();
}
if(isset($_REQUEST["submit"])){
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql1 = "INSERT INTO users(Email,Password) VALUES ('$email','$pass')";
    mysqli_query($conn,$sql1);
}
?>
