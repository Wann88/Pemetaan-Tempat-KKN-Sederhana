<?php
$db->join('m_kecamatan b','a.id_kecamatan=b.id_kecamatan','LEFT');
$getdata=$db->ObjectBuilder()->get('t_hotspot a');
foreach ($getdata as $row) {
    ?>
    L.marker([<?=$row->lat?>,<?=$row->lng?>],{icon: myIcon}).addTo(map)
            .bindPopup("Lokasi : <?=$row->lokasi?>,Kec. <?=$row->nm_kecamatan?><br>Keterangan : <?=$row->keterangan?><br>Tanggal : <?=$row->tanggal?>");
    <?php
}
?>