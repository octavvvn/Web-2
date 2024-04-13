<?php
require_once 'header.php';
require_once 'sidebar.php';

require '../dbkoneksi.php';

$errors = []; // Inisialisasi array untuk menyimpan pesan kesalahan

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi input
    if (empty($_POST['id'])) {
        $errors[] = "ID diperlukan";
    }
    // Validasi input lainnya seperti tanggal, berat badan, tinggi badan, dsb.

    // Jika tidak ada kesalahan validasi, lanjutkan untuk memasukkan data ke dalam database
    if (empty($errors)) {
        try {
            // Persiapkan query SQL
            $sql = "INSERT INTO periksa (id, tanggal, berat_badan, tinggi_badan, tensi, keterangan, pasien_id, dokter_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            // Persiapkan data yang akan dimasukkan ke dalam query
            $data = [
                $_POST['id'],
                $_POST['tanggal'],
                $_POST['berat_badan'],
                $_POST['tinggi_badan'],
                $_POST['tensi'],
                $_POST['keterangan'],
                $_POST['pasien_id'],
                $_POST['dokter_id']
            ];

            // Eksekusi query SQL
            $stmt = $dbh->prepare($sql);
            if ($stmt->execute($data)) {
                // Redirect ke halaman index.php setelah penyisipan berhasil
                header("Location: index.php");
                exit();
            } else {
                $errors[] = "Gagal memasukkan data ke dalam database";
            }
        } catch (PDOException $e) {
            // Tangani kesalahan PDO
            $errors[] = "Kesalahan: " . $e->getMessage();
        }
    }
}

// Cetak pesan kesalahan jika ada
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>" . $error . "</p>";
    }
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Pemeriksaan</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="text-center">Form Pemeriksaan</h2>
                            <form action="add.php" method="POST">
                                <div class="form-group row">
                                    <label for="id" class="col-4 col-form-label">ID</label>
                                    <div class="col-8">
                                        <input id="id" name="id" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                    <div class="col-8">
                                        <input id="tanggal" name="tanggal" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="berat_badan" class="col-4 col-form-label">Berat Badan</label>
                                    <div class="col-8">
                                        <input id="berat_badan" name="berat_badan" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tinggi_badan" class="col-4 col-form-label">Tinggi Badan</label>
                                    <div class="col-8">
                                        <input id="tinggi_badan" name="tinggi_badan" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tensi" class="col-4 col-form-label">Tensi</label>
                                    <div class="col-8">
                                        <input id="tensi" name="tensi" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
                                    <div class="col-8">
                                        <textarea id="keterangan" name="keterangan" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pasien_id" class="col-4 col-form-label">ID Pasien</label>
                                    <div class="col-8">
                                        <input id="pasien_id" name="pasien_id" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dokter_id" class="col-4 col-form-label">ID Dokter</label>
                                    <div class="col-8">
                                        <input id="dokter_id" name="dokter_id" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>
