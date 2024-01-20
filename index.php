<?php
$seoUrl = 'https://susanzhuanglies.com/';
$seoSiteName = 'Scammer Susan Zhuang for City Council District 43';
$seoDesc = "Scammer Susan Zhuang's campaign is full of scams, including the biggest scam, which is the fact that she is funded by the CCP - the Chinese Communist Party. She and her supporter Communist Colton has tricked both Chinese and American citizens into thinking she's looking out for their best interests.";
$shareImg = $seoUrl.'images/scam_susan.png';

global $CN;

if($_GET['la'] == 'CN') {
    $la = 'CN';
}
else {
    $la = 'EN';
}

include('index.html');
?>