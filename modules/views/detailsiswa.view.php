<?php 
	foreach ($data['siswa'] as $siswa) {
 ?>

<h2 class="title-top">Detail <?php echo $siswa->status; ?> - <?php echo $siswa->nama_lengkap; ?></h2>

<table style="width: 100%">
	<tbody>
		<tr>
			<td style="vertical-align: top;width: 220px;padding-right: 20px">
				<?php 
					if ($siswa->images) {
				 ?>
					<img src="public/images/siswa/<?php echo $siswa->images; ?>" alt="" style="width: 200px">
				 <?php }else { ?>
					<img src="public/images/no_user.jpg" alt="" style="width: 200px">
				 <?php } ?>

				 <?php 
				 	if ($siswa->status == 'Siswa') {
				  ?>
					<a href="<?php echo SITE_URL; ?>?page=siswa" class="btn btn-primary" style="margin-top: 10px;display: block;">Daftar Siswa</a>
				  <?php }else { ?>
					<a href="<?php echo SITE_URL; ?>?page=alumni" class="btn btn-primary" style="margin-top: 10px;display: block;">Daftar Alumni</a>
				  <?php } ?>
			</td>
			<td style="vertical-align: top;">
				<table class="table">
					<tbody>
						<tr>
							<td style="border-top: 0;">Nama</td>
							<td style="border-top: 0;">:</td>
							<td style="border-top: 0;">
								<b><?php echo $siswa->nama_lengkap; ?></b>
							</td>
						</tr>

						<tr>
							<td>NIS</td>
							<td>:</td>
							<td><b><?php echo $siswa->nis; ?></b></td>
						</tr>

						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td><b><?php echo $siswa->jenis_kelamin; ?></b></td>
						</tr>

						<tr>
							<td>Status</td>
							<td>:</td>
							<td><b><?php echo $siswa->status; ?></b></td>
						</tr>

						<tr>
							<td>Kelas</td>
							<td>:</td>
							<td><b><?php echo $siswa->nama_kelas; ?></b></td>
						</tr>
						
						<tr>
							<td>Agkatan</td>
							<td>:</td>
							<td><b><?php echo $siswa->angkatan; ?></b></td>
						</tr>

						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><b><?php echo $siswa->alamat; ?></b></td>
						</tr>

					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
 <?php } ?>