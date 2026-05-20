<?php

if(isset($_POST['simpan'])){

    $judul = $_POST['judul'];
    $isi_catatan = $_POST['isi_catatan'];
    $tanggal = $_POST['tanggal'];

    echo "<h2>Data Catatan Berhasil Disimpan</h2>";

    echo "Judul Catatan : " . $judul . "<br>";
    echo "Isi Catatan : " . $isi_catatan . "<br>";
    echo "Tanggal : " . $tanggal . "<br>";
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Catatan</title>
</head>
<body>

    <h2>Form Input Catatan</h2>

    <form action="" method="POST">

        <label>Judul Catatan</label><br>
        <input type="text" name="judul"><br><br>

        <label>Isi Catatan</label><br>
        <textarea name="isi_catatan"></textarea><br><br>

        <label>Tanggal</label><br>
        <input type="date" name="tanggal"><br><br>

        <button type="submit" name="simpan">Simpan Catatan</button>

    </form>

</body>
</html>