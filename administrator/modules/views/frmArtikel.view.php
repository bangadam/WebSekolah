<h1>Tambah <small>Artikel</small></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-book"></span> Artikel</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-pencil"></span>Tambah Artikel</a>
  </li>
</ol>
<div class="col-xs-12">
	<a href="<?php echo PATH; ?>?page=artikel" class="btn btn-danger" style="margin-bottom: 15px"><span class="fa fa-arrow-left"></span> Kembali</a>
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
	<meta http-enquiv="refresh" content="1;url=<?php echo PATH; ?>?page=artikel">
 <?php } ?>
</div>
<div class="col-xs-7">
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Judul Artikel</label>
			<input type="text" name="judul" class="form-control" <?php if (isset($data['artikel'])) echo "value='" . $data['artikel']->judul . "'"; ?>>
		</div>

		<div class="form-group">
			<label>Kategori Artikel</label>
			<select name="kategori" id="inputKategori" class="form-control" required="required">
				<?php foreach ($data['kategori'] as $kategori) { ?>
					<option <?php if(isset($data['artikel'])) { 
						if ($data['artikel']->id_kategori == $kategori->id_kategori) echo 'selected';
					} ?> value="<?php echo $kategori->id_kategori; ?>"><?php echo $kategori->nama_kategori; ?></option>
				<?php } ?>
			</select>
		</div>

		<div class="form-group">
			<label>Penulis Artikel</label>
			<input type="text" name="penulis" class="form-control" <?php if (isset($data['artikel'])) echo "value='" . $data['artikel']->penulis . "'"; ?>>
		</div>
		<div class="row">
		<div class="col-lg-8">
			<div class="form-group">
				<label>Gambar Artikel</label>
				<input type="file" name="images" class="form-control">
			</div>
		</div>
		<?php if (isset($data['artikel'])) {
				if ($data['artikel']->images) {	 ?>
			<div class="col-lg-4">
				<img src="public/images/artikel/<?php echo $data['artikel']->images; ?>" alt="images" style="width: 100px;max-width: 200px;">
			</div>
		<?php 
				} 
			 }
			?>
		</div>	
		<div class="form-group">
			<label>Isi Artikel</label>
			<textarea class="form-control" name="isi" id="editor"><?php if (isset($data['artikel'])) echo  $data['artikel']->isi; ?></textarea>
		</div>
		<button type="submit" clas	s="btn btn-primary">Simpan</button>
	</form>
</div>
