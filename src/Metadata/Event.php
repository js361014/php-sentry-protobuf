<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Event.proto

namespace PhpSentryProtobuf\Metadata;

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
�
Event.protoPhpSentryProtobuf.MySentry"�
Event
eventId (	
	timestamp (
startTimestamp (9
level (2*.PhpSentryProtobuf.MySentry.Event.Severity
transaction (	
release (	
message (	
messageFormatted (	
messageParams	 (	
environment
 (	9
tags (2+.PhpSentryProtobuf.MySentry.Event.TagsEntry.
user (2 .PhpSentryProtobuf.MySentry.User
fingerprint (	;
breadcrumbs (2&.PhpSentryProtobuf.MySentry.Breadcrumb9

exceptions (2%.PhpSentryProtobuf.MySentry.Exception
sdkIdentifier (	

sdkVersion (	
type (	+
	TagsEntry
key (	
value (	:8"B
Severity	
debug 
info
warning	
error	
fatal"F
User

id (	
email (	
	ipAddress (	
username (	"�

Breadcrumb
category (	9
type (2+.PhpSentryProtobuf.MySentry.Breadcrumb.Type>
data (20.PhpSentryProtobuf.MySentry.Breadcrumb.DataEntry
message (	;
level (2,.PhpSentryProtobuf.MySentry.Breadcrumb.Level
	timestamp (+
	DataEntry
key (	
value (	:8"�
Type
type_default 
	type_http
	type_user
type_navigation

type_error

type_debug
	type_info

type_query
type_system
type_session	"]
Level
level_debug 

level_info
level_warning
level_error
level_fatal"�
	Exception
type (	
value (	:

stacktrace (2&.PhpSentryProtobuf.MySentry.StacktraceA
	mechanism (2..PhpSentryProtobuf.MySentry.ExceptionMechanism"?

Stacktrace1
frames (2!.PhpSentryProtobuf.MySentry.Frame"�
Frame
functionName (	
rawFunctionName (	
file (	
absoluteFilePath (	
line (

preContext (	
contextLine (	
postContext (	
inApp	 ("3
ExceptionMechanism
type (	
handled (B:�PhpSentryProtobuf\\MySentry�PhpSentryProtobuf\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

