<?php
echo $header;
?>
<body>

<div id="register-wrap">
<div id="switcher">
<a style="" id="go-login" href="<?php echo $base . '/index.php/account/register/';?>">注册</a>
</div>
<form autocomplete="off" method="POST"
	action="<?php echo $base . '/index.php/account/login/';?>" class="clearfix"
	id="reg-form">

<div id="input-reg-email" class="input-wrap"><span class="input-icon"></span>
	 <input type="text" value="" name="username" id="username"
	class="input-text">
<div <?php if ($msg == false) {?> style="display: none" <?php } else {?>  style="display: block"  <?php }?> class="tip"><?php echo $msg;?></div>
</div>
<div id="input-reg-pwd" class="input-wrap"><span class="input-icon"></span>
   <input type="password" name="password"
	class="input-text">
<div style="display: none" class="tip"></div>
</div>

<input type="submit" value="登录" class="input-button" id="reg-submit"></form>
</div>

<?php echo $logo;?>

<script type="text/javascript">
$(document).ready(function(){

	$("#username").focus();

   $("#go-login").click(function(){
     $("#go-login").animate({ height: 'hide', opacity: 'hide' }, 'fast');
     window.location.href = "<?php echo $base . '/index.php/account/register/';?>";
   });
});
</script>
</body>
</html>