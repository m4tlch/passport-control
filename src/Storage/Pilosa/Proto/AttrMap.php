<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public.proto

namespace App\Storage\Pilosa\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AttrMap</code>
 */
class AttrMap extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Attr Attrs = 1;</code>
     */
    private $Attrs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \App\Storage\Pilosa\Proto\Attr[]|\Google\Protobuf\Internal\RepeatedField $Attrs
     * }
     */
    public function __construct($data = NULL) {
        \App\Storage\Pilosa\Proto\GPBMetadata\PBPublic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Attr Attrs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttrs()
    {
        return $this->Attrs;
    }

    /**
     * Generated from protobuf field <code>repeated .Attr Attrs = 1;</code>
     * @param \App\Storage\Pilosa\Proto\Attr[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttrs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \App\Storage\Pilosa\Proto\Attr::class);
        $this->Attrs = $arr;

        return $this;
    }

}
