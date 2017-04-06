<h1><?php echo $data['title']; ?></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-users"></span> User</a>
  </li>
</ol>
<a href="<?php echo SITE_URL; ?>?page=user&&action=insert" class="btn btn-primary" style="margin-bottom: 20px;"><span class="fa fa-pencil"></span> Tambah User</a>

<div class="col-lg-12">
	<table id="TableId" class="table table-responsive">
		<thead>
			<th>No</th>
			<th>Foto</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Username</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($data['user'] as $user) { ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td>
						<?php if($user->images) { ?> 
						<img src="public/images/user/<?php echo $user->images; ?>" style="width: 50px;height: 50px">
					<?php } else { ?>
						<img src="public/images/no_user.jpg" style="width: 50px;height: 50px">
					<?php } ?>
					</td>
					<td><?php echo $user->nama_lengkap; ?></td>
					<td><?php echo $user->email; ?></td>
					<td><?php echo $user->username; ?></td>
					<td>
						<a href="<?php echo SITE_URL; ?>?page=user&&action=update&&id=<?php echo $user->id_user; ?>" class="btn btn-warning">Edit</a>
						<a href="<?php echo SITE_URL; ?>?page=user&&action=detail&&id=<?php echo $user->id_user; ?>" class="btn btn-success">Detail</a>
						<a href="<?php echo SITE_URL; ?>?page=user&&action=delete&&id=<?php echo $user->id_user; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
					</td>
				</tr>
			<?php 
				$no++;
			} ?>
		</tbody>
	</table>
</div>
