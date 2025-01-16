<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   define("gaji",5000000);
   define("bonus",500000);
   define("pajak",0.12);

   $jumlahproyek = 1;
   $totalpendapatan;
   
   $totalpendapatan = bonus * $jumlahproyek;
   $totalpendapatan = $totalpendapatan + gaji;
   $totalpendapatan = $totalpendapatan - ($totalpendapatan * pajak);

   echo "Nama : hasanudin <br/>";
   echo "anda menyelesaikan proyek : " .$jumlahproyek ."<br/>";
   echo" anda mendapatkan gaji " .number_format(gaji) ."dan anda mendapatkan bonus senilai " .number_format(bonus) ."<br/>";
   echo" maka total gaji bersih anda senilai " .number_format($totalpendapatan) ."<br/>";
?>
</body>
</html>






