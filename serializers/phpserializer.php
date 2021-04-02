<?php
require_once('ibenchmarker.php');

class phpserialize_bench implements Ibenchmerker{
    public function enc($data){
        return serialize($data);
    }
    public function dec(string $serialized){
        return unserialize($serialized);
    }
}
return new phpserialize_bench();