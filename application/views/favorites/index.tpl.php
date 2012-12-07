<?php
echo $header;
$this->load->helper('array');
?>

<body>
<div class="topchannel">
	<div class="item">
		<div id="show_date_div" class="date"><a target="_blank" href="<?php echo $base . '/index.php/cat/';?>">2012年2月24日 周五 <span>(二月初三)</span></a></div>

		<div class="user_tool">
			<!--email-->
		</div>
		<div class="home">
			<a onclick="UtilTool.addFavorite();return false;" href="javascript:void(0);"><b></b>收藏</a>
			<?php /*|<a id="set_show_switch" onclick="MYNAV.showSetPanel();return false;" href="javascript:void(0);">设置</a>
			<a href="<?php echo $base . '/index.php/cat/';?>">cat</a> |
			*/?>
			<a target="__blank" class="weibo" title="陈韵文C" href="http://www.weibo.com/349252963/">关注我</a>
			<?php /*
			<a href="<?php echo $base . '/index.php/oh/lists/';?>">新版</a>
			*/?>
			<?php if ($auth) { echo ' | <font style="color:#0088DD;">' . $auth . '</font><a href="javascript:void(0);" id="loginout" rel="' . $auth . '">Exit</a>'; } else {?>
			<a href="<?php echo $base . '/index.php/account/login/';?>">login</a>
			<?php }?>
		</div>
		<div style="display:none" id="set_panel" class="minipop setting">
			<b></b>
			<a class="close" title="关闭" onclick="MYNAV.hideSetPanel();return false;" href="javascript:void(0);">关闭</a>
			<p><input type="radio" checked="checked" id="recent_view_show" name="recent_view"><label for="recent_view_show">显示“最近常用”这一行</label></p>
			<p><input type="radio" id="recent_view_hide" name="recent_view"><label for="recent_view_hide">不再显示“最近常用”</label></p>
			<a class="pop_btn" title="" onclick="MYNAV.delAllClick(); return false;" href="javascript:void(0);">清空网址</a>
			<a class="pop_btn" title="" onclick="MYNAV.saveSet();return false;" href="javascript:void(0);">保  存</a>
		</div>
	</div>
	<div style="display: none" id="often_clicked" class="lately"></div>
</div>


		<div class="time_weather">
			<div class="time">
				<p><b id="time_show_h">16</b><img src="application/www/img/clockimg.gif" style="width: 7px; height: 16px;"><b id="time_show_m">05</b><b class="small" style="display: none" id="time_show_s"></b></p>
			</div>
		</div>
