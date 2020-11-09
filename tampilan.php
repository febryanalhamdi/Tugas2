<?php

if (isset ($_POST['input'])); {
$nama_lengkap = $_POST['nama_lengkap'];
$panggilan = $_POST['panggilan'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$no_hp = $_POST['no_hp'];
$em_ail = $_POST['em_ail'];
$Agama = $_POST['Agama'];
$Alamat = $_POST['Alamat'];
$df = $_POST['df'];
}

$form =array ('Nama Lengkap  : ' => $nama_lengkap, 
              'Panggilan     : ' => $panggilan, 
              'Tempat Lahir  : ' => $tempat_lahir, 
              'Tanggal Lahir : ' => $tanggal_lahir, 
              'No Hp         : ' => $no_hp, 
              'Email         : ' => $em_ail, 
              'Agama         : ' => $Agama,
              'Alamat        : ' => $Alamat, 
              'Divisi        : ' => $df);
$totalarray = count($form);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
        <div class="sub">
                <h1>Hasil Penginputan</h1>
                    <table>
                        <?php
                        foreach ($form as $key => $value) {
                            echo "<tr>";
                            echo "<td></td>";
                            echo "<td><h4>". $key . "</h4></td>";
                            echo "<td><h4>". $value . "</h4></td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>   
                 </div>
            </form>
            </body>