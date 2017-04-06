<h2 class="title-top">Bukutamu</h2>
<?php 
	if(isset($data['error']) && count($data['error']) > 0) {
 ?>

<div class="alert alert-danger" role="alert">
	<a href="#" class="close" data-dismiss="alert"></a>
		<ul class="list-square">
			<?php 
				foreach ($data['error'] as $error) {
			 ?>
			 
			 <li><?php echo $error; ?></li>

			 <?php } ?>
		</ul>
	
</div>

 <?php }elseif (isset($data['success'])) { ?>
	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo $data['success']; ?>
	</div>		
 <?php } ?>

 <form action="<?php echo POSITION_URL; ?>" role="form" method="post">
 	<div class="form-group">
 		<label for="">Nama Lengkap:</label>
 		<input type="text" name="name" id="name" class="form-control">
 	</div>

 	<div class="form-group">
 		<label for="">Email:</label>
 		<input type="email" name="email" id="email" class="form-control">
 	</div>

 	<div class="form-group">
 		<label for="">Website:</label>
 		<input type="text" name="website" id="website" class="form-control" placeholder="http://">
 	</div>

 	<div class="form-group">
 		<label for="">Komentar:</label>
 		<textarea name="comment" class="form-control" rows="5"></textarea>
 	</div>

 	<button type="submit" class="btn btn-primary">Kirim</button>
 </form>

 <br>

 <div class="middle-panel">
 	<div class="top-middle-panel">
 		Komentar Bukutamu (<?php echo $data['total']; ?>)
 	</div>

 	<div class="list">
 		<?php foreach ($data['bukutamu'] as $row) { ?>
	 		<div class="well">
	 			<div class="title">
	 				<?php echo $row->full_name; ?> | <a href="mail to: <?php echo $row->email; ?>"><?php echo $row->email; ?></a> | <?php if($row->website) { ?>
						<a href="<?php echo $row->website; ?>" target="_blank">
							<?php echo $row->website; ?>
						</a>
	 				<?php } ?>
	 				<div class="text">
	 					<?php echo $row->comment; ?>
	 				</div>
	 			</div>
	 		</div>
 	    <?php } ?>
 	</div>
 </div>