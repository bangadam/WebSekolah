<h1><?php echo $data['title'] ?></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-users"></span> User</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-pencil"></span> <?php echo $data['title']; ?></a>
  </li>
</ol>
<div class="col-xs-12">
	<a href="<?php echo PATH; ?>?page=user" class="btn btn-danger" style="margin-bottom: 15px"><span class="fa fa-arrow-left"></span> Kembali</a>
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
	<meta http-enquiv="refresh" content="1;url=<?php echo PATH; ?>?page=user">
 <?php } ?>
</div>
<div class="col-xs-7">
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" name="nama_lengkap" class="form-control" <?php if (isset($data['user'])) echo "value='" . $data['user']->nama_lengkap . "'"; ?>>
		</div>
		<div class="form-group">
			<label>Email User</label>
			<input type="email" name="email" class="form-control" <?php if (isset($data['user'])) echo "value='" . $data['user']->email . "'"; ?>>
		</div>	
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" <?php if(isset($data['user'])) echo "value='" . $data['user']->username . "'"; ?>>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<label>Re-Password</label>
			<input type="password" name="repassword" class="form-control">
		</div>

		<div class="form-group">
			<label>No. Hp</label>
			<input type="text" name="no_hp" class="form-control" <?php if(isset($data['user'])) echo "value='" . $data['user']->no_hp . "'"; ?>>
		</div>
		<div class="form-group">
			<label>Alamat User</label>
			<textarea name="alamat" class="form-control" rows="4">
				<?php if(isset($data['user'])) echo $data['user']->alamat; ?>
			</textarea>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Upload Foto</label>
					<input type="file" name="images" id="" class="form-control" <?php if(isset($data['user'])) echo "value='" . $data['user']->images . "'" ;?>>
				</div>
			</div>
			<?php if(isset($data['user'])) {?>
			<div class="col-md-6">
				<img src="public/images/user/<?php echo $data['user']->images; ?>" width="100px" alt="<?php echo $data['user']->images; ?>"
				>
			</div>
			<?php } ?>
		</div>	
	
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>