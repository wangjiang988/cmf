<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
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
	
		<link href="/themes/jme/Public/css/slippry/slippry.css" rel="stylesheet">
		<style>
			.caption-wraper{position: absolute;left:50%;bottom:2em;}
			.caption-wraper .caption{
			position: relative;left:-50%;
			background-color: rgba(0, 0, 0, 0.54);
			padding: 0.4em 1em;
			color:#fff;
			-webkit-border-radius: 1.2em;
			-moz-border-radius: 1.2em;
			-ms-border-radius: 1.2em;
			-o-border-radius: 1.2em;
			border-radius: 1.2em;
			}
			@media (max-width: 767px){
				.sy-box{margin: 12px -20px 0 -20px;}
				.caption-wraper{left:0;bottom: 0.4em;}
				.caption-wraper .caption{
				left: 0;
				padding: 0.2em 0.4em;
				font-size: 0.92em;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				-ms-border-radius: 0;
				-o-border-radius: 0;
				border-radius: 0;}
			}
		</style>
	</head>
<body class="body-white">
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




<?php $home_slides=sp_getslide("portal_index"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>
<ul id="homeslider" class="unstyled">
	<?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li>
		<div class="caption-wraper">
			<div class="caption"><?php echo ($vo["slide_name"]); ?></div>
		</div>
		<a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a>
	</li><?php endforeach; endif; ?>
</ul>


<div class="content">
    <div class="cent">
        <div class="news">
            <a href="http://www.jme.com/Article/CompanyAnnouncement" target="_blank"><h3>公告</h3></a>
            <?php $topPost = sp_sql_posts('field:tid,post_title,post_date;order:post_date desc;limit:3;',array("istop"=>"1")); ?>
            <ul>
            	<?php if(is_array($topPost)): foreach($topPost as $key=>$vo): ?><li> <a target="_blank" href="<?php echo U('Article/Index','id='.$vo['tid']);?>"><?php echo ($vo["post_title"]); ?></a><p>/ <?php echo (mb_substr($vo["post_date"],0,10,'utf-8')); ?></p></li><?php endforeach; endif; ?>
            </ul>
            <!--<dl>
                <dt>2016.02.22</dt><dd><em>大圆银选用汇率：</em>USD/CNY 6.516<em>大圆沥青选用汇率：</em>USD/CNY 6.5314</dd>
            </dl>-->
        </div>
        <div class="video">
            <div class="video_hd">
            	<?php $recommended_slides=sp_getslide("portal_index"); $recommended_slides=empty($recommended_slides)?$default_home_slides:$recommended_slides; ?>
				<ul id="recommended_slides" class="unstyled">
					<?php if(is_array($recommended_slides)): foreach($recommended_slides as $key=>$vo): ?><li>
						<div class="caption-wraper">
							<div class="caption"><?php echo ($vo["slide_name"]); ?></div>
						</div>
						<a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a>
					</li><?php endforeach; endif; ?>
				</ul>
            	
                <!--<div class="dis_ve">
                    <a href="javascript:void(0)" style=" height: 22px; padding-top: 5px; font-size: 20px; position: relative; z-index: 999; margin-left:10px; width:25px;">X</a>
                    <video controls="controls" autoplay="autoplay" id="show_video" style="position: absolute;" height="220" width="396" src=""></video>
                </div>
                <div id="slideBox">
                    <ul id="show_pic" style="left: -792px;"><li><a href="http://www.jme.com/news/NewsContent/5675.html" target="_blank"><img width="396" height="180" src="./大圆银泰_files/201601221603001218234115.jpg"></a></li><li><a href="http://www.jme.com/news/NewsContent/5655.html" target="_blank"><img width="396" height="180" src="./大圆银泰_files/20160111095758334230998.jpg"></a></li><li><a href="http://www.jme.com/news/NewsContent/5653.html" target="_blank"><img width="396" height="180" src="./大圆银泰_files/20160108175736927133034.jpg"></a></li><li><a href="http://www.jme.com/news/NewsContent/5636.html" target="_blank"><img width="396" height="180" src="./大圆银泰_files/20151218175636112261975.jpg"></a></li><li><a href="http://www.jme.com/news/NewsContent/5631.html" target="_blank"><img width="396" height="180" src="./大圆银泰_files/201512140913361731957466.jpg"></a></li></ul><div id="slideText"></div><ul id="iconBall"><li class=""></li><li class=""></li><li class="active"></li><li class=""></li><li class=""></li> </ul><ul id="textBall"><li class=""><a href="http://www.jme.com/news/NewsContent/5675.html" target="_blank" title="大圆银泰平安银行签约业务正式上线">大圆银泰平安银行签约业务正式上...</a></li><li class=""><a href="http://www.jme.com/news/NewsContent/5655.html" target="_blank" title="大圆银泰获评最佳雇主南京十强">大圆银泰获评最佳雇主南京十强</a></li><li class="active"><a href="http://www.jme.com/news/NewsContent/5653.html" target="_blank" title="大圆银泰受邀参加博鳌亚洲论坛2016年首场会员大会及新春年会">大圆银泰受邀参加博鳌亚洲论坛20...</a></li><li class=""><a href="http://www.jme.com/news/NewsContent/5636.html" target="_blank" title="深圳茶博会18日开幕 大圆银泰旗下大圆普洱交易中心亮相受瞩">深圳茶博会18日开幕 大圆银泰旗...</a></li><li class=""><a href="http://www.jme.com/news/NewsContent/5631.html" target="_blank" title="大圆银泰交易客户端全新升级上线啦！">大圆银泰交易客户端全新升级上线...</a></li></ul>
                </div>-->
                <!--slideBox end-->

            </div>
            <div class="ios">
            	<?php $pos1 ?>
                <a href="http://www.jme.com/Softwares/Softwares#hg" target="_blank">
                      <p><em>移动客户端</em>
                        <br>大圆银泰 大圆普洱
                        <br>实时交易  掌握市场动态
                    </p><span><img src="./大圆银泰_files/ios.png"></span>
                </a>
            </div>
            <div class="hot">
                <a href="http://www.jme.com/news/NewsContent/5652.html" target="_blank">
                    <p>
                        <em>网上开户</em><br>
                        <br>
                    </p>
                    <span><img src="./大圆银泰_files/ios2.jpg"></span>
                </a>
            </div>
        </div>
        <div class="dowm">
            <div class="rjxz">
                <a href="http://www.jme.com/Softwares/Softwares" target="_blank">
                    <span><img src="./大圆银泰_files/dowm.png"></span>
                    <p>
                        <em>软件下载</em><br>
                       			 稳定  极速  全方位
                    </p>
                </a>
            </div>
            <div class="cjrl">
                <div class="rl_news"><div class="rl_text"><h3><p><a href="http://www.jme.com/Finance/Index" target="_blank">财经日历</a></p><span><a href="http://www.jme.com/Finance/Index" target="_blank"></a></span></h3><ul> <li><a href="http://www.jme.com/Finance/Index" target="_blank">第四季度未季调GDP终值(年率)</a></li></ul></div><div class="data"><h4>数据公布时间：2016-02-23 15:00</h4><ul><li><em>前值</em><p>1.3%</p></li><li><em>预测值</em><p>1.3%</p></li><li class="orgen"><em>公布值</em><p>侦测中...</p></li></ul></div></div>
                <div class="news_flash">
                    <h4><img src="./大圆银泰_files/kx_tle.jpg"></h4>
                    <ol id="kx"><li style="display:block"><em> 22:33</em><a title="道琼斯工业平均指数周一(2月22日)开盘上涨95.40点，涨幅0.58%，报16487.39点；&lt;br &gt;&lt;/a&gt;标普500指数周一(2月22日)开盘上涨13.26点，涨幅0.69%，报1931.04点；&lt;br /&gt;纳斯达克指数周一(2月22日)开盘上涨42.85点，涨幅0.95%，报4547.28点" target="_blank" href="http://www.jme.com/Finance/kx">道琼斯工业平均指数周一(2月22日)开盘上涨95.40点，</a></li><li style="display:block"><em> 22:28</em><a title="伊拉克石油部长迈赫迪：计划在未来5年令产量达到700万桶/日，其中出口达到600万桶/日。" target="_blank" href="http://www.jme.com/Finance/kx">伊拉克石油部长迈赫迪：计划在未来5年令产量达到7</a></li><li style="display:none"><em> 22:27</em><a title="旧金山联储主席：美经济将温和增长 美联储料加息多次" target="_blank" href="http://www.jme.com/Finance/kx">旧金山联储主席：美经济将温和增长 美联储料加息多</a></li><li style="display:none"><em> 22:27</em><a title="意大利政府：欧盟的财政规则必须能够妥善处理物价走势和经济问题。" target="_blank" href="http://www.jme.com/Finance/kx">意大利政府：欧盟的财政规则必须能够妥善处理物价走</a></li><li style="display:none"><em> 22:13</em><a title="伊拉克石油部长迈赫迪：伊拉克当前正在寻求来自日本的投资，用于支持石油、天然气、精炼油和石化产品方向。" target="_blank" href="http://www.jme.com/Finance/kx">伊拉克石油部长迈赫迪：伊拉克当前正在寻求来自日本</a></li><li style="display:none"><em> 22:12</em><a title="伊拉克石油部长迈赫迪：伊拉克需要在未来15年内进行3000亿美元的投资用于升级原油和天然气的运作设施。" target="_blank" href="http://www.jme.com/Finance/kx">伊拉克石油部长迈赫迪：伊拉克需要在未来15年内进行</a></li></ol><span><a href="javascript:void(0)" onclick="changeKx()"><p>换一批</p></a></span>
                </div>
            </div>
            <a href="http://t.jme.com/" target="_blank"><div class="two_m"><h4>大圆普洱交易中心</h4><span style="padding:0px;overflow:visible"><img src="./大圆银泰_files/wx_two11.jpg"></span></div></a>
        </div>
    </div>
</div>


<!--
<div class="container">
	
	<div>
		<h1 class="text-center">快速了解ThinkCMF</h1>
		<h3 class="text-center">Quickly understand the ThinkCMF</h3>
	</div>
	<div class="row">
		<div class="span4">
			 <h2 class="font-large nospace"><i class="fa fa-bars"></i> MVC分层模式</h2>
             <p>使用MVC应用程序被分成三个核心部件：模型（M）、视图（V）、控制器（C），他不是一个新的概念，只是ThinkCMF将其发挥到了极致。</p>
		</div>
		<div class="span4">
			 <h2 class="font-large nospace"><i class="fa fa-group"></i> 用户管理</h2>
             <p>ThinkCMF内置了灵活的用户管理方式，并可直接与第三方站点进行互联互通，如果你愿意甚至可以对单个用户或群体用户的行为进行记录及分享，为您的运营决策提供有效参考数据。</p>
		</div>
		<div class="span4">
			  <h2 class="font-large nospace"><i class="fa fa-cloud"></i> 云端部署</h2>
              <p>通过驱动的方式可以轻松支持云平台的部署，让你的网站无缝迁移，内置已经支持SAE、BAE，正式版将对云端部署进行进一步优化。</p>
		</div>
	</div>
	
	<div class="row">
		<div class="span4">
			 <h2 class="font-large nospace"><i class="fa fa-heart"></i> 安全策略</h2>
             <p>提供的稳健的安全策略，包括备份恢复，容错，防治恶意攻击登陆，网页防篡改等多项安全管理功能，保证系统安全，可靠，稳定的运行。</p>
		</div>
		<div class="span4">
			 <h2 class="font-large nospace"><i class="fa fa-cubes"></i> 应用模块化</h2>
             <p>提出全新的应用模式进行扩展，不管是你开发一个小功能还是一个全新的站点，在ThinkCMF中你只是增加了一个APP，每个独立运行互不影响，便于灵活扩展和二次开发。</p>
		</div>
		<div class="span4">
			  <h2 class="font-large nospace"><i class="fa fa-certificate"></i> 免费开源</h2>
              <p>代码遵循Apache2开源协议，免费使用，对商业用户也无任何限制。</p>
		</div>
	</div>
	
	<div>
		<h1 class="text-center">最新资讯</h1>
		<h3 class="text-center">Last News</h3>
	</div>
	<?php $lastnews=sp_sql_posts("cid:$portal_index_lastnews;field:post_title,post_excerpt,tid,smeta;order:listorder asc;limit:4;"); ?>
	<div class="row">
		<?php if(is_array($lastnews)): foreach($lastnews as $key=>$vo): $smeta=json_decode($vo['smeta'],true); ?>
		<div class="span3">
			<div class="tc-gridbox">
				<div class="header">
					<div class="item-image">
						<a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>">
							<?php if(empty($smeta['thumb'])): ?><img src="/themes/jme/Public/images/default_tupian1.png" class="img-responsive" alt="<?php echo ($vo["post_title"]); ?>"/>
							<?php else: ?> 
								<img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo["post_title"]); ?>" /><?php endif; ?>
						</a>
					</div>
					<h3><a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a></h3>
					<hr>
				</div>
				<div class="body">
					<p><a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo msubstr($vo['post_excerpt'],0,32);?></a></p>
				</div>
			</div>
		</div><?php endforeach; endif; ?>
	</div></div>-->
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


<script src="/themes/jme/Public/js/slippry.min.js"></script>
<script>
$(function() {
	var demo1 = $("#homeslider").slippry({
		transition: 'fade',
		useCSS: true,
		captions: 'below',
		speed: 1000,
		pause: 3000,
		auto: true,
		preload: 'visible'
	});
	
	var demo2 = $("#recommended_slides").slippry({
		transition: 'fade',
		useCSS: true,
		pagerClass: 'sy-pager-right',
		prevClass: 'none',
		nextClass: 'none',
		captions: 'overlay',
		speed: 1000,
		pause: 10000,
		auto: true,
		preload: 'visible'
	});
});


</script>
<?php echo hook('footer_end');?>
</body>
</html>