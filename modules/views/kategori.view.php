<h2 class="title-top">Kategori Artikel</h2>

<!-- Kategori artikel -->
<div class="middle-panel">
	<div class="bottom-middle-panel">
		<ul>
			<?php foreach ($data['kategori'] as $kategori) { ?>
				<li>
					<div class="title">
						<a href="<?php echo SITE_URL; ?>?page=kategori&&action=detail&&id=<?php echo $kategori->id_kategori; ?>">
							<?php echo $kategori->nama_kategori; ?> (<?php echo $kategori->total; ?>)
						</a>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>