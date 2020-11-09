
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <div class="sub">
<form action="tampilan.php" method="POST">
                <h1>FORM REGISTRASI</h1>
                    <table>
                        <tr>
                            <td>Nama Lengkap</td></label><td>:</td><td><input type="text" name="nama_lengkap"> </td>
                        </tr>
                        <tr>
                            <td>Panggilan</td><td>:</td><td><input type="text" name="panggilan"> </td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat_lahir"> </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td><td>:</td><td><input type="date" name="tanggal_lahir"> </td>
                        </tr>
                        <tr>
                            <td>No Hp</td><td>:</td><td><input type="number" name="no_hp"> </td>
                        </tr>
                        <tr>
                            <td>Email</td><td>:</td><td><input type="text" name="em_ail"> </td>
                        </tr>
                        <tr>
                            <td>Agama</td><td>:</td><td><select name="Agama">
                                <option >--Pilih Agama--</option>
                                <option >Islam</option>
                                <option >Protestan</option>
                                <option >Katolik</option>
                                <option >Hindu</option>
                                <option >Buddha</option>
                                <option >Khonghucu</option>
                            </select> </td>
                        </tr>
                        <tr>
                            <td>Alamat</td><td>:</td> <td><textarea name="Alamat" ></textarea></td>
                        </tr>
                        <tr>
                            <td>Divisi</td><td>:</td>
                            <td><input type="radio" name="df" value="MMD">MMD 
                                <input type="radio" name="df" value="Programming">Programming
                                <input type="radio" name="df" value="SKJ">SKJ</td>
                        </tr>
                        <tr>
                            <td></td><td></td> <td><button type="submit" name="submit" >Submit</button>
                                <button type="reset" name="reset" >Cancel</button></td>
                                
                        </tr>
                    </table>   
                 </div>
            </form>
            </body>