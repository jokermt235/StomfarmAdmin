<?php
namespace App\Controller\Component;

use Cake\Core\Configure;
use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * Image component
 */
class ImageComponent extends Component
{
    
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    
    private $image_extensions = ['png','jpg','jpeg','gif','bmp'];


    public function upload($data){
        $fileUrl = '';
        if($data){
            $extension = $this->getImageExtension($data['upload_image']['name']);
            if(in_array($extension, $this->image_extensions)){
                $fileUrl = time().'_'.md5($data['upload_image']['name']).".$extension";
                $move_dir = Configure::read('Falcon.Images.upload_path').$fileUrl;
                move_uploaded_file($data['upload_image']['tmp_name'], $move_dir);
                $this->createSmallImage($move_dir);
            }
        }

        return $fileUrl;
    }

    private function getImageExtension($uploadfile){
        return substr(strtolower(strrchr($uploadfile, '.')), 1);
    }

    public function delete($image){
       unlink(Configure::read('Falcon.Images.upload_path').$image);
       unlink(Configure::read('Falcon.Images.upload_path')."small_".$image);
    }
    
    public function createSmallImage($big_image){
        require_once(ROOT.DS.'vendor'.DS.'Imagick'.DS.'CImagick.php');
        $img = new \CImagick();
        $im = $img->loadImage($big_image);
        $imageprops = $im->getImageGeometry();
        $width = $imageprops['width'];
        $height = $imageprops['height'];
        $upload_width  = Configure::read('Falcon.Images.small_image_size.width');
        $upload_height = Configure::read('Falcon.Images.small_image_size.height');
        if($width > $height){
                $newHeight = $upload_height;
                    $newWidth = ($upload_height / $height) * $width;
        }else{
            $newWidth = $upload_width;
            $newHeight = ($upload_height / $width) * $height;
        }
        $im->resizeImage($newWidth,$newHeight, $im::FILTER_LANCZOS, 0.9, true);
        $im->cropImage ($upload_width,$upload_height,0,0);
        
        $big_filename = basename($big_image);

        $small_filename = "small_".$big_filename;

        $small_image = str_replace($big_filename,$small_filename,$big_image);

        $im->writeImage($small_image);
    }
}
