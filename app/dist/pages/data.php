<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->


<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    
        
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-md-20">
                            <div class="card mb-10">
                                <div class="card-header">
                                    <h3 class="card-title">Kantor</h3>
                                </div> <!-- /.card-header -->
                                <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                                    Tambah data
                                    </button>
                                    <br></br>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Jabatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $query = mysqli_query($koneksi,"SELECT * FROM tb_pengguna");
                                            while($pgn = mysqli_fetch_array($query)){
                                            ?>
                                            <tr class="align-middle">
                                                <td><?php echo $pgn['id']; ?></td>
                                                <td><?php echo $pgn['nama']; ?></td>
                                                <td><?php echo $pgn['username']; ?> </td>
                                                <td><?php echo $pgn['role']; ?>  </td>
                                                <td> 
                                                    <a onclick="hapus_data(<?php echo $pgn['id']; ?>)" class="btn btn-sm btn-danger">Hapus</a> 
                                                    <a href="index.php?page=edit-data&& id=<?php echo $pgn['id']; ?>" class="btn btn-sm btn-success">Edit</a> 
                                                
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div> <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-end">
                                        <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                                    </ul>
                                </div>
                            </div> <!-- /.card -->

                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->


        </main> <!--end::App Main--> <!--begin::Footer-->
        <!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form method="get" Action="add/tambah_data.php">
        <div class="modal-body">
      
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="text" class="form-control" id="exampleInputPassword1">
            </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                    <select name="role" class="form-select" aria-label="Default select example">
                        <option selected>....</option>
                        <option value="Administrator">Administrator</option>
                        <option value="Kepala">Kepala</option>

                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </div>
    </form> 
        </div>
    
  </div>
</div>

        
</body><!--end::Body-->

</html>

<script>
    function hapus_data(data_id){
        alert('Berhasil dihapus');
        window.location=("delete/hapus_data.php?id="+data_id);
        
            
    }
</script>