<?php

/*
Plugin Name: Unique Media Name
Description: Make media file name unique while uploading.
Author: Onkar Kubal 
Version: 1.0
Author Email: onkar82kubal@gmail.com
License: GPL2 
*/


function unique_upload_name($filename){
$info = pathinfo($filename);
$ext = empty($info['extension']) ? '' : '.' . $info['extension'];
$filename = time().'.' . $info['extension'];
return $filename;
}

add_filter('sanitize_file_name', 'unique_upload_name', 10);