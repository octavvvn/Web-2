<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$Prodi = $_POST['Prodi'];
$Keahlian = $_POST['Keahlian'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

?>

<h1>Terima Kasih Sudah Mendaftar di IT club Data Science</h1>
<h5>Nama Lengkap : <?php echo $nama ?></h5>
<h5>NIM : <?php echo $nim ?></h5>
<h5>Jenis Kelamin : <?php echo $jenis_kelamin ?></h5>
<h5>Prodi : <?php echo $Prodi ?></h5>
<h5>Domisili : <?php echo $domisili ?></h5>
<h5>Keahlian : <?php echo $Keahlian ?></h5>
<h5>Email : <?php echo $email ?></h5>