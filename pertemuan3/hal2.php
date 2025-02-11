<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </style>

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
                        echo "want to pay, Rp" . $totalgajisudahdipotong / 12 . "</br>";
                        echo "if no pay, Rp" . $totalgajisebulan;
                    }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>