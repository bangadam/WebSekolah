<?php 
    $page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : "";
 ?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>Dahsboard SMPN 1 KUTOREJO</title>
 
<!-- Bootstrap core CSS -->
 
<link href="resources/css/bootstrap.min.css" rel="stylesheet">
 
<link href="resources/fonts/css/font-awesome.min.css" rel="stylesheet">
<link href="resources/css/animate.min.css" rel="stylesheet">
<link rel="stylesheet" href="resources/css/dataTables.bootstrap.min.css">
<!-- Sweet Alert -->
<link rel="stylesheet" type="text/css" href="resources/css/sweetalert.css">
<!-- Custom Theme Style -->
<link href="resources/css/custom.min.css" rel="stylesheet">

</head>
<body>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard <small>Control</small></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="resources/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['login']->nama_lengkap; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li <?php if($page == "" || $page == "home") echo 'class="active"'; ?>><a href="<?php echo PATH; ?>"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="../"><i class="fa fa-send"></i> Lihat Website</a></li>
                  <li <?php if($page == "bukutamu") echo 'class="active"'; ?>><a href="<?php echo PATH; ?>?page=bukutamu"><i class="fa fa-book"></i> Buku Tamu</a></li>
                  <li <?php if($page == "kategori") echo 'class="active"'; ?>><a href="<?php echo PATH; ?>?page=kategori"><i class="fa fa-fw fa-th-large"></i> Kategori Artikel </a></li>
                  <li <?php if($page == "artikel") echo 'class="active"'; ?>><a href="<?php echo PATH; ?>?page=artikel"><i class="fa fa-fw fa-newspaper-o"></i> Artikel</a></li>
                  <li <?php if($page == "jurusan") echo 'class="active"'; ?>><a href="<?php echo PATH; ?>?page=jurusan"><i class="fa fa-fw fa-graduation-cap"></i>Jurusan</a></li>
                  <li <?php if($page == "siswa") echo 'class="active"'; ?>><a href="<?php echo PATH; ?>?page=siswa"><i class="fa fa-fw fa-users"></i>Data Siswa</a></li>
                  <li <?php if($page == "alumni") echo 'class="active"'; ?>><a href="<?php echo PATH; ?>?page=alumni"><i class="fa fa-fw fa-users"></i> Data Alumni</a></li>
                  <li <?php if($page == "guru") echo 'class="active"'; ?>><a href="<?php echo PATH; ?>?page=guru"><i class="fa fa-fw fa-users"></i> Data Guru</a></li>
                  <li <?php if($page == "tentang") echo 'class="active"'; ?>><a href="<?php echo PATH; ?>?page=tentang"><i class="fa fa-fw fa-building"></i> Tentang Sekolah</a></li>
                  <li <?php if($page == "kontak") echo 'class="active"'; ?>><a href="<?php echo PATH; ?>?page=kontak"><i class="fa fa-fw fa-phone-square"></i> Kontak</a></li>
                  <li <?php if($page == "user") echo 'class="active"'; ?>><a href="<?php echo PATH; ?>?page=user"><i class="fa fa-fw fa-users"></i> Manajemen User</a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="resources/images/img.jpg" alt=""><?php echo $data['login']->nama_lengkap; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo SITE_URL; ?>?page=user&&action=detail&&id=<?php echo $data['login']->id_user; ?>"> Profile</a></li>
                    <li>
                      <a href="<?php echo SITE_URL; ?>?page=user&&action=update&&id=<?php echo $data['login']->id_user; ?>">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="<?php echo PATH; ?>index.php?page=login&&action=logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <div class="right_col" role="main">
        <?php 
            $view = new View($viewName);
            $view->bind('data', $data);
            $view->forceRender();
         ?>
         </div>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <!-- jquery -->
    <script src="resources/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="resources/js/bootstrap.min.js"></script>
    <!-- Data Table -->
    <script src="resources/js/dataTables.bootstrap.min.js"></script>
    <script src="resources/js/jquery.dataTables.min.js"></script>
    <!-- TinyMce -->
    <script src="resources/tinymce/tinymce.min.js"></script>
    <!-- Sweet alert Js -->
    <script type="text/javascript" src="resources/js/sweetalert.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="resources/js/custom.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#TableId").DataTable({
          "language": {
              "emptyTable": "Tidak Ada Data"
          }
        });
        tinymce.init({
          selector: "#editor"
        });
      });
    </script>
    <script type="text/javascript">
    
          $('#hapus').on('click', function(e) {
            e.preventDefault(); // Prevent the href from redirecting directly
            var linkURL = $(this).attr("href");
            warnBeforeRedirect(linkURL);
          });
        

        function warnBeforeRedirect(linkURL) {
          swal({
            title: "Apakah anda yakin menghapusnya?",  
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            confirmButtonColor: "#DD6B55",

          },
             function() {
              // Redirect the user
              window.location.href = linkURL;
            }
        );
  }
    </script>
</body>
</html>
