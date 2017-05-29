<!DOCTYPE html>
<html>
<body>
						<div class="row">
							<div class="col-lg-12">
								<div class="alert alert-info">

									<table class="table table-striped">
								  <thead>
								    <tr>
								      <th>id_drand</th>
								      <th>name</th>
								      <th>price</th>
                      <th>numder</th>
								    </tr>
								  </thead>
								  <tbody>
										<?php foreach ($data as $key):?>
								    <tr>
								      <td> <?php echo $key['id_brand'] ?>
                      <select name="id_brand">
                            <<?php foreach ($province as $key): ?>
                              <?php if ($key['id_brand']==$data[0]['id_brand']): ?>
                              <option selected value='<?php echo $key['id_brand']?>' ><?php echo $key['name']?></option>

                            <?php else: ?>
                              <option value='<?php echo $key['id_brand']?>' ><?php echo $key['name']?></option>

                            <?php endif; ?>
                            <?php endforeach; ?>
                          </select></td>
								      <td>	<?php echo $key['price'] ?></td>
                      <td>	<?php echo $key['numder'] ?></td>
											<td><a href="<?php echo site_url('hello/editform/'.$key['id']) ?>"class="btn btn-info">แก้ไข</a>  <a href="<?php echo site_url('welcome/del/'.$key['id']) ?>"class="btn btn-info">ลบ</a><br></td>

								    </tr>
										<?php endforeach; ?>
								  </tbody>
								</table>
						</div>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
	<body>
<?php echo form_open('/hello/update');?>
id<br>
	<input type="text" name="id" value="<?php echo $data[0] ['id']?>"readonly>
	<br>
	Name<br>
		<input type="text" name="name" value="<?php echo $data[0] ['name']?>">
		<br>
		NickName<br>
			<input type="text" name="nickname" value="<?php echo$data[0] ['nickname']?>">
			<br>

			<input type="submit" value="submit">

	<?php echo form_close(); ?>
</body>
</html>
