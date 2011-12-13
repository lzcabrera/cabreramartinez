<?php if($page_right_col){ ?>
	<div class="right-column">
		<div class="tout">
			<p>Miembro de</p>
			<a href="http://www.agn.org/" target="_blank"><img class="agn-logo" src="/img/agn-logo.png" alt="AGN International"></a>
		</div>
	</div>
<?php } ?>
	<div class="clear"></div>
</div><!-- main -->


<footer>
	<div class="footer">
		<div class="footer-separator"></div>
		<span class="copyright">Cabrera Martinez S.A. de C.V. © <?=date('Y')?></span> 
		<ul>
			<? foreach($navigation as $page){ ?>
				<? if($page['top_nav']=='false'){ ?>
					<li>
						<a href="<?=$page['url']?>"><?=$page['title']?></a> 
					</li>
				<? } ?>
			<? } ?>
		</ul>
	</div>
</footer>
</div> <!--! end of #container -->


<!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


<!-- scripts concatenated and minified via ant build script-->
<script defer src="/js/plugins.js"></script>
<script defer src="/js/script.js"></script>
<!-- end scripts-->


<?php if($_SERVER['REQUEST_URI']=="/contactenos/"){ ?>
	<script type="text/javascript">
		var unLoaders=[];  
	</script>
  	<script src="/js/mylibs/map.js"></script>
	<script>
		$(window).unload(function() {
		    //alert('Handler for .unload() called.');
			unload();
			google.maps.Unload()
		});
		
		$(document).ready(function() {
		  // Handler for .ready() called.
		  googleMapInit(map_canvas);
		});
	</script>
  <?    } ?>





<!-- Change UA-XXXXX-X to be your site's ID -->
<script>
window._gaq = [['_setAccount','UA-17063427-1'],['_trackPageview'],['_trackPageLoadTime']];
Modernizr.load({
  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
});
</script>


<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
   chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

</body>
</html>
