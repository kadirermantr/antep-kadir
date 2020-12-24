<?php


namespace App\Helpers;


class UploadPaths
{
    public static $uploadPaths = array(
        'product_photos' => '/uploads/products_images',
        'profile_photos' => '/uploads/profile_images'
    );

    //TODO: burasını gözden geçir
    public static function getUploadPath($path) {
        return public_path().self::$uploadPaths[$path];
    }
}
