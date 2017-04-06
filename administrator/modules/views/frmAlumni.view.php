<h1><?php echo $data['title'] ?></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-book"></span> Alumni</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-pencil"></span> <?php echo $data['title']; ?></a>
  </li>
</ol>
<div class="col-xs-12">
	<a href="<?php echo PATH; ?>?page=alumni" class="btn btn-danger" style="margin-bottom: 15px"><span class="fa fa-arrow-left"></span> Kembali</a>
</div>
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
	<meta http-enquiv="refresh" content="1;url=<?php echo PATH; ?>?page=siswa">
 <?php } ?>
</div>
<div class="col-xs-7">
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Nis Siswa</label>
			<input type="number" name="nis" class="form-control" <?php if (isset($data['siswa'])) echo "value='" . $data['siswa']->nis . "'"; ?>>
		</div>
		<div class="form-group">
			<label>Nama Siswa</label>
			<input type="text" name="nama" class="form-control" <?php if (isset($data['siswa'])) echo "value='" . $data['siswa']->nama_lengkap . "'"; ?>>
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin" id="inputJenis_kelamin" class="form-control" required="required">
				<option selected="" disabled="">- Pilih Jenis Kelamin -</option>
				<option value="Laki-laki" <?php if(isset($data['siswa'])) {
				if($data['siswa']->jenis_kelamin == 'Laki-laki') echo "selected"; }?>>Laki-laki</option>
				<option value="Perempuan" <?php if(isset($data['siswa'])) {
				if($data['siswa']->jenis_kelamin == 'Perempuan') echo "selected"; }?>>Perempuan</option>
			</select>
		</div>
		<div class="form-group">
			<label>Jurusan Siswa</label>
			<select name="jurusan" class="form-control" required="required">
				<option value="" disabled="" selected="">- Pilih Jurusan -</option>
				<?php foreach ($data['jurusan'] as $jurusan) { ?>
					<option <?php if(isset($data['siswa'])) { 
						if ($data['siswa']->id_jurusan == $jurusan->id_jurusan)
							echo "selected";
					} ?> value="<?php echo $jurusan->id_jurusan; ?>"><?php echo $jurusan->nama_jurusan; ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Alamat Siswa</label>
			<textarea name="alamat" class="form-control" rows="4">
				<?php if(isset($data['siswa'])) echo $data['siswa']->alamat; ?>
			</textarea>
		</div>
		<div class="form-group">
			<label>Nomor Hp Siswa</label>
			<input type="text" name="nomor_hp" class="form-control" <?php if (isset($data['siswa'])) echo "value='" . $data['siswa']->nomor_hp . "'"; ?>>
		</div>
		<div class="form-group">
			<label>Angkatan</label>
			<select name="angkatan" class="form-control" required="">
				<option disabled="" selected="">-Angkatan Tahun-</option>
				<?php 
				$tahun = date('Y');
				for ($i=2005; $i <=$tahun ; $i++) {  ?>
					<option value="<?php echo $i; ?>" <?php if(isset($data['siswa'])) {
						if($data['siswa']->angkatan == $i) echo 'selected';
					} ?>><?php  
					echo $i; ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Upload Foto</label>
					<input type="file" name="images" id="" class="form-control" <?php if(isset($data['siswa'])) echo "value='" . $data['siswa']->images . "'" ;?>>
				</div>
			</div>
			<?php if(isset($data['siswa'])) {?>
			<div class="col-md-6">
				<img src="public/images/alumni/<?php echo $data['siswa']->images; ?>" width="100px" alt="<?php echo $data['siswa']->images; ?>"
				>
			</div>
			<?php } ?>
		</div>	
		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control" required="required">
				<option disabled="" selected="">- Pilih Status -</option>
				<option value="Siswa" <?php if(isset($data['siswa'])) {
				if($data['siswa']->status == 'Siswa') echo "selected"; }?>>Siswa</option>
				<option value="Alumni" <?php if(isset($data['siswa'])) {
				if($data['siswa']->status == 'Alumni') echo "selected"; }?>>Alumni</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>