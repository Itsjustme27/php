<?php 
$filename = "fileexample.txt";
if(file_exists($filename)) {
	$file = fopen($filename, 'r');
	$content = fread($file, filesize($filename));
	echo $content;
	fclose($file);
} else {
	echo "Could not open file";
}
?>
