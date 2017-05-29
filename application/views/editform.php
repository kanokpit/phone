<!DOCTYPE html>
<html>
<body>
						<div class="row">
							<div class="col-lg-12">
								<div class="alert alert-info">

									<table class="table table-striped">
										<body>
											<?php echo form_open('hello/update'); ?>
										<h2>แก้ไขข้อมูล</h2><br><br>

											<input type="hidden" name='p_id' value="<?php echo $data[0]['id_phone'] ?>"><br>
											Name:<br>
											<select name="id_brand">
												<<?php foreach ($brand as $key): ?>
													<?php if ($key['id_brand']==$data[0]['id_brand']): ?>
													<option selected value='<?php echo $key['id_brand']?>' ><?php echo $key['name']?></option>

												<?php else: ?>
													<option value='<?php echo $key['id_brand']?>' ><?php echo $key['name']?></option>

												<?php endif; ?>
												<?php endforeach; ?>
												</select>
											<br>
											Price:<br>
											<input type="text" name='p_lastname' value="<?php echo $data[0]['price'] ?>">
											<br>
											Number:<br>
											<input type="text" name='IDcard' value="<?php echo $data[0]['number'] ?>">
											<br>
											<br>
											<input type="submit" value="submit">

											<?php echo form_close(); ?>
										</body>
						</div>
