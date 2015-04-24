<?php
function dirToMenu($directory) { 
	$menu = "";
	$ritit = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory), RecursiveIteratorIterator::CHILD_FIRST); 
	$r = array(); 
	foreach ($ritit as $splFileInfo) { 
		$path = $splFileInfo->isDir() 
		? array($splFileInfo->getFilename() => array()) 
		: array($splFileInfo->getFilename()); 

		for ($depth = $ritit->getDepth() - 1; $depth >= 0; $depth--) { 
			$path = array($ritit->getSubIterator($depth)->current()->getFilename() => $path); 
		} 
		$r = array_merge_recursive($r, $path); 
	} 

	$replace = array(" ","","");
	$search = array("_",".jpg",".png");


	foreach ($r as $key_folder => $folder) {
		if ($key_folder != ".." || $key_folder != "." ) {
			$menu .= "<ul>";
		}
		
		foreach ($folder as $key => $file_name) {
			if ($key != ".." || $key != "." ) {
				if (!is_array($file_name) && $file_name != "Thumbs.db") {
					$menu .= "<li class='master_layout' data-value='".$key_folder."/".$file_name."'>
								<a href='#".$key_folder."/".$file_name."'>".str_replace($search, $replace, $file_name)."</a>
							  </li>";
				}		
			}
		}
		if ($key_folder != ".." || $key_folder != "." ) {
			$menu .= "</ul>";
		}
	}
	return $menu;
} 

?>