<div class="topguid_list">

		<?php /*
		*/?>


		<div class="item">
			<h2 class="title"><span class="t"><b class="icon"><img src="/application/www/img/mzdh.png" style="width: 14px; height: 14px;"></b><?php echo arrayfitter_types($types,9)->name;?></span></h2>
				<ul>
					<!-- type 名站导航(9) -->
					<?php shuffle($fav_mingzhan);?>
					<?php foreach ($fav_mingzhan as $result) {?>
					<li>
						<a rel="external nofollow" target="_blank" title="<?php echo $result->title;?>" href="<?php echo $result->url;?>" class="pic" onclick="MYNAV.recordClick(this);">
							<img width="51" height="51" alt="<?php echo $result->title;?>" src="<?php echo $result->icon_url;?>"><b class="cover"></b>
					    </a>
					    <p>
					    	<a rel="external nofollow" target="_blank" title="<?php echo $result->title;?>" href="<?php echo $result->url;?>" onclick="MYNAV.recordClick(this);"><?php echo $result->title;?></a><span>
					    </p>
					</li>
					<?php }?>
				</ul>
		</div>

		<div style="display: none" id="often_clicked" class="lately"></div>

		<div class="item guid_list">

			<div class="guid_list_head">
				<a title="新闻" href="javascript:void(0);" class="n1">新闻</a>
				·<a title="财经" href="javascript:void(0);">财经</a>
				·<a title="军事" href="javascript:void(0);">军事</a>
			</div>

			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">
				<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/1242a566cfe5827d909db50f08653fbb.jpg"></b><a blockid="4371" target="_blank" href="http://123.xunlei.com/news.html" title="新闻">新闻</a></h2>
				<ul>
					<li>			<a rel="external nofollow" blockid="4371" title="新浪新闻    " target="_blank" onclick="MYNAV.recordClick(this);" href="http://news.sina.com.cn/">新浪新闻    </a>						</li>
					<li>			<a rel="external nofollow" blockid="4371" title="搜狐新闻    " target="_blank" onclick="MYNAV.recordClick(this);" href="http://news.sohu.com/">搜狐新闻    </a>						</li>
					<li>			<a rel="external nofollow" blockid="4371" title="中国新闻网 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.chinanews.com/">中国新闻网 </a>						</li>
					<li><strong class="hlight">			<a blockid="4371" title="视频快报" target="_blank" onclick="MYNAV.recordClick(this);" href="http://video.xunlei.com/?id=4120">视频快报</a></strong>						</li>
					<li>			<a rel="external nofollow" blockid="4371" title="凤凰资讯    " target="_blank" onclick="MYNAV.recordClick(this);" href="http://news.ifeng.com/">凤凰资讯    </a>						</li>
					<li>			<a rel="external nofollow" blockid="4371" title="新华网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.xinhuanet.com/">新华网</a>						</li>
					<li>			<a rel="external nofollow" blockid="4371" title="联合早报" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.zaobao.com/">联合早报</a>						</li>
					<li class="more"><a blockid="4371" title="更多" target="_blank" href="http://123.xunlei.com/news.html">更多»</a></li>
				</ul>
			</div>

			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/c71fe0dde14317cb37f1b960f3a89aee.jpg"></b><a blockid="4423" target="_blank" href="http://123.xunlei.com/gupiaojijin.html" title="财经">财经</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4423" title="东方财富" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.eastmoney.com/">东方财富</a>						</li>
							<li>			<a rel="external nofollow" blockid="4423" title="新浪财经" target="_blank" onclick="MYNAV.recordClick(this);" href="http://finance.sina.com.cn/">新浪财经</a>						</li>
							<li>			<a rel="external nofollow" blockid="4423" title="凤凰财经" target="_blank" onclick="MYNAV.recordClick(this);" href="http://finance.ifeng.com/">凤凰财经</a>						</li>
							<li>			<a rel="external nofollow" blockid="4423" title="招商信诺" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.cigna-club.cn/?uid=1801">招商信诺</a>						</li>
							<li>			<a rel="external nofollow" blockid="4423" title="金融界" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.jrj.com.cn/">金融界</a>						</li>
							<li>			<a rel="external nofollow" blockid="4423" title="和讯财经" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.hexun.com/">和讯财经</a>						</li>
							<li>			<a rel="external nofollow" blockid="4423" title="华尔街日报" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.cn.wsj.com/gb/">华尔街日报</a>						</li>
			<li class="more"><a blockid="4423" title="更多" target="_blank" href="http://123.xunlei.com/gupiaojijin.html">更多»</a></li>							</ul>
			</div>


			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/dc7825df50ff52cb3297fff6356bee8e.jpg"></b><a blockid="4375" target="_blank" href="http://123.xunlei.com/junshi.html" title="军事">军事</a></h2>
				<ul>
							<li>			<a rel="external nofollow" blockid="4375" title="中华网军事" target="_blank" onclick="MYNAV.recordClick(this);" href="http://military.china.com/zh_cn/">中华网军事</a>						</li>
							<li>			<a rel="external nofollow" blockid="4375" title="凤凰军事" target="_blank" onclick="MYNAV.recordClick(this);" href="http://news.ifeng.com/mil/">凤凰军事</a>						</li>
							<li>			<a rel="external nofollow" blockid="4375" title="新浪军事     " target="_blank" onclick="MYNAV.recordClick(this);" href="http://mil.news.sina.com.cn/">新浪军事     </a>						</li>
							<li>			<a rel="external nofollow" blockid="4375" title="环球军事  " target="_blank" onclick="MYNAV.recordClick(this);" href="http://mil.huanqiu.com/">环球军事  </a>						</li>
							<li>			<a rel="external nofollow" blockid="4375" title="米尔网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.junshijia.com/">米尔网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4375" title="军事前沿" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.qianyan001.com/">军事前沿</a>						</li>
							<li>			<a rel="external nofollow" blockid="4375" title="西陆军事" target="_blank" onclick="MYNAV.recordClick(this);" href="http://junshi.xilu.com/">西陆军事</a>						</li>
							<li class="more"><a blockid="4375" title="更多" target="_blank" href="http://123.xunlei.com/junshi.html">更多»</a></li>
				</ul>
			</div>




			<div class="guid_list_head">
				<a title="购物" href="javascript:void(0);" class="n1">购物</a>
				·<a title="视频" href="http://123.xunlei.com/news.html">视频</a>
				·<a title="影视" href="http://123.xunlei.com/movie.html">影视</a>
				·<a title="游戏" href="http://123.xunlei.com/game.html">游戏</a>
			</div>

			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/e6f6aee90e91f9bf43b30c62ad2d4606.jpg"></b><a blockid="4374" target="_blank" href="http://123.xunlei.com/gouwu.html" title="购物">购物</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4374" title="淘宝" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.taobao.com/">淘宝</a>			<span>·</span><a rel="external nofollow" blockid="4374" title="商城" href="http://www.tmall.com/" onclick="MYNAV.recordClick(this);" class="lk_2nd">商城</a>			</li>
							<li>			<a rel="external nofollow" blockid="4374" title="京东商城" target="_blank" onclick="MYNAV.recordClick(this);" href="http://p.yiqifa.com/c?s=4c799a63&amp;w=439434&amp;c=4509&amp;i=5862&amp;l=0&amp;e=&amp;t=http://www.360buy.com">京东商城</a>						</li>
							<li>			<a rel="external nofollow" blockid="4374" title="凡客诚品	        " target="_blank" onclick="MYNAV.recordClick(this);" href="http://p.yiqifa.com/c?s=faf8e1a3&amp;w=439434&amp;c=255&amp;i=150&amp;l=0&amp;e=c&amp;t=http://www.vancl.com">凡客诚品	        </a>						</li>
							<li>			<a rel="external nofollow" blockid="4374" title="全视购物" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.quanshimall.com/?css=web">全视购物</a>						</li>
							<li>			<a rel="external nofollow" blockid="4374" title="梦芭莎" target="_blank" onclick="MYNAV.recordClick(this);" href="http://p.yiqifa.com/c?s=bc33b964&amp;w=439434&amp;c=298&amp;i=323&amp;l=0&amp;e=&amp;t=http://www.moonbasa.com/">梦芭莎</a>						</li>
							<li>			<a rel="external nofollow" blockid="4374" title="唯品会" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.vipshop.com/g_url.php?g_id=33407">唯品会</a>						</li>
							<li>			<a rel="external nofollow" blockid="4374" title="康途" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.kangtu.com/?src=xl123 ">康途</a>			<span>·</span><a rel="external nofollow" blockid="4374" title="商城" href="http://www.kangtu.com/?src=xl123 " onclick="MYNAV.recordClick(this);" class="lk_2nd">商城</a>			</li>
				<li class="more"><a blockid="4374" title="更多" target="_blank" href="http://123.xunlei.com/gouwu.html">更多»</a></li>							</ul>
			</div>

			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/81bda818719916a679d5c1e6fa80f160.jpg"></b><a target="_blank" href="http://123.xunlei.com/video.html" title="视频">视频</a></h2>
								<ul>
							<li><strong class="hlight">			<a title="迅雷看看" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.xunlei.com/?id=4120">迅雷看看</a></strong>						</li>
							<li>			<a rel="external nofollow" title="优酷网  " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.youku.com/">优酷网  </a>						</li>
							<li>			<a rel="external nofollow" title="凤凰视频 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://v.ifeng.com/">凤凰视频 </a>						</li>
							<li>			<a rel="external nofollow" title="美女电影院" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.xiaoyao.tv/">美女电影院</a>						</li>
							<li>			<a rel="external nofollow" title="酷6网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.ku6.com/">酷6网</a>						</li>
							<li>			<a title="男性影院" target="_blank" onclick="MYNAV.recordClick(this);" href="http://movie.xunlei.com/man/?id=4120">男性影院</a>						</li>
							<li>			<a rel="external nofollow" title="新浪视频    " target="_blank" onclick="MYNAV.recordClick(this);" href="http://video.sina.com.cn/">新浪视频    </a>						</li>
			<li class="more"><a title="更多" target="_blank" href="http://123.xunlei.com/video.html">更多»</a></li>
			</ul>
