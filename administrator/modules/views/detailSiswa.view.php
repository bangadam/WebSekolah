<h1><?php echo $data['title']; ?></small></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-user"></span> Detail Siswa</a>
  </li>
</ol>
<div class="col-xs-12">
	<a href="<?php echo PATH; ?>?page=siswa" class="btn btn-danger" style="margin-bottom: 15px"><span class="fa fa-arrow-left"></span> Kembali</a>
</div>

<div class="col-md-12 col-xs-12 col-lg-12">
	<div class="x_panel">
		<div class="x_title">
			<h2><i class="fa fa-user"></i> Detail Siswa</h2>
		      <ul class="nav navbar-right panel_toolbox">
		         <li><a class="close-link"><i class="fa fa-close"></i></a>
		         </li>
		       </ul>
		      <div class="clearfix"></div>
		</div>
		<div class="x_content">
			<div class="col-lg-3 col-xs-6">
				<?php if($data['siswa']->images) {?>
					<img src="public/images/siswa/<?php echo $data['siswa']->images; ?>" width="100%">
				<?php } else {?>
					<img src="public/images/no_user.jpg" width="100%">
				<?php } ?>
			</div>
			<div class="col-md-9 col-xs-6">
				<table class="table"  style="font-weight: bold;">
					<tbody>
						<tr>
							<th>NIS</th>
							<th>:</th>
							<th><?php echo $data['siswa']->nis; ?></th>
						</tr>
						<tr>
							<th>Nama</th>
							<th>:</th>
							<th><?php echo $data['siswa']->nama_lengkap; ?></th>
						</tr>
						<tr>
							<th>Status</th>
							<th>:</th>
							<th><span class="badge" style="background-color: #26B99A"><?php echo $data['siswa']->status; ?></span></th>
						</tr>
						<tr>
							<th>Jenis Kelamin</th>
							<th>:</th>
							<th><?php echo $data['siswa']->jenis_kelamin; ?></th>
						</tr>
						<tr>
							<th>Jurusan Siswa</th>
							<th>:</th>
							<th><?php echo $data['siswa']->nama_jurusan; ?></th>
						</tr>
						<tr>
							<th>Alamat</th>
							<th>:</th>
							<th><?php echo $data['siswa']->alamat; ?></th>
						</tr>
						<tr>
							<th>Angkatan</th>
							<th>:</th>
							<th><?php echo $data['siswa']->angkatan; ?></th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>