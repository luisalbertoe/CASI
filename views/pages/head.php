<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">X</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>

       
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <?php
          if($_SESSION["foto"] != ""){

            echo '<img src="'.$_SESSION["foto"].'" class="user-image">';

          }else{


            echo '<img src="views/img/usuarios/default/anonymous.png" class="user-image">';
          }

          ?>
            <span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?></span>
          </a>
          <!-- Dropdown-toggle -->
          <ul class="dropdown-menu">
            <li class="user-body">
              <div class="pull-right">
                <a href="logout" class="btn btn-default btn-flat">Salir</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    










  </nav>
  <!-- /.navbar -->