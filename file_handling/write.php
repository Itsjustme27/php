<?php 
	$filename = "fileexample.txt";
	$file = fopen($filename, "w");
	if($file) {
		$text = "This is my example context in file";
		fwrite($file,$text);
		fclose($file);
	} else {
		echo "Could not open file";
	}
?>
