<?php
include "db_config.php";
$pdo = new PDO($db_host, $db_user, $db_password);
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$email=strip_tags($_POST['email']);

$sql = "INSERT INTO emaily_zber
(email) VALUES (:email)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(":email", $email);
$stmt->execute();
}
?>
