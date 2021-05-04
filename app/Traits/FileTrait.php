<?php


namespace App\Traits;


Trait FileTrait
{
    /**
     * @param $file
     * @param $path
     * @return string
     */
    function fileUploadHelper($file, $path) {
        //GET THE ORIGINAL FILE NAME
        $file_original_name = $file -> getClientOriginalName();

        //REMOVE THE SPACES FROM THE ORIGINAL FILE NAME
        $file_original_name_without_spaces = str_replace(' ', '', $file_original_name);

        //ADDING RANDOM STRINGS TO THE UPLOADED FILE
        $file_name = md5($file_original_name_without_spaces . microtime() . time()).$file_original_name_without_spaces;

        //STORING THE UPLOADED FILE IN THE FOLDER
        $file -> move(public_path().'/'.$path.'/', $file_name);

        //RETURNING THE UPLOADED FILE NAME
        return $file_name;
    }
}
