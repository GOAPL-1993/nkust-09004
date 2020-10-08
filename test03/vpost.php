<?php
    $id=$_GET["id"];
    $title=$_POST["title"];
    $vid=$_POST["vid"];
    echo $title;
$servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "bbs";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  //要使用SQL的INSERT INTO指令插入訊息
  $sql_v = "INSERT INTO video(title, vid ) VALUES ('$title, $vid')";
  //以下執行SQL查詢指令，並把結果傳回給$result變數
  $result = $conn->query($sql_v);
  $conn->close();
  header("Location:/mySite/nkust-0904/test03/tvshow.php?pid=2");
  exit;
?>