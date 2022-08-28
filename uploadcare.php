<?php
require_once 'vendor/autoload.php';
# config.php
#https://app.uploadcare.com/projects/b4948793d3044a69aee7/files/772c85a3-ee1e-4e9b-bb29-5bb715ba16da/?limit=100&ordering=-datetime_uploaded
$_ENV['UPLOADCARE_PUBLIC_KEY'] = "b4948793d3044a69aee7";
$_ENV['UPLOADCARE_SECRET_KEY'] = "922514c960da8236043b";
$images = new RecursiveDirectoryIterator('image');
        foreach($images as $img){
                if(is_dir($img->getFileName())){
             continue;     }
             $image = "\Jellyfish.jpg";
$configuration = \Uploadcare\Configuration::create($_ENV['UPLOADCARE_PUBLIC_KEY'], $_ENV['UPLOADCARE_SECRET_KEY']);
$uploader = (new \Uploadcare\Api($configuration))->uploader();
$path = __DIR__ .'\/'.$img;
$result = $uploader->fromPath($path, 'image/jpg');
            /*echo '<a class="fancybox" href="image/'.$img->getFileName().'" data-fancybox-group="gallery" title="'.$img->getFileName().'"><img src="folder/'.$img->getFileName().'" alt="'.$img->getFileName().'" /></a>';*/
        }

echo \sprintf("File from URL %s uploaded successfully \n", $path);
echo \sprintf("File from URL %s uploaded successfully \n", $result);
?>