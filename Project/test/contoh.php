<?php


  $countries = array(
    'CAD' => 'Canada',
    'TWN' => 'Taiwan',
    'USA' => 'United States',
    'GBR' => 'United Kindom',
    'GER' => 'Germany',
  );
   
  print "Original\n";
  print_r($countries);
  echo"<br>";
   
  print "Move Taiwan to the top\n";
  move_to_top($countries, 'TWN');
  print_r($countries);
  echo"<br>";
   
  print "Move United States to the bottom\n";
  move_to_bottom($countries, 'USA');
  print_r($countries);
   
  function move_to_top(&$array, $key) {
    $temp = array($key => $array[$key]);
    unset($array[$key]);
    $array = $temp + $array;
  }
   
  function move_to_bottom(&$array, $key) {
    $value = $array[$key];
    unset($array[$key]);
    $array[$key] = $value;
  }


?>