</div>

			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/22/be117411f75276963a62e220a5a416a5.jpg"></b><a blockid="4372" target="_blank" href="http://123.xunlei.com/movie.html" title="影视">影视</a></h2>
								<ul>
							<li>			<a blockid="4372" title="电影 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://movie.xunlei.com/?id=4120">电影 </a>						</li>
							<li>			<a blockid="4372" title="电视剧" target="_blank" onclick="MYNAV.recordClick(this);" href="http://tv.xunlei.com/?id=4120">电视剧</a>						</li>
							<li>			<a blockid="4372" title="综艺" target="_blank" onclick="MYNAV.recordClick(this);" href="http://zy.xunlei.com/?id=4120">综艺</a>						</li>
							<li>			<a blockid="4372" title="动漫   " target="_blank" onclick="MYNAV.recordClick(this);" href="http://anime.xunlei.com/?id=4120">动漫   </a>						</li>
							<li>			<a blockid="4372" title="娱乐" target="_blank" onclick="MYNAV.recordClick(this);" href="http://yule.xunlei.com/?id=4120">娱乐</a>						</li>
							<li>			<a blockid="4372" title="电视台	" target="_blank" onclick="MYNAV.recordClick(this);" href="http://movie.xunlei.com/live/?id=4120">电视台	</a>						</li>
							<li>			<strong class="hlight2"><a blockid="4372" title="夫妻那些事" target="_blank" onclick="MYNAV.recordClick(this);" href="http://kankan.xunlei.com/vod/mp4/64/64823.shtml?id=4120">夫妻那些事</a></strong>						</li>
			<li class="more"><a blockid="4372" title="更多" target="_blank" href="http://123.xunlei.com/movie.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/05dbb805d159b237dc1396104bbb5237.jpg"></b><a blockid="4373" target="_blank" href="http://123.xunlei.com/game.html" title="游戏">游戏</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4373" title="4399小游戏" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/">4399小游戏</a>						</li>
							<li>			<a rel="external nofollow" blockid="4373" title="7k7k游戏" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.7k7k.com/">7k7k游戏</a>						</li>
							<li>			<a rel="external nofollow" blockid="4373" title="6949小游戏" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.6949.com ">6949小游戏</a>						</li>
							<li>			<a rel="external nofollow" blockid="4373" title="54op网页游戏" target="_blank" onclick="MYNAV.recordClick(this);" href="http://win.54op.com/?id=xunl">54op网页游戏</a>						</li>
							<li>			<a rel="external nofollow" blockid="4373" title="爱拍游戏" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.aipai.com">爱拍游戏</a>						</li>
							<li>			<a rel="external nofollow" blockid="4373" title="猫扑游戏" target="_blank" onclick="MYNAV.recordClick(this);" href="http://track.mop.com/t/1VuvmY">猫扑游戏</a>						</li>
							<li>			<a blockid="4373" title="迅雷游戏" target="_blank" onclick="MYNAV.recordClick(this);" href="http://youxi.xunlei.com/">迅雷游戏</a>						</li>
			<li class="more"><a blockid="4373" title="更多" target="_blank" href="http://123.xunlei.com/game.html">更多»</a></li>							</ul>
