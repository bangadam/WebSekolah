<h1><?php echo $data['title']; ?></small></h1>

<ol class="breadcrumb" style="font-size: 15px">
  <li>
    <a href="#"><span class="fa fa-home"></span> Home</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-user"></span> Detail User</a>
  </li>
</ol>
<div class="col-xs-12">
	<a href="<?php echo PATH; ?>?page=user" class="btn btn-danger" style="margin-bottom: 15px"><span class="fa fa-arrow-left"></span> Kembali</a>
</div>

<div class="col-md-12 col-xs-12 col-lg-12">
	<div class="x_panel">
		<div class="x_title">
			<h2><i class="fa fa-cap-graduation"></i> Detail User</h2>
		      <ul class="nav navbar-right panel_toolbox">
		         <li><a class="close-link"><i class="fa fa-close"></i></a>
		         </li>
		       </ul>
		      <div class="clearfix"></div>
		</div>
		<div class="x_content">
			<div class="col-lg-3 col-xs-6">
				<?php if($data['user']->images) {?>
					<img src="public/images/user/<?php echo $data['user']->images; ?>" width="100%">
				<?php } else {?>
					<img src="public/images/no_user.jpg" width="100%">
				<?php } ?>
			</div>
			<div class="col-md-9 col-xs-6">
				<table class="table"  style="font-weight: bold;">
					<tbody>
						<tr>
							<th>Nama User</th>
							<th>:</th>
							<th><?php echo $data['user']->nama_lengkap; ?></th>
						</tr>
						<tr>
							<th>Username</th>
							<th>:</th>
							<th><?php echo $data['user']->username; ?></th>
						</tr>
						<tr>
							<th>Email</th>
							<th>:</th>
							<th><?php echo $data['user']->email; ?></th>
						</tr>
						</tr>
						<tr>
							<th>No. HP</th>
							<th>:</th>
							<th><?php echo $data['user']->no_hp; ?></th>
						</tr>
						<tr>
							<th>Alamat</th>
							<th>:</th>
							<th><?php echo $data['user']->alamat; ?></th>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>