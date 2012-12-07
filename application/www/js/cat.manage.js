(function(){
	
	cat = {};
	cat.manage = {};
	
	//管理  - 编辑 - 删除
	cat.manage.controller = {};
	cat.manage.dropdown = '';
	cat.manage.controller.object = '.catedit'; //url hover 
	cat.manage.edit_url = '/index.php/oh/ajax_edit_url/';
	cat.manage.delete_url = '/index.php/oh/ajax_delete_url/';
	
	cat.manage.edit_type = '/index.php/oh/ajax_edit_type/';
	
	cat.manage.getpagesize = function () { 
	    var xScroll, yScroll;
	    
	    if (window.innerHeight && window.scrollMaxY) {
	
	        xScroll = window.innerWidth + window.scrollMaxX;
	
	        yScroll = window.innerHeight + window.scrollMaxY;
	
	    } else {
	
	        if (document.body.scrollHeight > document.body.offsetHeight) { // all but Explorer Mac    
	
	            xScroll = document.body.scrollWidth;
	
	            yScroll = document.body.scrollHeight;
	
	        } else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari    
	
	            xScroll = document.body.offsetWidth;
	
	            yScroll = document.body.offsetHeight;
	
	        }
	
	    }
	
	    var windowWidth, windowHeight;
	
	    if (self.innerHeight) { // all except Explorer    
	
	        if (document.documentElement.clientWidth) {
	
	            windowWidth = document.documentElement.clientWidth;
	
	        } else {
	
	            windowWidth = self.innerWidth;
	
	        }
	
	        windowHeight = self.innerHeight;
	
	    } else {
	
	        if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode    
	
	            windowWidth = document.documentElement.clientWidth;
	
	            windowHeight = document.documentElement.clientHeight;
	
	        } else {
	
	            if (document.body) { // other Explorers    
	
	                windowWidth = document.body.clientWidth;
	
	                windowHeight = document.body.clientHeight;
	
	            }
	
	        }
	
	    }       
	
	    // for small pages with total height less then height of the viewport    
	
	    if (yScroll < windowHeight) {
	
	        pageHeight = windowHeight;
	
	    } else {
	
	        pageHeight = yScroll;
	
	    }    
	
	    // for small pages with total width less then width of the viewport    
	
	    if (xScroll < windowWidth) {
	
	        pageWidth = xScroll;
	
	    } else {
	
	        pageWidth = windowWidth;
	
	    }
	
	    arrayPageSize = new Array(pageWidth, pageHeight, windowWidth, windowHeight);
	
	    return arrayPageSize;
	
	};
	
	cat.manage.controller.init = function (){
		var has_focus = false;
		$(cat.manage.controller.object).each(function(){
			$(this).hover(function(e){
				//初始化参数设置
				var thiz = $(this);
				
				if(!e) e = window.event;
				
				var rel = $(this).attr('rel');
				var strs=rel.split("-");
				
				var type = strs[0];
				var id 	 = strs[1];
				
				//绑定分享事件
				var thiz = $(this);
				var left = $(thiz).offset().left;
				var top = $(thiz).offset().top + $(thiz).height() +70;
				var absolute_height = e.clientY;
				
				var pagesize = cat.manage.getpagesize();
				
				var dw = pagesize[0];//document.width;
				var dh = pagesize[1];//document.height;
				var ww = pagesize[2];//document.height;
				var wh = pagesize[3];//document.height;
				
				var share_container= '<div class="context-menu" id="ckepop" style="position: absolute; z-index: 1000; overflow: auto;top:' + top + 'px; left: ' + left + 'px;">';
				share_container+= 		'<ul>';
				share_container+= 			'<li val="edit" style="display: list-item;">';
				share_container+= 				'<a href="javascript:;" class="edit"><i class="ico-menu i-remark"></i><span>修改</span></a>';
				share_container+= 			'</li>';
				share_container+= 			'<li val="delete" style="display: list-item;">';
				share_container+= 				'<a href="javascript:;" class="delete"><i class="ico-menu i-delete"></i><span>删除</span></a>';
				share_container+= 			'</li>';
				share_container+= 		'</ul>';
				share_container+= '</div>';
				
				
				var drop_down_object = '';
				var drop_down = '';
				if (cat.manage.dropdown != '') {
					drop_down_object =  eval(cat.manage.dropdown);
	
					drop_down += '<select name="type_id"  id="e_drop" style="color: #0088DD;">';
					for (var i = 0; i< drop_down_object.length ; i++) {
						drop_down += '<option value="'+drop_down_object[i].type_id+'">'+drop_down_object[i].type_name+'</option>';
					}
					drop_down += '</select>';
				}
				
				
				var show_edit = '<div id="dialogpop" class="modal-dialog-bg" style="opacity: 0.5; width: ' + $(document).width()+ 'px; height: ' + $(document).height() + 'px;"></div>';
					show_edit+= '<div id="editpop" class="modal-dialog" tabindex="0" role="dialog" aria-labelledby=":0" style="left: 30%; margin-bottom: 0; margin-left: -50px; margin-right: 0; position: fixed; top: 20%;">';	
					show_edit+= '<div class="modal-dialog-title modal-dialog-title-draggable" id=":0">';	
					show_edit+= '	<span class="modal-dialog-title-text">修改</span>';	
					show_edit+= '	<span class="modal-dialog-title-close"></span>';	
					show_edit+= '</div>';	
					show_edit+= '<div class="modal-dialog-content">';	
					show_edit+= '<div id="xcww">';	
					show_edit+= '<div class="xu">';	
					show_edit+= '	Edit：<a target="_blank" href="'+thiz.attr("href")+'">'+thiz.text()+'</a> ';	
					show_edit+= '</div>';	
					show_edit+= '<div class="xu">';	
					show_edit+= '	title： <input class="xfk xvw" style="width:300px;" name="title" id="e_title">';	
					show_edit+= '</div>';	
					show_edit+= '<div class="xu">';	
					show_edit+= '	&nbsp;&nbsp;url： <input class="xfk xvw" style="width:300px;" name="url" id="e_url">';	
					show_edit+= '</div>';	
					show_edit+= '<div class="xu">';	
					show_edit+= '	icon： <input class="xfk xvw" style="width:300px;" name="e_icon_url" id="e_icon_url">';	
					show_edit+= '</div>';
					show_edit+= '<div class="xu">';	
					show_edit+= '	Type：' + drop_down;	
					show_edit+= '</div>';	
					show_edit+= '<div class="xkw">';	
					show_edit+= '	<a class="xow2" name="cancel" id="cancel" href="javascript:;">取消</a>';	
					show_edit+= '	<a class="xow" name="save" id="e_save" href="javascript:;">完成</a>';	
					show_edit+= '	<input type="hidden" id="hdid" value="'+thiz.attr("rev")+'" />';	
					show_edit+= '</div>';	
					show_edit+= '</div>';	
					show_edit+= '</div>';	
					show_edit+= '<div class="modal-dialog-buttons"></div><span tabindex="0"></span></div>';	
					
				var hidd_top = top - 12;
				var hidd_left = left;
				
				var hidden_div = '<div id="hidden_div" style="position: absolute;top:' + hidd_top + 'px; left: ' + hidd_left + 'px;width:28px;height:19px;z-index:999;"></div>';
				
				//tips
				if($("body").find("#ckepop").length > 0) {
					$("#ckepop").css('left', left).css('top', top).show();
				} else {
					$("body").append(share_container);
				}	
				
				//编辑框
				var editbox = function (){
					//edit
					if($("body").find("#dialogpop").length > 0) {
						$("#dialogpop").show();
					} else {
						$("body").append(show_edit);
					}	
					
					$("#cancel").click(function () {
						$("#dialogpop").remove();
						$("#editpop").remove();
					});
						
					$("#e_drop").attr("value",thiz.attr("rel"))
					$("#e_url").val(thiz.attr("href"));
					$("#e_title").val(thiz.attr("title"));
					$("#e_icon_url").val(thiz.attr("icon"));
					
					$("#e_save").unbind("click").bind("click",function(){
						$.post(cat.manage.edit_url,
								{
									title:$("#e_title").val(),
									url:$("#e_url").val(),
									type_id:$("#e_drop").val(),
									hdid:$("#hdid").val(),
									e_icon_url:$("#e_icon_url").val(),
								},
								function(date){
									
									if (date.state == 'ok') {
										thiz.attr("href", date.url);
										thiz.attr("title", date.title);
										thiz.attr("rel", date.type_id);
										thiz.attr("icon", date.icon_url);
										thiz.text(date.title);
										$("#cancel").click();
										
										//暂不刷新 - 数据过度加载
										//window.location.reload();
									}
								}, 'json');
						
					});
					
				    $("input").keydown(function(e){
				    	if( e.keyCode == 13 )
				        {
				    		$("#e_save").click();
				        }
				    });
					
				};
				
				
				var bind_click = function(){ 
					$('.edit').each(function(){
						$(this).unbind("click").bind("click",function(){
							editbox();
						});
					});
					$('.delete').each(function(){
						$(this).unbind("click").bind("click",function(){
							if(window.confirm('确认删除？')==false) {
								
							} else {
								$.post(cat.manage.delete_url,
										{
											id:thiz.attr("rev")
										},
										function(date){
											if (date.state == 'ok') {
												thiz.remove();
											}
								}, 'json');
							}
						});
					});
				};
				var remove_bind_click = function (){
					$('.share_weibo').each(function(){
						$(this).unbind("click");
					});
				};
				
				
				if($("body").find("#hidden_div").length > 0) {
					$("#hidden_div").css('left', hidd_left).css('top', hidd_top).show();
				} else {
					$("body").append(hidden_div);
				}
				
				if($("#ckepop").height() > absolute_height){
					$("#ckepop").css('top', top);		
					hidd_top = top + 10;
					$("#hidden_div").css('top', hidd_top);
				}else{
					top = top - ($("#ckepop").height() + 20);
					$("#ckepop").css('top', top).show();
					bind_click();
				}
				
				var hide_div = function(){
					$("#ckepop").hover(function(){
						$(this).show();
						bind_click();
					}, function(){
						$(this).remove();
						$("#hidden_div").remove();
						remove_bind_click();
						has_focus = false;
					});
					
				};
				var bind_hidden_div = function() {
					$("#hidden_div").hover(function(){
						has_focus = true;
						$("#ckepop").show();
						bind_click();
					}, function(){
						has_focus = false;
						remove_bind_click();
						$("#ckepop").remove();
						$(this).remove();
					});
				};
				hide_div();
				bind_hidden_div();
			},function(){
				if(has_focus){
					$("#ckepop").show();
					bind_click();
				}
			});		
		});
		
		
		$(".edit_types").click(function (){
			
			thizt = $(this);
			
			var show_edit = '<div id="typepop" class="modal-dialog-bg" style="opacity: 0.5; width: ' + $(document).width()+ 'px; height: ' + $(document).height() + 'px;"></div>';
			show_edit+= '<div id="typeeditpop" class="modal-dialog" tabindex="0" role="dialog" aria-labelledby=":0" style="left: 30%; margin-bottom: 0; margin-left: -50px; margin-right: 0; position: fixed; top: 20%;">';	
			show_edit+= '<div class="modal-dialog-title modal-dialog-title-draggable" id=":0">';	
			show_edit+= '	<span class="modal-dialog-title-text">修改</span>';	
			show_edit+= '	<span class="modal-dialog-title-close"></span>';	
			show_edit+= '</div>';	
			show_edit+= '<div class="modal-dialog-content">';	
			show_edit+= '<div id="xcww">';	
			show_edit+= '<div class="xu">';	
			show_edit+= '	Edit：<a target="_blank" href="'+thizt.attr("title")+'">'+thizt.text()+'</a> ';	
			show_edit+= '</div>';	
			show_edit+= '<div class="xu">';	
			show_edit+= '	name： <input class="xfk xvw" style="width:300px;" name="t_name" value="'+thizt.attr("title")+'" id="t_name">';	
			show_edit+= '</div>';	
			show_edit+= '<div class="xu">';	
			show_edit+= '	level： <input class="xfk xvw" style="width:300px;" name="t_level" value="'+thizt.attr("rel")+'" id="t_level">';	
			show_edit+= '</div>';	
			show_edit+= '<div class="xkw">';	
			show_edit+= '	<a class="xow2" name="cancel" id="t_cancel" href="javascript:;">取消</a>';	
			show_edit+= '	<a class="xow" id="t_save" href="javascript:;">完成</a>';	
			show_edit+= '	<input type="hidden" id="hdid" value="'+thizt.attr("id")+'" />';	
			show_edit+= '</div>';	
			show_edit+= '</div>';	
			show_edit+= '</div>';	
			show_edit+= '<div class="modal-dialog-buttons"></div><span tabindex="0"></span></div>';	
			
			if($("body").find("#typepop").length > 0) {
				$("#typeeditpop").show();
			} else {
				$("body").append(show_edit);
			}	
			
			$("#t_save").unbind("click").bind("click",function(){
				$.post(cat.manage.edit_type,
						{
							name:$("#t_name").val(),
							level:$("#t_level").val(),
							type_id:$("#hdid").val(),
						},
						function(date){
							
							if (date.state == 'ok') {
								thizt.attr("title", date.name);
								thizt.attr("rel", date.level);
								thizt.text(date.name);
								$("#t_cancel").click();
							}
						}, 'json');
				
			});
			
			
			$("#t_cancel").click(function () {
				$("#typeeditpop").remove();
				$("#typepop").remove();
				
				//edit 浮动清除
				if($("body").find("#ckepop").length > 0) {
					$("#ckepop").remove();
				}
			});
			
		});
		
		
	};
	
	
	
	
	//----------------------Weibo----------------------
	cat.manage.shares = {};
	cat.manage.shares.baze_url = 'http://www.jiathis.com/send/?';
	cat.manage.shares.send_url = '';
	cat.manage.shares.uid = '1502680';
	cat.manage.shares.setting = {};
	cat.manage.shares.links = new Array('tsina','tqq','t163','tsohu','qzone','kaixin001','msn','renren','email','buzz','hi','taobao','baidu','douban');
	cat.manage.shares.chinese_links = {tsina : {name : '新浪微博'}, tqq : {name : '腾讯微博'}, t163 : {name : '网易微博'}, tsohu : {name : '搜狐微博'}, qzone : {name : 'QQ空间'}, msn : {name : 'MSN'}, kaixin001 : {name : '开心网'}, email : {name : '邮件'}, hi : {name : '百度空间'}, renren : {name : '人人网'}, buzz : {name : '谷歌Buzz'}, taobao : {name : '淘江湖'}, baidu : {name : '百度搜藏'}, douban : {name : '豆瓣'}};

	cat.manage.shares.set_values = function(title, url){
		var settings = {
				title: title,
				url: url
			};
		return settings;
	};
	
	
	cat.manage.shares.init = function(){	
		var has_focus = false;
		$(".add_jiathis").each(function(){
			$(this).hover(function(e){
				//初始化参数设置
				if(!e) e = window.event;
				var title = $(this).attr('rel');
				var url = $(this).attr('rev');
				
				cat.manage.shares.setting = cat.manage.shares.set_values(title, url);
				
				//绑定分享事件
				var thiz = $(this);
	        	var left = $(thiz).offset().left;
	        	var top = $(thiz).offset().top + $(thiz).height() + 5;
	        	var absolute_height = e.clientY;
	        	
				var share_container  = '<div id="ckepop" style="position: absolute; z-index: 1000; overflow: auto;top:' + top + 'px; left: ' + left + 'px;">';
					share_container += '   <iframe src="" style="width:230px;top:0px;left:0px;position:absolute;visibility:inherit;z-index:-1;" frameborder=0 ></iframe>  <div class="jiadiv_01">';
					share_container += '        <div style="width: 100%; background: none repeat scroll 0% 0% rgb(242, 242, 242); border-bottom: 1px solid rgb(229, 229, 229); line-height: 200%; padding-left: 5px; font-size: 12px;">';
					share_container += '            <table width="100%"><tbody>';
					share_container += '        		<tr class="jt_sharetitle">';
					share_container += '        			<td align="left" style="text-align: left; line-height: 25px;">分享到...</td>';
					share_container += '        			<td align="right" style="text-align: right;">&nbsp;</td>';
					share_container += '        		</tr></tbody></table>';
					share_container += '        </div>';
					share_container += '     	<div id="jiathis_sers" style="width: 100%;" class="jiadiv_02">';
					for(var i = 0,len = cat.manage.shares.links.length; i < len; i++) {
						var item_id = cat.manage.shares.links[i];
						var chinese_name = cat.manage.shares.chinese_links[item_id].name;
						var url = cat.manage.shares.sendto(item_id);
						share_container += '    <a class="jiatitle" target="_blank"  href="' + url +'"><span style="font-weight: bold;" class="jtico jtico_' + item_id + '">' + chinese_name +'</span></a>';
					}
					
					share_container += '			<div style="clear: both;"></div>';
					share_container += '		</div>';
					share_container += '	</div>';
					share_container += '</div>';
					
					var hidd_top = top - 12;
					var hidd_left = left;
					
					var hidden_div = '<div id="hidden_div" style="position: absolute;top:' + hidd_top + 'px; left: ' + hidd_left + 'px;width:28px;height:19px;z-index:999;"></div>';
					if($("body").find("#ckepop").length > 0) {
						$("#ckepop").css('left', left).css('top', top).show();
					} else {
						$("body").append(share_container);
					}	
					
					if($("body").find("#hidden_div").length > 0) {
						$("#hidden_div").css('left', hidd_left).css('top', hidd_top).show();
					} else {
						$("body").append(hidden_div);
					}
					
					if($("#ckepop").height() > absolute_height){
						$("#ckepop").css('top', top);		
						hidd_top = top + 10;
						$("#hidden_div").css('top', hidd_top);
					}else{
						top = top - ($("#ckepop").height() + 20);
						$("#ckepop").css('top', top).show();
					}
					
					var hide_div = function(){
						$("#ckepop").hover(function(){
							$(this).show();
						}, function(){
							$(this).remove();
							$("#hidden_div").remove();
							has_focus = false;
						});
						
					};
					var bind_hidden_div = function() {
						$("#hidden_div").hover(function(){
							has_focus = true;
							$("#ckepop").show();
						}, function(){
							has_focus = false;
							$("#ckepop").remove();
							$(this).remove();
						});
					};
					hide_div();
					bind_hidden_div();
				},function(){
					if(has_focus){
						$("#ckepop").show();						
					}
				});		
			});
		
		$(".add_jiathis_simple").each(function(){
			$(this).hover(function(e){
				//初始化参数设置
				if(!e) e = window.event;
				var pic = $(this).attr('pic');
				var title = $(this).attr('rel');
				var url = $(this).attr('rev');
				
				cat.manage.shares.setting = cat.manage.shares.set_values(title, url);
				
				//绑定分享事件
				var thiz = $(this);
				var left = $(thiz).offset().left;
				var top = $(thiz).offset().top + $(thiz).height() +70;
				var absolute_height = e.clientY;
				
				
				var share_container= '<div class="account_share" id="ckepop" style="position: absolute; z-index: 1000; overflow: auto;top:' + top + 'px; left: ' + left + 'px;">';
				share_container+= '<ul>';
				share_container+= 	'<li>';
				share_container+= 	'<a class="a-sinaweibo share_weibo" rel="sina" href="javascript:void(0);"><b></b>新浪微博</a>';
				share_container+= 	'</li>';
				share_container+= 	'<li>';
				share_container+= 	'<a class="a-txweibo share_weibo" rel="txweibo" href="javascript:void(0);"><b></b>腾讯微博</a>';
				share_container+= 	'</li>';
				share_container+= '</ul>';
				share_container+= '</div>';
				
				
				var hidd_top = top - 12;
				var hidd_left = left;
				
				var hidden_div = '<div id="hidden_div" style="position: absolute;top:' + hidd_top + 'px; left: ' + hidd_left + 'px;width:28px;height:19px;z-index:999;"></div>';
				if($("body").find("#ckepop").length > 0) {
					$("#ckepop").css('left', left).css('top', top).show();
				} else {
					$("body").append(share_container);
				}	
				
				var bind_click = function(){ 
					$('.share_weibo').each(function(){
						$(this).unbind("click").bind("click",function(){
							mcc.share_weibo.sendout (title, url, pic, $(this).attr('rel'));
						});
					});
				};
				var remove_bind_click = function (){
					$('.share_weibo').each(function(){
						$(this).unbind("click");
					});
				};
				
				
				if($("body").find("#hidden_div").length > 0) {
					$("#hidden_div").css('left', hidd_left).css('top', hidd_top).show();
				} else {
					$("body").append(hidden_div);
				}
				
				if($("#ckepop").height() > absolute_height){
					$("#ckepop").css('top', top);		
					hidd_top = top + 10;
					$("#hidden_div").css('top', hidd_top);
				}else{
					top = top - ($("#ckepop").height() + 20);
					$("#ckepop").css('top', top).show();
					bind_click();
				}
				
				var hide_div = function(){
					$("#ckepop").hover(function(){
						$(this).show();
						bind_click();
					}, function(){
						$(this).remove();
						$("#hidden_div").remove();
						remove_bind_click();
						has_focus = false;
					});
					
				};
				var bind_hidden_div = function() {
					$("#hidden_div").hover(function(){
						has_focus = true;
						$("#ckepop").show();
						bind_click();
					}, function(){
						has_focus = false;
						remove_bind_click();
						$("#ckepop").remove();
						$(this).remove();
					});
				};
				hide_div();
				bind_hidden_div();
			},function(){
				if(has_focus){
					$("#ckepop").show();
					bind_click();
				}
			});		
		});
		
	};
	
	cat.manage.shares.sendto = function(shareID){
		var setting = cat.manage.shares.setting || {};
		uid = cat.manage.shares.uid;
		siteUrl = setting.url;
		siteTitle = setting.title;
		siteTitle = encodeURIComponent(siteTitle);
		var url = cat.manage.shares.baze_url + 'webid=' + shareID + '&url=' + siteUrl + '&title=' + siteTitle + '&uid=' + uid;
		return url;
	};
	//----------------------Weibo----------------------

})();