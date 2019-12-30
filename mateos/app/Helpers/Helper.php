<?php

namespace App\Helpers;

use Intervention\Image\Facades\Image as ImageInt;

class Helper
{
    // this function saves the image and returns the relative url.
    // name will be required and added to image.
    public static function saveImg($image, $name)
    {
      try {
        $p_path = 'storage/images';
        $input['imagename'] = $name.'-'.time().'.'.$image->extension();

        $destinationPath = public_path($p_path);
        dd($destinationPath);
        $img = ImageInt::make($image->path());
        $img->resize(500, 700, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        //$destinationPath = public_path('/images');
        //$image->move($destinationPath, $input['imagename']);
        $return_url = '/'.$p_path.'/'.$input['imagename'];
      } catch (\Exception $e) {
        $return_url = false;
      }



        return $return_url;
    }
}