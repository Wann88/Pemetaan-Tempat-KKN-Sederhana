<?php
$id_desa = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_desa WHERE id_desa='$id_desa'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-field">
        <div class="card card-warning card-outline mb-4"> <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">UBAH DATA</div>
            </div> <!--end::Header--> <!--begin::Form-->
            <form method='get' action="update/update_desa.php"> <!--begin::Body-->
                <div class="card-body">
                        <div class="row mb-3"> <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi</label>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="lokasi" placeholder="Nama" value="<?php echo $view['lokasi'];?>"> </div>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="id" placeholder="Nama" value="<?php echo $view['id_desa'];?>" hidden> </div> 
                        </div>
                        <div class="row mb-3"> <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="keterangan" placeholder="Username" value="<?php echo $view['keterangan'];?>"> </div>
                        </div>
                        <div class="row mb-3"> <label for="inputPassword3" class="col-sm-2 col-form-label">Latitude</label>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="lat" placeholder="latitude" value="<?php echo $view['lat'];?>"> </div>
                        </div>
                        <div class="row mb-3"> <label for="inputPassword3" class="col-sm-2 col-form-label">Longitude</label>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="lng" placeholder="longitude" value="<?php echo $view['lng'];?>"> </div>
                        </div>
                        <div class="row mb-3"> <label for="inputPassword3" class="col-sm-2 col-form-label">Kelompok</label>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="kelompok" placeholder="kelompok" value="<?php echo $view['kelompok'];?>"> </div>
                        </div>
                        <div class="row mb-3"> <label for="inputPassword3" class="col-sm-2 col-form-label">Anggota</label>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="anggota" placeholder="anggota" value="<?php echo $view['anggota'];?>"> </div>
                        </div>
                        
                </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer"> <button type="submit" class="btn btn-warning">Ubah</button> <button type="submit" class="btn float-end">Batal</button> </div> <!--end::Footer-->
                                                    </form> <!--end::Form-->
        </div> <!--end::Horizontal Form-->
    </div>
</section>
                            