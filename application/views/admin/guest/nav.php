  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><img src="" alt=""></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="ADMINISTRACIÓN">
             <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#administracion" data-parent="#exampleAccordion">
             <i class="fa fa-check-square" style="color: limegreen  !important;"></i>
            <span class="nav-link-text">ADMINISTRACIÓN</span>
          </a>
          <ul class="sidenav-second-level collapse" id="administracion">
            
            <li>
              <a href="<?php echo base_url("admin/eventos"); ?>">Eventos</a>
            </li>
            <li>
              <a href="<?php echo base_url("admin/noticias"); ?>">Noticias</a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="CONFIGURACIÓN">
       <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#configuracion" data-parent="#exampleAccordion">
             <i class="fa fa-check-square" style="color: limegreen  !important;"></i>
            <span class="nav-link-text">CONFIGURACIÓN</span>
          </a>
          <ul class="sidenav-second-level collapse" id="configuracion">
            <li>
              <a href="<?php echo base_url("admin/parametros");?>">Parámetros</a>
            </li>
           
          </ul>
        </li>      
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="USUARIOS">
       <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#usuarios" data-parent="#exampleAccordion">
             <i class="fa fa-check-square" style="color: limegreen  !important;"></i>
            <span class="nav-link-text">USUARIOS</span>
          </a>
          <ul class="sidenav-second-level collapse" id="usuarios">
             <li>
              <a href="<?php echo base_url("admin/usuario"); ?>">Mantenimiento de usuarios</a>
            </li>
           
          </ul>
        </li> 
      </ul>

           


      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
       <?php foreach($persona as $persona) ?>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i><?php echo $persona->Nombre ." ".$persona->Paterno." ".$persona->Materno ?></a>
        </li>
      </ul>
    </div>
  </nav>
