<h1><?php echo $data['title']; ?></small></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-book"></span> Tentang</a>
  </li>
</ol>
<div class="col-xs-12">
	<?php 
	if (isset($data['error']) && count($data['error']) > 0) {
 ?>
	<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<ul class="list-square">
			<?php foreach ($data['error'] as $error) { ?>
				<li><?php echo $error; ?></li>
			<?php } ?>
		</ul>
	</div>
 <?php } elseif (isset($data['success'])) { ?>
	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo $data['success']; ?>
	</div>
	<meta http-enquiv="refresh" content="1;url=<?php echo PATH; ?>?page=guru">
 <?php } ?>
</div>
<div class="col-lg-12">
	<div class="x_panel">
		<div class="x_title">
			<h3><i class="fa fa-file"></i> Tentang Sekolah</h3>
			<ul class="nav navbar-right panel_toolbox">
				<li>
					<a href="#!" class="close_link"><i class="fa fa-close"></i></a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<form method="post">
				<textarea id="editor" name="tentang"><?php echo $data['tentang']->isi; ?></textarea>
				<br>	
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
			<br>
			<h4>Hasil Data :</h4>
			<p style="border: 2px solid #f3f3f3"><?php echo $data['tentang']->isi; ?></p>
		</div>
	</div>
</div>
