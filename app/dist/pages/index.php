<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->


<?php 
session_start();
if(!$_SESSION['nama']){
    header('Location:../../../login.php?session=expired');
}
include('header.php'); ?>
<?php include('../../../conf/config.php'); ?>



<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->

        <!--navbar-->
        <?php include('navbar.php'); ?>
        <!--end navbar-->

        <!--side bar-->
        <?php include('sidebar.php'); ?>
        <!--end side bar-->

        <!--begin::App Main-->
        <?php include('content_header.php'); ?>
        <!--end::App Content Header--> 
        
        <!--dashboard-->
        <?php 
        if (isset($_GET['page'])){
            if($_GET['page']=='dashboard'){
                    include('dashboard.php'); 
            }
            else if($_GET['page']=='kantor1'){
                include('data.php'); 
            }
            else if($_GET['page']=='kantor'){
                include('data_kepala.php'); 
                
            }
            else if($_GET['page']=='edit-data'){
                include('edit/edit_data.php'); 
                
            }
            else if($_GET['page']=='desa'){
                include('data_desa.php'); 
                
            }
            else if($_GET['page']=='edit-desa'){
                include('edit/edit_desa.php'); 
                
            }
            else if($_GET['page']=='data-desa'){
                include('desa_kepala.php'); 
                
            }
            else if($_GET['page']=='map-kepala'){
                include('map_kepala.php'); 
                
            }
            else if($_GET['page']=='cetak'){
                include('ceta/cetak_data.php'); 
                
            }
            else if($_GET['page']=='cetak1'){
                include('ceta/cetak_desa.php'); 
                
            }
            else{
                include('not_found.php');
            }
        }else{
            include('dashboard.php');
        }
        ?>
        
        <!--end dashboard-->


        <!-- Footer -->
        <?php include('footer.php'); ?>
        <!-- end footer -->
    </div>
</body><!--end::Body-->

</html>