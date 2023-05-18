<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function dateTimeFunction($timeformat = FALSE){
        
    if(!$timeformat === FALSE){
    $new_format = new DateTime($timeformat);
    $timef = date_format($new_format, 'g:i a');
    return $timef;
    }

}

function dateTimeDateFunction($timeformat = FALSE){
        
    if(!$timeformat === FALSE){
    $new_format = new DateTime($timeformat);
    $timef = date_format($new_format, 'F d, Y - g:i a');
    return $timef;
    }

}


function dateTimeDateFunctionv2($timeformat = FALSE){
        
    if(!$timeformat === FALSE){
    $new_format = new DateTime($timeformat);
    $timef = date_format($new_format, 'D - F d, Y');
    return $timef;
    }

}

function dateTimeDateFunction3($timeformat = FALSE){
        
    if(!$timeformat === FALSE){
    $new_format = new DateTime($timeformat);
    $timef = date_format($new_format, 'm/d/y');
    return $timef;
    }

}

