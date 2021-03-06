<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Event.proto

namespace PhpSentryProtobuf\MySentry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PhpSentryProtobuf.MySentry.Data</code>
 */
class Data extends \Google\Protobuf\Internal\Message
{
    /**
     *String data
     *
     * Generated from protobuf field <code>string stringData = 1;</code>
     */
    protected $stringData = '';
    /**
     *Map data
     *
     * Generated from protobuf field <code>map<string, string> mapData = 2;</code>
     */
    private $mapData;
    /**
     *Array data
     *
     * Generated from protobuf field <code>repeated string arrayData = 3;</code>
     */
    private $arrayData;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $stringData
     *          String data
     *     @type array|\Google\Protobuf\Internal\MapField $mapData
     *          Map data
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $arrayData
     *          Array data
     * }
     */
    public function __construct($data = NULL) {
        \PhpSentryProtobuf\Metadata\Event::initOnce();
        parent::__construct($data);
    }

    /**
     *String data
     *
     * Generated from protobuf field <code>string stringData = 1;</code>
     * @return string
     */
    public function getStringData()
    {
        return $this->stringData;
    }

    /**
     *String data
     *
     * Generated from protobuf field <code>string stringData = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStringData($var)
    {
        GPBUtil::checkString($var, True);
        $this->stringData = $var;

        return $this;
    }

    /**
     *Map data
     *
     * Generated from protobuf field <code>map<string, string> mapData = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMapData()
    {
        return $this->mapData;
    }

    /**
     *Map data
     *
     * Generated from protobuf field <code>map<string, string> mapData = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMapData($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->mapData = $arr;

        return $this;
    }

    /**
     *Array data
     *
     * Generated from protobuf field <code>repeated string arrayData = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArrayData()
    {
        return $this->arrayData;
    }

    /**
     *Array data
     *
     * Generated from protobuf field <code>repeated string arrayData = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArrayData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->arrayData = $arr;

        return $this;
    }

}

