<?php 
$filename = "fileexample.txt";
if(file_exists($filename)) {
	unlink($filename);
	echo "File Deleted Successfully";
} else {
	echo "Error Deleting File!";
}
?>
