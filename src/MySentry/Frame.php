<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Event.proto

namespace PhpSentryProtobuf\MySentry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PhpSentryProtobuf.MySentry.Frame</code>
 */
class Frame extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string functionName = 1;</code>
     */
    protected $functionName = '';
    /**
     * Generated from protobuf field <code>string rawFunctionName = 2;</code>
     */
    protected $rawFunctionName = '';
    /**
     * Generated from protobuf field <code>string file = 3;</code>
     */
    protected $file = '';
    /**
     * Generated from protobuf field <code>string absoluteFilePath = 4;</code>
     */
    protected $absoluteFilePath = '';
    /**
     * Generated from protobuf field <code>int32 line = 5;</code>
     */
    protected $line = 0;
    /**
     * Generated from protobuf field <code>repeated string preContext = 6;</code>
     */
    private $preContext;
    /**
     * Generated from protobuf field <code>string contextLine = 7;</code>
     */
    protected $contextLine = '';
    /**
     * Generated from protobuf field <code>repeated string postContext = 8;</code>
     */
    private $postContext;
    /**
     * Generated from protobuf field <code>bool inApp = 9;</code>
     */
    protected $inApp = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $functionName
     *     @type string $rawFunctionName
     *     @type string $file
     *     @type string $absoluteFilePath
     *     @type int $line
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $preContext
     *     @type string $contextLine
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $postContext
     *     @type bool $inApp
     * }
     */
    public function __construct($data = NULL) {
        \PhpSentryProtobuf\Metadata\Event::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string functionName = 1;</code>
     * @return string
     */
    public function getFunctionName()
    {
        return $this->functionName;
    }

    /**
     * Generated from protobuf field <code>string functionName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFunctionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->functionName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string rawFunctionName = 2;</code>
     * @return string
     */
    public function getRawFunctionName()
    {
        return $this->rawFunctionName;
    }

    /**
     * Generated from protobuf field <code>string rawFunctionName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRawFunctionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->rawFunctionName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string file = 3;</code>
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Generated from protobuf field <code>string file = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->file = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string absoluteFilePath = 4;</code>
     * @return string
     */
    public function getAbsoluteFilePath()
    {
        return $this->absoluteFilePath;
    }

    /**
     * Generated from protobuf field <code>string absoluteFilePath = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAbsoluteFilePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->absoluteFilePath = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 line = 5;</code>
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Generated from protobuf field <code>int32 line = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLine($var)
    {
        GPBUtil::checkInt32($var);
        $this->line = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string preContext = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPreContext()
    {
        return $this->preContext;
    }

    /**
     * Generated from protobuf field <code>repeated string preContext = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPreContext($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->preContext = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string contextLine = 7;</code>
     * @return string
     */
    public function getContextLine()
    {
        return $this->contextLine;
    }

    /**
     * Generated from protobuf field <code>string contextLine = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setContextLine($var)
    {
        GPBUtil::checkString($var, True);
        $this->contextLine = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string postContext = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPostContext()
    {
        return $this->postContext;
    }

    /**
     * Generated from protobuf field <code>repeated string postContext = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPostContext($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->postContext = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool inApp = 9;</code>
     * @return bool
     */
    public function getInApp()
    {
        return $this->inApp;
    }

    /**
     * Generated from protobuf field <code>bool inApp = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setInApp($var)
    {
        GPBUtil::checkBool($var);
        $this->inApp = $var;

        return $this;
    }

}

