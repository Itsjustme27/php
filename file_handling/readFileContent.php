<?php 
function readFileContent($filename) {
	try {
		$file = fopen($filename, 'r');
		if(!$file) {
			throw new Exception("Error opening file");
		}
		echo fread($file, filesize($filename));
	} catch(Exception $e) {
		echo "Error is: " . $e->getMessage();
		$grep_msg = preg_grep("Error is: Error opening file", $e->getMessage);
		echo $grep_msg;
	} finally {
		fclose($file);
	}
}

$filename = "fileexampl.txt";
$result = readFileContent($filename);
echo $result;
?>
