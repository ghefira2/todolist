<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM todo WHERE id='$id'");

header("Location: view.php");
?>