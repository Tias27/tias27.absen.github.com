<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Donasi</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <section class="database-attendance">
            <h1 style="text-align:center">Data Absensi Mahasiswa</h1>
       <h1 style="text-align:center">Global Institut</h1>
</div>
            <?php
            $mysqli = new mysqli("localhost", "root", "", "absen");
            $query = mysqli_query($mysqli, "SELECT * FROM absen ORDER BY nim");
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
            
                <p><strong>NIM:</strong> <?=$data['nim']?></p>
                <p><strong>Nama:</strong> <?=$data['nama']?></p>
                <p><strong>Tahun:</strong> <?=$data['tahun']?></p>
            </div>
            <?php } ?>
        </section>
        <section class="attendance">
            <caption><h1>Absensi</h1></caption>
            <table>
                <thead>
                    <tr>
                        <th>Mata kuliah</th>
                        <th>Ruang</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Status Absen</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <td>Bahasa Inggris 1</td>
                        <td>Lab A</td>
                        <td>Senin</td>
                        <td>10.40 - 13.10</td>
                        <td><img src="icon_unavailable.png" alt="Unavailable" width="30" height="30"></td>
                    </tr>
                    <tr>
                        <td>Pendidikan agama</td>
                        <td>GI.402</td>
                        <td>Selasa</td>
                        <td>08.00 - 10.40</td>
                        <td><img src="icon_unavailable.png" alt="Unavailable" width="30" height="30"></td>
                    </tr>
                    <tr>
                        <td>Pengantar Manajemen</td>
                        <td>GI.402</td>
                        <td>Selasa</td>
                        <td>10.40 - 13.10</td>
                        <td><img src="icon_unavailable.png" alt="Unavailable" width="30" height="30"></td>
                    </tr>
                    <tr>
                        <td>Pengantar Sistem Basis Data</td>
                        <td>Lab A</td>
                        <td>Rabu</td>
                        <td>08.00 - 10.40</td>
                        <td><button onclick="markAttendance(this)">📝 Absen</button></td>
                    </tr>
                    <tr>
                        <td>Logika & Algoritma Pemrogaman</td>
                        <td>Lab A</td>
                        <td>Rabu</td>
                        <td>10.40 - 13.10</td>
                        <td><button onclick="markAttendance(this)">📝 Absen</button></td>
                    </tr>
                    <tr>
                        <td>Otomatisasi Perkantoran</td>
                        <td>GI.401</td>
                        <td>Jumat</td>
                        <td>08.00 - 10.40</td>
                        <td><img src="icon_unavailable.png" alt="Unavailable" width="30" height="30"></td>
                    </tr>
                    <tr>
                        <td>Pengantar Teknologi Komputer</td>
                        <td>GI.401</td>
                        <td>Jumat</td>
                        <td>10.40 - 13.10</td>
                        <td><img src="icon_unavailable.png" alt="Unavailable" width="30" height="30"></td>
                    </tr>
                </tbody>
            </table>
            <div class="icon-info">
                <p>Informasi icon:</p>
                <ul>
                    <li>🤒 = Sakit</li>
                    <li>ℹ️ = Izin</li>
                    <li>✔ = Sudah Absen</li>
                    <li>❌ = Tidak Absen</li>
                    <li>🚫 = Unavailable</li>
                    <li>📝 = Waktunya Absen</li>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Yas</p>
    </footer>
    <script>
 function markAttendance(button) {
    var row = button.parentNode.parentNode;
    var nomor = row.cells[0].innerText;
    var mataKuliah = row.cells[1].innerText;
    var ruangan = row.cells[2].innerText;
    var hari = row.cells[3].innerText;
    var jam = row.cells[4].innerText;

    Swal.fire({
        title: "Good job!",
        text: "Kamu Telah Berhasil Absen", 
        icon: "success" 
    }).then(() => {
        button.innerHTML = '<img src="yas.png" alt="Sudah Absen" width="30" height="30">';
        button.disabled = true; 
                        });
}



    </script>
</body>
</html>
