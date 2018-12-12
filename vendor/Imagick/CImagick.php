<?php
class CImagick{
    public function loadImage($image){
        $img = new imagick($image);
        return $img;
    }
}
