<?php
echo $tpl_header;
$this->load->helper('fuc');
$this->load->helper('array');
$this->load->helper('url');
?>
<body>
<?php 
    echo $cat_menu;
?>

<div id="page">
	<?php echo $tpl_top;?>

	<div id="content">
		<div class="main">

			<?php foreach ($types as $key => $type) {?>
			<div class="post" id="addurls">
				<?php if ($key == 0) {?>
				<div class="post_date">
					<?php $catdate = getdate();?>
					<span class="date_m"><?php echo $catdate['month'];?></span>
					<span class="date_d"><?php echo $catdate['mday'];?></span>
					<span class="date_y"><?php echo $catdate['year'];?></span>
				</div>
				<?php }?>
				<div class="article" style="width;770px">
					<h2>
						<a title="<?php echo $type->name;?>" id="<?php echo $type->type_id;?>" rel="<?php echo 	$type->level;?>" class="edit_types" rel="bookmark" href="javascript:void(0);"><?php echo $type->name;?></a>
						<span class="new"></span>
					</h2>
					<div class="entry_post itemsimple" style="line-height:35px;position:relative;">
						<ul>
						<?php if ($key == 0) {  $ss = 'style="height:60px;"';} else { $ss = '' ;}?>
						<?php
							foreach (arrayfitter_fav($results,$type->type_id) as $key => $result) {
						?>
							<li <?php echo $ss;?>>
								<div class="divcell" <?php echo $ss;?>>
								<a class="catedit" rel="<?php echo $result->type_id; ?>" rev="<?php echo $result->id; ?>" icon="<?php echo $result->icon_url;?>"  href="<?php echo $result->url; ?>" title="<?php echo $result->title; ?>" target="_blank"><img style="width: 14px; height: 14px;" src="<?php if (!empty($result->icon_url)) { echo $result->icon_url;} else {echo 'http://insky.sinaapp.com/favicon.ico';} ?>" /><?php echo utf8_cutstr($result->title,25);?></a>
								</div>
							</li>
						<?php }?>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
			<?php }?>

			<div class="navigation">
				<div class="pagination">
					<?php echo $link;?>
				</div>
			</div>
		</div>

		<?php /*
		<div id="sidebar">
			<h3>友情链接</h3>
			<div class="v-links">
				<ul>
					<?php
						foreach (arrayfitter_fav($results,8) as $result) {
					?>
					<li>
						<a style="<?php echo getTagStyle(12,14);?>"
						    href="<?php echo $result->url; ?>"
						    title="<?php echo $result->title; ?>"
						    target="_blank"><?php echo utf8_cutstr($result->title,6);?></a>
					</li>
					<?php }?>
				</ul>
			</div>
		</div>
		*/?>

	</div>

	<div class="clear"></div>

	<?php echo $tpl_foot;?>

</div>

<?php if ($user->roles == 100) {?>
<script type="text/javascript" >
function obj2str(o){
    var r = [], i, j = 0, len;
    if(o == null) {
        return o;
    }
    if(typeof o == 'string'){
        return '"'+o+'"';
    }
    if(typeof o == 'object'){
        if(!o.sort){
            r[j++]='{';
            for(i in o){
                r[j++]= '"';
                r[j++]= i;
                r[j++]= '":';
                r[j++]= obj2str(o[i]);
                r[j++]= ',';
            }
            //可能的空对象
            //r[r[j-1] == '{' ? j:j-1]='}';
            r[j-1] = '}';
        }else{
            r[j++]='[';
            for(i =0, len = o.length;i < len; ++i){
                r[j++] = obj2str(o[i]);
                r[j++] = ',';
            }
            //可能的空数组
            r[len==0 ? j:j-1]=']';
        }
        return r.join('');
    }
    return o.toString();
}


$(document).ready(function(){

	cat.manage.controller.init();
	cat.manage.dropdown = <?php echo $json_drop;?>;

	$("#edit").click(function(){
	});
	$("#delete").click(function(){
	});

});
</script>
<?php }?>

</body>
</html>