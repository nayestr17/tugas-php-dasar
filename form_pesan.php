<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan dan Kesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container small">

    <h1>Form Pesan Mahasiswa</h1>

    <form action="hasil_pesan.php" method="post">

        <div class="form-group">
            <label for="nama">Nama</label>
            <input
                type="text"
                id="nama"
                name="nama"
                required
            >
        </div>

        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input
                type="text"
                id="kelas"
                name="kelas"
                required
            >
        </div>

        <div class="form-group">
            <label for="pesan">Pesan / Kesan</label>
            <textarea
                id="pesan"
                name="pesan"
                required
            ></textarea>
        </div>

        <div class="actions">
            <button type="submit" class="button">Kirim</button>

            <a href="index.php" class="button secondary">
                Kembali
            </a>
        </div>

    </form>

</div>

</body>
</html>
