<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_pengguna WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-field">
        <div class="card card-warning card-outline mb-4"> <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">UBAH DATA</div>
            </div> <!--end::Header--> <!--begin::Form-->
            <form method='get' action="update/update_data.php"> <!--begin::Body-->
                <div class="card-body">
                        <div class="row mb-3"> <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $view['nama'];?>"> </div>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="id" placeholder="Nama" value="<?php echo $view['id'];?>" hidden> </div> 
                        </div>
                        <div class="row mb-3"> <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $view['username'];?>"> </div>
                        </div>
                        <div class="row mb-3"> <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="password" placeholder="Password" value="<?php echo $view['password'];?>"> </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Jabatan</legend>
                            <div class="col-sm-10">
                            <div class="mb-3">
                                    <select name="role" class="form-select" aria-label="Default select example">
                                        <option selected value="<?php echo $view['role'];?>"><?php echo $view['role'];?></option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Kepala">Kepala</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer"> <button type="submit" class="btn btn-warning">Ubah</button> <button type="submit" class="btn float-end">Batal</button> </div> <!--end::Footer-->
                                                    </form> <!--end::Form-->
        </div> <!--end::Horizontal Form-->
    </div>
</section>
                            