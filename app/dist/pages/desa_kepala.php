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
                                    <h3 class="card-title">Data Desa</h3>
                                </div> <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Lokasi</th>
                                                <th>Keterangan</th>
                                                <th>Kelompok</th>
                                                <th>Anggota</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $query = mysqli_query($koneksi,"SELECT * FROM tb_desa");
                                            while($pgn = mysqli_fetch_array($query)){
                                            ?>
                                            <tr class="align-middle">
                                                <td><?php echo $pgn['id_desa']; ?></td>
                                                <td><?php echo $pgn['lokasi']; ?></td>
                                                <td><?php echo $pgn['keterangan']; ?> </td>
                                                <td><?php echo $pgn['kelompok']; ?> </td>
                                                <td><?php echo $pgn['anggota']; ?></td>
                                                <td><?php echo $pgn['lat']; ?>  </td>
                                                <td><?php echo $pgn['lng']; ?>  </td>
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
</body><!--end::Body-->

</html>