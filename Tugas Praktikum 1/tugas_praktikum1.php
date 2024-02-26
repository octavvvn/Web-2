<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <style>
        h2 {
            text-align: center;
        }
        table {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        th {
            background-color: wheat;
        }
    </style>
</head>
<body>
    <h2>Daftar Nilai Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Quiz</th>
            <th>Project</th>
            <th>UTS</th>
            <th>UAS</th>
        </tr>

<?php
$nilai_mahasiswa = array(
    array("Nama Mahasiswa" => "Zoro", "Quiz" => 85, "Project" => 90, "UTS" => 78, "UAS" => 82),
    array("Nama Mahasiswa" => "Sanji", "Quiz" => 78, "Project" => 87, "UTS" => 81, "UAS" => 78),
    array("Nama Mahasiswa" => "Robin", "Quiz" => 92, "Project" => 93, "UTS" => 88, "UAS" => 90),
    array("Nama Mahasiswa" => "Ace", "Quiz" => 80, "Project" => 89, "UTS" => 82, "UAS" => 84),
    array("Nama Mahasiswa" => "Nami", "Quiz" => 88, "Project" => 91, "UTS" => 85, "UAS" => 88),
);

$no = 1;
foreach ($nilai_mahasiswa as $mahasiswa) {
    echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $mahasiswa['Nama Mahasiswa'] . "</td>";
    echo "<td>" . $mahasiswa['Quiz'] . "</td>";
    echo "<td>" . $mahasiswa['Project'] . "</td>";
    echo "<td>" . $mahasiswa['UTS'] . "</td>";
    echo "<td>" . $mahasiswa['UAS'] . "</td>";
    echo "</td>";
}
?>

    </table>
</body>
</html>