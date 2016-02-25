<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($post_title); ?> <?php echo ($site_name); ?> </title>
		<meta name="keywords" content="<?php echo ($post_keywords); ?>" />
		<meta name="description" content="<?php echo ($post_excerpt); ?>">
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
	
		<style>
			#article_content img{height:auto !important}
		</style>
	</head>
<body class="">
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



<div class="container tc-main">

<div class="banner_hy"><div class="banner_hy" style="background:#F3F0E9 no-repeat scroll center center;"><div style="background:url(&#39;http://img.jme.com/2015/11/5/201511051624111111434461.jpg&#39;) no-repeat center center;height:500px;"></div></div></div>
<div class="rj_dowm">
<div class="white_bg"><div class="cent"><dl><dt><h3>大圆普洱交易中心交易软件</h3><p><strong>适用客户：</strong>所有大圆普洱交易中心用户<br><strong>软件介绍：</strong>优化设计，功能齐全，操作便捷。中心创新运用“互联网+普洱茶+金融”的理念，开发研究了普洱茶金融交易，为普洱茶产业的多元化发展提供了一个新的通道。<br><strong>特别提示：</strong>建议在Windows系统下使用</p><span><li class="down_Soft"><a style="display:block;width:226px;height:62px" target="_blank" href="http://download.t.jme.com:18090/t.jme.rar"></a></li></span></dt><dd><img src="/themes/jme/Public/images/bjb.jpg"></dd></dl></div></div><div class="grey_bg"><div class="cent"><dl><dt><h3>大圆银泰行情分析交易系统（博易大师版）</h3><p><strong>适用客户：</strong>所有正式交易客户<br><strong>软件介绍：</strong>优化设计，功能齐全，操作便捷。提供实时行情、网上交易及查询、交易资讯等

功能，致力于为投资者提供集行情、交易、资讯、策略、互动于一体的产业链式

服务。 <br><strong>特别提示：</strong>建议在Windows系统下使用</p><span><li class="down_Soft"><a style="display:block;width:226px;height:62px" target="_blank" href="http://download.jsdyyt.com:18089/dyyt-pobo.rar"></a></li></span></dt><dd></dd></dl></div></div><div class="white_bg"><div class="cent"><dl><dt><h3>江苏大圆银泰模拟电子交易系统</h3><p><strong>适用客户：</strong>所有模拟交易客户<br><strong>软件介绍：</strong>赠送虚拟资金供客户体验，使客户在真实交易前熟悉交易系统。<br><strong>特别提示：</strong>安装前，请先卸载原来的系统</p><span><li class="down_Soft"><a style="display:block;width:226px;height:62px" target="_blank" href="http://download.jsdyyt.com:18089/dyyt-mn.zip"></a></li></span></dt><dd><img src="/themes/jme/Public/images/bjb.jpg"></dd></dl></div></div><div class="grey_bg"><div class="cent"><dl><dt><h3>微软.Net Framework 4.0</h3><p><strong>适用客户：</strong>所有交易客户<br><strong>软件介绍：</strong>微软.Net Framework 4.0。<br><strong>特别提示：</strong>用户在安装过程中如果出现"系统检测到您没有安装.Net Framework 4.0,是否立  即下载并安装"的情况,用户可以从这里下载。</p><span><li class="down_Soft"><a style="display:block;width:226px;height:62px" target="_blank" href="http://download.jsdyyt.com:18089/dotNetFx40_Full_x86_x64.zip"></a></li></span></dt><dd></dd></dl></div></div><div class="white_bg"><div class="cent"><dl><dt><h3>微软.Net Framework 2.0</h3><p><strong>适用客户：</strong>所有交易客户<br><strong>软件介绍：</strong>微软.Net Framework 2.0。<br><strong>特别提示：</strong>用户在安装过程中如果出现"系统检测到您没有安装.Net Framework 2.0,是否立  即下载并安装"的情况,用户可以从这里下载。</p><span><li class="down_Soft"><a style="display:block;width:226px;height:62px" target="_blank" href="http://download.jsdyyt.com:18089/dotnetfxcn.exe"></a></li></span></dt><dd><img src="/themes/jme/Public/images/bjb.jpg"></dd></dl></div></div><div id="hg" class="grey_bg"><div class="cent_o"><dl class="hg"><dt><h3>大圆银泰掌上交易端</h3><p><strong>适用客户：</strong>所有正式交易客户<br><strong>软件介绍：</strong>大圆银泰掌上交易客户端2.0版本，提供实时行情查看、账户权益查询、商品自选。新增网上开户功能，实现掌上快速开户。支持光大银行在线签约。一对一专属客服，给您贴心服务。<br><strong>特别提示：</strong>建议安装前卸载原有APP。</p><span><li class="down_Soft"><a style="display:block;width:226px;height:62px" target="_blank" href="http://download.jsdyyt.com:18089/jme-mobile.apk"></a><img src="/themes/jme/Public/images/20150925204702364644716.jpg" style="margin-top:20px"></li></span></dt><dd class="app"></dd></dl></div></div>    
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


</body>
</html>