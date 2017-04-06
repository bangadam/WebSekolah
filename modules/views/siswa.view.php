<h2 class="title-top">Data Siswa</h2>

<table class="table-striped paging-table">	
	<thead>	
		<th>Foto</th>
		<th>NIS</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th style="width: 88px">Jenis Kelamin</th>
		<th>Angkatan</th>
	</thead>
	<tbody>
		<?php 
			foreach ($data['siswa'] as $siswa) {
		 ?>
			<tr>
				<td>
					<?php if($siswa->images) { ?>
						<img src="public/images/siswa/<?php echo $siswa->images; ?>" alt="" style="width: 50px;height: 50px;">
					<?php }else { ?>
						<img src="public/images/no_user.jpg" alt="" style="width: 50px;height: 50px;">
					<?php } ?>		
				</td>
				<td style="vertical-align: middle"><?php echo $siswa->nis; ?></td>
				<td style="vertical-align: middle;">
					<a href="<?php echo SITE_URL; ?>?page=siswa&&action=detail&&id=<?php echo $siswa->id_siswa ?>"><?php echo $siswa->nama_lengkap; ?></a>
				</td>
				<td style="vertical-align: middle;"><?php echo $siswa->nama_jurusan; ?></td>
				<td style="vertical-align: middle;"><?php echo $siswa->jenis_kelamin; ?></td>
				<td style="vertical-align: middle;"><?php echo $siswa->angkatan; ?></td>
			</tr>
		 <?php } ?>
	</tbody>
</table>