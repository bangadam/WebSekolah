<?php 
	foreach ($data['artikel'] as $artikel) {
 ?>
	<h2 class="title-top"><?php echo $artikel->judul; ?></h2>
	<div class="artikel-page">
		<div class="date">
			<?php echo $artikel->waktu; ?> - <?php echo date('d/m/Y', strtotime($artikel->tanggal)); ?>
			By <b><?php echo $artikel->penulis; ?></b>
		</div>
		<div class="text">
			<?php if ($artikel->images) { ?>
				<img src="public/images/artikel/<?php echo $artikel->images; ?>" alt="" style="float:left;max-width: 200px;margin: 0 5px 5px 0">
			<?php 
			} 
				echo $artikel->isi;
			?>
			<div class="clear"></div>
		</div>
		<div class="link">
			<?php if (count($data['prev']) > 0) { ?>
				<a href="<?php echo SITE_URL . "?page=artikel&&action=detail&&id=" . $data['prev'][0]->id_artikel; ?>" class="btn btn-primary">&laquo; Sebelumnya</a>
			<?php } ?>

			<?php if (count($data['next']) > 0) { ?>
				<a href="<?php echo SITE_URL . "?page=artikel&&action=detail&&id=" . $data['next'][0]->id_artikel; ?>" class="btn btn-primary">Selanjutnya &laquo;</a>
			<?php } ?>
		</div>
	</div>
 <?php } ?>