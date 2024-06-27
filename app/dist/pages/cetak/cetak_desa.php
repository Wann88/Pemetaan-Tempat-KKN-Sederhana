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
            padding-left: 500px; /* Tambahan untuk memberikan padding */
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <h2 align="center">Laporan Data Tempat KKN</h2>
    <table border="1" align="center" widht="700px">
        <tr>
            <th>Lokasi</th>
            <th>Keterangan</th>
            <th>Kelompok</th>
            <th>Anggota</th>
            <th>Latitude</th>
            <th>longitude</th>
        </tr>
        <tr>
        <?php 
            $query = mysqli_query($koneksi,"SELECT * FROM tb_desa");
            while($pgn = mysqli_fetch_array($query)){
            ?>
            <tr class="align-middle">
                <td><?php echo $pgn['lokasi']; ?></td>
                <td><?php echo $pgn['keterangan']; ?> </td>
                <td><?php echo $pgn['kelompok']; ?> </td>
                <td><?php echo $pgn['anggota']; ?></td>
                <td><?php echo $pgn['lat']; ?>  </td>
                <td><?php echo $pgn['lng']; ?>  </td>
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