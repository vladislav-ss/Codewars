<?php 

// https://www.codewars.com/kata/550498447451fbbd7600041c :: Are they the "same"?

function comp($a1, $a2) {
    if (!isset($a1) || !isset($a2))
        return false;
    foreach ($a1 as $v) {
        $mul = $v * $v;
        if (in_array($mul, $a2)) {
            $key = array_search($mul, $a2);
            unset($a2[$key]);
        } else {
            return false;
        }
    }
    return true;
}

?>