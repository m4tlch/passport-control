<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public.proto

namespace App\Storage\Pilosa\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>TranslateKeysResponse</code>
 */
class TranslateKeysResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint64 IDs = 3;</code>
     */
    private $IDs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $IDs
     * }
     */
    public function __construct($data = NULL) {
        \App\Storage\Pilosa\Proto\GPBMetadata\PBPublic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint64 IDs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIDs()
    {
        return $this->IDs;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 IDs = 3;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIDs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->IDs = $arr;

        return $this;
    }

}

