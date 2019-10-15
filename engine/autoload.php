<?php
 function Autoload(string $dir, $excludefiles=[]){
   $files = scandir($dir);
   $excludefiles=array_merge([".",".."],$excludefiles);
   foreach ($files as $file) {
   	if (!in_array($file,$excludefiles)){
   		if (is_dir($dir.DIRECTORY_SEPARATOR.$file)){
   			Autoload($dir.DIRECTORY_SEPARATOR.$file,$excludefiles);
   		}
   		elseif (mime_content_type($dir.DIRECTORY_SEPARATOR.$file)=="text/x-php"|| mime_content_type($dir.DIRECTORY_SEPARATOR.$file)=="text/plain"){
          require_once $dir.DIRECTORY_SEPARATOR.$file;
   		}
   	}
   }

 }
