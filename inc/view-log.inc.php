<?
if(is_file("log/path.log")){
	$f = fopen("log/path.log", "r");
	$lines = [];
	while( $line = fgets($f)){
		$lines[] = $line;
	}
	//print_r($lines);
	fclose($f);
	$n = 1;
	foreach($lines as $val){
		echo "$n.$val<br>";
		$n++;
}
}	

