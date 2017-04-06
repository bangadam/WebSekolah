<h1><?php echo $data['title'] ?></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-book"></span> Guru</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-pencil"></span> <?php echo $data['title']; ?></a>
  </li>
</ol>
<div class="col-xs-12">
	<a href="<?php echo PATH; ?>?page=guru" class="btn btn-danger" style="margin-bottom: 15px"><span class="fa fa-arrow-left"></span> Kembali</a>
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
	<meta http-enquiv="refresh" content="1;url=<?php echo PATH; ?>?page=guru">
 <?php } ?>
</div>
<div class="col-xs-7">
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Nip Guru</label>
			<input type="number" name="nip" class="form-control" <?php if (isset($data['guru'])) echo "value='" . $data['guru']->nip . "'"; ?>>
		</div>
		<div class="form-group">
			<label>Nama Guru</label>
			<input type="text" name="nama" class="form-control" <?php if (isset($data['guru'])) echo "value='" . $data['guru']->nama_lengkap . "'"; ?>>
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin" id="inputJenis_kelamin" class="form-control" required="required">
				<option selected="" disabled="">- Pilih Jenis Kelamin -</option>
				<option value="Laki-laki" <?php if(isset($data['guru'])) {
				if($data['guru']->jenis_kelamin == 'Laki-laki') echo "selected"; }?>>Laki-laki</option>
				<option value="Perempuan" <?php if(isset($data['guru'])) {
				if($data['guru']->jenis_kelamin == 'Perempuan') echo "selected"; }?>>Perempuan</option>
			</select>
		</div>	
		<div class="form-group">
			<label>Mata Pelajaran</label>
			<input type="text" name="mata_pelajaran" class="form-control" <?php if(isset($data['guru'])) echo "value='" . $data['guru']->mata_pelajaran . "'"; ?>>
		</div>
		<div class="form-group">
			<label>Golongan</label>
			<input type="text" name="golongan" class="form-control" <?php if(isset($data['guru'])) echo "value='" . $data['guru']->golongan . "'"; ?>>
		</div>
		<div class="form-group">
			<label>Alamat Guru</label>
			<textarea name="alamat" class="form-control" rows="4">
				<?php if(isset($data['guru'])) echo $data['guru']->alamat; ?>
			</textarea>
		</div>
		<div class="form-group">
			<label>Nomor Hp Guru</label>
			<input type="text" name="nomor_hp" class="form-control" <?php if (isset($data['guru'])) echo "value='" . $data['guru']->no_hp . "'"; ?>>
		</div>
		<div class="form-group">
			<label>Tempat Lahir</label>
			<input type="text" name="tempat_lahir" class="form-control" <?php if (isset($data['guru'])) echo "value='" .$data['guru']->tempat_lahir . "'"; ?>>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Upload Foto</label>
					<input type="file" name="images" id="" class="form-control" <?php if(isset($data['guru'])) echo "value='" . $data['guru']->images . "'" ;?>>
				</div>
			</div>
			<?php if(isset($data['guru'])) {?>
			<div class="col-md-6">
				<img src="public/images/guru/<?php echo $data['guru']->images; ?>" width="100px" alt="<?php echo $data['guru']->images; ?>"
				>
			</div>
			<?php } ?>
		</div>	
		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control" required="required">
				<option disabled="" selected="">- Pilih Status -</option>
				<option value="PNS" <?php if(isset($data['guru'])) {
				if($data['guru']->status == 'PNS') echo "selected"; }?>>PNS</option>
				<option value="NON PNS" <?php if(isset($data['guru'])) {
				if($data['guru']->status == 'NON PNS') echo "selected"; }?>>NON PNS</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>