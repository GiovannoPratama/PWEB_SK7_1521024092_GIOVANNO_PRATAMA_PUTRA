<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css.css">
        <title>Studi Kasus 7_1</title>
    </head>
    <body>
        <h2><marquee>Data Mahasiswa</marquee></h2>
            <?php
            error_reporting(0);
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $ttl = $_POST['ttl'];
            $agama = $_POST['agama'];
            $jurusan = $_POST['jurusan'];
            $kelas = $_POST['kelas'];

            if ($_POST['tombol']) {
                if ($nama == "" && $alamat == "" && $ttl == "" && $agama == "" && $jurusan == "" && $kelas == "") {
                    echo '<h3 id="pesan">Harus Di Isi Semua</h3>';
                }
                if ($nama != "" && $alamat != "" && $ttl != "" && $agama != "" && $jurusan != "" && $kelas != "") {
                    include 'Output.php';
                }
            }
            ?>
        <form method="post" action="">
            <table id="table2">
                <tr>
                    <td><input type="text" name="nama" placeholder="Nama"></td>                    
                </tr>
                <tr>
                    <td><input type="text" name="alamat" placeholder="Alamat"></td>                   
                </tr>
                <tr>
                    <td><input type="text" name="ttl" placeholder="Tempat, Tanggal Lahir"></td>
                </tr>
                <tr>
                    <td><input type="text" name="agama" placeholder="Agama"></td>                                  
                </tr>
                <tr>
                    <td><input type="text" name="jurusan" placeholder="Jurusan"></td>                                  
                </tr>
                <tr>
                    <td><input type="text" name="kelas" placeholder="Kelas"></td>                                  
                </tr>
                <tr>
                    <td><input name="tombol" type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>       
    </body>
</html> 
<style type="text/css">
    table#table2 th {
        padding:2px 5px;
    }
    table#table2 td { 
        padding: 3px 3px; 
    }
    input {
        height: 35px;
        padding-left: 7px;
        border-radius: 3px;
    }

    #pesan{
        margin-left: 15px;
        color: red;
    }
    h2{
        width: 170px;
        margin-left: 10px;
    }
</style>