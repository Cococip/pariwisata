<?php 

if (!empty($_GET['file'])) {
	$file_name = basename($_GET['file']);
	$file_path = '../admin/content/tb_ppdb/formulir/'.$file_name;
	if(!empty($file_name) && file_exists($file_path)){
		// definisi header file
		header("Cache-control:public");
		header("Content-Description: file Transfer");
		header("Content-Disposition: attachment; filename=$file_name");
		header("Content-Type: application/zip");
		header("Content-Transfer-Encoding:binary");
		 // alokasi file tersimpan
			readfile($file_path);
			exit;
	}
}
 ?>