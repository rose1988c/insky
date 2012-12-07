<?php
echo $header;
$this->load->helper('array');
?>

<!--[if lt IE 7]>
	<script type="text/javascript" src="static/js/pngfix.js"></script>
	<script>
		DD_belatedPNG.fix('img');
	</script>
<![endif]-->
<body>
<?php 
    echo $cat_menu;
?>


<div id="wrap">
	<div id="hdr">
		<div class="w">
			<a class="logo" rel="nofollow" href=""><span class="i">i</span>Cat在线工具</a>
			<div class="box modal">
				<div class="box-content">
					<ul class="clearfix">
						<li>
							<a href="js/">
								<div class="icon js"><img src="application/www/img/tool/icon/js.png" /></div>
								<h2>javascript工具</h2>
								<span>在线js美化、解压缩、混淆</span>
							</a>
						</li>
											<li>
							<a href="css/">
								<div class="icon css"><img src="application/www/img/tool/icon/css.png" /></div>
								<h2>css工具</h2>
								<span>在线css美化、格式化、压缩</span>
							</a>
						</li>
											<li>
							<a href="php/">
								<div class="icon php"><img src="application/www/img/tool/icon/php.png" /></div>
								<h2>php工具</h2>
								<span>在线php美化、格式化、解密</span>
							</a>
						</li>
											<li>
							<a href="html/">
								<div class="icon html"><img src="application/www/img/tool/icon/html.png" /></div>
								<h2>html工具</h2>
								<span>在线html美化、格式化、压缩</span>
							</a>
						</li>
						<li>
							<a href="urlconvert/">
								<div class="icon urlconvert"><img src="application/www/img/tool/icon/urlconvert.png" /></div>
								<h2>下载链接转换</h2>
								<span>在线下载链接转换</span>
							</a>
						</li>
											<li>
							<a href="regex/">
								<div class="icon regex"><img src="application/www/img/tool/icon/regex.png" /></div>
								<h2>正则测试工具</h2>
								<span>正则表达式测试工具</span>
							</a>
						</li>
											<li>
							<a href="mobile/">
								<div class="icon mobile"><img src="application/www/img/tool/icon/mobile.png" /></div>
								<h2>手机号归属地</h2>
								<span>手机号码归属地查询</span>
							</a>
						</li>
											<li>
							<a href="zhconvert/">
								<div class="icon zhconvert"><img src="application/www/img/tool/icon/zhconvert.png" /></div>
								<h2>中文简繁体转换</h2>
								<span>中文简繁体转换</span>
							</a>
						</li>
											<li>
							<a href="todayonhistory/">
								<div class="icon todayonhistory"><img src="application/www/img/tool/icon/todayonhistory.png" /></div>
								<h2>历史上的今天</h2>
								<span>历史上的今天</span>
							</a>
						</li>
											<li>
							<a href="ip/">
								<div class="icon ip"><img src="application/www/img/tool/icon/ip.png" /></div>
								<h2>IP地址查询</h2>
								<span>IP地址查询</span>
							</a>
						</li>
											<li>
							<a href="netcard/">
								<div class="icon netcard"><img src="application/www/img/tool/icon/netcard.png" /></div>
								<h2>IP签名图片</h2>
								<span>IP签名图片</span>
							</a>
						</li>
											<li>
							<a href="favicon/">
								<div class="icon favicon"><img src="application/www/img/tool/icon/favicon.png" /></div>
								<h2>favicon在线制作</h2>
								<span>favicon在线制作</span>
							</a>
						</li>
											<li>
							<a href="sql/">
								<div class="icon sql"><img src="application/www/img/tool/icon/sql.png" /></div>
								<h2>sql工具</h2>
								<span>sql在线美化，格式化</span>
							</a>
						</li>
											<li>
							<a href="py5bconvert/">
								<div class="icon py5bconvert"><img src="application/www/img/tool/icon/py5bconvert.png" /></div>
								<h2>汉字转拼音五笔</h2>
								<span>汉字转拼音五笔</span>
							</a>
						</li>
											<li>
							<a href="ruby/">
								<div class="icon ruby"><img src="application/www/img/tool/icon/ruby.png" /></div>
								<h2>ruby工具</h2>
								<span>ruby代码在线美化</span>
							</a>
						</li>
						
						<li>
							<a href="urlconvert/">
								<div class="icon urlconvert"><img src="application/www/img/tool/icon/urlconvert.png" /></div>
								<h2>Google IP Hosts</h2>
								<span><a title="ipv4 hosts for Google" href="//OpenGG.me/wp-content/uploads/2011/09/hosts.php?4" target="_blank">ipv4 hosts for Google</a>
									 | <a title="ipv6 hosts for Google" href="//OpenGG.me/wp-content/uploads/2011/09/hosts.php" target="_blank">ipv6 hosts for Google</a>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="h_notice" title="点击复制网址">网址：http://insky.sinaapp.com/index.php/tool/</div>
			<h1 class="hidden">iCat在线工具</h1>
			<p class="nav"><a href="http://insky.sinaapp.com/index.php/account/login/">登录</a> <a href="http://insky.sinaapp.com/index.php/account/register/">注册</a></p>
			<div id="weather"></div>
		</div>
	</div>
	<div id="nav">
		<div class="w">
			<ul id="menu" class="sf-menu clearfix">
				<li>
					<a id="showall" href="javascript:;">所有</a>
					<!-- <ul>
						<li><a href="#">生活娱乐</a></li>
						<li><a href="#">代码转换</a></li>
					</ul> -->
				</li>
				<li class="current"><a href="#">我的工具(开发中)</a></li>
				<li><a href="#">其他</a></li>
			</ul>
		</div>
	</div>
	<div id="bdy">
		<div class="w">			
			<div class="main" id="page">				
				<div class="inner">											
				<div class="item">							
				<a href="js/">								
    				<div class="bigicon js"><img src="application/www/img/tool/icon/js.png" /></div>								
    				<h2>javascript工具</h2>								
    				<span>在线js美化、解压缩、混淆</span>							
				</a>
    			
    			<?php include 'application/views/tool/notest.tpl.php';?>	
    									
				<ul class="inner">
					<!-- <li style="margin-top: 0;"><img src="application/www/img/ad.jpg" /></li> -->
					<li class="notice"><var>*</var> 数据无价，处理代码前记得做好备份哦！:)</li>
					<li class="notice" style="text-indent: 2em; overflow: hidden;">有苦有乐的人生是充实的；有成有败的人生是合理的；有得有失的人生是公平的；人生坎坷不平才有价值。有赢就有输，有成就有败，有得就有失；要成就必须去承担，要光明必须接受黑暗，要志业必须去付出；世间任何一件非凡之事，必有超常险境和苦难，旋涡中淡定从容者必至远。</li>
				</ul>
				<div class="inner">
					<!-- hold -->
				</div>
			</div>		
		</div>
		
		</div>	
			<div id="ftr">		
				<div class="w">			
					<p class="declare">				
						<a href="mailto:rose1988.c@gmail.com">联系我们</a> - <a href="">工具首页</a> - <br /> 
						Copyright &copy; 2011-2012 <a href="#" target="_blank">iteam</a>. All Rights Reserved. Current version is 2.7.0.			</p>		</div>	</div></div>
						<a href="#" id="goTop" title="返回顶部">返回顶部</a>

	<script type="text/javascript">
	        $(document).ready(function() {
	            /* -------*/
				$('#shorturl').zclip({
					path: '/application/www/js/ZeroClipboard.swf',
					beforeCopy: function() {
					// $(this).select();
        			},
        			copy: function() {
        				return $(this).val();
        			},
        			afterCopy: function() {
        				alert('地址已经复制。');
        			}
        		});
        		$('.h_notice').zclip({
        			path: '/application/www/js/ZeroClipboard.swf',
        			copy: 'http://insky.sinaapp.com/index.php/tool/',
        			afterCopy: function() {
        				alert('信息已复制。');
        			}
        		});
        
        		$('.h_notice').tipsy({gravity: 'w', fade: true, fadeIn: 300, fadeOut: 300});
        
        		Mousetrap.bind('alt+a', function() {
        			$('a#showall').trigger('click');
        		});


				$("div[class=item] > a").each(function(){
					var redirect = "http://box.inote.cc/";
					$(this).click(function(){
						var url = $(this).attr("href");
						if (url != 'javascript:void(0);'){
							$(this).attr("href", redirect + url);
							//window.location.href = redirect + url;
						}
					});
				});
        		
	            /* -------*/
	        });
</script>
</body>
</html>
