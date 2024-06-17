     <!--begin::Sidebar-->
     <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.php" class="brand-link"> <!--begin::Brand Image--> <img src="../../dist/assets/img/kucing.jpg" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">WEBGIS</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                
            <?php 
            if($_SESSION['role']=='Administrator'){
                include('../../menu/administrator.php') ;
            }else{
                include('../../menu/kepala.php') ;
            }
            ?>
            
            
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar-->