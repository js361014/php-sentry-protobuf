<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Event.proto

namespace PhpSentryProtobuf\MySentry\Breadcrumb;

use UnexpectedValueException;

/**
 * Protobuf type <code>PhpSentryProtobuf.MySentry.Breadcrumb.Type</code>
 */
class Type
{
    /**
     *default breadcrumb type
     *
     * Generated from protobuf enum <code>type_default = 0;</code>
     */
    const type_default = 0;
    /**
     *http breadcrumb type
     *
     * Generated from protobuf enum <code>type_http = 1;</code>
     */
    const type_http = 1;
    /**
     *user breadcrumb type
     *
     * Generated from protobuf enum <code>type_user = 2;</code>
     */
    const type_user = 2;
    /**
     *navigation breadcrumb type
     *
     * Generated from protobuf enum <code>type_navigation = 3;</code>
     */
    const type_navigation = 3;
    /**
     *error breadcrumb type
     *
     * Generated from protobuf enum <code>type_error = 4;</code>
     */
    const type_error = 4;

    private static $valueToName = [
        self::type_default => 'type_default',
        self::type_http => 'type_http',
        self::type_user => 'type_user',
        self::type_navigation => 'type_navigation',
        self::type_error => 'type_error',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \PhpSentryProtobuf\MySentry\Breadcrumb_Type::class);

