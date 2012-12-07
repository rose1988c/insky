<?php
echo $header;
$this->load->helper('url');
?>
<body>
<?php 
    echo $cat_menu;
?>

<div id="page">
	<!-- start header -->
	<div id="header">
		<div id="top">
			<div id="top_logo">
				<div class="clear"></div>
				<div id="blogname"><a href="<?php echo $base;?>">Cat - sky</a>
					<div id="blogtitle">Cyw Blog</div>
				</div>
			</div>
			<?php /*
			<div class="search">
			<form action="http://www.ccav1.com" method="get" id="searchform"><input
				type="text" size="30" id="s" name="s" value="">
			<button type="submit">搜索</button>
			</form>
			</div>
			*/?>
		<div class="clear"></div>
		<div class="topnav">
			<ul class="menu" id="nav">
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-524" id="menu-item-524">
					<a href="<?php echo URLS::absolute('/oh/');?>" class="goal" rel="addhtmls">OH</a>
				</li>
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-524" id="menu-item-524">
					<a href="<?php echo URLS::absolute('/oh/add/');?>" class="goal" rel="addurls">Add Urls</a>
					<?php /*
					<ul class="sub-menu" style="display: none;">
						<li
							class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1427"
							id="menu-item-1427"><a
							href="http://www.ccav1.com/category/windows/win7-windows">Win7</a></li>
						<li
							class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1428"
							id="menu-item-1428"><a
							href="http://www.ccav1.com/category/windows/winxp">WinXP</a></li>
						<li
							class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1426"
							id="menu-item-1426"><a
							href="http://www.ccav1.com/category/windows/win2k">Win2K</a></li>
					</ul>
					*/?>
				</li>
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-524" id="menu-item-524">
					<a href="<?php echo URLS::absolute('/oh/lists/');?>" class="goal" rel="addhtmls">Lists</a>
				</li>
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-524" id="menu-item-524">
					<a href="<?php echo URLS::absolute('/oh/cat/');?>" class="goal" rel="addhtmls">Old</a>
				</li>
			</ul>
		</div>
		<?php /*
		<div id="rss">
			<ul>
				<li class="rssfeed"><a title="欢迎订阅CCAV1和谐频道" class="icon1"
					target="_blank" href="http://www.ccav1.com/feed"
					style="text-indent: 0pt;"><span class="hover" style="opacity: 0;"></span></a></li>
				<li class="rssmail"><a title="给我发邮件" class="icon4" target="_blank"
					href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=j_Lu9-3m98-55v_h-v6h7ODi"
					style="text-indent: 0pt;"><span class="hover" style="opacity: 0;"></span></a></li>
			</ul>
		</div>
		*/?>
		<div class="clear"></div>
		</div>
	</div>
	<!-- end header -->


	<div id="content">
		<div class="main">

			<!-- msg -->
			<?php if ($msg != '') { ?>
			<div class="post">
				<div class="post_date">
					<span class="date_m">
						Error
					</span>
				</div>
				<div class="article">
					<h2>
						<a title="Add Urls" rel="bookmark" href="javascript:void(0);">MESSAGE</a>
						<span class="new"></span>
					</h2>
					<div class="entry_post" style="line-height:35px;">
						<div class="block">
							<code><?php echo '<font style="color:red;">SHOW WRONG : It~s ' . $msg . '</font>'; ?></code>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<?php } ?>

			<div class="post" id="addurls">
				<div class="post_date">
					<?php $catdate = getdate();?>
					<span class="date_m"><?php echo $catdate['month'];?></span>
					<span class="date_d"><?php echo $catdate['mday'];?></span>
					<span class="date_y"><?php echo $catdate['year'];?></span>
				</div>
				<div class="article">
					<h2>
						<a title="Add Urls" rel="bookmark" href="javascript:void(0);">Add Urls</a>
						<span class="new"></span>
					</h2>
					<div class="entry_post" style="line-height:35px;">
						<form action="<?php echo $index . '/oh/add_url/'; ?>" method="post">
							<div class="urlsc" style="position: relative;">
							<ul>
								<li>链接地址：<input class="input-sc" style="width: 400px;" type="text"
									id="url" name="url" /></li>
								<li>链接标题：<input class="input-sc" style="width: 400px;" type="text"
									id="title" name="title" /></li>
								<li style="position:relative;">图标地址：<img style="position: absolute; margin: 4px; bottom:4px;" id="img_icon"
									src="<?php
									echo $base . '/favicon.ico';
									?>" alt="cat"></img><input class="input-sc"
									style="width: 400px; text-indent: 20px;" type="text" id="ico_url"
									name="ico_url" /></li>
							</ul>
							</div>

							<div class="sc">
											分类：<?php
											echo $dropdown;
											?>
										 	<input value="提交" class="button-y" type="submit" /> <a
								target="_blank" href="<?php
								echo $index . '/oh/lists/';
								?>">urls列表</a></div>
						</form>
					</div>
					<div class="clear"></div>
					<div class="info">作者：cat </div>
				</div>
			</div>
			<div class="clear"></div>

			<div class="post" id="addtypes">
				<div class="article">
					<h2>
						<a title="Add Urls" rel="bookmark" href="javascript:void(0);">Add Type</a>
						<span class="new"></span>
					</h2>
					<div class="entry_post" style="line-height:35px;">
						<form action="<?php echo $index . '/oh/add_type/'; ?>" method="post">
							<div class="sc">
								分类名： <input class="input-sc" type="text" id="type_name" name="type_name" />
								排序：<input maxlength="2" class="input-sc" type="text" id="level" name="level" style="width: 50px;" />
								<input value="提交" class="button-y" type="submit" />
							</div>
						</form>

						<div class="widget">
							<h3>存在分类</h3>
							<?php 	$minFontSize=12;
									$maxFontSize=25;
							?>
							<?php foreach ( $types as $type ) { ?>
							<a style="<?php echo 'font-size:'.($minFontSize+lcg_value()*(abs($maxFontSize-$minFontSize))).'px;color:#'.dechex(rand(0,255)).dechex(rand(0,196)).dechex(rand(0,255));?>" title="<?php echo "id." . $type->type_id; ?>"
								 href="javascript:void(0);"><?php echo $type->name . '(Lv.' . $type->level . ')'; ?>
						    </a>
							<?php } ?>
						</div>
					</div>
					<div class="clear"></div>
					<div class="info">作者：cat </div>
				</div>
			</div>

			<div class="clear"></div>
			<div class="post" id="addhtmls">
				<div class="article">
					<h2>
						<a title="Add Urls" rel="bookmark" href="javascript:void(0);">Import</a>
						<span class="new"></span>
					</h2>
					<div class="entry_post" style="line-height:35px;">
						<form id="create" action="<?php echo $_SERVER ['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
							<div id="upload" style="position:relative;">
								<div class="sc">
								选择文件： <input id="hdfile" readonly="readonly" class="input-sc">
								<a id="uploadfile" href="javascript:void(0);">选择文件</a>
								<div style="display:inline;"><input type="submit" value="上传" class="button-y "> <input
									type="file" hidefocus="hidefocus"
									style="position: absolute; top: 3px; left: 61px; height: 25px; width: 220px; opacity: 0; -moz-opacity: 0; filter: alpha(opacity =                 0);"
									onchange="hdfile.value=this.value" id="icon_file" name="icon_file"></div>
								</div>
							</div>
							<input type="hidden" name="type" value="0" />

							<code>先将浏览器的收藏夹导出为html文件。<a
								href="http://www.tao123.com/help/shoucangdaorudaochu.html"
								target="_blank" style="color: #008E00;">查看教程 »</a></code>
						</form>
					</div>
					<div class="clear"></div>
					<div class="info">作者：cat </div>
				</div>
			</div>
		</div>

</div>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; 2011-2012 . Powered by cyw
	</div>

</div>

<script type="text/javascript">

	        $(document).ready(function() {
	            /* -------*/
	    		$("#level").keyup(function(e){
	    			$(this).val($(this).val().replace(/[^0-9)]+/,''));
	    		}).focus(function(){
	    			$(this).val($(this).val().replace(/[^0-9]+/,''));
	    		});

	    		//$(".goal").each(function(){
					//$(this).click(function(){
						//location.hash= $(this).attr("rel");
					//});
		    	//});

	    		$("#url").blur(function(){
		    		var url ="<?php
								echo $index . '/oh/get_url_title/';
								?>";

					$.post(url,{url:$(this).val()},function(data){
						if (data.status == 'ok') {
							var ico_url = 'http://' + data.url_ico + '/favicon.ico';
							$("#title").val(data.title);
							$("#ico_url").val(ico_url);
							$("#img_icon").attr('src', ico_url);
						}

					},'json');
			    });


	            /* -------*/
	        });
</script>

</body>
</html>