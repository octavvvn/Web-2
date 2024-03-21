<?php
require_once 'header.php';
require_once 'sidebar.php';

$namaProduk = "";
$jumlahProduk = "";
$totalHarga = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaProduk = $_POST['namaProduk'];
    $jumlahProduk = $_POST['JumlahProduk'];
    
    $hargaProduk = array(
        "sepatu" => 299000,
        "baju" => 75000,
        "celana" => 129000,
        "topi" => 50000
    );
    
    $hargaSatuan = $hargaProduk[$namaProduk];
    $totalHarga = $hargaSatuan * $jumlahProduk;
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum 02</h1>
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
              <h3 class="card-title">Tugas Praktikum 02</h3>

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
              <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Form Pembelian</h1>
            <form method="post">
                <div class="form-group row">
                    <label for="namaPenerima" class="col-4 col-form-label">Nama Penerima</label> 
                    <div class="col-8">
                        <input id="namaPenerima" name="namaPenerima" placeholder="Nama Penerima" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamatLengkap" class="col-4 col-form-label">Alamat Lengkap</label> 
                    <div class="col-8">
                        <textarea id="alamatLengkap" name="alamatLengkap" cols="40" rows="2" class="form-control" aria-describedby="alamatLengkapHelpBlock" required="required"></textarea> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomorTelepon" class="col-4 col-form-label">Nomor Telepon</label> 
                    <div class="col-8">
                        <input id="nomorTelepon" name="nomorTelepon" placeholder="Nomor Telepon" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Nama Produk</label> 
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="namaProduk" id="namaProduk_0" type="radio" required="required" class="custom-control-input" value="sepatu"> 
                            <label for="namaProduk_0" class="custom-control-label">Sepatu</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="namaProduk" id="namaProduk_1" type="radio" required="required" class="custom-control-input" value="baju"> 
                            <label for="namaProduk_1" class="custom-control-label">Baju</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="namaProduk" id="namaProduk_2" type="radio" required="required" class="custom-control-input" value="celana"> 
                            <label for="namaProduk_2" class="custom-control-label">Celana</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="namaProduk" id="namaProduk_3" type="radio" required="required" class="custom-control-input" value="topi"> 
                            <label for="namaProduk_3" class="custom-control-label">Topi</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="JumlahProduk" class="col-4 col-form-label">Jumlah Produk</label> 
                    <div class="col-8">
                        <select id="JumlahProduk" name="JumlahProduk" required="required" class="custom-select">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Hasil -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mt-5">
                    <h2 class="text-center">Hasil Pembelian</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $namaProduk; ?></td>
                                <td>Rp <?php echo number_format($hargaSatuan, 0, ',', '.'); ?></td>
                                <td><?php echo $jumlahProduk; ?></td>
                                <td>Rp <?php echo number_format($totalHarga, 0, ',', '.'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
