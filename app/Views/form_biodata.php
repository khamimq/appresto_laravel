<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    Form Biodata Siswa
    <form method="post" action="/kirim">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit">Simpan</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($nama_siswa) && isset($alamat)){
            ?>
            Nama yang kirim : <?=$nama_siswa?><br>
            Alamatnya : <?=$alamat?>
            <?php
        }
    ?>
</body>
</html>