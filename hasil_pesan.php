<?php
if (
    isset(
        $_POST["nama"],
        $_POST["kelas"],
        $_POST["pesan"]
    )
) {
    $nama = trim($_POST["nama"]);
    $kelas = trim($_POST["kelas"]);
    $pesan = trim($_POST["pesan"]);

    if ($nama === "" || $kelas === "" || $pesan === "") {
        header("Location: form_pesan.php");
        exit;
    }
} else {
    header("Location: form_pesan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan dan Kesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container small">

    <h1>Pesan Berhasil Dikirim</h1>

    <p class="message">
        Terima kasih,
        <strong><?= htmlspecialchars($nama); ?></strong>!
    </p>

    <div class="detail-item">
        <strong>Nama:</strong>
        <?= htmlspecialchars($nama); ?>
    </div>

    <div class="detail-item">
        <strong>Kelas:</strong>
        <?= htmlspecialchars($kelas); ?>
    </div>

    <div class="detail-item">
        <strong>Pesan / Kesan:</strong>
        <?= nl2br(htmlspecialchars($pesan)); ?>
    </div>

    <div class="actions">
        <a href="index.php" class="button">
            Kembali ke Data Mahasiswa
        </a>
    </div>

</div>

</body>
</html>