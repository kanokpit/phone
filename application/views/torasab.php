<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<body>
						<div class="row">
							<div class="col-lg-12">
								<div class="alert alert-info">
									<a href="<?php echo site_url('hello/insertform/')?>"class="btn btn-primary">เพิ่มข้อมูล</button></a><br>
									<table class="table table-striped">
								  <thead>
								    <tr>
								      <th>No.</th>
								      <th>name</th>
                      <th>price</th>
											<th>number</th>
								    </tr>

								  </thead>
								  <tbody>
										<?php foreach ($data as $key):?>
								    <tr>
								      <td> <?php echo $key['id_drand'] ?></td>
								      <td> <?php echo $key['name'] ?></td>
								      <td> <?php echo $key['price'] ?></td>
											<td> <?php echo $key['number'] ?></td>
											<td><a href="<?php echo site_url('hello/updateform/'.$key['id_brand']) ?>"class="btn btn-info">แก้ไข</a></td>
											<td<a href="<?php echo site_url('hello/deletedata/'.$key['id_brand']) ?>"class="btn btn-info">ลบ</a><br></td>
								    </tr>
										<?php endforeach; ?>
								  </tbody>
								</table>
						</div>
=======
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<head>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

>>>>>>> 7af18fd9e9a692393d06cee7232a4be8001a833e
</body>
</html>
