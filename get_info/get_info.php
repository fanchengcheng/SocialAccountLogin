<?php
require '/../vendor/autoload.php';

use SocialAccountLogin\src\QC;
/*
 *调用接口代码
 *
 **/

$qc = new QC();
$ret = $qc->get_info();

// show result
if($ret['ret'] == 0){
    echo "<meta charset='utf-8' />";
    require_once("get_info.html");
}else{
    echo "<meta charset='utf-8' />";
    echo "获取失败，请开启调试查看原因";
}
