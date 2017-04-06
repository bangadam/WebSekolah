<h1>Data <small>Jurusan</small></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-book"></span> Jurusan</a>
  </li>
</ol>
<a href="<?php echo SITE_URL; ?>?page=jurusan&&action=insert" class="btn btn-primary" style="margin-bottom: 20px;"><span class="fa fa-pencil"></span> Tambah Jurusan</a>

<div class="col-lg-12">
	<table id="TableId" class="table table-responsive">
		<thead>
			<th>No</th>
			<th>Jurusan</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($data['jurusan'] as $jurusan) { ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $jurusan->nama_jurusan; ?></td>
					<td>
						<a href="<?php echo SITE_URL; ?>?page=jurusan&&action=update&&id=<?php echo $jurusan->id_jurusan; ?>" class="btn btn-warning">Edit</a>
						<a href="<?php echo SITE_URL; ?>?page=jurusan&&action=delete&&id=<?php echo $jurusan->id_jurusan; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
					</td>
				</tr>
			<?php 
				$no++;
			} ?>
		</tbody>
	</table>
</div>
