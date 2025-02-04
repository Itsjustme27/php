<?php
$filename = "fileexample.txt";
$file = fopen($filename, "r");

if($file) {
	while(!feof($file)) {
		echo fgets($file) . "\n"; // reads file line by line
	}
	fclose($file);
}else {
	echo "Could not open file";
}

/*
 * if you want to read and display file at once
 * $content = file_get_contents($file);
 * echo $content;
 * fclose($file);*/

?>
