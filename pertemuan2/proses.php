<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      td {
        padding: 2em;
      }

      table {
        position: absolute;
        /* display: flex;
        justify-content: center;
        text-align: center; */
        left: 26rem;
      }

      h1 {
        text-align: center;
      }

    </style>
</head>
<body>
    <?php 
    if(isset($_POST['SUBMIT']))

    
    
    ?>
  <h1>DI ISI DULU YA ADIK ADIK</h1>
  <h1>welcome to cekuyah baluu</h1>
  <form action="" method>
    <table border = 1 style = "border-collapse : collapse; witdh: 50%; " >
      <tr>
        <td>NISN</td>
        <td>:</td>
        <td>
         <?= $_POST['nisn'] ?>
        </td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>
        <?= $_POST['nama'] ?>
        </td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>
        <?= $_POST['tempatlahir'] ?>
        </td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?= $_POST['tanggalahir'] ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
        <?= $_POST['gender'] ?>
        </td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>:</td>
        <td>
        <?= $_POST['Agomo'] ?>
        </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
        <?= $_POST['Alamat'] ?>
        </td>
      </tr>
      <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td>
        <?= $_POST['asalsekola'] ?>
        </td>
      </tr>
      <tr>
        <td>Pilihan Jurusan 1</td>
        <td>:</td>
        <td>
        <?= $_POST['Jurusan1'] ?>
        </td>
      </tr>
      <tr>
      <td>Pilihan Jurusan 2</td>
        <td>:</td>
        <td>
        <?= $_POST['Jurusan2'] ?>
        </td>
      </tr>
      <tr>
        <td>Pilih Ekstrakulikuler</td>
        <td>:</td>
        <td>
          <?= implode(",",$_POST["eskul"]) ?>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>