<?php 

// https://www.codewars.com/kata/5544c7a5cb454edb3c000047 :: Bouncing Balls

function bouncingBall($h, $bounce, $window) {   
    if($h <= 0 || ($bounce <= 0 || $bounce >= 1) || $window >= $h) {
      return -1;
    }
    
    $sights = 1;
    $bh = $h * $bounce; // height of bounce
    
    while ($bh > $window) {
      $sights += 2;
      $bh *= $bounce;
    }
    
    return $sights;    
}
?>