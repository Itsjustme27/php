<?php
$fileDir = 'uploads/';
$uploadTypes = ['jpg', 'png', 'jpeg', 'txt'];
$maxFileSize = 2 * 1024 * 1024;

try{
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$file = $_FILES['file'];
		
		// Error handling
		if($file['error'] !== UPLOAD_ERR_OK) {
			throw new Exception("File upload error: " . $file['error']);
		}
		
		// validating file size
		if($file['size'] > $maxFileSize) {
			throw new Exception("MAX FILE SIZE REACHED: 2MB ONLY");
		}
		
		// extracting file extension
		$fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

		if(!in_array($fileExtension, $uploadTypes)) {
			throw new Exception('Invalid File type: png, jpg, jpeg, txt');
		}
		
		// creating a safe name
		$safeFileName = uniqid('upload_', true) . '.' . $fileExtension;
		if(!move_uploaded_file($file['tmp_name'], $fileDir . $safeFileName)) {
			throw new Exception('File not moved');
		}
	}
}catch(Exception $e){
	throw new Exception('Exception: ' . $e->getMessage());
}
?>
