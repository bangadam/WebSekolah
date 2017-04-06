<h1>Data <small>Kontak</small></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-book"></span> Kontak</a>
  </li>
</ol>

<div class="col-lg-12">
	<table id="TableId" class="table table-responsive">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Website</th>
			<th>isi</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($data['kontak'] as $kontak) { ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $kontak->nama_lengkap; ?></td>
					<td><?php echo $kontak->email; ?></td>
					<td><?php echo $kontak->website; ?></td>
					<td><?php echo $kontak->isi; ?></td>
					<td>
						<a href="<?php echo SITE_URL; ?>?page=kontak&&action=delete&&id=<?php echo $kontak->id_kontak; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
					</td>
				</tr>
			<?php 
				$no++;
			} ?>
		</tbody>
	</table>
</div>
