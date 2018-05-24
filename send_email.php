<?php
error_log("send email");
include "db_config.php";
$pdo = new PDO($db_host, $db_user, $db_password);
$errorMessage = "";
$email=strip_tags($_POST['email']);

$sql = "INSERT INTO emaily_zber
(email) VALUES (:email)";
error_log($sql);
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":email", $email);
$stmt->execute();
header("Location: index.html")
?>
