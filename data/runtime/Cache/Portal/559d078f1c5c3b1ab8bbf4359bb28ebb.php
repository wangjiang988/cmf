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
	
     <script type="text/javascript">
	 	$(function(){
	 	 
	 	});
	 </script>
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



<div class="container tc-main">

<div class="banner_hy"><div class="banner_hy" style="background:#FFFFCD no-repeat scroll center center;"><div style="background:url(&#39;http://img.jme.com/2015/11/5/201511051625581741844596.jpg&#39;) no-repeat center center;height:500px;"></div></div></div>
<div class="wire">
    <div class="cent">
        <h3 class="public_t"><img src="./公司公告_files/gsg_title.jpg"></h3>
        <div class="wire_tx">
            <div class="left">
<dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5699.html" target="_blank">关于贯彻监管要求，规范市场秩序的公告</a><em>2016-02-23 11:44</em></span><p>	DYYT-2016-014	尊敬的各会员单位及交易商： 	为贯彻落实《关于进一步加强对引入第三方价格交易场所监管的通知》（苏金融办发【2016】7号）文件精神，规范市场秩序，促进市场发展。 	我交易...</p></dd></dl><dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5698.html" target="_blank">关于贯彻监管要求、规范市场秩序 公示信访投诉处置机制的公告</a><em>2016-02-23 11:42</em></span><p>	DYYT-2016-013	尊敬的各会员单位及交易商： 	为贯彻落实《关于进一步加强对引入第三方价格交易场所监管的通知》（苏金融办发【2016】7号）文件精神，规范市场秩序及交易行为，促进市场发展，...</p></dd></dl><dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5697.html" target="_blank">关于光大银行系统升级的通知</a><em>2016-02-23 11:41</em></span><p>	DYYT-2016-012	尊敬的各会员单位及交易商： 	根据光大银行通知，该行资金监管系统将于2016年2月25日（周四）19:30—21:30进行系统升级，届时该行的出入金系统将停止服务2小时（...</p></dd></dl><dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5690.html" target="_blank">关于美国总统日提前休市的通知</a><em>2016-02-11 14:07</em></span><p>	DYYT-2016-011	尊敬的各会员单位及交易商： 因2016年2月15日（周一）为美国总统日，届时美国纽约金融市场休市，我交易市场根据实际情况调整交易时间. 	具体时间调整如下： 1、2016...</p></dd></dl><dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5689.html" target="_blank">关于大圆沥青现金交割的通知</a><em>2016-02-08 20:30</em></span><p>	DYYT-2016-010	尊敬的各会员单位及交易商：	按照大圆沥青合约的交易规则，2016年2月12日为大圆沥青现金交割日，大圆沥青15吨、大圆沥青50吨、大圆沥青150吨合约将于2016年2月1...</p></dd></dl><dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5686.html" target="_blank">关于2016年春节期间正常开市的通知</a><em>2016-02-01 18:12</em></span><p>	DYYT-2016-009	尊敬的各会员单位及交易商： 	为与国际交易时间保持同步，并满足广大交易商需求，我交易市场决定2016年春节期间正常开市。 	一、具体时间如下： 	1、2月8-12日（周一...</p></dd></dl><dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5676.html" target="_blank">关于部分交易规则变更的通知</a><em>2016-01-22 20:53</em></span><p>	DYYT-2016-008	尊敬的各会员单位及交易商： 	为优化投资服务,降低交易风险，切实维护投资者利益。经交易市场研究决定，自2016年01月25日起，对部分交易规则作出以下变更： 	1、大圆银...</p></dd></dl><dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5669.html" target="_blank">关于平安银行签约业务正式上线的通知</a><em>2016-01-21 18:00</em></span><p>	DYYT-2016-007	尊敬的各会员单位及交易商： 	平安银行签约业务将于2016年1月22日正式上线！ 	平安银行卡客户：可以直接通过个人网上银行或者手机银行，与江苏大圆银泰商品合约交易市场进...</p></dd></dl><dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5667.html" target="_blank">关于提前休市的通告</a><em>2016-01-20 18:22</em></span><p>	DYYT-2016-006	尊敬的各会员单位及交易商： 	由于系统升级，我交易市场根据实际情况调整交易时间，具体时间调整如下： 	1、2016年1月21日03:00提前休市； 	2、2016年1月2...</p></dd></dl><dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5662.html" target="_blank">关于交易系统维护的通知</a><em>2016-01-15 19:53</em></span><p>	DYYT-2016-005	尊敬的各会员单位及交易商： 	为了更好的提升客户交易体验，我交易市场将于2016年1月17日(周日)对交易系统进行维护，届时网上开户、网上登录、微盘登录系统均将暂停服务。...</p></dd></dl><dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5661.html" target="_blank">关于调整交易时间的通知</a><em>2016-01-15 11:25</em></span><p>	DYYT-2016-003	尊敬的各会员单位及交易商： 	2016年1月18日（星期一）为马丁路德金日，我交易市场根据实际情况对已上市交易品种（大圆银、大圆沥青）交易时间做出调整。 	具体时间调整如...</p></dd></dl><dl><dt><em><img class="left_imgz" src="./公司公告_files/gg.jpg" width="206px" height="126px"></em></dt><dd><span><a href="http://www.jme.com/news/NewsContent/5656.html" target="_blank">关于大圆沥青现金交割的通知</a><em>2016-01-11 14:40</em></span><p>	DYYT-2016-001	尊敬的各会员单位及交易商： 	按照大圆沥青合约的交易规则，2016年1月15日为大圆沥青现金交割日，大圆沥青15吨、大圆沥青50吨、大圆沥青150吨合约将于2016年1月...</p></dd></dl>                    <div class="fenye">
                        <div class="page"><a class="page_pre" href="javascript:void(0)" title="上一页"></a><a href="http://www.jme.com/Article/CompanyAnnouncement" class="page_current cur" title="第1页">1</a><a href="http://www.jme.com/Article/CompanyAnnouncement/2" class="page_num" title="第2页">2</a><a href="http://www.jme.com/Article/CompanyAnnouncement/3" class="page_num" title="第3页">3</a><a href="http://www.jme.com/Article/CompanyAnnouncement/4" class="page_num" title="第4页">4</a><a href="http://www.jme.com/Article/CompanyAnnouncement/5" class="page_num" title="第5页">5</a><a href="http://www.jme.com/Article/CompanyAnnouncement/6" class="page_num" title="第6页">6</a><span>...</span><a class="page_num" href="http://www.jme.com/Article/CompanyAnnouncement/23" title="第23页">23</a><a class="page_next" href="http://www.jme.com/Article/CompanyAnnouncement/2" title="下一页"></a></div>
                    </div>

            </div>
            <div class="right">
                <div class="public_r">
        <ul class="icon">
          <li class="br"><a href="http://www.jme.com/Memember/Guide" target="_blank" class="io"></a></li>
        
            <li><a href="javascript:void(0)" target="_self" class="io2"></a></li>
          <li><a href="http://www.jme.com/Softwares/Softwares" target="_blank" class="io3"></a></li>
          <li><a href="http://www.jme.com/Article/CommonProblem" target="_blank" class="io4"></a></li>
        </ul>
        <div class="mtbd">
          <h3>
            <p><a href="http://www.jme.com/Market/Press" target="_blank">媒体报道</a></p>
            <span><a href="http://www.jme.com/Market/Press" target="_blank"></a></span></h3>
          <ul>
            <li><em>11/26</em><a href="http://www.jme.com/news/NewsContent/5558" target="_blank">【福建电视台-说茶】互联网+普…</a></li><li><em>11/26</em><a href="http://www.jme.com/news/NewsContent/5557" target="_blank">【江苏城市频道-江苏午间特快】…</a></li><li><em>11/26</em><a href="http://www.jme.com/news/NewsContent/5556" target="_blank">【南京十八频道-标点财商】在线…</a></li><li><em>11/18</em><a href="http://www.jme.com/news/NewsContent/5541" target="_blank">【网易】“网罗普洱•融汇未来”…</a></li><li><em>11/18</em><a href="http://www.jme.com/news/NewsContent/5540" target="_blank">【FX168】“网罗普洱•融汇…</a></li><li><em>11/18</em><a href="http://www.jme.com/news/NewsContent/5539" target="_blank">【现代快报】“网罗普洱•融汇未…</a></li><li><em>11/17</em><a href="http://www.jme.com/news/NewsContent/5536" target="_blank">【交易中国】“网罗普洱•融汇未…</a></li><li><em>11/17</em><a href="http://www.jme.com/news/NewsContent/5535" target="_blank">【中国新闻网】“网罗普洱•融汇…</a></li><li><em>11/17</em><a href="http://www.jme.com/news/NewsContent/5534" target="_blank">【江南时报】大圆普洱交易中心隆…</a></li><li><em>11/17</em><a href="http://www.jme.com/news/NewsContent/5533" target="_blank">【中金网】“网罗普洱•融汇未来…</a></li>
          </ul>
        </div>
      </div>

            </div>
        </div>
    </div>

