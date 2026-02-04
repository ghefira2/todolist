<!-- get data dari form -->
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $target = $_POST['target'];
    $ToDo = $_POST['ToDo'];

    // insert data ke database
    $sql = "INSERT INTO tbsiswa (nama, target, ToDo) VALUES ('$nama', '$target', '$ToDo')";
    $result = mysqli_query($koneksi, $sql);

    // Tutup koneksi
    mysqli_close($koneksi);

    // Redirect ke halaman index.php
    header("Location: view.php");
    exit();
}
?>