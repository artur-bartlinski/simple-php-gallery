<?php

    function imgReader($dir, array $excludedImages = ['.', '..']) {
        
        $files = [];
        
        if(!is_dir($dir)) {
            return null;
        }
        
        if(!($imgDir = opendir($dir))) {
            return null;
        }
        
        while(($img = readdir($imgDir)) !== false) {
            
            if(in_array($img, $excludedImages)) {
                continue;
            }
            
            $files[] = $dir . '/' . $img;
        }
        
        closedir($imgDir);
        
        return $files;
        
    }

