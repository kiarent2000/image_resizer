<?php
//Скрипт изменяет размер изображения по большей стороне, уменьшает качество изображения
require_once "vendor/autoload.php";
use \Gumlet\ImageResize;
if ($handle = opendir('source')) {
    while (false !== ($file = readdir($handle))) { 
        if ($file != "." && $file != "..") { 
            echo "$file\n"; 
			$image = new ImageResize('source/'.$file);    // место хранения исходных файлов
			$image->quality_jpg = 80;					 //  качество изображения
			$image->resizeToLongSide(1100);				 //  размер по большей стороне
			$image->save('output/'.$file);			     //  место хранения обработаных файлов
	  } 
    }
    closedir($handle); 
}