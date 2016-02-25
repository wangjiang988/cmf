<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title><?php echo ($name); ?> <?php echo ($seo_title); ?> <?php echo ($site_name); ?></title>
<meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
<meta name="description" content="<?php echo ($seo_description); ?>">
	<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
	<?php $portal_index_lastnews="1,2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="cmf">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/themes/jme/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/themes/jme/Public/images/favicon.ico" type="image/x-icon">
	<link href="/themes/jme/Public/css/index.css" rel="stylesheet" type="text/css">
    
    <!--<link href="/themes/jme/Public/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet">-->
    <!--<link href="/themes/jme/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">-->
    <!--<link href="/themes/jme/Public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">-->
    
    
    <script src="/themes/jme/Public/js/hm.js"></script>
    <script src="/themes/jme/Public/js/jquery.js" type="text/javascript"></script>
    <script src="/themes/jme/Public/js/index.js" type="text/javascript"></script>
    <script src="/themes/jme/Public/js/jquery.slideBox.min.js" type="text/javascript"></script>
		
		
     
	 <style>
        .news dl dt {
            float: left;
            padding-right: 10px;
            color: #B6B6B6;
        }

        .news dl dd em {
            color: #A1010E;
        }
    </style>
	
</head>
<body>
	<?php echo hook('body_start');?>
<div class="head">
    <div id="slidenav" class="logo">
        <div class="hid">
            <dl>
                <dt><a class="brand" href="/"><img src="/themes/jme/Public/images/logo.png"/></a></dt>
                <dd>
                	<?php
 $path = json_encode($paths); $effected_id="nav"; $filetpl="<p><a  href='\$href' target='\$target'>\$label</a></p>"; $foldertpl="<p><a href='\$href' target='\$target' >\$label</a></p>"; $ul_class="two_menu" ; $li_class="" ; $style=""; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); echo wj_change_menu_css($path); ?>
                	
                    <!--<ul id="nav">
                        <li>
                        	<p><a href="http://www.jme.com/" target="_self" class="cur">首页</a></p>
                        </li>
                        <li>
                        	<p><a href="http://www.jme.com/Market/MarketIntro" target="_self" class="">交易市场简介</a></p>
                        </li>
                        <li>
                        	<p><a href="http://www.jme.com/Article/CompanyAnnouncement" target="_self" class="">资讯动态</a></p></li>
                        	<li><p><a href="http://www.jme.com/Varieties/Silver" target="_self" class="">上市品种</a></p>
                        </li>
                        <li>
                        	<p><a href="http://www.jme.com/hq/Index?type=1" target="_self" class="">行情数据</a></p></li><li><p><a href="http://www.jme.com/Memember/TradeKnowledge" target="_self" class="">投资者服务</a></p>
                        </li>
                        <li><p><a href="http://www.jme.com/Softwares/Softwares" target="_self" class="">下载中心</a></p></li><li><p><a href="http://www.jme.com/Memember/HyIndex" target="_self" class="">会员专区</a></p></li><li><p><a href="http://www.nicemore.com/" target="_blank" class="">莱斯商城</a></p></li>
                    </ul>-->
                </dd>
            </dl>
            
            <div class=" formserch">
	        	<form method="post"  action="<?php echo U('portal/search/index');?>"  >
					 <input type="text" class="text" placeholder="请输入关键字" name="keyword" value="<?php echo I('get.keyword');?>"/>
					 <input type="submit" class="btn btn-info inline" value="" style="margin:0;float: left;"/>
				</form>
			</div>
            <!--<div class="formserch">
                <input type="text" value="请输入关键字" onchange="SubmitSearch();" onblur="if(this.value==&#39;&#39;)this.value =&#39;请输入关键字&#39;;" onfocus="if(this.value==&#39;请输入关键字&#39;)this.value = &#39;&#39;;" class="text" id="SearchId" name="SearchId">
                <a class="btn"></a>
            </div>-->
        </div>
    </div>
    <!--<div class="two_menu" style="display:none;"></div><div class="two_menu" style="display: none;"> <a href="http://www.jme.com/Market/MarketIntro" target="_self">交易市场介绍</a>  <a href="http://www.jme.com/Market/Structure" target="_self">组织架构</a>  <a href="http://www.jme.com/Market/Qualification" target="_self">荣誉资质</a>  <a href="http://www.jme.com/Market/Development" target="_self">发展历程</a>  <a href="http://www.jme.com/Market/Press" target="_self">媒体报道</a>  <a href="http://www.jme.com/Market/Responsibility" target="_self">企业社会责任</a>  <a href="http://www.jme.com/Market/ContactUs" target="_self">联系方式</a>  <a href="http://www.jme.com/Recruitment/Index" target="_self">人才招聘</a> </div><div class="two_menu" style="display:none;"> <a href="http://www.jme.com/Article/CompanyAnnouncement" target="_self">公告</a>  <a href="http://www.jme.com/Article/MarketDynamics" target="_self">交易市场动态</a>  <a href="http://www.jme.com/Finance/kx" target="_self">实时快讯</a>  <a href="http://www.jme.com/Finance/Index" target="_self">财经日历</a>  <a href="http://www.jme.com/Article/IndustryNews" target="_self">业界动态</a> </div><div class="two_menu" style="display:none;"> <a href="http://www.jme.com/Varieties/Silver" target="_self">大圆银</a>  <a href="http://www.jme.com/Varieties/Asphalt" target="_self">大圆沥青</a>  <a href="http://t.jme.com/" target="_blank">大圆普洱</a> </div><div class="two_menu" style="display:none;"></div><div class="two_menu" style="display:none;"> <a href="http://www.jme.com/news/NewsContent/5652.html" target="_blank">网上开户</a>  <a href="http://www.nicemore.com/" target="_blank">网上商城</a>  <a href="http://www.jme.com/Memember/TradeKnowledge" target="_self">交易知识</a>  <a href="http://www.jme.com/Memember/Rule" target="_self">交易规则</a>  <a href="http://www.jme.com/Memember/Guide" target="_self">投资者指南</a>  <a href="http://www.jme.com/Article/CommonProblem" target="_self">常见问题</a>  <a href="http://mn1.jsdyyt.com:16728/AddFirm/index.jsp?mid=001" target="_blank">申请模拟账号</a> </div><div class="two_menu" style="display:none;"> <a href="http://www.jme.com/Softwares/Softwares" target="_self">交易软件</a>  <a href="http://www.jme.com/Softwares/Softwares#hg" target="_self">手机APP</a>  <a href="http://www.jme.com/Softwares/WeiXin" target="_self">关注微信</a> </div><div class="two_menu" style="display:none;"> <a href="http://www.jme.com/Memember/HyIndex" target="_self">会员索引</a>  <a href="http://www.jme.com/Article/Advisory" target="_self">会员资讯</a>  <a href="http://www.jme.com/Article/VIPManage" target="_self">会员管理</a> </div><div class="two_menu" style="display:none;"></div>-->
