<?php
//data mahasiswa pke array multidimensi
$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Alfiansyah",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "alfi2007@gmail.com",
        "nilai" => 85
    ],
    [
        "nim" => "25002",
        "nama" => "Keyla Shifa",
        "jurusan" => "Informatika",
        "email" => "keyshii@gmail.com",
        "nilai" => 75
    ],
    [
        "nim" => "25003",
        "nama" => "Diduu",
        "jurusan" => "Sistem Informasi",
        "email" => "duulovesey@gmail.com",
        "nilai" => 95
    ],
    [
        "nim" => "25004",
        "nama" => "Fajar Andrian",
        "jurusan" => "Informatika",
        "email" => "fajrian@gmail.com",
        "nilai" => 55
    ],
    [
        "nim" => "25005",
        "nama" => "Dinda Maharani",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "ndarani@gmail.com",
        "nilai" => 90
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="header">
        <div>
            <h1>Daftar Mahasiswa</h1>
            <p class="subtitle">Mini Website PHP Dasar</p>
        </div>

        <a href="form_pesan.php" class="button">Isi Form Pesan</a>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;

                foreach ($mahasiswa as $mhs) {
                    if ($mhs["nilai"] >= 80) {
                        $grade = "A";
                    } elseif ($mhs["nilai"] >= 70) {
                        $grade = "B";
                    } elseif ($mhs["nilai"] >= 60) {
                        $grade = "C";
                    } else {
                        $grade = "D";
                    }

                    if ($mhs["nilai"] >= 70) {
                        $status = "Lulus";
                        $kelasStatus = "lulus";
                    } else {
                        $status = "Tidak Lulus";
                        $kelasStatus = "tidak-lulus";
                    }
                ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($mhs["nim"]); ?></td>
                    <td><?= htmlspecialchars($mhs["nama"]); ?></td>
                    <td><?= htmlspecialchars($mhs["jurusan"]); ?></td>
                    <td><?= $mhs["nilai"]; ?></td>
                    <td><?= $grade; ?></td>
                    <td>
                        <span class="badge <?= $kelasStatus; ?>">
                            <?= $status; ?>
                        </span>
                    </td>
                    <td>
                        <a class="button"
                           href="detail.php?nim=<?= urlencode($mhs["nim"]); ?>&nama=<?= urlencode($mhs["nama"]); ?>&jurusan=<?= urlencode($mhs["jurusan"]); ?>&email=<?= urlencode($mhs["email"]); ?>&nilai=<?= $mhs["nilai"]; ?>&grade=<?= $grade; ?>&status=<?= urlencode($status); ?>">
                            Lihat Detail
                        </a>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
