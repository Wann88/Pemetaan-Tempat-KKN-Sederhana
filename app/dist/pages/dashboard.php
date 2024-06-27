
<!--begin::App Content-->
<div class="app-content"> <!--begin::Container-->
<div id="map"></div>
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> 
        <script>

const desa1 = L.layerGroup();
            <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM tb_desa ");
                while($pgn = mysqli_fetch_array($query)){
                ?>
                    var mLittleton = L.marker([<?php echo $pgn['lat']; ?>,  <?php echo $pgn['lng']; ?>]).bindPopup('<tr><td>Lokasi : </td><td><?php echo $pgn['lokasi']; ?></td> <br></tr><tr><th>Keterangan : </th><td><?php echo $pgn['keterangan']; ?></td> </tr> <br><tr><th>Kelompok : </th><td><?php echo $pgn['kelompok']; ?></td> </tr> <br><tr><th>Anggota : </th><td><?php echo $pgn['anggota']; ?></td> </tr>').addTo(desa1);
            <?php }?>

const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
});

const googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
});
const googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
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
                const jsonTest = new L.GeoJSON.AJAX(["../geojson/TanahBumbu.geojson"],{onEachFeature:popUp}).addTo(kabupaten);

const map = L.map('map', {
	center: [-3.368816103275391, 115.57002349589494],
	zoom: 9,
	layers: [googleSat, desa1,kabupaten]
});

const baseLayers = {
    'Satelit': googleSat,
    'Hybrid': googleHybrid,
	'OpenStreetMap': osm
	
};

const overlays = {
	'Desa': desa1,
    'Kabupaten':kabupaten
};





const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

                </script>
                </script>