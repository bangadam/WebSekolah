<h1>Dashboard <small>Statistik Website</small></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
</ol>

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
   <div class="tile-stats">
     <div class="icon" style="padding-top:15px"><i class="fa fa-comments-o"></i></div>
     <div class="count"><?php echo $data['total']['bukutamu']; ?></div>
     <h3>Buku Tamu</h3>
     <p><a href="?page=bukutamu">View Details</a></p> 
   </div>
</div>

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
   <div class="tile-stats">
     <div class="icon" style="padding-top:15px"><i class="fa fa-tasks"></i></div>
     <div class="count"><?php echo $data['total']['artikel']; ?></div>
     <h3>Artikel</h3>
     <p><a href="?page=artikel">View Details</a></p> 
   </div>
</div>

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
   <div class="tile-stats">
     <div class="icon" style="padding-top:15px"><i class="fa fa-users"></i></div>
     <div class="count"><?php echo $data['total']['guru']; ?></div>
     <h3>Guru</h3>
     <p><a href="?page=guru">View Details</a></p> 
   </div>
</div>

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
   <div class="tile-stats">
     <div class="icon" style="padding-top:15px"><i class="fa fa-phone-square"></i></div>
     <div class="count"><?php echo $data['total']['kontak']; ?></div>
     <h3>Kontak</h3>
     <p><a href="?page=kontak">View Details</a></p> 
   </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
     <div class="x_title">
      <h2><i class="fa fa-bar-chart-o"></i> Info User</h2>
      <ul class="nav navbar-right panel_toolbox">
         <li><a class="close-link"><i class="fa fa-close"></i></a>
         </li>
       </ul>
      <div class="clearfix"></div>
     </div>
     <div class="x_content">
        <div class="col-md-6">
          <table class="table"  style="font-weight: bold;">
            <tbody>
              <tr>
                <th>Nama Lengkap</th>
                <th>:</th>
                <th><?php echo $data['userData']->nama_lengkap; ?></th>
              </tr>

              <tr>
                <th>Username</th>
                <th>:</th>
                <th><?php echo $data['userData']->username; ?></th>
              </tr>

              <tr>
                <th>Email</th>
                <th>:</th>
                <th><?php echo $data['userData']->email; ?></th>
              </tr>

              <tr>
                <th>No. Hp</th>
                <th>:</th>
                <th><?php echo $data['userData']->no_hp; ?></th>
              </tr>

              <tr>
                <th>Alamat</th>
                <th>:</th>
                <th><?php echo $data['userData']->alamat; ?></th>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-md-6">
          <table class="table" style="font-weight: bold;">
            <tbody>
              <tr>
                <th>Last Login</th>
                <th>:</th>
                <th><?php echo date('d-m-Y'); ?></th>
              </tr>

              <tr>
                <th>Ip Address</th>
                <th>:</th>
                <th><?php echo $_SERVER['REMOTE_ADDR']; ?></th>
              </tr>

              <tr>
                <th>Server</th>
                <th>:</th>
                <th><?php echo $_SERVER['SERVER_NAME']; ?></th>
              </tr>

              <tr>
                <th>Browser</th>
                <th>:</th>
                <th><?php echo $_SERVER['HTTP_USER_AGENT']; ?></th>
              </tr>
            </tbody>
          </table>
        </div>   
     </div>
  </div>
</div>
