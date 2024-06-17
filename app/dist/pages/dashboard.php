
<!--begin::App Content-->
<div class="app-content"> <!--begin::Container-->
<div id="map"></div>
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> 
                <script>
                    var map = L.map('map').setView([-3.368816103275391, 115.57002349589494], 10);
                    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                //marker
                <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM tb_desa");
                while($pgn = mysqli_fetch_array($query)){
                ?>
                var marker = L.marker([<?php echo $pgn['lat']; ?>,  <?php echo $pgn['lng']; ?>],
                    {alt: '<?php echo $pgn['lokasi']; ?>'}).addTo(map) // "Kyiv" is the accessible name of this marker
                    .bindPopup('<tr><td>Lokasi : </td><td><?php echo $pgn['lokasi']; ?></td> <br></tr><tr><th>Keterangan : </th><td><?php echo $pgn['keterangan']; ?></td> </tr> <br><tr><th>Kelompok : </th><td><?php echo $pgn['kelompok']; ?></td> </tr> <br><tr><th>Anggota : </th><td><?php echo $pgn['anggota']; ?></td> </tr> ');
                
                <?php }?>
                //end marker
                
                //memasukkan geojson
                function popUp(f,l){
                    var out = [];
                    if (f.properties){
                        for(key in f.properties){
                            out.push(key+": "+f.properties[key]);
                        }
                        l.bindPopup(out.join("<br />"));
                    }
                }
                var jsonTest = new L.GeoJSON.AJAX(["../geojson/TanahBumbu.geojson"],{onEachFeature:popUp}).addTo(map);
                //akhir memasukkan geojson

            
                </script>