</div>


			<div class="guid_list_head"><a blockid="4461" title="社区" href="http://123.xunlei.com/shequ.html" class="n1">社区</a>
				·<a blockid="4461" title="音乐" href="http://123.xunlei.com/music.html">音乐</a>
				·<a blockid="4461" title="生活" href="http://123.xunlei.com/shenghuoxinxi.html">生活</a>
				·<a blockid="4461" title="小说" href="http://123.xunlei.com/xiaoshuo.html">小说</a>
				·<a blockid="4461" title="交友" href="http://123.xunlei.com/aiqingjiaoyou.html">交友</a>
				·<a blockid="4461" title="财经" href="http://123.xunlei.com/gupiaojijin.html">财经</a>
			</div>

			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/7161cd6de4ef5c203856af4ed274ccab.jpg"></b><a blockid="4389" target="_blank" href="http://123.xunlei.com/shequ.html" title="社区">社区</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4389" title="新浪微博" target="_blank" onclick="MYNAV.recordClick(this);" href="http://weibo.com/">新浪微博</a>						</li>
							<li>			<a rel="external nofollow" blockid="4389" title="百度贴吧" target="_blank" onclick="MYNAV.recordClick(this);" href="http://tieba.baidu.com/">百度贴吧</a>						</li>
							<li>			<a rel="external nofollow" blockid="4389" title="人人网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.renren.com/">人人网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4389" title="女子学院" target="_blank" onclick="MYNAV.recordClick(this);" href="http://bbs.aili.com/portal.php">女子学院</a>						</li>
							<li>			<a rel="external nofollow" blockid="4389" title="QQ空间   " target="_blank" onclick="MYNAV.recordClick(this);" href="http://qzone.qq.com/">QQ空间   </a>						</li>
							<li>			<a rel="external nofollow" blockid="4389" title="开心网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.kaixin001.com/">开心网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4389" title="天涯" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.tianya.cn/">天涯</a>						</li>
			<li class="more"><a blockid="4389" title="更多" target="_blank" href="http://123.xunlei.com/shequ.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/fb96c1f788522445e6c104b6dcc3ba80.jpg"></b><a blockid="4390" target="_blank" href="http://123.xunlei.com/music.html" title="音乐">音乐</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4390" title="百度MP3" target="_blank" onclick="MYNAV.recordClick(this);" href="http://mp3.baidu.com/">百度MP3</a>						</li>
							<li>			<a rel="external nofollow" blockid="4390" title="一听音乐" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.1ting.com/">一听音乐</a>						</li>
							<li>			<a rel="external nofollow" blockid="4390" title="音悦台" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.yinyuetai.com/">音悦台</a>						</li>
							<li>			<a rel="external nofollow" blockid="4390" title="酷我音乐盒   " target="_blank" onclick="MYNAV.recordClick(this);" href="http://mbox.kuwo.cn/">酷我音乐盒   </a>						</li>
							<li>			<a rel="external nofollow" blockid="4390" title="虾米音乐网   " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.xiami.com/">虾米音乐网   </a>						</li>
							<li>			<a rel="external nofollow" blockid="4390" title="酷狗音乐" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.kugou.com/">酷狗音乐</a>						</li>
							<li>			<a rel="external nofollow" blockid="4390" title="搜狗音乐" target="_blank" onclick="MYNAV.recordClick(this);" href="http://mp3.sogou.com/">搜狗音乐</a>						</li>
			<li class="more"><a blockid="4390" title="更多" target="_blank" href="http://123.xunlei.com/music.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/a4269ad1dcba8fb3d23e47c541ca5da7.jpg"></b><a blockid="4391" target="_blank" href="http://123.xunlei.com/shenghuoxinxi.html" title="生活">生活</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4391" title="58同城" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.58.com/">58同城</a>						</li>
							<li>			<a rel="external nofollow" blockid="4391" title="赶集网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.ganji.com/">赶集网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4391" title="搜房网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.soufun.com/">搜房网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4391" title="签证移民" target="_blank" onclick="MYNAV.recordClick(this);" href="http://ym.533.com/">签证移民</a>						</li>
							<li>			<a rel="external nofollow" blockid="4391" title="美食美酒" target="_blank" onclick="MYNAV.recordClick(this);" href="http://show.aili.com/">美食美酒</a>						</li>
							<li>			<a rel="external nofollow" blockid="4391" title="两性技巧" target="_blank" onclick="MYNAV.recordClick(this);" href="http://sex.kanglu.com/xjq/">两性技巧</a>						</li>
							<li>			<a rel="external nofollow" blockid="4391" title="智联招聘" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.zhaopin.com">智联招聘</a>						</li>
			<li class="more"><a blockid="4391" title="更多" target="_blank" href="http://123.xunlei.com/shenghuoxinxi.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/8ea878fcd751c2e8f0f20f073ca7ec1c.jpg"></b><a blockid="4392" target="_blank" href="http://123.xunlei.com/xiaoshuo.html" title="小说">小说</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4392" title="起点中文网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.qidian.com/">起点中文网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4392" title="潇湘书院" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.xxsy.net/">潇湘书院</a>						</li>
							<li>			<a rel="external nofollow" blockid="4392" title="纵横中文网	" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.zongheng.com/">纵横中文网	</a>						</li>
							<li>			<a rel="external nofollow" blockid="4392" title="红袖添香" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.hongxiu.com/">红袖添香</a>						</li>
							<li>			<a rel="external nofollow" blockid="4392" title="逐浪小说网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.zhulang.com/ ">逐浪小说网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4392" title="性趣闻" target="_blank" onclick="MYNAV.recordClick(this);" href="http://sex.kanglu.com/xqw/">性趣闻</a>						</li>
							<li>			<a rel="external nofollow" blockid="4392" title="言情小说吧" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.xs8.cn/">言情小说吧</a>						</li>
			<li class="more"><a blockid="4392" title="更多" target="_blank" href="http://123.xunlei.com/xiaoshuo.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/bbfbbb83806e55ceba65b3b3509bc76b.jpg"></b><a blockid="4422" target="_blank" href="http://123.xunlei.com/aiqingjiaoyou.html" title="交友">交友</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4422" title="珍爱网   " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.zhenai.com/">珍爱网   </a>						</li>
							<li>			<a rel="external nofollow" blockid="4422" title="百合网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.baihe.com/">百合网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4422" title="世纪佳缘" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.jiayuan.com/">世纪佳缘</a>						</li>
							<li>			<a rel="external nofollow" blockid="4422" title="绝对100婚恋网  " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.juedui100.com/">绝对100婚恋网  </a>						</li>
							<li>			<a rel="external nofollow" blockid="4422" title="百度爱情吧	" target="_blank" onclick="MYNAV.recordClick(this);" href="http://tieba.baidu.com/f?kw=%B0%AE%C7%E9/">百度爱情吧	</a>						</li>
							<li>			<a rel="external nofollow" blockid="4422" title="明星达人" target="_blank" onclick="MYNAV.recordClick(this);" href="http://show.aili.com/index.php?m=member&amp;c=super_member&amp;a=memberList">明星达人</a>						</li>
							<li>			<a rel="external nofollow" blockid="4422" title="嫁我网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.marry5.com/">嫁我网</a>						</li>
			<li class="more"><a blockid="4422" title="更多" target="_blank" href="http://123.xunlei.com/aiqingjiaoyou.html">更多»</a></li>							</ul>
</div>


			<div class="guid_list_head"><a blockid="4462" title="邮箱" href="http://123.xunlei.com/mail.html" class="n1">邮箱</a>
