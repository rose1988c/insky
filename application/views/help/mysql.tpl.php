<html>
<head>
  <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'http:\/\/www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
  <html xmlns="http:\/\/www.w3.org/1999/xhtml">
  <title>Web test Site</title>
  <base href="<?php echo "$base"; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo "$base/$css";?>">
</head>
<body>
  <h1></h1>
  <p class="test">
  <?php
  echo  "<pre>";
  print_r($datebase);
  echo "</pre>";
  ?>
  </p>
</body>
</html>