<?php
    //此程式實際執行更新記錄的作業
    //以下先取出表單來的id，放到$id變數中備用
    $id = $_POST["id"];
    $vid = $_POST["vid"];
    //以下先取出表單中的message，放到$message中備用
    $title = $_POST["title"];

    if ($id==NULL) { //如果$id是空的，就直接返回
        header("Location: index.php");
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
    //要使用SQL 的 UPDATE 指令 
    $sql_title = "UPDATE video SET title='$title' WHERE id='$id' LIMIT 1";
    $sql_vid = "UPDATE video SET vid='$vid' WHERE id='$id' LIMIT 1";
    //以下執行SQL查詢指令，並把結果傳回給$result變數
    $result = $conn->query($sql_title);
    $result = $conn->query($sql_vid);
    $conn->close();
    header("Location:/mySite/nkust-0904/test03/tvshow.php?pid=2");
    exit;
?>