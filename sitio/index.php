<?php

session_start();
$_SESSION['app'] = 'Sansapp';
header('location: src/grillaForm.php');

?>
