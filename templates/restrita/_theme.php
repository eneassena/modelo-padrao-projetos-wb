<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= assets('adminlte/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->

  <link rel="stylesheet" href="<?= assets('adminlte/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= url('area-restrita') ?>" class="nav-link">Home</a>
        </li>
      </ul>

     
     <!--  <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <div class="media">
                <img src="<?= assets('adminLte/dist/img/user1-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">
              <div class="media">
                <img src="<?= assets('adminLte/dist/img/user8-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Enéas Sena
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Esta é a minha mensagem</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <div class="media">
                <img src="<?= assets('adminlte/dist/img/user3-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
      </ul> -->
    </nav>
    <!-- Sidebar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-link">
        <img src="<?= assets('adminlte/dist/img/AdminLTELogo.png') ?>" 
        alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Pastelaria</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= assets('adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin User</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="<?= url('area-restrita') ?>" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Minha Loja</p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= url('area-restrita') ?>" class="nav-link <?= true ? 'active' : '' ?>">
                    <i class="fa fa-user nav-icon"></i>
                    <p>Pedidos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= url('area-restrita/pastel') ?>" class="nav-link">
                    <i class="fa fa-user nav-icon"></i>
                    <p>Pastel</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= url('area-restrita/bebida') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bebida</p>
                  </a>
                </li>
                <?php if(isset($_SESSION['person_admin']['on'])):?>
                    <li class="nav-item">
                      <a href="<?= url('area-restrita/logout') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Logout</p>
                      </a>
                    </li>
                <?php endif; ?>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?= $this->section('content') ?>

    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Pastelariadogaucho.com</a>.</strong> Todos os
      direitos
      preservados.
    </footer>
  </div>
  <!-- ./wrapper -->

  <script src="<?= assets('adminlte/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- Bootstrap -->
  <script src="<?= assets('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- AdminLTE -->
  <script src="<?= assets('adminlte/dist/js/adminlte.min.js') ?>"></script>
  <!-- OPTIONAL SCRIPTS -->

  <script src="<?= assets('site/js/sweetalert2.all.min.js'); ?>" type="text/javascript"></script>
  <script src="<?= assets('site/js/jquery.mask.min.js'); ?>" type="text/javascript"></script>
  <script src="<?= assets('site/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
  <script src="<?= assets('site/js/jquery.numeric.min.js'); ?>" type="text/javascript"></script>
  <script src="<?= assets('site/js/main.min.js'); ?>" type="text/javascript"></script>
  <script src="<?= assets('adminlte/dist/js/pages/dashboard3.js') ?>"></script>
  <?= $this->section('script') ?>
</body>

</html>