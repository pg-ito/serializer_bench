<?php

require_once('ibenchmarker.php');

require_once('SerializerBench/DataHolder/ByteBuffer.php');
require_once('SerializerBench/DataHolder/Constants.php');
require_once('SerializerBench/DataHolder/FlatbufferBuilder.php');
require_once('SerializerBench/DataHolder/Struct.php');
require_once('SerializerBench/DataHolder/Table.php');

require_once('SerializerBench/DataHolder/data_holder.php');




class flatbuffers_bench implements Ibenchmerker{
    public function enc($data){
        $fbb = new Google\FlatBuffers\FlatBufferBuilder(1);
        $array_value = \SerializerBench\DataHolder\data_holder::createArrayValueVector($fbb, $data->array_value);
        $string_value = $fbb->createString($data->string_value);
        $orc = \SerializerBench\DataHolder\data_holder::createdata_holder($fbb, $data->int_value, $data->float_value, $string_value, $array_value);
        $fbb->finish($orc);
        return $fbb->sizedByteArray();
    }
    public function dec(string $serialized){
        $bb = Google\FlatBuffers\ByteBuffer::wrap($serialized);
        $fb = \SerializerBench\DataHolder\data_holder::getRootAsdata_holder($bb);

        $data_holder = new data_holder();
        $data_holder->int_value = $fb->getIntValue();
        $data_holder->float_value = $fb->getFloatValue();
        $data_holder->string_value = $fb->getStringValue();
        $array_len = $fb->getArrayValueLength();
        $data_holder->array_value = [];
        for($i=0;$i<$array_len;++$i){
            $data_holder->array_value[] = $fb->getArrayValue($i);
        }
        return $data_holder;
    }
}
return new flatbuffers_bench();