</div>
<div class="top"></div>



	<div class="container">


		<div class="pg-opt pin">
			<div class="container">
				<h2><?php echo ($name); ?></h2>
			</div>
		</div>

		<div class="container">
			<div>
				<?php $lists = sp_sql_posts_paged("cid:$cat_id;order:post_date
				DESC;",20); ?>
				<div id="container">
					<div class="grid-sizer"></div>
					<?php if(is_array($lists['posts'])): $i = 0; $__LIST__ = $lists['posts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $smeta=json_decode($vo['smeta'], true); ?>

					<div class="item">
						<div class="tc-gridbox">
							<div class="header">

								<?php if(!empty($smeta['thumb'])): ?><div class="item-image">
									<a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>">
										<img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>"
										class="img-responsive" alt="<?php echo ($vo["post_title"]); ?>">
									</a>
								</div>
								<?php else: endif; ?>

								<h3>
									<a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a>
								</h3>
								<hr>
							</div>
							<div class="body">
								<a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo (msubstr($vo["post_excerpt"],0,256)); ?></a>
							</div>
							<div class="footer">
								<div class="pull-left">
									<span class="meta"><?php echo ($vo["post_date"]); ?></span>
								</div>
								<div class="pull-right">
									<a href="javascript:;"><i class="fa fa-eye"></i><span><?php echo ($vo["post_hits"]); ?></span></a>
									<a href="<?php echo U('article/do_like',array('id'=>$vo['object_id']));?>" class="js-count-btn"><i class="fa fa-thumbs-up"></i><span class="count"><?php echo ($vo["post_like"]); ?></span></a> 
									<a href="<?php echo U('user/favorite/do_favorite',array('id'=>$vo['object_id']));?>" class="js-favorite-btn" data-title="<?php echo ($vo["post_title"]); ?>" data-url="<?php echo leuu('portal/article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>" data-key="<?php echo sp_get_favorite_key('posts',$vo['object_id']);?>">
										<i class="fa fa-star-o"></i>
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="pagination"><ul><?php echo ($lists['page']); ?></ul></div>
			</div>
		</div>


		<!--<br>
<br>
<br>-->
<!-- Footer ================================================== -->
<!--<hr>-->
<?php echo hook('footer');?>

<div class="foots">
    <div class="cent">
        <div class="about_f">
        	<?php $links=sp_getlinks(); ?>
            <span> 合作伙伴 </span>
            <ul>
            	<?php if(is_array($links)): foreach($links as $key=>$vo): ?><li class="sr"> <a href="<?php echo ($vo["link_url"]); ?>" title="<?php echo ($vo["link_name"]); ?>" style="background-image: url('/themes/jme/Public/images/logo.png');" target="<?php echo ($vo["link_target"]); ?>"></a></li>
                <!--<li class="sr2"><a href="http://www.hxb.com.cn/home/cn/" target="_blank"></a></li>
                <li class="sr7"><a href="http://www.cebbank.com/" target="_blank"></a></li>
                <li class="sr5"><a href="http://www.icbc.com.cn/icbc/" target="_blank"></a></li>
                <li class="sr3"><a href="http://www.cmbchina.com/" target="_blank"></a></li>
                <li class="sr6"><a href="http://www.boc.cn/" target="_blank"></a></li>
                <li class="sr10"><a href="http://www.cngold.com.cn/" target="_blank"></a></li>
                <li class="sr11"><a href="http://www.fx678.com/" target="_blank"></a></li>
                <li class="sr12"><a href="http://www.nicemore.com/" target="_blank"></a></li>-->
                <!--<li style="background:url(/Content/images/payb.png);"><a href="http://www.jme.com/home/hd/" target="_blank"></a></li>--><?php endforeach; endif; ?>
            </ul>
        </div>

    </div>
</div>


<div class="bootom">
    <div class="wd_m">
        <div class="left">
            <span>
                <em>江苏大圆银泰商品合约交易市场有限公司</em>
                <div class="dis_img" style="width: 0px; height: 0px;"><img src="/themes/jme/Public/images/wx_two.jpg"></div>
            </span><i class="er_two">官方微信：</i>
            <div class="blank10"></div>
            <div class="copy_n"><a href="http://www.cngold.com.cn/" target="_blank"><img src="/themes/jme/Public/images/copy_bt.png"></a></div>
        </div>
        <p><i><a href="http://www.jme.com/Market/MarketIntro" target="_blank">关于交易市场</a> | <a href="http://www.jme.com/SiteMap/SiteMap" target="_blank">网站地图</a> | <a href="http://www.jme.com/Market/ContactUs" target="_blank">联系我们</a> | <a href="http://www.jme.com/Recruitment/Index">诚聘英才</a>| <a href="http://www.jme.com/Article/LawsAndRegulations" target="_blank">法律法规</a> | <a href="http://www.jme.com/Memember/Mzsm" target="_blank">免责声明</a> </i><i>CopyRight © 2012-2016 DAYUANYINTAI. All Rights Reserved. <a href="http://www.miitbeian.gov.cn/" target="_blank">苏ICP备12006275号</a></i> <i>增值电信业务经营许可证：苏B1-20130063 苏B2-20130234 Tech support：<a href="http://www.cngold.com.cn/" target="_blank">cngold.com.cn</a></i></p>
    </div>
</div>

<!--<div id="footer">
	<div class="links">
		<?php $links=sp_getlinks(); ?>
		<?php if(is_array($links)): foreach($links as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
	</div>
	<p>
		Made by <a href="http://www.thinkcmf.com" target="_blank">ThinkCMF</a>
		Code licensed under the 
		<a href="http://www.apache.org/licenses/LICENSE-2.0" rel="nofollow" target="_blank">Apache License v2.0</a>.
		<br />
		Based on 
		<a href="http://getbootstrap.com/2.3.2/" target="_blank">Bootstrap</a>.
		Icons from 
		<a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">Font Awesome</a>
	</p>
</div>-->
<div id="backtotop">
	<i class="fa fa-arrow-circle-up"></i>
</div>
<?php echo ($site_tongji); ?>

	</div>


	<!-- JavaScript -->
	<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/wind.js"></script>
    <script src="/themes/jme/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/public/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>


	<script src="/themes/jme/Public/js/imagesloaded.pkgd.min.js"></script>
	<script src="/themes/jme/Public/js/masonry.pkgd.min.js"></script>
	<script>
		var $container = $('#container').masonry({
			columnWidth : '.grid-sizer',
			itemSelector : '.item'
		});
		// layout Masonry again after all images have loaded
		$container.imagesLoaded(function() {
			$container.masonry();
		});
	</script>
</body>
</html>