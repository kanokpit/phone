<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
</head>
<body>
	<?php echo form_open('hello/addform');?>
	id<br>
		<input type= class="btn btn-primary""text" name="id_drand" value="">
		<br>
		Name<br>
		<select name="id_brand">
																<<?php foreach ($province as $key): ?>
																	<?php if ($key['id_drand']==$data[0]['id_brand']): ?>
																	<option selected value='<?php echo $key['id_brand']?>' ><?php echo $key['name']?></option>

																<?php else: ?>
																	<option value='<?php echo $key['id_brand']?>' ><?php echo $key['name']?></option>

																<?php endif; ?>
																<?php endforeach; ?>
																</select>
					<br>
			Price<br>
				<input type="text" name="price" value="">
				<br>
			Numder<br>
				<input type="text" value="numder">
<br><br>
<input type="submit" value="submit">
		<?php echo form_close(); ?>
