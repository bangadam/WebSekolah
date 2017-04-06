<h1><?php echo $data['title']; ?></small></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-user"></span> Detail Guru</a>
  </li>
</ol>
<div class="col-xs-12">
	<a href="<?php echo PATH; ?>?page=guru" class="btn btn-danger" style="margin-bottom: 15px"><span class="fa fa-arrow-left"></span> Kembali</a>
</div>

<div class="col-md-12 col-xs-12 col-lg-12">
	<div class="x_panel">
		<div class="x_title">
			<h2><i class="fa fa-cap-graduation"></i> Detail Guru</h2>
		      <ul class="nav navbar-right panel_toolbox">
		         <li><a class="close-link"><i class="fa fa-close"></i></a>
		         </li>
		       </ul>
		      <div class="clearfix"></div>
		</div>
		<div class="x_content">
			<div class="col-lg-3 col-xs-6">
				<?php if($data['guru']->images) {?>
					<img src="public/images/guru/<?php echo $data['guru']->images; ?>" width="100%">
				<?php } else {?>
					<img src="public/images/no_user.jpg" width="100%">
				<?php } ?>
			</div>
			<div class="col-md-9 col-xs-6">
				<table class="table"  style="font-weight: bold;">
					<tbody>
						<tr>
							<th>NIP</th>
							<th>:</th>
							<th><?php echo $data['guru']->nip; ?></th>
						</tr>
						<tr>
							<th>Nama Guru</th>
							<th>:</th>
							<th><?php echo $data['guru']->nama_lengkap; ?></th>
						</tr>
						<tr>
							<th>Status</th>
							<th>:</th>
							<th><span class="badge" style="background-color: #26B99A"><?php echo $data['guru']->status; ?></span></th>
						</tr>
						<tr>
							<th>Mata Pelajaran</th>
							<th>:</th>
							<th><?php echo $data['guru']->mata_pelajaran; ?></th>
						</tr>
						<tr>
							<th>Jenis Kelamin</th>
							<th>:</th>
							<th><?php echo $data['guru']->jenis_kelamin; ?></th>
						</tr>
						<tr>
							<th>Golongan</th>
							<th>:</th>
							<th><?php echo $data['guru']->golongan; ?></th>
						</tr>
						<tr>
							<th>Alamat</th>
							<th>:</th>
							<th><?php echo $data['guru']->alamat; ?></th>
						</tr>
						<tr>
							<th>tempat Lahir</th>
							<th>:</th>
							<th><?php echo $data['guru']->tempat_lahir; ?></th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>