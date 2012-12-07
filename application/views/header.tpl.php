<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	header("content-Type: text/html; charset=utf-8");
?>
<title><?php if (isset($title)) { echo $title; } else { echo 'cat'; }?></title>
<?php if(isset($base)) { ?>
<base href="<?php  echo "$base"; ?>" />
<?php }?>
<?php if(isset($myrobots)) { echo $myrobots ;} else { echo '<meta name="robots" content="all">'; }?>

<?php if(isset($desc)) { echo '<meta name="description" content="' . $desc . '">';}?>

<?php $vtime = date('Ymd', time());?>

<?php if ( isset($css) && is_array($css)  ) { ?>
	<?php foreach ($css as $value) {
	 		echo '<link rel="stylesheet" type="text/css" href="' . $base . '/' .$value . '?' . $vtime .   '.css  " media="screen" />';
	}?>
<?php }?>
<?php if (  isset($js)  && is_array($js) ) {?>
	<?php foreach ($js as $value) {
		echo '<script type="text/javascript" src="' . $base . '/' .$value . '?' . $vtime . '.js " charset="utf-8"></script>';
	}?>
<?php }?>
