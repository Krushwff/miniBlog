<?php
$conn = mysqli_connect("localhost", "root", "", "data-blog");

if(!$conn){
    echo "БД не подключилась!";
}

$sql = "SELECT * FROM data";
$query = mysqli_query($conn, $sql);
if(isset($_REQUEST["new_post"])){
$title = $_REQUEST["title"];
$content = $_REQUEST["content"];

$sql = "INSERT INTO data(title, content) VALUES ('$title', '$content')";
mysqli_query($conn, $sql);

header("Location: index.php?info=added");
exit();
}
