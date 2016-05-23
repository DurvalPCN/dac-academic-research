<?php

include('simple_html_dom.php');

$arrContextOptions=array(
	'ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
	),
);

$html = str_get_html(file_get_contents("https://academic.microsoft.com/#/search?iq=And(Composite(F.FN%253D%253D'education')%252CComposite(F.FN%253D%253D'informatics'))&q=education%20informatics&filters=&from=0&sort=0", false, stream_context_create($arrContextOptions)));

$response = array();
$structure = array();

foreach($html->find('div.content-main') as $element) {
	$papers = $element->find('a.blue-title');
	foreach($papers as $paperLinkJson) {
		$title = $paperLinkJson->title;
		$link = $paperLinkJson->href;

		$structure[] = array('title' => $title, 'link' => 'link');
	}
}

$response['structure'] = $structure;

$fp = fopen('papersLinks.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);

?>