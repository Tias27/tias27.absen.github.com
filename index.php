<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
    <link rel="stylesheet" href="absen.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <form class="form-horizontal" method="post" id="absenForm">
        <h1>Absensi</h1>
        <label class="control-label col-md-4 label" for="fnim">NIM</label>
        <div class="col-md-3">
            <input type="text" class="form-control" name="fnim" required>
        </div>
        <label class="control-label col-md-4 label" for="fnama">Nama</label>
        <div class="col-md-3">
            <input type="text" class="form-control" name="fnama" required>
        </div>
        <label class="control-label col-md-4 label" for="ftahun">Tahun Akademik</label>
        <div class="col-md-6">
            <select class="form-control" name="ftahun" required>
                <option value="">--Pilih--</option>
                <option value="2022-2023">2023-2024</option>
                <option value="2023-2024">2024-2025</option>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Simpan</button>
    </form>

    <script>
        document.getElementById('absenForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            var form = document.getElementById('absenForm');
            var formData = new FormData(form);
    
            fetch('simpan_login.php', { 
                method: 'POST',
                body: formData
            }).then(response => response.text())
              .then(data => {
                  if (data.trim() === 'success') {
                      Swal.fire({
                          title: "Good job!",
                          text: "Kamu Telah Berhasil Loginn",
                          icon: "success"
                      }).then(() => {
                          form.reset();
                          window.location = 'hasil.php';
                      });
                  } else {
                      Swal.fire({
                          title: "Error!",
                          text: "Terjadi kesalahan saat menyimpan data.",
                          icon: "error"
                      });
                  }
              })
              .catch(error => {
                  console.error('Error:', error);
                  Swal.fire({
                      title: "Error!",
                      text: "Terjadi kesalahan saat mengirim data.",
                      icon: "error"
                  });
              });
        });
    </script>
    
</body>
</html>