·<a blockid="4462" title="汽车" href="http://123.xunlei.com/auto.html">汽车</a>
·<a blockid="4462" title="女性" href="http://123.xunlei.com/nvxingshishang.html">女性</a>
·<a blockid="4462" title="手机" href="http://123.xunlei.com/shouji.html">手机</a>
·<a blockid="4462" title="银行" href="http://123.xunlei.com/yinhang.html">银行</a>
·<a blockid="4462" title="团购" href="http://123.xunlei.com/tuangou.html">团购</a>
</div>

			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/50e194a2356aa3c0c7523d82c19eddf0.jpg"></b><a blockid="4424" target="_blank" href="http://123.xunlei.com/mail.html" title="邮箱">邮箱</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4424" title="163邮箱" target="_blank" onclick="MYNAV.recordClick(this);" href="http://mail.163.com/">163邮箱</a>						</li>
							<li>			<a rel="external nofollow" blockid="4424" title="126邮箱" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.126.com/">126邮箱</a>						</li>
							<li>			<a rel="external nofollow" blockid="4424" title="雅虎邮箱" target="_blank" onclick="MYNAV.recordClick(this);" href="http://mail.cn.yahoo.com/">雅虎邮箱</a>						</li>
							<li>			<a rel="external nofollow" blockid="4424" title="QQ邮箱" target="_blank" onclick="MYNAV.recordClick(this);" href="https://mail.qq.com/">QQ邮箱</a>						</li>
							<li>			<a rel="external nofollow" blockid="4424" title="TOM免费邮箱" target="_blank" onclick="MYNAV.recordClick(this);" href="http://mail.tom.com/">TOM免费邮箱</a>						</li>
							<li>			<a rel="external nofollow" blockid="4424" title="Hotmail" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.hotmail.com/">Hotmail</a>						</li>
							<li>			<a rel="external nofollow" blockid="4424" title="搜狐邮箱" target="_blank" onclick="MYNAV.recordClick(this);" href="http://mail.sohu.com/">搜狐邮箱</a>						</li>
			<li class="more"><a blockid="4424" title="更多" target="_blank" href="http://123.xunlei.com/mail.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/6a1f152da5f8e3fd1c8f84df8878f545.jpg"></b><a blockid="4425" target="_blank" href="http://123.xunlei.com/auto.html" title="汽车">汽车</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4425" title="汽车之家" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.autohome.com.cn/">汽车之家</a>						</li>
							<li>			<a rel="external nofollow" blockid="4425" title="新浪汽车" target="_blank" onclick="MYNAV.recordClick(this);" href="http://auto.sina.com.cn/">新浪汽车</a>						</li>
							<li>			<a rel="external nofollow" blockid="4425" title="易车网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.bitauto.com/">易车网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4425" title="爱卡汽车" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.xcar.com.cn/">爱卡汽车</a>						</li>
							<li>			<a rel="external nofollow" blockid="4425" title="太平洋汽车" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.pcauto.com.cn/">太平洋汽车</a>						</li>
							<li>			<a rel="external nofollow" blockid="4425" title="二手车之家" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.che168.com/china">二手车之家</a>						</li>
							<li>			<a rel="external nofollow" blockid="4425" title="雅虎汽车" target="_blank" onclick="MYNAV.recordClick(this);" href="http://autos.cn.yahoo.com/?f=E109_58_4">雅虎汽车</a>						</li>
			<li class="more"><a blockid="4425" title="更多" target="_blank" href="http://123.xunlei.com/auto.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/44cc4b36ac02c512c6fddfd098bf4fbd.jpg"></b><a blockid="4426" target="_blank" href="http://123.xunlei.com/nvxingshishang.html" title="女性">女性</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4426" title="瑞丽女性网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.rayli.com.cn/">瑞丽女性网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4426" title="太平洋女性" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.pclady.com.cn/">太平洋女性</a>						</li>
							<li>			<a rel="external nofollow" blockid="4426" title="美丽说" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.meilishuo.com/">美丽说</a>						</li>
							<li>			<a rel="external nofollow" blockid="4426" title="onlylady女人志" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.onlylady.com/">onlylady女人志</a>						</li>
							<li>			<a rel="external nofollow" blockid="4426" title="女性保健" target="_blank" onclick="MYNAV.recordClick(this);" href="http://lady.kanglu.com/">女性保健</a>						</li>
							<li>			<a rel="external nofollow" blockid="4426" title="欧美街拍" target="_blank" onclick="MYNAV.recordClick(this);" href="http://fashion.aili.com/west/">欧美街拍</a>						</li>
							<li>			<a rel="external nofollow" blockid="4426" title="她秀网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.sheshows.com/?hmsr=123">她秀网</a>						</li>
			<li class="more"><a blockid="4426" title="更多" target="_blank" href="http://123.xunlei.com/nvxingshishang.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/42d7d2232e762429d2807b8abaa728fc.jpg"></b><a blockid="4427" target="_blank" href="http://123.xunlei.com/shouji.html" title="手机">手机</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4427" title="新浪手机" target="_blank" onclick="MYNAV.recordClick(this);" href="http://mobile.sina.com.cn/">新浪手机</a>						</li>
							<li>			<a rel="external nofollow" blockid="4427" title="中关村手机" target="_blank" onclick="MYNAV.recordClick(this);" href="http://mobile.zol.com.cn/">中关村手机</a>						</li>
							<li>			<a rel="external nofollow" blockid="4427" title="太平洋手机" target="_blank" onclick="MYNAV.recordClick(this);" href="http://mobile.pconline.com.cn/">太平洋手机</a>						</li>
							<li>			<a blockid="4427" title="迅雷手机官网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://m.xunlei.com/?referfrom=123.xunlei?id=4120">迅雷手机官网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4427" title="手机中国" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.cnmo.com/">手机中国</a>						</li>
							<li>			<a rel="external nofollow" blockid="4427" title="泡泡手机" target="_blank" onclick="MYNAV.recordClick(this);" href="http://mobile.pcpop.com/">泡泡手机</a>						</li>
							<li>			<a rel="external nofollow" blockid="4427" title="IT168手机" target="_blank" onclick="MYNAV.recordClick(this);" href="http://mobile.it168.com/">IT168手机</a>						</li>
			<li class="more"><a blockid="4427" title="更多" target="_blank" href="http://123.xunlei.com/shouji.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/179a9f09fbae54e370ed6307ea333239.jpg"></b><a blockid="4464" target="_blank" href="http://123.xunlei.com/yinhang.html" title="银行">银行</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4464" title="工商银行" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.icbc.com.cn/icbc/">工商银行</a>						</li>
							<li>			<a rel="external nofollow" blockid="4464" title="建设银行" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.ccb.com/">建设银行</a>						</li>
							<li>			<a rel="external nofollow" blockid="4464" title="农业银行" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.abchina.com/">农业银行</a>						</li>
							<li>			<a rel="external nofollow" blockid="4464" title="招商银行 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.cmbchina.com/">招商银行 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4464" title="中国银行" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.boc.cn/">中国银行</a>						</li>
							<li>			<a rel="external nofollow" blockid="4464" title="交通银行" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.bankcomm.com/">交通银行</a>						</li>
							<li>			<a rel="external nofollow" blockid="4464" title="中信银行" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.ecitic.com/bank/">中信银行</a>						</li>
			<li class="more"><a blockid="4464" title="更多" target="_blank" href="http://123.xunlei.com/yinhang.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/868b9dc103b554a111790c0d74601ffe.jpg"></b><a blockid="4465" target="_blank" href="http://123.xunlei.com/tuangou.html" title="团购">团购</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4465" title="拉手网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.lashou.com/">拉手网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4465" title="美团网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.meituan.com/">美团网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4465" title="聚美优品" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.jumei.com?referer=xunlei_mz&amp;utm_source=xunlei&amp;utm_medium=nav&amp;utm_content=mz">聚美优品</a>						</li>
							<li>			<a rel="external nofollow" blockid="4465" title="糯米网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.nuomi.com/">糯米网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4465" title="唯品会闪购" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.vipshop.com/g_url.php?g_id=33408">唯品会闪购</a>						</li>
							<li>			<a rel="external nofollow" blockid="4465" title="精品团购" target="_blank" onclick="MYNAV.recordClick(this);" href="http://tuan.aili.com/fine/index.php">精品团购</a>						</li>
							<li>			<a rel="external nofollow" blockid="4465" title="窝窝团   " target="_blank" onclick="MYNAV.recordClick(this);" href="http://beijing.55tuan.com/">窝窝团   </a>						</li>
			<li class="more"><a blockid="4465" title="更多" target="_blank" href="http://123.xunlei.com/tuangou.html">更多»</a></li>							</ul>
