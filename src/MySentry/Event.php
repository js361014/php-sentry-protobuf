<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Event.proto

namespace PhpSentryProtobuf\MySentry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PhpSentryProtobuf.MySentry.Event</code>
 */
class Event extends \Google\Protobuf\Internal\Message
{
    /**
     *The ID
     *
     * Generated from protobuf field <code>string eventId = 1;</code>
     */
    protected $eventId = '';
    /**
     *The date and time of when this event was generated
     *
     * Generated from protobuf field <code>float timestamp = 2;</code>
     */
    protected $timestamp = 0.0;
    /**
     *This property is used if it's a Transaction event together with timestamp it's the duration of the transaction.
     *
     * Generated from protobuf field <code>float startTimestamp = 3;</code>
     */
    protected $startTimestamp = 0.0;
    /**
     *The severity of this event
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.Event.Severity level = 4;</code>
     */
    protected $level = 0;
    /**
     *The name of the logger which created the record
     *
     * Generated from protobuf field <code>string logger = 5;</code>
     */
    protected $logger = '';
    /**
     *The name of the transaction (or culprit) which caused this exception
     *
     * Generated from protobuf field <code>string transaction = 6;</code>
     */
    protected $transaction = '';
    /**
     *The name of the server (e.g. the host name)
     *
     * Generated from protobuf field <code>string serverName = 7;</code>
     */
    protected $serverName = '';
    /**
     *The release of the program
     *
     * Generated from protobuf field <code>string release = 8;</code>
     */
    protected $release = '';
    /**
     *The error message
     *
     * Generated from protobuf field <code>string message = 9;</code>
     */
    protected $message = '';
    /**
     *The formatted error message
     *
     * Generated from protobuf field <code>string messageFormatted = 10;</code>
     */
    protected $messageFormatted = '';
    /**
     *The parameters to use to format the message
     *
     * Generated from protobuf field <code>repeated string messageParams = 11;</code>
     */
    private $messageParams;
    /**
     *The environment where this event generated (e.g. production)
     *
     * Generated from protobuf field <code>string environment = 12;</code>
     */
    protected $environment = '';
    /**
     *A list of relevant modules and their versions
     *
     * Generated from protobuf field <code>map<string, string> modules = 13;</code>
     */
    private $modules;
    /**
     *The request data
     *
     * Generated from protobuf field <code>map<string, string> request = 14;</code>
     */
    private $request;
    /**
     *A list of tags associated to this event
     *
     * Generated from protobuf field <code>map<string, string> tags = 15;</code>
     */
    private $tags;
    /**
     *The server OS context data
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.OsContext osContext = 16;</code>
     */
    protected $osContext = null;
    /**
     *The runtime context data
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.RuntimeContext runtimeContext = 17;</code>
     */
    protected $runtimeContext = null;
    /**
     *The user context data
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.User user = 18;</code>
     */
    protected $user = null;
    /**
     *An arbitrary mapping of additional contexts associated to this event
     *
     * Generated from protobuf field <code>map<string, .PhpSentryProtobuf.MySentry.Context> contexts = 19;</code>
     */
    private $contexts;
    /**
     *An arbitrary mapping of additional metadata
     *
     * Generated from protobuf field <code>map<string, string> extra = 20;</code>
     */
    private $extra;
    /**
     *An array of strings used to dictate the deduplication of this event
     *
     * Generated from protobuf field <code>repeated string fingerprint = 21;</code>
     */
    private $fingerprint;
    /**
     *The associated breadcrumbs
     *
     * Generated from protobuf field <code>repeated .PhpSentryProtobuf.MySentry.Breadcrumb breadcrumbs = 22;</code>
     */
    private $breadcrumbs;
    /**
     *The array of spans if it's a transaction
     *
     * Generated from protobuf field <code>repeated .PhpSentryProtobuf.MySentry.Span spans = 23;</code>
     */
    private $spans;
    /**
     *The exceptions
     *
     * Generated from protobuf field <code>repeated .PhpSentryProtobuf.MySentry.Exception exceptions = 24;</code>
     */
    private $exceptions;
    /**
     *The Sentry SDK identifier
     *
     * Generated from protobuf field <code>string sdkIdentifier = 25;</code>
     */
    protected $sdkIdentifier = '';
    /**
     *The Sentry SDK version
     *
     * Generated from protobuf field <code>string sdkVersion = 26;</code>
     */
    protected $sdkVersion = '';
    /**
     *The type of the Event
     *
     * Generated from protobuf field <code>string type = 27;</code>
     */
    protected $type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $eventId
     *          The ID
     *     @type float $timestamp
     *          The date and time of when this event was generated
     *     @type float $startTimestamp
     *          This property is used if it's a Transaction event together with timestamp it's the duration of the transaction.
     *     @type int $level
     *          The severity of this event
     *     @type string $logger
     *          The name of the logger which created the record
     *     @type string $transaction
     *          The name of the transaction (or culprit) which caused this exception
     *     @type string $serverName
     *          The name of the server (e.g. the host name)
     *     @type string $release
     *          The release of the program
     *     @type string $message
     *          The error message
     *     @type string $messageFormatted
     *          The formatted error message
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $messageParams
     *          The parameters to use to format the message
     *     @type string $environment
     *          The environment where this event generated (e.g. production)
     *     @type array|\Google\Protobuf\Internal\MapField $modules
     *          A list of relevant modules and their versions
     *     @type array|\Google\Protobuf\Internal\MapField $request
     *          The request data
     *     @type array|\Google\Protobuf\Internal\MapField $tags
     *          A list of tags associated to this event
     *     @type \PhpSentryProtobuf\MySentry\OsContext $osContext
     *          The server OS context data
     *     @type \PhpSentryProtobuf\MySentry\RuntimeContext $runtimeContext
     *          The runtime context data
     *     @type \PhpSentryProtobuf\MySentry\User $user
     *          The user context data
     *     @type array|\Google\Protobuf\Internal\MapField $contexts
     *          An arbitrary mapping of additional contexts associated to this event
     *     @type array|\Google\Protobuf\Internal\MapField $extra
     *          An arbitrary mapping of additional metadata
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $fingerprint
     *          An array of strings used to dictate the deduplication of this event
     *     @type array<\PhpSentryProtobuf\MySentry\Breadcrumb>|\Google\Protobuf\Internal\RepeatedField $breadcrumbs
     *          The associated breadcrumbs
     *     @type array<\PhpSentryProtobuf\MySentry\Span>|\Google\Protobuf\Internal\RepeatedField $spans
     *          The array of spans if it's a transaction
     *     @type array<\PhpSentryProtobuf\MySentry\Exception>|\Google\Protobuf\Internal\RepeatedField $exceptions
     *          The exceptions
     *     @type string $sdkIdentifier
     *          The Sentry SDK identifier
     *     @type string $sdkVersion
     *          The Sentry SDK version
     *     @type string $type
     *          The type of the Event
     * }
     */
    public function __construct($data = NULL) {
        \PhpSentryProtobuf\Metadata\Event::initOnce();
        parent::__construct($data);
    }

    /**
     *The ID
     *
     * Generated from protobuf field <code>string eventId = 1;</code>
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     *The ID
     *
     * Generated from protobuf field <code>string eventId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkString($var, True);
        $this->eventId = $var;

        return $this;
    }

    /**
     *The date and time of when this event was generated
     *
     * Generated from protobuf field <code>float timestamp = 2;</code>
     * @return float
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     *The date and time of when this event was generated
     *
     * Generated from protobuf field <code>float timestamp = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkFloat($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     *This property is used if it's a Transaction event together with timestamp it's the duration of the transaction.
     *
     * Generated from protobuf field <code>float startTimestamp = 3;</code>
     * @return float
     */
    public function getStartTimestamp()
    {
        return $this->startTimestamp;
    }

    /**
     *This property is used if it's a Transaction event together with timestamp it's the duration of the transaction.
     *
     * Generated from protobuf field <code>float startTimestamp = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setStartTimestamp($var)
    {
        GPBUtil::checkFloat($var);
        $this->startTimestamp = $var;

        return $this;
    }

    /**
     *The severity of this event
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.Event.Severity level = 4;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     *The severity of this event
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.Event.Severity level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \PhpSentryProtobuf\MySentry\Event\Severity::class);
        $this->level = $var;

        return $this;
    }

    /**
     *The name of the logger which created the record
     *
     * Generated from protobuf field <code>string logger = 5;</code>
     * @return string
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     *The name of the logger which created the record
     *
     * Generated from protobuf field <code>string logger = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLogger($var)
    {
        GPBUtil::checkString($var, True);
        $this->logger = $var;

        return $this;
    }

    /**
     *The name of the transaction (or culprit) which caused this exception
     *
     * Generated from protobuf field <code>string transaction = 6;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     *The name of the transaction (or culprit) which caused this exception
     *
     * Generated from protobuf field <code>string transaction = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, True);
        $this->transaction = $var;

        return $this;
    }

    /**
     *The name of the server (e.g. the host name)
     *
     * Generated from protobuf field <code>string serverName = 7;</code>
     * @return string
     */
    public function getServerName()
    {
        return $this->serverName;
    }

    /**
     *The name of the server (e.g. the host name)
     *
     * Generated from protobuf field <code>string serverName = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setServerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->serverName = $var;

        return $this;
    }

    /**
     *The release of the program
     *
     * Generated from protobuf field <code>string release = 8;</code>
     * @return string
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     *The release of the program
     *
     * Generated from protobuf field <code>string release = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setRelease($var)
    {
        GPBUtil::checkString($var, True);
        $this->release = $var;

        return $this;
    }

    /**
     *The error message
     *
     * Generated from protobuf field <code>string message = 9;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     *The error message
     *
     * Generated from protobuf field <code>string message = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     *The formatted error message
     *
     * Generated from protobuf field <code>string messageFormatted = 10;</code>
     * @return string
     */
    public function getMessageFormatted()
    {
        return $this->messageFormatted;
    }

    /**
     *The formatted error message
     *
     * Generated from protobuf field <code>string messageFormatted = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageFormatted($var)
    {
        GPBUtil::checkString($var, True);
        $this->messageFormatted = $var;

        return $this;
    }

    /**
     *The parameters to use to format the message
     *
     * Generated from protobuf field <code>repeated string messageParams = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessageParams()
    {
        return $this->messageParams;
    }

    /**
     *The parameters to use to format the message
     *
     * Generated from protobuf field <code>repeated string messageParams = 11;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessageParams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->messageParams = $arr;

        return $this;
    }

    /**
     *The environment where this event generated (e.g. production)
     *
     * Generated from protobuf field <code>string environment = 12;</code>
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     *The environment where this event generated (e.g. production)
     *
     * Generated from protobuf field <code>string environment = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkString($var, True);
        $this->environment = $var;

        return $this;
    }

    /**
     *A list of relevant modules and their versions
     *
     * Generated from protobuf field <code>map<string, string> modules = 13;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     *A list of relevant modules and their versions
     *
     * Generated from protobuf field <code>map<string, string> modules = 13;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setModules($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->modules = $arr;

        return $this;
    }

    /**
     *The request data
     *
     * Generated from protobuf field <code>map<string, string> request = 14;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     *The request data
     *
     * Generated from protobuf field <code>map<string, string> request = 14;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setRequest($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->request = $arr;

        return $this;
    }

    /**
     *A list of tags associated to this event
     *
     * Generated from protobuf field <code>map<string, string> tags = 15;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     *A list of tags associated to this event
     *
     * Generated from protobuf field <code>map<string, string> tags = 15;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     *The server OS context data
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.OsContext osContext = 16;</code>
     * @return \PhpSentryProtobuf\MySentry\OsContext|null
     */
    public function getOsContext()
    {
        return $this->osContext;
    }

    public function hasOsContext()
    {
        return isset($this->osContext);
    }

    public function clearOsContext()
    {
        unset($this->osContext);
    }

    /**
     *The server OS context data
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.OsContext osContext = 16;</code>
     * @param \PhpSentryProtobuf\MySentry\OsContext $var
     * @return $this
     */
    public function setOsContext($var)
    {
        GPBUtil::checkMessage($var, \PhpSentryProtobuf\MySentry\OsContext::class);
        $this->osContext = $var;

        return $this;
    }

    /**
     *The runtime context data
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.RuntimeContext runtimeContext = 17;</code>
     * @return \PhpSentryProtobuf\MySentry\RuntimeContext|null
     */
    public function getRuntimeContext()
    {
        return $this->runtimeContext;
    }

    public function hasRuntimeContext()
    {
        return isset($this->runtimeContext);
    }

    public function clearRuntimeContext()
    {
        unset($this->runtimeContext);
    }

    /**
     *The runtime context data
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.RuntimeContext runtimeContext = 17;</code>
     * @param \PhpSentryProtobuf\MySentry\RuntimeContext $var
     * @return $this
     */
    public function setRuntimeContext($var)
    {
        GPBUtil::checkMessage($var, \PhpSentryProtobuf\MySentry\RuntimeContext::class);
        $this->runtimeContext = $var;

        return $this;
    }

    /**
     *The user context data
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.User user = 18;</code>
     * @return \PhpSentryProtobuf\MySentry\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     *The user context data
     *
     * Generated from protobuf field <code>.PhpSentryProtobuf.MySentry.User user = 18;</code>
     * @param \PhpSentryProtobuf\MySentry\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \PhpSentryProtobuf\MySentry\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     *An arbitrary mapping of additional contexts associated to this event
     *
     * Generated from protobuf field <code>map<string, .PhpSentryProtobuf.MySentry.Context> contexts = 19;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getContexts()
    {
        return $this->contexts;
    }

    /**
     *An arbitrary mapping of additional contexts associated to this event
     *
     * Generated from protobuf field <code>map<string, .PhpSentryProtobuf.MySentry.Context> contexts = 19;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setContexts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \PhpSentryProtobuf\MySentry\Context::class);
        $this->contexts = $arr;

        return $this;
    }

    /**
     *An arbitrary mapping of additional metadata
     *
     * Generated from protobuf field <code>map<string, string> extra = 20;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     *An arbitrary mapping of additional metadata
     *
     * Generated from protobuf field <code>map<string, string> extra = 20;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->extra = $arr;

        return $this;
    }

    /**
     *An array of strings used to dictate the deduplication of this event
     *
     * Generated from protobuf field <code>repeated string fingerprint = 21;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     *An array of strings used to dictate the deduplication of this event
     *
     * Generated from protobuf field <code>repeated string fingerprint = 21;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fingerprint = $arr;

        return $this;
    }

    /**
     *The associated breadcrumbs
     *
     * Generated from protobuf field <code>repeated .PhpSentryProtobuf.MySentry.Breadcrumb breadcrumbs = 22;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBreadcrumbs()
    {
        return $this->breadcrumbs;
    }

    /**
     *The associated breadcrumbs
     *
     * Generated from protobuf field <code>repeated .PhpSentryProtobuf.MySentry.Breadcrumb breadcrumbs = 22;</code>
     * @param array<\PhpSentryProtobuf\MySentry\Breadcrumb>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBreadcrumbs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PhpSentryProtobuf\MySentry\Breadcrumb::class);
        $this->breadcrumbs = $arr;

        return $this;
    }

    /**
     *The array of spans if it's a transaction
     *
     * Generated from protobuf field <code>repeated .PhpSentryProtobuf.MySentry.Span spans = 23;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpans()
    {
        return $this->spans;
    }

    /**
     *The array of spans if it's a transaction
     *
     * Generated from protobuf field <code>repeated .PhpSentryProtobuf.MySentry.Span spans = 23;</code>
     * @param array<\PhpSentryProtobuf\MySentry\Span>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpans($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PhpSentryProtobuf\MySentry\Span::class);
        $this->spans = $arr;

        return $this;
    }

    /**
     *The exceptions
     *
     * Generated from protobuf field <code>repeated .PhpSentryProtobuf.MySentry.Exception exceptions = 24;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExceptions()
    {
        return $this->exceptions;
    }

    /**
     *The exceptions
     *
     * Generated from protobuf field <code>repeated .PhpSentryProtobuf.MySentry.Exception exceptions = 24;</code>
     * @param array<\PhpSentryProtobuf\MySentry\Exception>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExceptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PhpSentryProtobuf\MySentry\Exception::class);
        $this->exceptions = $arr;

        return $this;
    }

    /**
     *The Sentry SDK identifier
     *
     * Generated from protobuf field <code>string sdkIdentifier = 25;</code>
     * @return string
     */
    public function getSdkIdentifier()
    {
        return $this->sdkIdentifier;
    }

    /**
     *The Sentry SDK identifier
     *
     * Generated from protobuf field <code>string sdkIdentifier = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setSdkIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->sdkIdentifier = $var;

        return $this;
    }

    /**
     *The Sentry SDK version
     *
     * Generated from protobuf field <code>string sdkVersion = 26;</code>
     * @return string
     */
    public function getSdkVersion()
    {
        return $this->sdkVersion;
    }

    /**
     *The Sentry SDK version
     *
     * Generated from protobuf field <code>string sdkVersion = 26;</code>
     * @param string $var
     * @return $this
     */
    public function setSdkVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->sdkVersion = $var;

        return $this;
    }

    /**
     *The type of the Event
     *
     * Generated from protobuf field <code>string type = 27;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *The type of the Event
     *
     * Generated from protobuf field <code>string type = 27;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

