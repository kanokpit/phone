<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
</head>
<body>
  <?php echo form_open('hello/insert'); ?>
<div>
<h2>สมัครสมาชิก</h2>
<br>
<br>
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
  <input type="text" name='price' value="">
  <br>
  Number:<br>
  <input maxlength="13" type="text" name='number' value="">

  <br><br>
  <input type="submit" value="submit">

  <?php echo form_close(); ?>
</div>
</body>
