<?php
	$ok = shell_exec("zip -r camera.zip camera");
	$fichero = '/var/www/html/camera.zip';
	if (file_exists($fichero)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($fichero).'"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($fichero));
		readfile($fichero);
		exit;
	}
$ok = shell_exec("rm -rf /var/www/html/camera.zip");
header("Location: index.php");
?>

