<?php

$services = array(
	//page
	array('title'=>'Auditoría externa',
	                          'url' => '/servicios/auditoria-externa/',
	                          'top_nav'=>'false',
							  'left_nav'=>'true',
	                           'metadesc'=>'',
	                           'facebook-like' => false
										  ),
	array('title'=>'Auditoría fiscal',
						      'url' => '/servicios/auditoria-fiscal/',
						      'top_nav'=>'false',
							  'left_nav'=>'true',
							  'metadesc'=>'',
						      'facebook-like' => false
										  ),
	array('title'=>'Auditoría interna',
							  'url' => '/servicios/auditoria-interna/',
							  'top_nav'=>'false',
							  'left_nav'=>'true',
							  'metadesc'=>'',
							  'facebook-like' => false
								          ),
	array('title'=>'Due Dilligence',
						      'url' => '/servicios/due-dilligence/',
							  'top_nav'=>'false',
							  'left_nav'=>'true',
							  'metadesc'=>'',
							  'facebook-like' => false
										  ),
	array('title'=>'Servicios especiales sobre procedimientos previamente acordados',
							  'url' => '/servicios/especiales-previamente-acordados/',
							  'top_nav'=>'false',
							  'left_nav'=>'true',
							  'metadesc'=>'',
							  'facebook-like' => false
										  ),
	array('title'=>'Impuestos',
							  'url' => '/servicios/impuestos/',
							  'top_nav'=>'false',
							  'left_nav'=>'true',
							  'metadesc'=>'',
							  'facebook-like' => false
										  )																											
	);

$navigation = array(
	//page
	array('title'=>'Inicio','url'=>'/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'Cabrera Martínez, S. A. de C. V. es una entidad jurídica que se encuentra establecida y organizada de conformidad con las leyes de El Salvador y formada por profesionales salvadoreños.',
	'facebook-like' =>false,
	'children' => null),
	
	//page
	array('title'=>'Servicios','url'=>'/servicios/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'',
	'facebook-like' =>false,
	'children' => $services),
	
	//page
	array('title'=>'¿Quiénes Somos?','url'=>'/quienes-somos/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'',
	'facebook-like' =>false,
	'children' => null),
	
	//page
	array('title'=>'Contáctenos','url'=>'/contactenos/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'Contáctenos',
	'facebook-like' =>false,
	'children' => null),
	
	//page
	array('title'=>'Aviso Legal','url'=>'/aviso-legal/','top_nav'=>'false','left_nav'=>'false',
	'metadesc'=>'Aviso Legal',
	'facebook-like' =>false,
	'children' => null),
	array('title'=>'Mapa del Sitio','url'=>'/mapa-del-sitio/','top_nav'=>'false','left_nav'=>'false',
	'metadesc'=>'Mapa del Sitio',
	'facebook-like' =>false,
	'children' => null),	
	
	);



foreach($navigation as $page){
	if($page['url']==$_SERVER['REQUEST_URI']){
		$page_title = $page['title'];
		$page_url = $page['url'];
		$page_like = $page['facebook-like'];
		$page_meta_description = $page['metadesc'];
		break;
	}else if(is_array($page['children'])){
		
		foreach($page['children'] as $subpage){
			if($subpage['url']==$_SERVER['REQUEST_URI']){
				$page_title = $subpage['title'];
				$page_url = $subpage['url'];
				$page_like = $subpage['facebook-like'];
				$page_meta_description = $subpage['metadesc'];
				break;
			}
		}
		
	}else if( strpos($_SERVER['REQUEST_URI'],'en/search/') && $page['url']=='/en/search/' && isset($_REQUEST['q'])  ){
		$page_title = $page['title'];
		$page_url = $page['url'];
		$page_like = $page['facebook-like'];
		$page_meta_description = $page['metadesc'];
		break;
	}
}
/*
$page_title = $_SERVER['REQUEST_URI'];
$page_url = "";
$page_like = "";
$page_meta_description = "";*/

?>