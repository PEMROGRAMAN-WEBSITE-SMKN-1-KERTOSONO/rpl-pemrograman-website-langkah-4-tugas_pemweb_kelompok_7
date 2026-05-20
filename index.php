<?php

if(isset($_POST['simpan'])){

    $judul = $_POST['judul'];
    $isi_catatan = $_POST['isi_catatan'];
    $tanggal = $_POST['tanggal'];

    echo "
    <div class='hasil'>
        <h2>✅ Data Catatan Berhasil Disimpan</h2>
        <p><b>Judul Catatan :</b> $judul</p>
        <p><b>Isi Catatan :</b> $isi_catatan</p>
        <p><b>Tanggal :</b> $tanggal</p>
    </div>
    ";
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Catatan</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }

        .container{
            background: white;
            width: 400px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        h2{
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label{
            font-weight: bold;
            color: #555;
        }

        input, textarea{
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        input:focus, textarea:focus{
            border-color: #6c63ff;
            box-shadow: 0 0 8px rgba(108,99,255,0.3);
        }

        textarea{
            resize: none;
            height: 100px;
        }

        button{
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #6c63ff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover{
            background: #574bdb;
        }

        .hasil{
            background: white;
            width: 400px;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .hasil p{
            margin-top: 10px;
            color: #444;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Input Catatan</h2>

        <form action="" method="POST">

            <label>Judul Catatan</label><br>
            <input type="text" name="judul"><br>

            <label>Isi Catatan</label><br>
            <textarea name="isi_catatan"></textarea><br>

            <label>Tanggal</label><br>
            <input type="date" name="tanggal"><br>

            <button type="submit" name="simpan">Simpan Catatan</button>

        </form>
    </div>

</body>
</html>