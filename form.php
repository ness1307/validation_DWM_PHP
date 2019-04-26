<?php
session_start();

header('Location: /');

$_SESSION['pseudo'] = $_POST['pseudo'];

?>