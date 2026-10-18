
<?php
if (
    isset(
        $_GET["nim"],
        $_GET["nama"],
        $_GET["jurusan"],
        $_GET["email"],
        $_GET["nilai"],
        $_GET["grade"],
        $_GET["status"]
    )
) {
    $nim = $_GET["nim"];
    $nama = $_GET["nama"];
    $jurusan = $_GET["jurusan"];
    $email = $_GET["email"];
    $nilai = $_GET["nilai"];
    $grade = $_GET["grade"];
    $status = $_GET["status"];
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container small">

    <h1>Detail Mahasiswa</h1>

    <div class="detail-item">
        <strong>NIM:</strong>
        <?= htmlspecialchars($nim); ?>
    </div>

    <div class="detail-item">
        <strong>Nama:</strong>
        <?= htmlspecialchars($nama); ?>
    </div>

    <div class="detail-item">
        <strong>Jurusan:</strong>
        <?= htmlspecialchars($jurusan); ?>
    </div>

    <div class="detail-item">
        <strong>Email:</strong>
        <?= htmlspecialchars($email); ?>
    </div>

    <div class="detail-item">
        <strong>Nilai:</strong>
        <?= htmlspecialchars($nilai); ?>
    </div>

    <div class="detail-item">
        <strong>Grade:</strong>
        <?= htmlspecialchars($grade); ?>
    </div>

    <div class="detail-item">
        <strong>Status:</strong>
        <?= htmlspecialchars($status); ?>
    </div>

    <div class="actions">
        <a href="index.php" class="button">Kembali</a>
    </div>

</div>

</body>
</html>
