<h1>Data <small>Siswa</small></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-book"></span> Siswa</a>
  </li>
</ol>
<a href="<?php echo SITE_URL; ?>?page=siswa&&action=insert" class="btn btn-primary" style="margin-bottom: 20px;"><span class="fa fa-pencil"></span> Tambah Siswa</a>

<div class="col-lg-12">
	<table id="TableId" class="table table-responsive">
		<thead>
			<th>No</th>
			<th>Foto</th>
			<th>Nis</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Angkatan</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($data['siswa'] as $siswa) { ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td>
						<?php if($siswa->images) { ?> 
						<img src="public/images/siswa/<?php echo $siswa->images; ?>" style="width: 50px;height: 50px" alt="<?php echo $siswa->judul; ?>">
					<?php } else { ?>
						<img src="public/images/no_user.jpg" style="width: 50px;height: 50px">
					<?php } ?>
					</td>
					<td><?php echo $siswa->nis; ?></td>
					<td><?php echo $siswa->nama_lengkap; ?></td>
					<td><?php echo $siswa->jenis_kelamin; ?></td>
					<td><?php echo $siswa->angkatan; ?></td>
					<td>
						<a href="<?php echo SITE_URL; ?>?page=siswa&&action=update&&id=<?php echo $siswa->id_siswa; ?>" class="btn btn-warning">Edit</a>
						<a href="<?php echo SITE_URL; ?>?page=siswa&&action=detail&&id=<?php echo $siswa->id_siswa; ?>" class="btn btn-info">Detail</a>
						<a href="<?php echo SITE_URL; ?>?page=siswa&&action=delete&&id=<?php echo $siswa->id_siswa; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
					</td>
				</tr>
			<?php 
				$no++;
			} ?>
		</tbody>
	</table>
</div>
