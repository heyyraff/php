<?php
require_once "includes/connect.php";

$title = $_GET['txtTitle'];
$content = $_GET['txtContent'];
try {
    $sql="INSERT INTO aboutus(atitle.acontent)VALUES(?,?)";
    $data=array($title,$content);
    $stmt=$con->prepare($sql);
    $stmt->execute($data);
    header('location:aboutus.php');
} catch (PDOException $th) {
    echo $th->getMessage();

}        