<?php
	echo $header;
	$this->load->helper('url');
?>
<style type="text/css">
	<!--
		body { margin: 0; background: #FFFFF3; font: 12px/18px Verdana; color: #666; }
		.colorbox { position:relative; }
		.colorbox span { position:absolute; border:1px dotted #CCCCCC;margin: 5px; padding: 5px; }
		a:link,a:visited{ color:#000; text-decoration:none;}
		a:hover,a:active{ color:#666; text-decoration:underline; }
	-->
</style>
<body>
	<div class="colorbox">
		<span style="<?php echo 'left:'. rand(0,999) . ';top:'. rand(0,999) . ';';?>">
			<a href="<?php echo $base . '/index.php/other/color/';?>" style="<?php echo getTagStyle(10,12);?>">RGB颜色查询对照表</a>
		</span>
	</div>
</body>
</html>