</div>

			<div class="guid_list_head"><a blockid="4463" title="旅游" href="http://123.xunlei.com/lvyou.html" class="n1">旅游</a>
·<a blockid="4463" title="体育" href="http://123.xunlei.com/sports.html">体育</a>
·<a blockid="4463" title="电脑" href="http://123.xunlei.com/diannao.html">电脑</a>
·<a blockid="4463" title="彩票" href="http://123.xunlei.com/caipiao.html">彩票</a>
·<a blockid="4463" title="闪游" href="http://123.xunlei.com/xiaoyouxi.html">闪游</a>
·<a blockid="4463" title="其他" href="http://123.xunlei.com/zhaoz.html">其他</a>
</div>

			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/9279108b17954bc58c606b33a731b769.jpg"></b><a blockid="4466" target="_blank" href="http://123.xunlei.com/lvyou.html" title="旅游">旅游</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4466" title="携程旅游 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.ctrip.com/smartlink/smartlink.asp?c=ads10">携程旅游 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4466" title="去哪儿网 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.qunar.com/">去哪儿网 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4466" title="艺龙旅行网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://trc.adsage.com/url/go?slpg=9CRQZI ">艺龙旅行网</a>						</li>
							<li>			<a blockid="4466" title="迅雷旅游频道 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://video.xunlei.com/travel?id=4120">迅雷旅游频道 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4466" title="乐活旅游" target="_blank" onclick="MYNAV.recordClick(this);" href="http://lifestyle.aili.com/travel/">乐活旅游</a>						</li>
							<li>			<a rel="external nofollow" blockid="4466" title="签证百科" target="_blank" onclick="MYNAV.recordClick(this);" href="http://qz.533.com/lxcs/">签证百科</a>						</li>
							<li>			<a rel="external nofollow" blockid="4466" title="谷歌地图 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://ditu.google.cn/">谷歌地图 </a>						</li>
			<li class="more"><a blockid="4466" title="更多" target="_blank" href="http://123.xunlei.com/lvyou.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/08/b4c3ea46201a8a2225088e412fac425a.jpg"></b><a blockid="4467" target="_blank" href="http://123.xunlei.com/sports.html" title="体育">体育</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4467" title="新浪体育" target="_blank" onclick="MYNAV.recordClick(this);" href="http://sports.sina.com.cn/">新浪体育</a>						</li>
							<li>			<a rel="external nofollow" blockid="4467" title="搜狐体育 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://sports.sohu.com/">搜狐体育 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4467" title="雅虎体育" target="_blank" onclick="MYNAV.recordClick(this);" href="http://sports.cn.yahoo.com/?f=E109_58_6">雅虎体育</a>						</li>
							<li>			<a rel="external nofollow" blockid="4467" title="虎扑体育 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.hoopchina.com/">虎扑体育 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4467" title="网易体育" target="_blank" onclick="MYNAV.recordClick(this);" href="http://sports.163.com/">网易体育</a>						</li>
							<li>			<a rel="external nofollow" blockid="4467" title="直播吧" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.zhibo8.com/">直播吧</a>						</li>
							<li>			<a rel="external nofollow" blockid="4467" title="CCTV5直播 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://bugu.cntv.cn/live_cctv5/index.shtml/">CCTV5直播 </a>						</li>
			<li class="more"><a blockid="4467" title="更多" target="_blank" href="http://123.xunlei.com/sports.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/59b699f5a550d1797f57ecc410fbeb97.jpg"></b><a blockid="4468" target="_blank" href="http://123.xunlei.com/diannao.html" title="电脑">电脑</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4468" title="中关村在线   " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.zol.com.cn/">中关村在线   </a>						</li>
							<li>			<a rel="external nofollow" blockid="4468" title="太平洋电脑   " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.pconline.com.cn/">太平洋电脑   </a>						</li>
							<li>			<strong class="hlight2"><a blockid="4468" title="迅雷        " target="_blank" onclick="MYNAV.recordClick(this);" href="http://dl.xunlei.com/index.htm?tag=1/">迅雷        </a></strong>						</li>
							<li>			<a rel="external nofollow" blockid="4468" title="泡泡网       " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.pcpop.com/">泡泡网       </a>						</li>
							<li>			<a rel="external nofollow" blockid="4468" title="IT168网       " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.it168.com/">IT168网       </a>						</li>
							<li>			<a rel="external nofollow" blockid="4468" title="天空软件     " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.skycn.com/">天空软件     </a>						</li>
							<li>			<a rel="external nofollow" blockid="4468" title="华军软件     " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.onlinedown.net/">华军软件     </a>						</li>
			<li class="more"><a blockid="4468" title="更多" target="_blank" href="http://123.xunlei.com/diannao.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/ce81934ea8ce7a750c29136513d35dd7.jpg"></b><a blockid="4469" target="_blank" href="http://123.xunlei.com/caipiao.html" title="彩票">彩票</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4469" title="开奖公告  " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.16100.com/KaiJiang/">开奖公告  </a>						</li>
							<li>			<a rel="external nofollow" blockid="4469" title="双色球 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.16100.com/list-23.html">双色球 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4469" title="七乐彩" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.16100.com/list-21.html">七乐彩</a>						</li>
							<li>			<a rel="external nofollow" blockid="4469" title="亿顺彩票 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.16100.com/ ">亿顺彩票 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4469" title="购彩大厅" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.16100.com/list-1.html">购彩大厅</a>						</li>
							<li>			<a rel="external nofollow" blockid="4469" title="彩票资讯 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.16100.com/list-4.html">彩票资讯 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4469" title="福彩3D " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.16100.com/list-22.html">福彩3D </a>						</li>
			<li class="more"><a blockid="4469" title="更多" target="_blank" href="http://123.xunlei.com/caipiao.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/669933704f3e13ccd97c262e713642ff.jpg"></b><a blockid="4470" target="_blank" href="http://123.xunlei.com/xiaoyouxi.html" title="闪游">闪游</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4470" title="摩尔庄园 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.51mole.com/">摩尔庄园 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4470" title="洛克王国 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://17roco.qq.com/">洛克王国 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4470" title="三国杀 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://web.sanguosha.com/">三国杀 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4470" title="赛尔号 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://seer2.61.com/">赛尔号 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4470" title="武林英雄 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://wlzw.u.365ub.com/wlzw_drw_wgx/zcy.htm?TGSN=CB731447B1E436652A401B27751EEDA5&amp;AID=908000T000102">武林英雄 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4470" title="圣甲传奇" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.nadaobao.com/?p=register_wm&amp;kzjid=501">圣甲传奇</a>						</li>
							<li>			<a rel="external nofollow" blockid="4470" title="神仙道" target="_blank" onclick="MYNAV.recordClick(this);" href="http://win.54op.com/sxd/9/?id=xunl">神仙道</a>						</li>
			<li class="more"><a blockid="4470" title="更多" target="_blank" href="http://123.xunlei.com/xiaoyouxi.html">更多»</a></li>							</ul>
