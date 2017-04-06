<h1>Data <small>Artikel</small></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-book"></span> Artikel</a>
  </li>
</ol>
<a href="<?php echo SITE_URL; ?>?page=artikel&&action=insert" class="btn btn-primary" style="margin-bottom: 20px;"><span class="fa fa-pencil"></span> Tambah Artikel</a>

<div class="col-lg-12">
	<table id="TableId" class="table table-responsive">
		<thead>
			<th>No</th>
			<th>Tanggal</th>
			<th>Gambar</th>
			<th>Kategori</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Isi</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($data['artikel'] as $artikel) { ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $artikel->waktu . " " . $artikel->tanggal  ?></td>
					<td>
					<?php if($artikel->images) { ?> 
						<img src="public/images/artikel/<?php echo $artikel->images; ?>" style="width: 100px" alt="<?php echo $artikel->judul; ?>">
					<?php } ?>
					</td>
					<td><?php echo $artikel->nama_kategori; ?></td>
					<td><?php echo $artikel->judul; ?></td>
					<td><?php echo $artikel->penulis; ?></td>
					<td><?php echo substr(strip_tags($artikel->isi), 0, 100); ?></td>
					<td>
						<a href="<?php echo SITE_URL; ?>?page=artikel&&action=update&&id=<?php echo $artikel->id_artikel; ?>" class="btn btn-warning">Edit</a>
						<a href="<?php echo SITE_URL; ?>?page=artikel&&action=delete&&id=<?php echo $artikel->id_artikel; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
					</td>
				</tr>
			<?php 
				$no++;
			} ?>
		</tbody>
	</table>
</div>
