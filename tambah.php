<?php
include "koneksi.php";
//jika tombol simpan diklik
    if(isset($_POST['btnSimpan']))
    {
        //baca isi inputan form
        $nokartu = $_POST['nokartu'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        //simpan ke tabel karyawan
        $simpan = mysqli_query($konek, "insert into karyawan (nokartu,
        nama, alamat) values('$nokartu', '$nama', '$alamat')");
        //jika berhasil tersimpan, tampilkan pesan Tersimpan,
        //kembali ke data karyawa
        if ($simpan)
        {
            echo "
                <script>
                    alert('Tersimpan');
                        location.replace('datakaryawan.php');
                </script>
            ";
        }
        else
        {
            echo "
                <script>
                    alert('Gagal Tersimpan');
                        location.replace('datakaryawan.php');
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <?php include "header.php"; ?>
    <title>Tambah Data Karyawan</title>
</head>

<body>
    <?php include "menu.php"; ?>
    <!-- isi -->
    <div class="container-fluid">
        <h3>Tambah Data Karyawan</h3>
        <!-- form input -->
        <form method="POST">
            <div class="form-group">
                <label>No. Kartu</label>
                <input type="text" name="nokartu" id="nokartu" placeholder="nomor kartu RFID" class="form-control"
                    style="width: 200px">
            </div>
            <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="text" name="nama" id="nama" placeholder="nama karyawan" class="form-control"
                style="width: 400px">
            </div>
            <div class="form-group">
                <label>Alamat </label>
                <textarea class="form-control" name="alamat" id="alamat" placeholder="alamat"
                    style="width: 400px"></textarea>
            </div>
            <button class="btn btn-primary" name="btnSimpan" id="btnSimpan">Simpan</button>
        </form>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>