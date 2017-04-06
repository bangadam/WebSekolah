<h2 class="title-top">Kontak Kami</h2>
<?php 

if (isset($data['error']) && count($data['error']) > 0) {

 ?>
	<div class="alert alert-danger">
		<ul class="list-square">
			<?php foreach ($data['error'] as $error) { ?>
				<li><?php echo $error; ?></li>
			<?php } ?>
		</ul>
	</div>
 <?php } else if(isset($data['success'])) { ?>
	<div class="alert alert-success">
		<?php echo $data['success']; ?>
	</div>
 <?php } ?>

 <form action="<?php echo POSITION_URL; ?>" method="POST" role="form">
 	<div class="form-group">
 		<label for="">Nama Lengkap :</label>
 		<input type="text" name="name" id="" class="form-control">
 	</div>

 	<div class="form-group">
 		<label for="">Email :</label>
 		<input type="email" name="email" id="" class="form-control">
 	</div>

 	<div class="form-group">
 		<label for="">Website :</label>
 		<input type="url" name="website" id="" class="form-control" placeholder="http://">
 	</div>

 	<div class="form-group">
 		<label for="">Isi :</label>
 		<textarea name="comment" class="form-control" rows="5"></textarea>
 	</div>

	<button type="submit" class="btn btn-primary">Kirim</button>
 </form>