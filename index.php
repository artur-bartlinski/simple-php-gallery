<?php
           
    require 'imgReader.php';

    $images = imgReader('img');

    if(!$images) {
        die("Could not load images from a given directory");
    }           
        
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple PHP Gallery</title>
    </head>
    <body>
        
        <?php foreach($images as $image): ?>
        
            <img src="<?php echo $image; ?>">
        
        <?php endforeach; ?>
        
    </body>
</html>
