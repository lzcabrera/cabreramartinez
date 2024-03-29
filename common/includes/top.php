<?php include_once($_SERVER['DOCUMENT_ROOT']."/common/includes/navigation.php"); ?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

	
	
	<?
	
	  if($_SERVER["SERVER_NAME"]=="funnelcity.dev")
		$google_API_key = "ABQIAAAAmpDJqx1NeHt392MWT6ehoxTFWzYQPcNuZj5-TCqC-nGOC6MU_BThQmrig0wfRN4Cr0wGfmJ2HXOjBg";
	  else
		$google_API_key = "ABQIAAAAmpDJqx1NeHt392MWT6ehoxRm8APZ2Y8Qzc5p6H-9eLjdyj-sRBSau3NEqkBOiz5HiZWUpb-h7lykOA";
		
	  if($page_title==''){
		$browser_page_title="page not found";
		}else{
		$browser_page_title=$page_title;
		}
	
	?>
	
	<title><?php echo $browser_page_title; ?> :: Cabrera Martinez S.A. de C.V.</title>
	
	<meta name="robots" content="NOODP">
	
	<meta name="description" content="<?php echo $page_meta_description; ?>" />
	<meta name="keywords" content="Cabrera Martinez S.A. de C.V., Mario Cabrera, Mario Humberto Cabrera Martinez, Cabrera Martínez San Salvador, El Salvador, Cabrera Martinez El Salvador, Auditoria en El Salvador, San Salvador Auditoria, San Salvador Auditoría, Expertos en Auditoria en El Salvador, AGN El Salvador, Contaduria Publica San Salvador, Auditores en San Salvador, Contaduría Pública en El Salvador" />
	<meta name="google-site-verification" content="HSXE-XlLPj0krD0_6Mszi-icF6NvgAT1OpWu-OXPh-U" />
	<meta name="author" content="funnelcity.com"/>
	<link type="image/x-icon" href="/img/favicon.ico" rel="icon"/>
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<meta name="google-site-verification" content="NkpvNaNpcs9kQ6NoZC9tCGE5CewBaIukY6ms5zbUsUY" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
		
	<!-- CSS: implied media=all -->
	  <!-- CSS concatenated and minified via ant build script-->
	  <link rel="stylesheet" href="/css/style.css">
	  <!-- end CSS-->

	  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

	  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
	       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
	       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
	  <script src="/js/libs/modernizr-2.0.6.min.js"></script>
	
	  <?php
	  $google_map_key ='';
	  if($_SERVER['SERVER_NAME']=='cabreramartinez.laura-cabrera.com'){// qa
		$google_map_key='ABQIAAAA7CtUI3fphlVSIVghOUS50RRvC6DAeY-SzzPnTaoD2zBS49neLBSKMLNHwDSWKkAI_HXwcdq91HsBow';
	  }else if($_SERVER['SERVER_NAME']=='cabreramartinez.dev'){// dev
		$google_map_key='ABQIAAAA7CtUI3fphlVSIVghOUS50RRTx2QzHMh3VuSya81UP1pWuM0L2hRNAC1lWh9IC5wOg1YDEgGeJ8siIQ';
	  }else{// live
		$google_map_key='ABQIAAAA7CtUI3fphlVSIVghOUS50RS5RrNXij-aiqpVZQ9jWJtyY29yFBQW3QvoxTwKYFkvAh7CSLJNRBquxA';
	  }
	
	  ?>
	  <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=<?=$google_map_key?>" type="text/javascript"></script>
	 
</head>
<body>

	<div id="container">
	    <header>
			<div class="branding">
				<a href="/" class="logo"><img src="/img/cabreramartinez.png" alt="Cabrera Martínez"></a>
				<a href="/" class="tagline"><img src="/img/tagline.png" alt="Contadores y Públicos y Auditores"></a>
			</div>
			<div id="contact-info">
				Condominio Metro 2000 Local C21<br/>
				47 Avenida Norte<br/>
				Entre 1a Calle Pte. y Al. Juan Pablo II</br>	
				San Salvador, El Salvador
				<div class="telefono">(503) 2260 - 7836</div>
			</div>
			<div class="clear header-spacer"></div>
			<ul id="navigation">
				
				<? foreach($navigation as $page){ ?>
					<? if($page['top_nav']=='true'){ ?>
						
						<li class="<?=($page['url']==$_SERVER['REQUEST_URI'] || strstr_after($_SERVER['REQUEST_URI'],$page['url']) && $page['url']!='/' )?'selected':''?> <?=($page['url']!=='/contactenos/')?'':'last'?>" >
							<a href="<?= $page['url'] ?>"><?=$page['title']?></a>
						</li>
					<? } ?>
				<? } ?>
	
			</ul>
    
	    </header>
	
		<?php if($page_left_nav){ ?>	
			<div class="left-column">
				<ul id="left-nav">
					<?php foreach($navigation as $page){  
						if(($page['url']==$_SERVER['REQUEST_URI'] || strstr_after($_SERVER['REQUEST_URI'],$page['url'])) && $page['url']!='/' ){ 
						
							echo "<li class='section'><a href='".$page['url']."'>".$page['title']."</a></li>";
						
							if(is_array($page['children'])){
								foreach($page['children'] as $subpage){
									echo "<li class='".($subpage['url']==$_SERVER['REQUEST_URI']?'selected':'')."'><a href='".$subpage['url']."'>".$subpage['title']."</a></li>";
								}
							}			
						} 
				 	} ?>
				</ul>
			</div>
		<?php } ?>
		
		
		<div id="main" role="main" class="<?=$page_width?>">

				<? if($page_url!='/'){ ?>
					<h1><?php echo $page_title; ?></h1>	
				
					<ul class="breadcrumbs">
						<li class="first"><a href="/">Inicio</a></li>
						<?php
						foreach($navigation as $page)
						{

							if(($page['url']==$_SERVER['REQUEST_URI'] || strstr_after($_SERVER['REQUEST_URI'],$page['url'])) && $page['url']!='/' ){
								if($page['url']==$_SERVER['REQUEST_URI'])
									echo "<li class='last'>" . $page['title'] . "</li>";
								else
									echo "<li><a href=".$page['url'].">".$page['title']."</a></li>";
									
								if(strstr_after($_SERVER['REQUEST_URI'],$page['url'])){
									foreach($page['children'] as $subpage){
										if($subpage['url']==$_SERVER['REQUEST_URI']){
											echo "<li class='last'>".$subpage['title']."</li>";
										}

									}
								}

							}

						}
						?>
						
							
						<?php if($page_title==''){ ?>
							<li class="last">page not found</li>	
						<?php } ?>
					</ul>
				<? } ?>
				
				<?php if($page_like==true){ ?>
					<div class="facebook-like">
				
					</div>
				<?php } ?>
				<div class="clear"></div>

				<?php if($page_title==''){ ?>
					<h1>page not found...</h1>
					<p>We could not find the page you requested. Please visit our <a href="/sitemap">site map</a> or <a href="/contactenos">contact us</a> if you need help finding the page you are looking for.</p>
				
				<?php } ?>
				
				
				
