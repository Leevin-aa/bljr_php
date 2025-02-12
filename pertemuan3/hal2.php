<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Cv. TeknoNusa</title>
</head>
<body>
    <style>
        table {
            position: absolute;
            left: 20rem;
            top : 10rem
        }
        td {
            padding : 1em;
        }
        h1{
          text-align: center;
          color: #7886C7;
         }
         h3{
          text-align: center;
          font-size: 25px; 
          top: 9rem;

         }
    </style>

        <h1>CV. Tekno Nusa</h1>
        <h3>by Levina Zalfa Sista</h3>

    <?php
        if (isset($_POST['SUBMIT']))

        $nama = $_POST['name'];
        $divisi = $_POST['divisi'];
        $gaji = $_POST['gaji'];
        $npwp = $_POST['npwp'];

        $totalgajisebulan = $gaji;
        $totalgajisetahun = $gaji * 12;
        $totalgajisudahdipotong = 0;
        $pajak = 0;

        if ($npwp == "Have") {
            $totalgajisudahdipotong = $totalgajisetahun - ($totalgajisetahun * 0.15);
            $pajak = 15;
        } else {
            $totalgajisudahdipotong = $totalgajisetahun - ($totalgajisetahun * 0.20);
            $pajak = 20;
        }

    ?>

    <table border=1 style="border-collapse: collapse; width: 50%;">
        <tr>
            <td>Name</td>
            <td>:</td>
            <td> <?= $_POST['name'] ?> </td>
        </tr>
        <tr>
            <td>Divisi</td>
            <td>:</td>
            <td> <?= $_POST['divisi'] ?> </td>
        </tr>
        <tr>
            <td>Gaji kotor</td>
            <td>:</td>
            <td> <?= $totalgajisebulan ?> </td>
        </tr>
        <tr>
            <td>Pajak</td>
            <td>:</td>
            <td><?= $pajak ?>%</td>
        </tr>
        <tr>
            <td>Gaji bulanan</td>
            <td>:</td>
            <td>
                <?php
                    if ($totalgajisebulan > 54000000) {
                        echo "Rp" . number_format($totalgajisudahdipotong / 12);
                    } else {
                        echo "sudah di potong pajak,  Rp" . $totalgajisudahdipotong / 12 . "</br>";
                        echo "jika tidak membayar pajak,  Rp" . $totalgajisebulan;
                    }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>