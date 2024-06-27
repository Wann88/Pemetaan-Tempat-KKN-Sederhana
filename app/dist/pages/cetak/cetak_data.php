<?php include('../../../../conf/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laporan Data</title>

    <style>
        .td{
            width: 15%;
        }
        .ttd {
            bottom: 0;
            right: 0;
            text-align: center;
            background-color: #ffffff; /* Tambahan untuk latar belakang putih */
            padding-left: 400px; /* Tambahan untuk memberikan padding */
            padding-top: 30px;
        }
    </style>
</head>
<body>
    <h2 align="center">Laporan Data Kantor</h2>
    <table border="1" align="center" widht="700px">
        <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Jabatan</th>
        </tr>
        <tr>
        <?php 
            $query = mysqli_query($koneksi,"SELECT * FROM tb_pengguna");
            while($pgn = mysqli_fetch_array($query)){
            ?>
                <td width="50%"><?php echo $pgn['nama']; ?></td>
                <td width="30%"><?php echo $pgn['username']; ?> </td>
                <td width="50%"><?php echo $pgn['role']; ?>  </td>
                </tr>
            <?php }?>
            
    </table>
    <div class="ttd">
        <?php 
            $query = mysqli_query($koneksi,"SELECT * FROM tb_pengguna WHERE role='kepala'");
            while($pgn = mysqli_fetch_array($query)){
        ?>
        <p>Banjarmasin,<br/><br/><br></p>
        <p><b>____________</b></p>
        <p><b><?php echo $pgn['nama'];  ?></b></p>
        <p><b><?php echo $pgn['role'];  ?></b></p>
        <?php }?>
    </div>
    <script>
     window.print();
    </script>
</body>
</html>