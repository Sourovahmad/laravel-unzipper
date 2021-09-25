<?php

namespace Sourovahmad\Unzipper\Controllers;
use Illuminate\Support\Facades\File;

use ZipArchive;

class UnzipperControlSection
{
    public function unzip($data)
    {

      $extension = $data->getClientOriginalExtension();
      if($extension == 'zip'){
        $fileName = $data->getClientOriginalName();
        $path = $data->getPathName();
        $zip = new ZipArchive();

        if($zip->open($path) === true){

        $time = time();
        $folder = public_path('zip/unzipped/') . $time;

        $zip->extractTo($folder);
        $zip->close();

        }
      } else{

      throw new \ErrorException('Only Zip file Supported. Please Upload a Zip file');

      }



    }


   public function getZipData($folderNumber)
    {
        $filelocation = public_path('zip/unzipped/') . $folderNumber;
        $allUploadedFiles = scandir($filelocation);
        print_r($allUploadedFiles);


    }
}