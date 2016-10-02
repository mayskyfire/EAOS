<?php

/*function deleteDirectory($dirPath) {
	if (is_dir($dirPath)) {
		$objects = scandir($dirPath);
		foreach ($objects as $object) {
			if ($object != "." && $object !="..") {
				if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
					deleteDirectory($dirPath . DIRECTORY_SEPARATOR . $object);
				} else {
					unlink($dirPath . DIRECTORY_SEPARATOR . $object);
				}
			}
		}
	reset($objects);
	rmdir($dirPath);
	}
}

for($i=1;$i<=20;$i++){
	
	deleteDirectory('data/'.$i);
}
*/
for($i=21;$i<=42;$i++){
	if (!is_dir('data/product/'.$i)){
		mkdir('data/product/'.$i, 0777, true);	
	}
}
?>