</div>


	
    <!--<div class="pg-opt pin">
        <div class="container">
            <h2><?php echo ($name); ?></h2>
        </div>
    </div>-->
    <!--<div class="row">
		<div class="span9">
			<div class="">
				<?php $lists = sp_sql_posts_paged("cid:$cat_id;order:post_date DESC;",10); ?>
				<?php if(is_array($lists['posts'])): $i = 0; $__LIST__ = $lists['posts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $smeta=json_decode($vo['smeta'], true); ?>
				
				<div class="list-boxes">
					<h2><a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a></h2>
					<p><?php echo (msubstr($vo["post_excerpt"],0,256)); ?></p>
					<div>
						<div class="pull-left">
							<div class="list-actions">
							<a href="javascript:;"><i class="fa fa-eye"></i><span><?php echo ($vo["post_hits"]); ?></span></a>
							<a href="<?php echo U('article/do_like',array('id'=>$vo['object_id']));?>" class="js-count-btn"><i class="fa fa-thumbs-up"></i><span class="count"><?php echo ($vo["post_like"]); ?></span></a>
							<a href="<?php echo U('user/favorite/do_favorite',array('id'=>$vo['object_id']));?>" class="js-favorite-btn" data-title="<?php echo ($vo["post_title"]); ?>" data-url="<?php echo U('portal/article/index',array('id'=>$vo['tid']));?>" data-key="<?php echo sp_get_favorite_key('posts',$vo['object_id']);?>">
								<i class="fa fa-star-o"></i>
							</a>
							</div>
						</div>
						<a class="btn btn-warning pull-right" href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>">查看更多</a>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				
			</div>
			<div class="pagination"><ul><?php echo ($lists['page']); ?></ul></div>
		</div>
		<div class="span3">
			<div class="tc-box first-box">
			<div class="headtitle">
          		<h2>分享</h2>
          	</div>
			<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a></div>
			<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=86835285.js?cdnversion='+~(-new Date()/36e5)];</script>          
        	</div>
        	
        	<div class="tc-box">
	        	<div class="headtitle">
	        		<h2>热门文章</h2>
	        	</div>
	        	<div class="ranking">
	        		<?php $hot_articles=sp_sql_posts("cid:$portal_hot_articles;field:post_title,post_excerpt,tid,term_id,smeta;order:post_hits desc;limit:5;"); ?>
		        	<ul class="unstyled">
		        		<?php if(is_array($hot_articles)): foreach($hot_articles as $key=>$vo): $top=$key<3?"top3":""; ?>
							<li class="<?php echo ($top); ?>"><i><?php echo ($key+1); ?></i><a title="<?php echo ($vo["post_title"]); ?>" href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
			<div class="tc-box">
	        	<div class="headtitle">
	        		<h2>最新评论</h2>
	        	</div>
	        	<div class="comment-ranking">
	        		<?php $last_comments=sp_get_comments("field:*;limit:0,5;order:createtime desc;"); ?>
	        		<?php if(is_array($last_comments)): foreach($last_comments as $key=>$vo): ?><div class="comment-ranking-inner">
	                        <i class="fa fa-comment"></i>
	                        <a href="<?php echo U('user/index/index',array('id'=>$vo['uid']));?>"><?php echo ($vo["full_name"]); ?>:</a>
	                        <span><?php echo ($vo["content"]); ?></span>
	                        <a href="/<?php echo ($vo["url"]); ?>#comment<?php echo ($vo["id"]); ?>">查看原文</a>
	                        <span class="comment-time"><?php echo date('m月d日  H:i',strtotime($vo['createtime']));?></span>
	                    </div><?php endforeach; endif; ?>
                </div>
			</div>
			
			<div class="tc-box">
	        	<div class="headtitle">
	        		<h2>最新加入</h2>
	        	</div>
	        	<?php $last_users=sp_get_users("field:*;limit:0,8;order:create_time desc;"); ?>
	        	<ul class="list-unstyled tc-photos margin-bottom-30">
	        		<?php if(is_array($last_users)): foreach($last_users as $key=>$vo): ?><li>
	                    <a href="<?php echo U('user/index/index',array('id'=>$vo['id']));?>">
	                    <img alt="" src="<?php echo U('user/public/avatar',array('id'=>$vo['id']));?>">
	                    </a>
                    </li><?php endforeach; endif; ?>
                </ul>
			</div>
			
			<div class="tc-box">
	        	<div class="headtitle">
	        		<h2>最新发布</h2>
	        	</div>
	        	<?php $last_post=sp_sql_posts("cid:$portal_last_post;field:post_title,post_excerpt,tid,term_id,smeta;order:listorder asc;limit:4;"); ?>
	        	<div class="posts">
	        		<?php if(is_array($last_post)): foreach($last_post as $key=>$vo): $smeta=json_decode($vo['smeta'],true); ?>
			        	<dl class="dl-horizontal">
				            <dt>
					            <a class="img-wraper" href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>">
					            	<?php if(empty($smeta['thumb'])): ?><img src="/themes/jme/Public/images/default_tupian4.png" class="img-responsive" alt="<?php echo ($vo["post_title"]); ?>"/>
									<?php else: ?> 
										<img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo["post_title"]); ?>" /><?php endif; ?>
					            </a>
				            </dt>
				            <dd><a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo msubstr($vo['post_excerpt'],0,32);?></a></dd>
				        </dl><?php endforeach; endif; ?>
		        </div>
			</div>
			
			<?php $ad=sp_getad("portal_list_right_aside"); ?>
			<?php if(!empty($ad)): ?><div class="tc-box">
	        	<div class="headtitle">
	        		<h2>赞助商</h2>
	        	</div>
	        	<div>
		        	<?php echo ($ad); ?>
		        </div>
			</div><?php endif; ?>
		</div>
    </div>
    -->
    
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


</body>
</html>