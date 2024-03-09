<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Praktikum 3 Form </title>
</head>
<body>
    <style>
        body {
            background: wheat;
        }
        h1 {
            text-align: center;
        }
    </style>
<div class="container py-3"></div>
<form action="proses_form.php" method="POST" class w-50>
    <h1>Form Pendaftaran IT Club</h1>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" required="required" class="custom-control-input" value="Pr"> 
        <label for="jenis_kelamin_0" class="custom-control-label">Pr</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" required="required" class="custom-control-input" value="Lk"> 
        <label for="jenis_kelamin_1" class="custom-control-label">Lk</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="Prodi" name="Prodi" required="required" class="custom-select">
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Innformasi">Sistem Informasi</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Keahlian</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Keahlian" id="Keahlian_0" type="checkbox" required="required" class="custom-control-input" value="HTML"> 
        <label for="Keahlian_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Keahlian" id="Keahlian_1" type="checkbox" required="required" class="custom-control-input" value="CSS"> 
        <label for="Keahlian_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Keahlian" id="Keahlian_2" type="checkbox" required="required" class="custom-control-input" value="PHP"> 
        <label for="Keahlian_2" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Keahlian" id="Keahlian_3" type="checkbox" required="required" class="custom-control-input" value="Java Script"> 
        <label for="Keahlian_3" class="custom-control-label">Java Script</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Keahlian" id="Keahlian_4" type="checkbox" required="required" class="custom-control-input" value="Python"> 
        <label for="Keahlian_4" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Keahlian" id="Keahlian_5" type="checkbox" required="required" class="custom-control-input" value="Lainnya"> 
        <label for="Keahlian_5" class="custom-control-label">Lainnya</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
      <textarea id="domisili" name="domisili" cols="40" rows="3" required="required" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" required="required" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>