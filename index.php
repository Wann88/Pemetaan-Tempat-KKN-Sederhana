<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemetaan Tempat KKN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>
         <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
        <script src="app/dist/leaflet/leaflet.ajax.js"></script>
        <?php include('conf/config.php'); ?>

        <style>
            #map { height: 750px; }
        </style>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      IMPLEMENTASI SISTEM INFORMASI GEOGRAFIS (SIG) PADA PENYEBARAN LOKASI KULIAH KERJA NYATA (KKN) DI KABUPATEN TANAH BUMBU
    </a>
  </div>
</nav>
<div id="map"></div>

<div class="container-fluid">
        <script>

        const desa1 = L.layerGroup();
                    <?php 
                        $query = mysqli_query($koneksi,"SELECT * FROM tb_desa WHERE id_desa='1'");
                        while($pgn = mysqli_fetch_array($query)){
                        ?>
                            var mLittleton = L.marker([<?php echo $pgn['lat']; ?>,  <?php echo $pgn['lng']; ?>]).bindPopup('<tr><td>Lokasi : </td><td><?php echo $pgn['lokasi']; ?></td> <br></tr><tr><th>Keterangan : </th><td><?php echo $pgn['keterangan']; ?></td> </tr> <br><tr><th>Kelompok : </th><td><?php echo $pgn['kelompok']; ?></td> </tr> <br><tr><th>Anggota : </th><td><?php echo $pgn['anggota']; ?></td> </tr>').addTo(desa1);
                    <?php }?>
        const desa2 = L.layerGroup();
                    <?php 
                        $query = mysqli_query($koneksi,"SELECT * FROM tb_desa WHERE id_desa='2'");
                        while($pgn = mysqli_fetch_array($query)){
                        ?>
                            var mLittleton = L.marker([<?php echo $pgn['lat']; ?>,  <?php echo $pgn['lng']; ?>]).bindPopup('<tr><td>Lokasi : </td><td><?php echo $pgn['lokasi']; ?></td> <br></tr><tr><th>Keterangan : </th><td><?php echo $pgn['keterangan']; ?></td> </tr> <br><tr><th>Kelompok : </th><td><?php echo $pgn['kelompok']; ?></td> </tr> <br><tr><th>Anggota : </th><td><?php echo $pgn['anggota']; ?></td> </tr>').addTo(desa2);
                    <?php }?>
        const desa3 = L.layerGroup();
                    <?php 
                        $query = mysqli_query($koneksi,"SELECT * FROM tb_desa WHERE id_desa='3'");
                        while($pgn = mysqli_fetch_array($query)){
                        ?>
                            var mLittleton = L.marker([<?php echo $pgn['lat']; ?>,  <?php echo $pgn['lng']; ?>]).bindPopup('<tr><td>Lokasi : </td><td><?php echo $pgn['lokasi']; ?></td> <br></tr><tr><th>Keterangan : </th><td><?php echo $pgn['keterangan']; ?></td> </tr> <br><tr><th>Kelompok : </th><td><?php echo $pgn['kelompok']; ?></td> </tr> <br><tr><th>Anggota : </th><td><?php echo $pgn['anggota']; ?></td> </tr>').addTo(desa3);
                    <?php }?>
        const desa4 = L.layerGroup();
                    <?php 
                        $query = mysqli_query($koneksi,"SELECT * FROM tb_desa WHERE id_desa='4'");
                        while($pgn = mysqli_fetch_array($query)){
                        ?>
                            var mLittleton = L.marker([<?php echo $pgn['lat']; ?>,  <?php echo $pgn['lng']; ?>]).bindPopup('<tr><td>Lokasi : </td><td><?php echo $pgn['lokasi']; ?></td> <br></tr><tr><th>Keterangan : </th><td><?php echo $pgn['keterangan']; ?></td> </tr> <br><tr><th>Kelompok : </th><td><?php echo $pgn['kelompok']; ?></td> </tr> <br><tr><th>Anggota : </th><td><?php echo $pgn['anggota']; ?></td> </tr>').addTo(desa4);
                    <?php }?>
        const desa5 = L.layerGroup();
                    <?php 
                        $query = mysqli_query($koneksi,"SELECT * FROM tb_desa WHERE id_desa='5'");
                        while($pgn = mysqli_fetch_array($query)){
                        ?>
                            var mLittleton = L.marker([<?php echo $pgn['lat']; ?>,  <?php echo $pgn['lng']; ?>]).bindPopup('<tr><td>Lokasi : </td><td><?php echo $pgn['lokasi']; ?></td> <br></tr><tr><th>Keterangan : </th><td><?php echo $pgn['keterangan']; ?></td> </tr> <br><tr><th>Kelompok : </th><td><?php echo $pgn['kelompok']; ?></td> </tr> <br><tr><th>Anggota : </th><td><?php echo $pgn['anggota']; ?></td> </tr>').addTo(desa5);
                    <?php }?>

        const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });

        const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
        });
        const kabupaten = L.layerGroup();
        function popUp(f,l){
                            const out = [];
                            if (f.properties){
                                for(key in f.properties){
                                    out.push(key+": "+f.properties[key]);
                                }
                                l.bindPopup(out.join("<br />"));
                            }
                        }
                        const jsonTest = new L.GeoJSON.AJAX(["app/dist/geojson/TanahBumbu.geojson"],{onEachFeature:popUp}).addTo(kabupaten);

        const map = L.map('map', {
            center: [-3.368816103275391, 115.57002349589494],
            zoom: 10,
            layers: [osm, desa1,desa2,desa3,desa4,desa5]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
            'OpenStreetMap.HOT': osmHOT
        };

        const overlays = {
            'Karang Bintang': desa1,
            'Sari Gadung': desa2,
            'Batu Licin': desa3,
            'Pagatan': desa4,
            'Angsana': desa5,
            'kabupaten':kabupaten
        };





        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    </script>
    </div>

</body>
</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>