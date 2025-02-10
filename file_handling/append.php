<?php 
$filename = "fileexample.txt";
if(file_exists($filename)) {
	$file = fopen($filename, 'a');
	$content = "Appending to the file";
	fwrite($file, $content);
	fclose($file);
} else {
	echo "Could not append to file";
}
?>xx
