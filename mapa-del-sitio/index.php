<?php include($_SERVER['DOCUMENT_ROOT']."/common/includes/top.php"); ?>
		
<div class="main-column">
<ul class="sitemap">
	<? foreach($navigation as $page){
		
		if(!$page["sitemap_hide"]){ ?>

		<li>
			<a href="<?=$page["url"]?>"><?=$page["title"]?></a>
			
				<? if(is_array($page['children'])){ ?>
					<ul>
					 <?	foreach($page['children'] as $subpage){
						if(!$subpage["sitemap_hide"]){ ?>	
							<li><a href="<?=$subpage["url"]?>"><?=$subpage["title"]?></a></li>		
					 	<? } ?>
					 <? } ?>
					</ul>
				<? } ?>
		</li>
		<? } ?>
	<? } ?>

</ul>
</div>


<? include($_SERVER['DOCUMENT_ROOT']."/common/includes/bottom.php"); ?>