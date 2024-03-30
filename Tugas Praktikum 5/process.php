<?php

function setPredikatNilai($nilai)
{
    if ($nilai > 89) {
        return "A";
    } elseif ($nilai >= 75 && $nilai <= 89) {
        return "B";
    } else {
        return "C";
    }
}

class NilaiMahasiswa
{
    public $NIM, $MK, $nilai;

    function __construct($NIM, $MK, $nilai)
    {
        $this->NIM = $NIM;
        $this->MK = $MK;
        $this->nilai = $nilai;
    }

    public function hasilNilai()
    {
        $predikat = setPredikatNilai($this->nilai);
        return $predikat;
    }
}

$result = "";
if (isset($_POST["submit"])) {
    $NIM = $_POST["NIM"];
    $MK = $_POST["MK"];
    $nilai = $_POST["nilai"];

    $siswa = new NilaiMahasiswa($NIM, $MK, $nilai);

    $result .= "<h2>Hasil Nilai Mahasiswa</h2>";
    $result .= "<p>NIM: " . $siswa->NIM . "</p>";
    $result .= "<p>Mata Kuliah: " . $siswa->MK . "</p>";
    $result .= "<p>Nilai: " . $siswa->nilai . "</p>";
    $result .= "<p>Predikat Nilai: " . $siswa->hasilNilai() . "</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Nilai Mahasiswa</title>
    <style>
        body {
            background-color: chocolate;
        }

        form {
            margin: 50px auto;
            max-width: 400px;
            padding: 30px;
            border-radius: 5px;
            background-color: #f2f2f2;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: chocolate;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: chocolate;
        }

        .result-box {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #fff;
            box-shadow: chocolate;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <form method="post" action="">
        <h2>Formulir Nilai Mahasiswa</h2>
        NIM: <input type="text" name="NIM"><br>
        Mata Kuliah:
        <select name="MK">
            <option value="Basis Data">Basis Data</option>
            <option value="Pemrograman Web">Pemrograman Web</option>
            <option value="Bahasa Inggris">Bahasa Inggris</option>
        </select><br>
        Nilai: <input type="text" name="nilai"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (!empty($result)) {
        echo '<div class="result-box">' . $result . '</div>';
    }
    ?>

</body>

</html>