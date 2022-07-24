<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Event.proto

namespace PhpSentryProtobuf\MySentry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PhpSentryProtobuf.MySentry.Context</code>
 */
class Context extends \Google\Protobuf\Internal\Message
{
    /**
     *Context data
     *
     * Generated from protobuf field <code>map<string, .PhpSentryProtobuf.MySentry.Data> data = 1;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $data
     *          Context data
     * }
     */
    public function __construct($data = NULL) {
        \PhpSentryProtobuf\Metadata\Event::initOnce();
        parent::__construct($data);
    }

    /**
     *Context data
     *
     * Generated from protobuf field <code>map<string, .PhpSentryProtobuf.MySentry.Data> data = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     *Context data
     *
     * Generated from protobuf field <code>map<string, .PhpSentryProtobuf.MySentry.Data> data = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \PhpSentryProtobuf\MySentry\Data::class);
        $this->data = $arr;

        return $this;
    }

}

