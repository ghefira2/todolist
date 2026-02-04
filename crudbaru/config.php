<?php
$koneksi = mysqli_connect("localhost", "root", "", "todolist");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
