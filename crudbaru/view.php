<?php
include 'config.php';
$data = mysqli_query($koneksi, "SELECT * FROM todo ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat ToDo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">
    <div class="card">
        <h2>Riwayat ToDo</h2>

        <?php while ($d = mysqli_fetch_assoc($data)) { ?>
            <div class="todo-item">
                <div class="nama"><?= $d['nama'] ?></div>
                <div class="target"><?= $d['target'] ?></div>
                <div class="todo"><?= $d['ToDo'] ?></div>
            </div>
        <?php } ?>

        <a href="index.php" class="btn">Tambah Lagi</a>
        <a href="hapus.php?id=<?= $d['id'] ?>" class="btn-hapus">Hapus</a>

    </div>
</div>

</body>
</html>
