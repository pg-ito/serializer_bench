<?php
require_once('ibenchmarker.php');

class json_bench implements Ibenchmerker{
    public function enc($data){
        return json_encode($data);
    }
    public function dec(string $serialized){
        return json_decode($serialized);
    }
}
return new json_bench();