<?php 
require 'config.php';
$conn = OpenConnection();

$sql = "INSERT INTO mini(title, url) VALUES ('".$_POST['title']."', '".$_POST['url']."')";
if ($conn->query($sql)){
    header("Location: /");
}

CloseConnection($conn);
?>