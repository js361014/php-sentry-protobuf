<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Event.proto

namespace PhpSentryProtobuf\MySentry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PhpSentryProtobuf.MySentry.ExceptionMechanism</code>
 */
class ExceptionMechanism extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>bool handled = 2;</code>
     */
    protected $handled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *     @type bool $handled
     * }
     */
    public function __construct($data = NULL) {
        \PhpSentryProtobuf\Metadata\Event::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool handled = 2;</code>
     * @return bool
     */
    public function getHandled()
    {
        return $this->handled;
    }

    /**
     * Generated from protobuf field <code>bool handled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setHandled($var)
    {
        GPBUtil::checkBool($var);
        $this->handled = $var;

        return $this;
    }

}

