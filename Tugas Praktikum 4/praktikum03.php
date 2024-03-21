<?php
require_once 'header.php';
require_once 'sidebar.php';

$nama = $nim = $jenisKelamin = $prodi = $keahlian = $domisili = $email = "";
$showMessage = false;

// Memeriksa apakah formulir telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $keahlian = isset($_POST['keahlian']); // Menggabungkan keahlian menjadi satu string jika ada yang dipilih
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    $showMessage = true; // Menampilkan pesan terima kasih setelah mengisi formulir
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tugas Praktikum 03</h1>
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
                            <h3 class="card-title">Tugas Praktikum 03</h3>

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

                            <div class="container mt-5">
                                <h1>Form Pendaftaran IT Club</h1>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                    <h1 class="text-center mb-5">Form Pendaftaran IT Club</h1>
                                    <div class="form-group row">
                                        <label for="nim" class="col-4 col-form-label">NIM</label>
                                        <div class="col-8">
                                            <input id="nim" name="nim" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Jenis Kelamin</label>
                                        <div class="col-8">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki-laki" required="required">
                                                <label for="jenis_kelamin_0" class="custom-control-label">Laki-laki</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan" required="required">
                                                <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                                        <div class="col-8">
                                            <select id="prodi" name="prodi" class="custom-select" required="required">
                                                <option value="Teknik Informatika">Teknik Informatika</option>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Bisnis Digital">Bisnis Digital</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Keahlian</label>
                                        <div class="col-8">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="keahlian[]" id="keahlian_0" type="checkbox" class="custom-control-input" value="HTML">
                                                <label for="keahlian_0" class="custom-control-label">HTML</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="keahlian[]" id="keahlian_1" type="checkbox" class="custom-control-input" value="CSS">
                                                <label for="keahlian_1" class="custom-control-label">CSS</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="keahlian[]" id="keahlian_2" type="checkbox" class="custom-control-input" value="PHP">
                                                <label for="keahlian_2" class="custom-control-label">PHP</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="keahlian[]" id="keahlian_3" type="checkbox" class="custom-control-input" value="JavaScript">
                                                <label for="keahlian_3" class="custom-control-label">JavaScript</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="keahlian[]" id="keahlian_4" type="checkbox" class="custom-control-input" value="Python">
                                                <label for="keahlian_4" class="custom-control-label">Python</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="keahlian[]" id="keahlian_5" type="checkbox" class="custom-control-input" value="Lainnya">
                                                <label for="keahlian_5" class="custom-control-label">Lainnya</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="domisili" class="col-4 col-form-label">Domisili</label>
                                        <div class="col-8">
                                            <input id="domisili" name="domisili" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email</label>
                                        <div class="col-8">
                                            <input id="email" name="email" type="email" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <?php if ($showMessage): ?>
                                    <!-- Informasi Pendaftaran -->
                                    <div class="mt-5">
                                        <h1>Terima Kasih Sudah Mendaftar Di IT Club Data Science</h1>
                                        <h4>Nama Lengkap: <?php echo $nama ?></h4>
                                        <h4>NIM: <?php echo $nim ?></h4>
                                        <h4>Jenis Kelamin: <?php echo $jenisKelamin ?></h4>
                                        <h4>Domisili: <?php echo $domisili ?></h4>
                                        <h4>Email: <?php echo $email ?></h4>
                                        <h4>Keahlian: <?php echo $keahlian ?></h4>
                                    </div>
                                <?php endif; ?>
                            </div>
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
