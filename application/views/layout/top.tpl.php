<div class="topchannel">
	<div class="item">
		<div class="menu sf-js-enabled sf-shadow">
			<ul class="menu sf-js-enabled sf-shadow" id="menu-navigation">
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-973 <?php if ($current == 'index') { echo ' current-menu-item '; }?>" id="menu-item-973">
					<a href="<?php echo $base;?>">Home</a>
				</li>
				
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category <?php if ($current == 'Favorites') { echo ' current-menu-item '; }?> menu-item-790" id="menu-item-790">
					<a href="<?php echo $base . '/index.php/oh/'?>">Favorites</a>
				</li>
				
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-791 <?php if ($current == 'Tools') { echo ' current-menu-item '; }?>" id="menu-item-791">
					<a href="<?php echo $base . '/index.php/tool/'?>">Tools Online</a>
				</li>
				
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category  <?php if ($current == 'Blog') { echo ' current-menu-item '; }?>">
					<a href="javascript:void(0);">Idea Blog</a>
				</li>
				
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category  <?php if ($current == 'About') { echo ' current-menu-item '; }?>">
					<a href="javascript:void(0);">Idea About</a>
				</li>
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category  <?php if ($current == 'Lists' || $current == 'Add') { echo ' current-menu-item '; }?>">
					<?php $v = array('add','lists');
					       shuffle($v);
					?>
					<a href="<?php echo $base . '/index.php/oh/'. $v[0] .'/'?>">&nbsp;&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;&nbsp;</a>
				</li>
			</ul>
		</div>

		<div class="home">
			<a onclick="AddFavorite(window.location,document.title);return false;" href="javascript:void(0);"><b></b>收藏</a>
			<a target="__blank" class="weibo" title="陈韵文C" href="http://www.weibo.com/349252963/">关注我</a>
			<?php if ($auth) { echo ' | <font style="color:#0088DD;">' . $auth . '</font><a href="javascript:void(0);" id="loginout" rel="' . $auth . '">Exit</a>'; } else {?>
			<a href="<?php echo $base . '/index.php/account/login/';?>">login</a>
			<?php }?>
		</div>
	</div>
</div>