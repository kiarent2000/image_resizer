<?php
//Скрипт меняет расширение файлов с png на jpg и уменьшает качество
require_once "vendor/autoload.php";
use \Gumlet\ImageResize;
if ($handle = opendir('source')) {
    while (false !== ($file = readdir($handle))) { 
        if ($file != "." && $file != "..") { 
            echo "$file\n"; 
			$image = new ImageResize('source/'.$file);    // место хранения исходных файлов
			$new_image = basename($file, ".png").'.jpg';
			$image->save('output/'.$new_image, IMAGETYPE_JPEG);
			$image = new ImageResize('output/'.$new_image);
			$image->quality_jpg = 80;					 //  качество изображения
			$image->save('output/'.$new_image);
	
	  } 
    }
    closedir($handle); 
}