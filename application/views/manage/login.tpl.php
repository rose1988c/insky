<?php
echo $header;
?>

<body id="login">

<div id="login-wrapper" class="png_bg">
<div id="login-top">

<h1>Simpla Admin</h1>
<!-- Logo (221px width) --> <img id="logo"
	src="resources/images/logo.png" alt="Simpla Admin logo"></div>
<!-- End #logn-top -->

<div id="login-content">

<form action="index.html">

<div class="notification information png_bg">
<div>Just click "Sign In". No password needed.</div>
</div>

<p><label>Username</label> <input class="text-input" type="text"></p>
<div class="clear"></div>
<p><label>Password</label> <input class="text-input" type="password"></p>
<div class="clear"></div>
<p id="remember-password"><input type="checkbox">Remember me</p>
<div class="clear"></div>
<p><input class="button" value="Sign In" type="submit"></p>

</form>
</div>
<!-- End #login-content --></div>
<!-- End #login-wrapper -->




<div id="facebox" style="display: none;">
<div class="popup">
<table>
	<tbody>
		<tr>
			<td class="tl"></td>
			<td class="b"></td>
			<td class="tr"></td>
		</tr>
		<tr>
			<td class="b"></td>
			<td class="body">
			<div class="content"></div>
			<div class="footer"><a href="#" class="close"> <img
				src="resources/images/closelabel.gif" title="close"
				class="close_image"> </a></div>
			</td>
			<td class="b"></td>
		</tr>
		<tr>
			<td class="bl"></td>
			<td class="b"></td>
			<td class="br"></td>
		</tr>
	</tbody>
</table>
</div>
</div>
</body>
</html>