<?php
session_start();
unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['sended']);
$url = 'index.php';
if(isset($_GET['session_expired'])) {
	$url .= "?session_expired=" . $_GET['session_expired'];
}
header("Location: $url");
?>
