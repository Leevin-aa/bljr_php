<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      td {
        padding: 1em;
      }

      table {
        position: absolute;
        /* display: flex;
        justify-content: center;
        text-align: center; */
        left: 21rem;
      }

      h1 {
        text-align: center;
      }

    </style>
</head>
<body>
  <h1>DI ISI DULU YA ADIK ADIK</h1>
  <h1>welcome to cekuyah baluu</h1>
  <form action="" method>
    <table border = 1 style = "border-collapse : collapse; witdh: 50%; " >
      <tr>
        <td>NISN</td>
        <td>:</td>
        <td>
          <input type="text" name="nisn" id="">
        </td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>
          <input type="text" name="nama" id="">
        </td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>
          <input type="text" name="tempatlahir" id="">
        </td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="date" name="tanggalahir" id=""></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
          <input type="radio" name="gender" id="" value="L"> Laki - Laki
          <input type="radio" name="gender" id="" value="P"> Perempuan 
        </td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>:</td>
        <td>
         <select name="Agomo" id="">
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Katolik">Katolik</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="">Konghucu</option>
         </select>
        </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
          <textarea name="Alamat" id=""></textarea>
        </td>
      </tr>
      <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td>
          <input type="text" name="asalsekola" id="">
        </td>
      </tr>
      <tr>
        <td>Pilihan Jurusan 1</td>
        <td>:</td>
        <td>
          <select name="Jurusan1" id="">
            <option value="Pilih Jurusan Anda">Pilih Prioritas Anda</option>
            <option value="PPLG">Pengembangan Perangkat Lunak Dan Gim</option>
            <option value="TJKT">Teknik Jaringan Komputer Dan Telekomunikasi</option>
            <option value="AKL">Akutansi Dan Keuangan Lembaga</option>
            <option value="MPLB">Menejemen Perkantoran Dan Layanan Bisnis</option>
            <option value="PM">Pemasaran</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="Seniper">Seni Pertunjukan</option>
            <option value="APH">Akomodasi Perhotelan</option>
            <option value="KL">Kuliner</option>
            <option value="BCF">Boardcasting Dan Perfilman</option>
          </select>
        </td>
      </tr>
      <tr>
      <td>Pilihan Jurusan 2</td>
        <td>:</td>
        <td>
          <select name="Jurusan2" id="">
            <option value="Pilih Jurusan Anda">Second Choice</option>
            <option value="PPLG">Pengembangan Perangkat Lunak Dan Gim</option>
            <option value="TJKT">Teknik Jaringan Komputer Dan Telekomunikasi</option>
            <option value="AKL">Akutansi Dan Keuangan Lembaga</option>
            <option value="MPLB">Menejemen Perkantoran Dan Layanan Bisnis</option>
            <option value="PM">Pemasaran</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="Seniper">Seni Pertunjukan</option>
            <option value="APH">Akomodasi Perhotelan</option>
            <option value="KL">Kuliner</option>
            <option value="BCF">Boardcasting Dan Perfilman</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Pilih Ekstrakulikuler</td>
        <td>:</td>
        <td>
          <input type="checkbox" name="" id="">OSIS
          <br>
          <input type="checkbox" name="" id="">GDS
          <br>
          <input type="checkbox" name="" id="">PRAMUKA
          <br>
          <input type="checkbox" name="" id="">PMR
          <br>
          <input type="checkbox" name="" id="">LASKAR HIJAU
          <br>
          <input type="checkbox" name="" id="">ENCASA
          <br>
          <input type="checkbox" name="" id="">REMAS
          <br>
          <input type="checkbox" name="" id="">TARI
          <br>
          <input type="checkbox" name="" id="">FUTSAL
          <br>
          <input type="checkbox" name="" id="">VOLI
          <br>
          <input type="checkbox" name="" id="">BASKET
          <br>
           
        </td>
      </tr>
      <tr>
        <td>
        <button class="btn btn-primary" type="button">Button</button>
      </tr>
    </table>
    
  </form>
</body>
</html>