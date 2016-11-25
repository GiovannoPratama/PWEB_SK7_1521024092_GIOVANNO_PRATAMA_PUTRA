    <table id="table1">
        <h3 id="aa">Data berhasil di simpan</h3>
        <tr>
            <td>Nama</td><td>:</td><td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Alamat</td><td>:</td><td><?php echo $alamat ?></td>
        </tr>
        <tr>
            <td>TTL</td><td>:</td><td><?php echo $ttl ?></td>
        </tr>
        <tr>
            <td>Agama</td><td>:</td><td><?php echo $agama ?></td>
        </tr>
        <tr>
            <td>Jurusan</td><td>:</td><td><?php echo $jurusan ?></td>
        </tr>
        <tr>
            <td>Kelas</td><td>:</td><td><?php echo $kelas ?></td>
        </tr>
    </table>

    <style type="text/css">
    table#table1{ 
        width:300px; 
        font: 11px Arial Helvetica, sans-serif; 
        color: #000; 
        border-collapse: collapse;
        border-spacing: 0;  
        border:3px solid #ccc;
        margin-left: 230px;
    }
    table#table1 th { 
        color: #fff; 
        background-color:#fff; 
        font-size:15px; 
        padding:2px 5px;
    }
    table#table1 td { 
        font-size: 12px; 
        text-align:center; 
        padding: 7px 7px; 
        background-color: #ccc; 
    }
    table#table1 tr:nth-child(odd) td { 
        background-color: #fff; 
    }

    #aa{
        color: #ccc;
        margin-left: 290px;
    }
     table#table2{ 
        margin-top: -215px;
    }
    </style>
