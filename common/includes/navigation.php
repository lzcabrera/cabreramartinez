<?php

$navigation = array(
	//page
	array('title'=>'Inicio','url'=>'/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'Cabrera Martínez, S. A. de C. V. es una entidad jurídica que se encuentra establecida y organizada de conformidad con las leyes de El Salvador y formada por profesionales salvadoreños.',
	'facebook-like' =>false),
	
	//page
	array('title'=>'Servicios','url'=>'/servicios/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'',
	'facebook-like' =>false,
	'children' => array("child0" => array('title'=>'Auditoria Externa',
	                          'url' => '/servicios/auditoria-externa/',
	                          'top_nav'=>'false',
							  'left_nav'=>'true',
	                           'metadesc'=>'',
	                           'facebook-like' => true
										  )
	                    )
	),
	
	//page
	array('title'=>'¿Quiénes Somos?','url'=>'/quienes-somos/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'',
	'facebook-like' =>false),
	
	//page
	array('title'=>'Contáctenos','url'=>'/contactenos/','top_nav'=>'true','left_nav'=>'true',
	'metadesc'=>'Contáctenos',
	'facebook-like' =>false),
	
	//page
	array('title'=>'Aviso Legal','url'=>'/aviso-legal/','top_nav'=>'false','left_nav'=>'false',
	'metadesc'=>'Aviso Legal',
	'facebook-like' =>false),
	array('title'=>'Mapa del Sitio','url'=>'/mapa-del-sitio/','top_nav'=>'false','left_nav'=>'false',
	'metadesc'=>'Mapa del Sitio',
	'facebook-like' =>false),	
	
	);

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

foreach($navigation as $page){
	if($page['url']==$_SERVER['REQUEST_URI']){
		$page_title = $page['title'];
		$page_url = $page['url'];
		$page_like = $page['facebook-like'];
		$page_meta_description = $page['metadesc'];
		break;
	/*}else if(is_array($page['children'][0])){
		echo "ahhh<br/><pre>".$page['children'][0]['title']."</pre>";
		foreach($page['children'] as $child){
			if($child['url']==$_SERVER['REQUEST_URI']){
				$page_title = $child['title'];
				$page_url = $child['url'];
				$page_like = $child['facebook-like'];
				$page_meta_description = $child['metadesc'];
				break;
			}
		}*/	
	}else if( strpos($_SERVER['REQUEST_URI'],'en/search/') && $page['url']=='/en/search/' && isset($_REQUEST['q'])  ){
		$page_title = $page['title'];
		$page_url = $page['url'];
		$page_like = $page['facebook-like'];
		$page_meta_description = $page['metadesc'];
		break;
	}
}
$page_title = $_SERVER['REQUEST_URI'];
$page_url = "";
$page_like = "";
$page_meta_description = "";

?>