<?php
// https://www.codewars.com/kata/550554fd08b86f84fe000a58/ :: Which are in? :: 6 kyu Kata

function inArray($array1, $array2) {
    $a1 = $array1;  // shorten var name
    $a2 = $array2;
    $res = [];  // create an empty array for result
    
    foreach ($a1 as $word) {    // iterate through all elements of the first array
      if (!in_array($word, $res)) {     // check if it already exists in $res
        foreach ($a2 as $val) {     // start iterating through target array
          if ((preg_match("/{$word}/i", $val)) && !in_array($word, $res)) {    // check for match and also for duplicate
            array_push($res, $word);    // add it to the final array
          }
        }
      }
    }

    sort($res); // sort it alphabetically
    return $res;
}

?>