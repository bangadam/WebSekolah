<h1>Data <small>Bukutamu</small></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-book"></span> Bukutamu</a>
  </li>
</ol>

<div class="col-lg-12">
	<table id="TableId" class="table table-responsive">
		<thead>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
			<th>Website</th>
			<th>Komentar</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($data['bukutamu'] as $bukutamu) { ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $bukutamu->full_name; ?></td>
					<td><?php echo $bukutamu->email; ?></td>
					<td><?php echo $bukutamu->website; ?></td>
					<td><?php echo substr($bukutamu->comment, 0 ,100); ?></td>
					<td>
						<a href="<?php echo SITE_URL; ?>?page=bukutamu&&action=delete&&id=<?php echo $bukutamu->id_bukutamu; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
					</td>
				</tr>
			<?php 
				$no++;
			} ?>
		</tbody>
	</table>
</div>
