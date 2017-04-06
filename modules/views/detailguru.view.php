<?php 
	foreach ($data['guru'] as $guru) {
 ?>

<h2 class="title-top">Detail <?php echo $guru->status; ?> - <?php echo $guru->nama_lengkap; ?></h2>

<table style="width: 100%">
	<tbody>
		<tr>
			<td style="vertical-align: top;width: 220px;padding-right: 20px">
				<?php 
					if ($guru->images) {
				 ?>
					<img src="public/images/guru/<?php echo $guru->images; ?>" alt="" style="width: 200px">
				 <?php }else { ?>
					<img src="public/images/no_user.jpg" alt="" style="width: 200px">
				 <?php } ?>

					<a href="<?php echo SITE_URL; ?>?page=guru" class="btn btn-primary" style="margin-top: 10px;display: block;">Daftar Guru</a>
			</td>
			<td style="vertical-align: top;">
				<table class="table">
					<tbody>
						<tr>
							<td style="border-top: 0;">Nama</td>
							<td style="border-top: 0;">:</td>
							<td style="border-top: 0;">
								<b><?php echo $guru->nama_lengkap; ?></b>
							</td>
						</tr>

						<tr>
							<td>NIS</td>
							<td>:</td>
							<td><b><?php echo $guru->nip; ?></b></td>
						</tr>

						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td><b><?php echo $guru->jenis_kelamin; ?></b></td>
						</tr>

						<tr>
							<td>Status</td>
							<td>:</td>
							<td><b><?php echo $guru->status; ?></b></td>
						</tr>

						<tr>
							<td>Mata Pelajaran</td>
							<td>:</td>
							<td><b><?php echo $guru->mata_pelajaran; ?></b></td>
						</tr>
						
						<tr>
							<td>Tempat Tanggal Lahir</td>
							<td>:</td>
							<td><b><?php echo $guru->tempat_lahir; ?> , <?php echo date("d-m-Y", strtotime($guru->tanggal_lahir)); ?></b></td>
						</tr>

						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><b><?php echo $guru->alamat; ?></b></td>
						</tr>

					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
 <?php } ?>