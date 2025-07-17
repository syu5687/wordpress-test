<?php
// タイムゾーンを日本時間に設定
date_default_timezone_set('Asia/Tokyo');

// 現在の日時
echo "<h2>📅 現在の日時（日本時間）</h2>";
echo "<p>" . date("Y年m月d日 H時i分s秒") . "</p>";

// 今日の日付
echo "<h3>今日の日付：</h3>";
echo date("Y-m-d") . "<br>";

// 現在時刻（24時間制）
echo "<h3>現在の時刻：</h3>";
echo date("H:i:s") . "<br>";

// 曜日表示
echo "<h3>曜日：</h3>";
echo date("l") . "（" . date("D") . "）<br>";

// 日付の計算
echo "<h3>明日：</h3>";
echo date("Y-m-d", strtotime("+1 day")) . "<br>";

echo "<h3>1週間後：</h3>";
echo date("Y-m-d", strtotime("+7 days")) . "<br>";

echo "<h3>1か月前：</h3>";
echo date("Y-m-d", strtotime("-1 month")) . "<br>";
?>