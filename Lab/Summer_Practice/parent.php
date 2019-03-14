<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 5/9/2018
 * Time: 12:16 AM
 */
class Chef {
    public static function make_dinner() {
        echo "Cook food . <br />";
    }

}

class AmateurChef extends Chef {
    public static function make_dinner() {
        echo "Read recipe. <br /> ";
        parent::make_dinner();
        echo "Clean up mess. <br /> ";
    }
}

echo "Chef:<br />";
Chef::make_dinner();
echo "<br />";
echo "Amateur Chef:<br />";
AmateurChef::make_dinner();

echo "<br />";

class Image {
    public static $resizing_enabled = true;

    public static function geometry() {
        echo "800x600";
    }

}

class ProfileImage extends Image{

    public static function geometry() {
        if(self::$resizing_enabled){
            echo "100x100";
        }else {
            parent::geometry();
        }
    }
}

echo Image::geometry()."<br />";
echo ProfileImage::geometry()."<br />";

echo Image::$resizing_enabled = false;
echo ProfileImage::geometry()."<br />";
