<?php
session_start();
$captcha=substr(str_shuffle("knhgfdwfgdiuyw7dr75rtvquyhjdksnlzun8765743u232wkhjsxdbcfakuyxbzdhuqnwd87b6tf4gbhewjks"),0,6);
$_SESSION['captcha']=$captcha;

$gambar=ImageCreate(60,20);
$wk=ImageColorAllocate($gambar, 25, 200, 89);
$wt=ImageColorAllocate($gambar, 255, 255, 255);
ImageFilledRectangle($gambar, 0, 0, 50, 20, $wk);
ImageString($gambar, 10, 3, 3, $captcha, $wt);
ImageJPEG($gambar);
?>