<?php
require_once('ibenchmarker.php');

class json_bench implements Ibenchmerker{
    public function enc($data){
        return msgpack_pack($data);
    }
    public function dec(string $serialized){
        return msgpack_unpack($serialized);
    }
}
return new json_bench();