<?php
$redis = new Redis();
$redis->connect('localhost', 6379);
echo "connection to server successfully<br/>";
echo "server is running: " . $redis->ping();
echo '<br/>';
$redis->zAdd('rank',0,'mark');
$redis->zAdd('rank',10,'Grace');
$redis->zAdd('rank',300,'John');
$redis->zAdd('rank',200,'Kate');
$arr = $redis->zRange('rank',0,-1);
print_r($arr);
?>