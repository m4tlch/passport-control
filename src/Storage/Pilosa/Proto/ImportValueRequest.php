<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public.proto

namespace App\Storage\Pilosa\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ImportValueRequest</code>
 */
class ImportValueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Index = 1;</code>
     */
    protected $Index = '';
    /**
     * Generated from protobuf field <code>string Field = 2;</code>
     */
    protected $Field = '';
    /**
     * Generated from protobuf field <code>uint64 Shard = 3;</code>
     */
    protected $Shard = 0;
    /**
     * Generated from protobuf field <code>repeated uint64 ColumnIDs = 5;</code>
     */
    private $ColumnIDs;
    /**
     * Generated from protobuf field <code>repeated string ColumnKeys = 7;</code>
     */
    private $ColumnKeys;
    /**
     * Generated from protobuf field <code>repeated int64 Values = 6;</code>
     */
    private $Values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Index
     *     @type string $Field
     *     @type int|string $Shard
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $ColumnIDs
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ColumnKeys
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $Values
     * }
     */
    public function __construct($data = NULL) {
        \App\Storage\Pilosa\Proto\GPBMetadata\PBPublic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Index = 1;</code>
     * @return string
     */
    public function getIndex()
    {
        return $this->Index;
    }

    /**
     * Generated from protobuf field <code>string Index = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkString($var, True);
        $this->Index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Field = 2;</code>
     * @return string
     */
    public function getField()
    {
        return $this->Field;
    }

    /**
     * Generated from protobuf field <code>string Field = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->Field = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 Shard = 3;</code>
     * @return int|string
     */
    public function getShard()
    {
        return $this->Shard;
    }

    /**
     * Generated from protobuf field <code>uint64 Shard = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setShard($var)
    {
        GPBUtil::checkUint64($var);
        $this->Shard = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 ColumnIDs = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumnIDs()
    {
        return $this->ColumnIDs;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 ColumnIDs = 5;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumnIDs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->ColumnIDs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string ColumnKeys = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumnKeys()
    {
        return $this->ColumnKeys;
    }

    /**
     * Generated from protobuf field <code>repeated string ColumnKeys = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumnKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ColumnKeys = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 Values = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->Values;
    }

    /**
     * Generated from protobuf field <code>repeated int64 Values = 6;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->Values = $arr;

        return $this;
    }

}

