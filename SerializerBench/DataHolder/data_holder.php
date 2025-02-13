<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace SerializerBench\DataHolder;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class data_holder extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return data_holder
     */
    public static function getRootAsdata_holder(ByteBuffer $bb)
    {
        $obj = new data_holder();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return data_holder
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return long
     */
    public function getIntValue()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getLong($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getFloatValue()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0.0;
    }

    public function getStringValue()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param int offset
     * @return long
     */
    public function getArrayValue($j)
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getLong($this->__vector($o) + $j * 8) : 0;
    }

    /**
     * @return int
     */
    public function getArrayValueLength()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startdata_holder(FlatBufferBuilder $builder)
    {
        $builder->StartObject(4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return data_holder
     */
    public static function createdata_holder(FlatBufferBuilder $builder, $int_value, $float_value, $string_value, $array_value)
    {
        $builder->startObject(4);
        self::addIntValue($builder, $int_value);
        self::addFloatValue($builder, $float_value);
        self::addStringValue($builder, $string_value);
        self::addArrayValue($builder, $array_value);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param long
     * @return void
     */
    public static function addIntValue(FlatBufferBuilder $builder, $intValue)
    {
        $builder->addLongX(0, $intValue, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addFloatValue(FlatBufferBuilder $builder, $floatValue)
    {
        $builder->addDoubleX(1, $floatValue, 0.0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addStringValue(FlatBufferBuilder $builder, $stringValue)
    {
        $builder->addOffsetX(2, $stringValue, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addArrayValue(FlatBufferBuilder $builder, $arrayValue)
    {
        $builder->addOffsetX(3, $arrayValue, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createArrayValueVector(FlatBufferBuilder $builder, array $data)
    {
        $builder->startVector(8, count($data), 8);
        for ($i = count($data) - 1; $i >= 0; $i--) {
            $builder->putLong($data[$i]);
        }
        return $builder->endVector();
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int $numElems
     * @return void
     */
    public static function startArrayValueVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(8, $numElems, 8);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function enddata_holder(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public static function finishdata_holderBuffer(FlatBufferBuilder $builder, $offset)
    {
        $builder->finish($offset);
    }
}