</div>
			<div onmouseout="javascrit:this.className='guid_list_item'" onmouseover="javascrit:this.className='guid_list_item hover'" class="guid_list_item">		<h2><b class="icon"><img src="http://img2.kankan.xunlei.com/gallery2/block/2012/02/07/412c8b9bcf06a0227637b059450da7b3.jpg"></b><a blockid="4471" target="_blank" href="http://123.xunlei.com/zhaoz.html" title="其他">其他</a></h2>
								<ul>
							<li>			<a rel="external nofollow" blockid="4471" title="百度百科 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://baike.baidu.com/">百度百科 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4471" title="第一星座网" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.d1xz.net/">第一星座网</a>						</li>
							<li>			<a rel="external nofollow" blockid="4471" title="找医院" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.qiuyi.cn/hospitals">找医院</a>						</li>
							<li>			<a rel="external nofollow" blockid="4471" title="出国技巧" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.533.com/">出国技巧</a>						</li>
							<li>			<a rel="external nofollow" blockid="4471" title="39健康 " target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.39.net/">39健康 </a>						</li>
							<li>			<a rel="external nofollow" blockid="4471" title="查疾病" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.qiuyi.cn/disease">查疾病</a>						</li>
							<li>			<a rel="external nofollow" blockid="4471" title="凡客诚品" target="_blank" onclick="MYNAV.recordClick(this);" href="http://g.yiqifa.com/gc?w=439437&amp;u=122044&amp;e=gwk&amp;c=255&amp;v=651&amp;i=150&amp;t=http://www.vancl.com/">凡客诚品</a>						</li>
			<li class="more"><a blockid="4471" title="更多" target="_blank" href="http://123.xunlei.com/zhaoz.html">更多»</a></li>							</ul>
