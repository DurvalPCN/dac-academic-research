<?php

$row=1;
ini_set('max_execution_time', 1200);

$authors = array();

 if (($handle = fopen("authors.csv", "r")) !== FALSE) {
     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
         $num = count($data)-1;
         //echo "<p> $num campso na linha $row: <br /></p>\n";
         $row++;
         for ($c=0; $c < $num; $c++) {
         	$authors[$row-1] = $data[$c];
            //echo $row-1 . " '" . $data[$c] . "'<br />\n";
         }
     }
    fclose ($handle);
 }


$roda=1;
$last=714;
while($roda < $last+1) {
	$json = file_get_contents("https://api.projectoxford.ai/academic/v1.0/evaluate?key=e06970605e6549ef8c5161b1885370f3&expr=Composite(AA.AuN=%27" . str_replace(" ", "%20", $authors[$roda]) . "%27)&model=latest&count=10&offset=0&attributes=Ti,D,CC,AA.AuN,AA.AfN,F.FN,J.JN,C.CN,E");
	if($roda == 1)
		echo "{ \"result\": [ " . $json . ",";
	else if($roda == $last)
		echo $json . "]}";
	else
		echo $json . ",";
	$roda++;
}

?>