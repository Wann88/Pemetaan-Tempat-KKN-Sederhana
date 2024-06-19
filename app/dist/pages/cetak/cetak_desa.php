<?php include('../../../../conf/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laporan Data Tempat KKN</title>

    <style>
        .td{
            width: 15%;
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
    <script>
       window.print();
    </script>
</body>
</html>