</div>


			<div class="guid_list_item software">
				<div class="software1">
					<h2><a title="游戏精选" href="http://123.xunlei.com/game.html">游戏精选</a></h2>
					<ul>
		<li>		<a rel="external nofollow" blockid="4936" title="植物大战僵尸" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/18012.htm">植物大战僵尸</a>				</li>
		<li>		<a rel="external nofollow" blockid="4936" title="大鱼吃小鱼" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/81505_4.htm">大鱼吃小鱼</a>				</li>
		<li>		<a rel="external nofollow" blockid="4936" title="愤怒的小鸟" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/52134.htm">愤怒的小鸟</a>				</li>
		<li>		<strong class="hlight2"><a rel="external nofollow" blockid="4936" title="Q版泡泡堂" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/75769_4.htm">Q版泡泡堂</a></strong>				</li>
		<li>		<a rel="external nofollow" blockid="4936" title="拳皇" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/80841_1.htm">拳皇</a>				</li>
		<li>		<a rel="external nofollow" blockid="4936" title="海贼大冒险" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/68198.htm">海贼大冒险</a>				</li>
		<li>		<a rel="external nofollow" blockid="4936" title="奥特曼" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/70412_4.htm">奥特曼</a>				</li>
		<li>		<a rel="external nofollow" blockid="4936" title="台球" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/27237_2.htm">台球</a>				</li>
		<li>		<a rel="external nofollow" blockid="4936" title="合金弹头" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/1809_3.htm">合金弹头</a>				</li>
		<li>		<a rel="external nofollow" blockid="4936" title="CS" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/47057_3.htm">CS</a>				</li>
		<li>		<a rel="external nofollow" blockid="4936" title="海绵宝宝" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/80244_2.htm">海绵宝宝</a>				</li>
		<li>		<a rel="external nofollow" blockid="4936" title="送羊回家" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.4399.com/flash/77028_1.htm">送羊回家</a>				</li>
<li class="more"><a blockid="4936" title="更多" target="_blank" href="http://123.xunlei.com/game.html">更多»</a></li>
</ul>

				</div>
				<div class="software1">
					<h2><a title="常用软件" href="http://123.xunlei.com/soft.html">常用软件</a></h2>
					<ul>
		<li>		<a blockid="4935" title="迅雷看看播放器" target="_blank" onclick="MYNAV.recordClick(this);" href="http://dl.xunlei.com/xmp.html?id=4120">迅雷看看播放器</a>				</li>
		<li>		<a blockid="4935" title="迅雷7" target="_blank" onclick="MYNAV.recordClick(this);" href="http://dl.xunlei.com/xl7.html?id=4120">迅雷7</a>				</li>
		<li>		<a rel="external nofollow" blockid="4935" title="360安全桌面" target="_blank" onclick="MYNAV.recordClick(this);" href="http://zhuomian.360.cn/">360安全桌面</a>				</li>
		<li>		<a rel="external nofollow" blockid="4935" title="QQ&#12288;" target="_blank" onclick="MYNAV.recordClick(this);" href="http://im.qq.com/qq/all.shtml">QQ&#12288;</a>				</li>
		<li>		<a rel="external nofollow" blockid="4935" title="美图秀秀" target="_blank" onclick="MYNAV.recordClick(this);" href="http://xiuxiu.meitu.com/">美图秀秀</a>				</li>
		<li>		<a rel="external nofollow" blockid="4935" title="阿里旺旺" target="_blank" onclick="MYNAV.recordClick(this);" href="http://wangwang.taobao.com/index.php#buyer">阿里旺旺</a>				</li>
		<li>		<a rel="external nofollow" blockid="4935" title="金山词霸" target="_blank" onclick="MYNAV.recordClick(this);" href="http://ciba.iciba.com/">金山词霸</a>				</li>
		<li>		<a rel="external nofollow" blockid="4935" title="QQ音乐" target="_blank" onclick="MYNAV.recordClick(this);" href="http://y.qq.com/#type=down&amp;p=index.html">QQ音乐</a>				</li>
		<li>		<a rel="external nofollow" blockid="4935" title="千千静听" target="_blank" onclick="MYNAV.recordClick(this);" href="http://ttplayer.qianqian.com/down.html">千千静听</a>				</li>
		<li>		<a rel="external nofollow" blockid="4935" title="Photoshop CS4" target="_blank" onclick="MYNAV.recordClick(this);" href="http://www.skycn.com/ipinfo/d_hao123.php?f=ADBEPHSPCS4.zip">Photoshop CS4</a>				</li>
		<li>		<a rel="external nofollow" blockid="4935" title="飞信" target="_blank" onclick="MYNAV.recordClick(this);" href="http://feixin.10086.cn/download/pcclient/">飞信</a>				</li>
		<li>		<a rel="external nofollow" blockid="4935" title="有道词典" target="_blank" onclick="MYNAV.recordClick(this);" href="http://cidian.youdao.com/">有道词典</a>				</li>
<li class="more"><a blockid="4935" title="更多" target="_blank" href="http://123.xunlei.com/soft.html">更多»</a></li>
</ul>

				</div>
			</div>
<a href="http://s06.flagcounter.com/more/LU2A"><img src="http://s06.flagcounter.com/count/LU2A/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_12/viewers_0/labels_1/pageviews_1/flags_1/" alt="free counters" border="0"></a>
		</div>


</div>
<script type="text/javascript">
			var date = new Date();
			var rt=date.getMonth()+'-'+date.getDate()+'-'+date.getHours();
			//UtilTool.loadJSData("http://123.xunlei.com/daohang/js/xl_data.js?rt="+rt,"utf-8",function(){xlEvent.initSugWord();jScrollInit($g("joke_list"));});
			//Search.init();
			MYNAV.showNongli();
			xlEvent.startclock();
			//Mail.init();
			MYNAV.initClicked();
			irsTracker = { aid: 1358,cid: 363,uid: 0,st: 2,et: 1};


	        $(document).ready(function() {
	            /* -------*/

	        	var url = "<?php echo $base;?>" + '/index.php/account/loginout/';

	            $("img").bind("error",function(){
	        		this.src="http://img-fotki.yandex.ru/get/4427/140361620.2/0_83c13_e3f042df_XS";
	        	});

				$("#loginout").click(function(){
					var username = $(this).attr('rel');
					$.post(url,{username:username},function(data){
						if (data == 'true') {
							window.location.reload();
						}

					},'json');
				});
	            /* -------*/
	        });
</script>
</body>
</html>