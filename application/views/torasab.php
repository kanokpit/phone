<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
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
</body>
</html>
