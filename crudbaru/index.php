<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama   = $_POST['nama'];
    $target = $_POST['target'];
    $todo   = $_POST['ToDo'];

    mysqli_query($koneksi, "
        INSERT INTO todo (nama, target, ToDo)
        VALUES ('$nama', '$target', '$todo')
    ");

    header("Location: view.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah ToDo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">
    <div class="card">
        <h2>Tambah ToDo</h2>

        <form method="post" action="" class="form">
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="text" name="target" placeholder="Target" required>
            <textarea name="ToDo" placeholder="ToDo" required></textarea>

            <button type="submit">Simpan</button>
        </form>

        <a href="view.php" class="btn-link">Lihat ToDo</a>
    </div>
</div>

</body>
</html>
