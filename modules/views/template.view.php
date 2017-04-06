<?php 
    $page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>SMKN 1 DLANGGU</title>

    <!-- CSS -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet" />
    <link href="resources/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="resources/css/style.css" rel="stylesheet" />


    <!-- Javascript for animation -->

    <script type="text/javascript" src="resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="resources/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="resources/js/expand.js"></script>
    <script type="text/javascript" src="resources/js/common.js"></script>
</head>

<body>

<!-- MAIN WEBSITE BEGIN -->
<div id="main">

    <!-- HEADER WEBSITE BEGIN -->
    <div id="header">
        <!-- LOGO WEBSITE -->
        <div id="logo">
            <h1>SMKN 1 DLANGGU</h1>
            <h2>We Have Better Skills for Indonesia</h2>
        </div>

        <!-- SOCIAL MEDIA -->
        <div class="social">
            <ul>
                <li><a href="http://facebook.com/bangadam123"><img src="resources/images/Facebook.png" alt="facebook"></a></li>
                <li><a href="http://github.com/bangadam"><img src="resources/images/github.png" alt="github"></a></li>
            </ul>
        </div>

        <div class="clear"></div>
    </div>
    <!-- END OF HEADER WEBSITE -->

    <!-- TOP MENU WEBSITE BEGIN -->
    <div id="top-menu-website">
        <div class="left-side" style="margin-top: 48px;"></div>
        <div class="middle-side">
            <ul>
                <li><a href="<?php echo SITE_URL; ?>?page=home" <?php if($page == "" || $page == "home") echo 'class="current"'; ?>>Home</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=bukutamu" <?php if($page == "bukutamu") echo 'class="current"'; ?>>Bukutamu</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=artikel" <?php if($page == "artikel") echo 'class="current"';?>>Artikel</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=siswa" <?php if($page == "siswa") echo 'class="current"'; ?>>Data Siswa</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=guru" <?php if($page == "guru") echo 'class="current"'; ?>>Data Guru</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=alumni" <?php if($page == "alumni") echo 'class="current"'; ?>>Data Alumni</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=tentang" <?php if($page == "tentang") echo 'class="current"'; ?>>Tentang Sekolah</a></li>
                <li><a href="<?php echo SITE_URL; ?>?page=kontak" <?php if($page == "kontak") echo 'class="current"'; ?>>Kontak</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="right-side"></div>
        <div class="clear"></div>
    </div>
    <!-- END OF TOP MENU WEBSITE -->
    
    <?php 
        if($page == "" || $page == "home") {
     ?>

    <!-- SLIDER WEBSITE BEGIN -->
    <div id="slider-website">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="resources/images/banner_1.jpg" alt="Sekolahku rumahku">
                </div>

                <div class="item">
                    <img src="resources/images/banner_2.jpg" alt="Sekolahku rumahku">
                </div>

                <div class="item">
                    <img src="resources/images/banner_3.jpg" alt="Sekolahku rumahku">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <?php } ?>
    <!-- END OF SLIDER WEBSITE -->
    
    <!-- CONTENT WEBSITE BEGIN -->
    <div id="content">

        <!-- LEFT CONTENT WEBSITE BEGIN -->
        <div id="left-content">
            
            <?php 
                $view = new View($viewName);
                $view->bind('data', $data);
                $view->forceRender()
             ?>

                   </div>
        <!-- END OF LEFT CONTENT WEBSITE -->

        <!-- RIGHT CONTENT WEBSITE BEGIN -->
        <div id="right-content">

            <!-- ARTIKEL TERBARU -->
            <div class="right-panel">
                <div class="top-right-panel">Artikel Terbaru</div>
                <div class="bottom-right-panel">
                    <ul>
                        <?php 
                            foreach($data['main_artikel'] as $artikel) {
                         ?>
                            <li><a href="<?php echo SITE_URL; ?>?page=artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>"><?php echo $artikel->judul; ?></a></li>
                         <?php 
                            }
                          ?>
                    </ul>
                </div>
            </div>

            <!-- KATEGORI ARTIKEL -->
            <div class="right-panel">
                <div class="top-right-panel">Kategori Artikel</div>
                <div class="bottom-right-panel">
                    <ul>
                        <?php 
                            foreach ($data['main_kategori'] as $kategori) {
                         ?>
                             <li>
                                <a href="<?php echo SITE_URL; ?>?page=kategori&&action=detail&&id=<?php echo $kategori->id_kategori; ?>">
                                    <?php echo $kategori->nama_kategori; ?>
                                    (<?php echo $kategori->total; ?>)
                                </a>
                            </li>   
                         <?php } ?>
                    </ul>
                </div>
            </div>

            <!-- INFO USER -->
            <div class="right-panel">
                <div class="top-right-panel">Info User</div>
                <div class="bottom-right-panel">

                    <table class="table" style="margin-bottom: 0;">
                        <tbody>
                        <tr>
                            <td style="border-top:0;">IP User</td>
                            <td style="border-top:0;">:</td>
                            <td style="border-top:0;">
                                <b>
                                    <?php echo $_SERVER['REMOTE_ADDR']; ?>
                                </b>

                            </td>
                        </tr>
                        <tr>
                            <td>Waktu</td>
                            <td>:</td>
                            <td>
                                <b>
                                    <?php 
                                        date_default_timezone_set("Asia/Jakarta");
                                        echo date('h : i : s');
                                    ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>
                                <b>
                                    <?php echo date("d F Y"); ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td>Browser</td>
                            <td>:</td>
                            <td>
                                <b>
                                    <?php 
                                        echo $_SERVER['HTTP_USER_AGENT'];
                                     ?>
                                </b>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- END OF RIGHT CONTENT WEBSITE -->

        <div class="clear"></div>

    </div>
    <!-- END OF CONTENT WEBSITE -->

    <!-- FOOTER WEBSITE BEGIN -->
    <div id="footer">
        <div class="content-footer">
            <div class="left-footer"></div>
            <div class="middle-footer">
                &copy; Copyright by SMP NEGERI 1 KUTOREJO. All right reserved. Developed by <a href="http://facebook.com/bangadam123" target="_blank">Bang Adam</a>.
            </div>
            <div class="right-footer"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- END OF MAIN WEBSITE -->


</body>
</html>