<?php

require_once "lib/flvinfo/flvinfo.php";
$flvinfo = new Flvinfo();

$info = $flvinfo->getInfo("video/v_a5f1d60a64c741b18caa396a1930bb74.flv",true);
echo "<pre>";
var_export($info);