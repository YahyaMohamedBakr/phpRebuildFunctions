<?php
/*
built in functions rebuild
*/ 


//parse_str (rebuild)
function new_parse_str($string , &$arr){
    if($string){

        $arr=[];
        $string_split = new_explode("&", $string);

        foreach ($string_split as $name=>$v){
        $ex= explode("=", $v);
        $arr[$ex[0]]= $ex[1];
        }

    }
    
  
    return $arr;
}


//expload rebuild 

function new_explode($separator, $string){

    for($i=0 ; $i< new_strlen($string); $i++){
     
      $string_char[$i]= $string[$i];
    }
     $string_char;
     $value = "";
    foreach($string_char as $index=>$char){
     
      switch ($string_char[$index]){
        case $separator:
          $string_arr[] = $value;
          $value ="";
          break;
        default:
          $value .= $char;
          break;

      }
    }
    $string_arr[] = $value;
  
  return $string_arr;
 

}

// string length rebuild
function new_strlen($string){
    $index =0;
    while(!empty($string[$index])){
      $arr[]= $string[$index];
      $index ++;
    }
    return $index;
      
    }

    function new_empty($var){
      return (!$var|| $var==0|| $var=="" || $var==false);
    }

   