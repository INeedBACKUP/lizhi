<?php
// 歌词
$zhuangbi = 'lizhi.zhuangbi';
// 编码
header('Content-type: text/html; charset=utf-8');
if(!file_exists($zhuangbi)) {
    die($zhuangbi . 'u fucked up');
}
// 遍历文件
$lyric = file_get_contents($zhuangbi);
$lyric = explode(PHP_EOL, $lyric);
// 抽出来
$output = $lyric[array_rand($lyric)];
$output = str_replace(array("\r","\n","\r\n"), '', $output);
// 输出
echo $output;
