<?php

namespace App\Http\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Uploader
{
    /**
     * @param string $path
     * @param UploadedFile $file
     * @return string
     */
    public static function uploadImage($path, $file)
    {
        $name = Str::random(32) . '.' . $file->getClientOriginalExtension();

        $image = Image::make($file->getRealPath());
        $canvas = Image::canvas(503, 330, '#fff');
        $image->resize(503, 330, function ($constraint) {
            $constraint->aspectRatio();
        });
        $canvas->insert($image, 'center');

        if (!file_exists(public_path($path))) {
            mkdir(public_path($path));
        }

        $canvas->save($path . '/' . $name);

        return '/' . $path . '/' . $name;
    }

    public static function deleteAttachment($path)
    {
        $path = mb_substr($path, 1);

        if(File::exists($path)) {
            File::delete($path);
        }
    }
}
