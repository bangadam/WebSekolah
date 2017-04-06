<h2 class="title-top">Data Guru</h2>

<table class="table-striped paging-table">	
	<thead>	
		<th>Foto</th>
		<th>NIP</th>
		<th>Nama</th>
		<th>Mata Pelajaran</th>
		<th style="width: 88px">Jenis Kelamin</th>
		<th>status</th>
	</thead>
	<tbody>
		<?php 
			foreach ($data['guru'] as $guru) {
		 ?>
			<tr>
				<td>
					<?php if($guru->images) { ?>
						<img src="public/images/guru/<?php echo $guru->images; ?>" alt="" style="width: 50px;height: 50px;">
					<?php }else { ?>
						<img src="public/images/no_user.jpg" alt="" style="width: 50px;height: 50px;">
					<?php } ?>		
				</td>
				<td style="vertical-align: middle"><?php echo $guru->nip; ?></td>
				<td style="vertical-align: middle;">
					<a href="<?php echo SITE_URL; ?>?page=detailguru&&id=<?php echo $guru->id_guru ?>"><?php echo $guru->nama_lengkap; ?></a>
				</td>
				<td style="vertical-align: middle;"><?php echo $guru->mata_pelajaran; ?></td>
				<td style="vertical-align: middle;"><?php echo $guru->jenis_kelamin; ?></td>
				<td style="vertical-align: middle;"><?php echo $guru->status; ?></td>
			</tr>
		 <?php } ?>
	</tbody>
</table>