<?php 
include('functions.php');

//if(isset($_GET['submit'])){
  // $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//parse_str( $_SERVER["QUERY_STRING"], $result);




$s= "name=Emaar&age=5&submit=Submit&yahya=yahya";

$e= explode('E', $s);
echo strtolower(end($e));
//var_dump(strlen($s));
//echo($s[0]);
//echo strlen($s);

//var_dump(new_empty($f));

//echo strlen($s).'test';
//echo new_strlen($s)."test";

//separator , string , int



//$new_ex= new_explode("=", $s);
//print_r($new_ex);

//$exp=explode("=",$s);
 

  echo'<pre>';
//$result= array();
 new_parse_str($_SERVER["QUERY_STRING"], $result);
  //print_r(parse_str( $_SERVER["QUERY_STRING"], $result));

  //print_r($new_ex);

  echo'</pre>';


echo'<pre>';

  print_r($result);
  echo'</pre>';

//echo  $actual_link;
//}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>one</title>
    <link rel="icon" href="logo.png" type="image/icon">

  </head>
  <body>
   <form method="get">

      <input type="text" name="name"  placeholder="Name">
      <input type="text" name= "age" placeholder="Age">

      <input type="submit" name="submit">
      


   </form>
  </body>
</html>