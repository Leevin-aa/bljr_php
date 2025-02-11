<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        h1{
          text-align: center;
          color: #7886C7;
         }
         h3{
          text-align: center;
          font-size: 25px; 
         }
         
    </style>
    <h1>CV. Tekno Nusa</h1>
    <h3>by Levina Zalfa Sista</h3>
    
    <form action="hal2.php" method="POST">
        <table border=1 style="border-collapse : collapse; width : 50%; ">
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>Divisi</td>
            <td>:</td>
            <td><input type="text" name="divisi" id=""></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><input type="number" name="gaji" id=""></td>
        </tr>
            <td>Do you have NPWP?</td>
            <td>:</td>
            <td>
                <input type="radio" name="npwp" id="" Value="Have">Yes,Ofc
                <br>
                <input type="radio" name="npwp" id="" Value="Havent">No
            </td>
        <tr>
            <td>
                <br>
                <input type="submit" class="btn btn-info" value="SUBMIT">
            </td>
        </tr>
        </table>
    </form>
</body>
</html>