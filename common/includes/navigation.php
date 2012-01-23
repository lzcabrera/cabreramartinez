<?php

function strstr_after($haystack, $needle, $case_insensitive = false) {
$strpos = ($case_insensitive) ? 'stripos' : 'strpos';
$pos = $strpos($haystack, $needle);
if (is_int($pos)) {
    return substr($haystack, $pos + strlen($needle));
}
// Most likely false or null
return $pos;
}

$services = array(
	//page
	array('title'=>'Auditoría externa',
	                          'url' => '/servicios/auditoria-externa/',
	                          'top_nav'=>'false',
							  'left_nav'=>'true',
	                           'metadesc'=>'',
	                           'facebook-like' => false,
							   'leftnav' => true,
							   'rightcol' => true,
							   'maincol' => 'two-col',
							   'sitemap_hide'=> false),
	array('title'=>'Auditoría fiscal',
						      'url' => '/servicios/auditoria-fiscal/',
						      'top_nav'=>'false',
							  'left_nav'=>'true',
							  'metadesc'=>'',
						      'facebook-like' => false,
						      'leftnav' => true,
						      'rightcol' => true,
							  'maincol' => 'two-col',
							  'sitemap_hide'=> false),
	array('title'=>'Auditoría interna',
							  'url' => '/servicios/auditoria-interna/',
							  'top_nav'=>'false',
							  'left_nav'=>'true',
							  'metadesc'=>'',
							  'facebook-like' => false,
							  'leftnav' => true,
							  'rightcol' => true,
							  'maincol' => 'two-col',
							  'sitemap_hide'=> false),
	array('title'=>'Due Dilligence',
						      'url' => '/servicios/due-dilligence/',
							  'top_nav'=>'false',
							  'left_nav'=>'true',
							  'metadesc'=>'',
							  'facebook-like' => false,
							  'leftnav' => true,
							  'rightcol' => true,
							  'maincol' => 'two-col',
							  'sitemap_hide'=> false),
	array('title'=>'Servicios especiales sobre procedimientos previamente acordados',
							  'url' => '/servicios/especiales-previamente-acordados/',
							  'top_nav'=>'false',
							  'left_nav'=>'true',
							  'metadesc'=>'',
							  'facebook-like' => false,
							  'leftnav' => true,
							  'rightcol' => true,
							  'maincol' => 'two-col',
							  'sitemap_hide'=> false),
	array('title'=>'Impuestos',
							  'url' => '/servicios/impuestos/',
							  'top_nav'=>'false',
							  'left_nav'=>'true',
							  'metadesc'=>'',
							  'facebook-like' => false,
							  'leftnav' => true,
							  'rightcol' => true,
							  'maincol' => 'two-col',
							  'sitemap_hide'=> false),
	array('title'=>'Legalización de sistemas contables',
							  'url' => '/servicios/legalizacion-sistemas-contables/',
							   'top_nav'=>'false',
							   'left_nav'=>'true',
							   'metadesc'=>'',
							   'facebook-like' => false,
							   'leftnav' => true,
							   'rightcol' => true,
							   'maincol' => 'two-col',
							   'sitemap_hide'=> false),
	array('title'=>'Autorización de registros contables',
							   'url' => '/servicios/autorizacion-registros-contables/',
							   'top_nav'=>'false',
							   'left_nav'=>'true',
							   'metadesc'=>'',
							   'facebook-like' => false,
							   'leftnav' => true,
								'rightcol' => true,
							    'maincol' => 'two-col',
							    'sitemap_hide'=> false)																																			
	);
	
	$contactenos = array(
		//page
		array('title'=>'Confirmación',
		                          'url' => '/contactenos/verify.php',
		                          'top_nav'=>'false',
								  'left_nav'=>'false',
		                           'metadesc'=>'',
		                           'facebook-like' => false,
								   'leftnav' => false,
								   'rightcol' => true,
								   'maincol' => 'full-col',
							       'sitemap_hide' => true)
	);

$navigation = array(
	//page
	array('title'=>'Inicio','url'=>'/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'Cabrera Martínez, S. A. de C. V. es una entidad jurídica que se encuentra establecida y organizada de conformidad con las leyes de El Salvador y formada por profesionales salvadoreños.',
	'facebook-like' =>false,
	'leftnav' => false,
	'rightcol' => false,
	'maincol' => 'full-col',
	'sitemap_hide' => false,
	'children' => null),
	
	//page
	array('title'=>'Servicios','url'=>'/servicios/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'',
	'facebook-like' =>false,
	'leftnav' => true,
	'rightcol' => true,
	'maincol' => 'two-col',
	'sitemap_hide' => false,
	'children' => $services),
	
	//page
	array('title'=>'¿Quiénes Somos?','url'=>'/quienes-somos/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'',
	'facebook-like' =>false,
	'leftnav' => false,
	'rightcol' => true,
	'maincol' => 'full-col',
	'sitemap_hide' => false,
	'children' => null),
	
	//page
	array('title'=>'Contáctenos','url'=>'/contactenos/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'Contáctenos',
	'facebook-like' =>false,
	'leftnav' => false,
	'rightcol' => false,
	'maincol' => 'full-col',
	'sitemap_hide' => false,
	'children' => $contactenos),
	
	//page
	/*array('title'=>'Aviso Legal','url'=>'/aviso-legal/','top_nav'=>'false','left_nav'=>'false',
	'metadesc'=>'Aviso Legal',
	'facebook-like' =>false,
	'leftnav' => false,
	'rightcol' => false,
	'maincol' => 'full-col',
	'sitemap_hide' => false,
	'children' => null),*/
	
	array('title'=>'Mapa del Sitio','url'=>'/mapa-del-sitio/','top_nav'=>'false','left_nav'=>'false',
	'metadesc'=>'Mapa del Sitio',
	'facebook-like' =>false,
	'leftnav' => false,
	'rightcol' => false,
	'maincol' => 'full-col',
	'children' => null,
	'sitemap_hide' => true),	
	
	);


foreach($navigation as $page){
	if($page['url']==$_SERVER['REQUEST_URI']){
		$page_title = $page['title'];
		$page_url = $page['url'];
		$page_like = $page['facebook-like'];
		$page_meta_description = $page['metadesc'];
		$page_left_nav = $page['leftnav'];
		$page_right_col = $page['rightcol'];
		$page_width = $page['maincol'];
		break;
	}else if(is_array($page['children'])){
		
		foreach($page['children'] as $subpage){
			if($subpage['url']==$_SERVER['REQUEST_URI']){
				$page_title = $subpage['title'];
				$page_url = $subpage['url'];
				$page_like = $subpage['facebook-like'];
				$page_meta_description = $subpage['metadesc'];
				$page_left_nav = $page['leftnav'];
				$page_right_col = $page['rightcol'];
				$page_width = $page['maincol'];
				break;
			}
		}
		
	}else if( strpos($_SERVER['REQUEST_URI'],'en/search/') && $page['url']=='/en/search/' && isset($_REQUEST['q'])  ){
		$page_title = $page['title'];
		$page_url = $page['url'];
		$page_like = $page['facebook-like'];
		$page_meta_description = $page['metadesc'];
		$page_left_nav = false;
		$page_right_col = false;
		break;
	}
}


?>