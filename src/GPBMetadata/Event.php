<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Event.proto

namespace PhpSentryProtobuf\GPBMetadata;

class Event
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Event.protoPhpSentryProtobuf.MySentry"�
Event
eventId (	
	timestamp (
startTimestamp (9
level (2*.PhpSentryProtobuf.MySentry.Event.Severity
release (	
message (	
messageFormatted (	

messageParams (	
environment	 (	
fingerprint
 (	9

exceptions (2%.PhpSentryProtobuf.MySentry.Exception

sdkIdentifier (	

sdkVersion
 (	
type (	"B
Severity	
debug 
info
warning	
error	
fatal"�
	Exception
type (	
value (	:

stacktrace (2&.PhpSentryProtobuf.MySentry.StacktraceA
	mechanism (2..PhpSentryProtobuf.MySentry.ExceptionMechanism"?

Stacktrace1
frames (2!.PhpSentryProtobuf.MySentry.Frame"{
Frame
functionName (	
rawFunctionName (	
file (	
absoluteFilePath (	
line (
inApp ("3
ExceptionMechanism
type (	
handled (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

