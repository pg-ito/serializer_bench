<?php
$type = $argv[1]?? 'json';

$loops = $argv[2]?? 1000000;

require_once('data_holder.php');

$benchmarker = require("./serializers/{$type}.php");
$data = new data_holder();
$start_time = microtime(true);
for($i=0;$i<$loops;++$i){
    $benchmarker->enc($data);
}
$elapsed = microtime(true) - $start_time;
echo $loops .' loops. encode[sec.] '.$elapsed.PHP_EOL;


$serialized = $benchmarker->enc($data);
// var_dump($serialized);

$start_time = microtime(true);
for($i=0;$i<$loops;++$i){
    $benchmarker->dec($serialized);
}
$elapsed = microtime(true) - $start_time;

echo $loops .' loops. decode[sec.] '.$elapsed.PHP_EOL;

$deserialized = $benchmarker->dec($serialized);
// var_dump($deserialized);
