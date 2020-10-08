<?php
    $id = $_GET["id"];
    $pid = $_GET["pid"];
    if($id==NULL){
        header("Location:tvshow.php?pid='$pid'");
        exit;
    }
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
  $sql = "DELETE FROM video WHERE id ='$id' LIMIT 1";//LIMIT用來設限不要刪太多
  //以下執行SQL查詢指令，並把結果傳回給$result變數
  $result = $conn->query($sql);
  $conn->close();
  header("Location:/mySite/nkust-0904/test03/tvshow.php?pid=2");
  exit;
?>