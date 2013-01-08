<?php
/** 
* Daftar kota di Indonesia
* @contributor: hehe,hehe,hehe, (silakan masukkan nama agan disini)
*/
$indonesia = Array(
	'provinsi' => Array(
		'Nanggroe Aceh Darussalam' => Array('kota' => Array(
										'Banda Aceh',
										'Langsa',
										'Lhokseumawe',
										'Takengon',
										'Tapaktuan',
										'Meulaboh',
										'Sigli',
										'Kutacane',
										'Singkil',
										'Subulussalam'
									)),
		'Sumatera Utara'          => Array('kota' => Array(
										'Medan',
										'Binjai',
										'Stabat',
										'Tebing Tinggi',
										'Pematangsiantar',
										'Sibolga',
										'Gunung Sitoli',
										'Kabanjahe'
							
		))
	)
);
$output = isset($_GET['output']) ? $_GET['output'] : '';
switch($output) :
	case 'json':
		header('Content-type: text/json');
		header('Content-type: application/json');
		echo json_encode($indonesia);
	break;
	
	case 'xml':
		//xml here
	break;
	
	case 'sql':
		//sql output here
	break;
	
	case 'table':
		//table output here
	break;
	
	default :
		echo '<pre>';
		print_r($indonesia);
		echo '</pre>';
		echo '<hr>';
	break;
endswitch;
if(isset($_GET['outp'])) {
	
}

else {
	
}
?>