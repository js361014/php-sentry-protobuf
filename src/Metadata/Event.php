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
?
Event.protoPhpSentryProtobuf.MySentry"?
Event
eventId (	
	timestamp (
startTimestamp (9
level (2*.PhpSentryProtobuf.MySentry.Event.Severity
logger (	
transaction (	

serverName (	
release (	
message	 (	
messageFormatted
 (	
messageParams (	
environment (	?
modules (2..PhpSentryProtobuf.MySentry.Event.ModulesEntry?
request (2..PhpSentryProtobuf.MySentry.Event.RequestEntry9
tags (2+.PhpSentryProtobuf.MySentry.Event.TagsEntry8
	osContext (2%.PhpSentryProtobuf.MySentry.OsContextB
runtimeContext (2*.PhpSentryProtobuf.MySentry.RuntimeContext.
user (2 .PhpSentryProtobuf.MySentry.UserA
contexts (2/.PhpSentryProtobuf.MySentry.Event.ContextsEntry;
extra (2,.PhpSentryProtobuf.MySentry.Event.ExtraEntry
fingerprint (	;
breadcrumbs (2&.PhpSentryProtobuf.MySentry.Breadcrumb/
spans (2 .PhpSentryProtobuf.MySentry.Span9

exceptions (2%.PhpSentryProtobuf.MySentry.Exception
sdkIdentifier (	

sdkVersion (	
type (	.
ModulesEntry
key (	
value (	:8.
RequestEntry
key (	
value (	:8+
	TagsEntry
key (	
value (	:8T
ContextsEntry
key (	2
value (2#.PhpSentryProtobuf.MySentry.Context:8,

ExtraEntry
key (	
value (	:8"o
Severity
severity_debug 
severity_info
severity_warning
severity_error
severity_fatal"?
Span
spanId (	
traceId (	
description (	

op (	
status (	
parentSpanId (	
sampled (8
tags (2*.PhpSentryProtobuf.MySentry.Span.TagsEntry8
data	 (2*.PhpSentryProtobuf.MySentry.Span.DataEntry
startTimestamp
 (
endTimestamp (+
	TagsEntry
key (	
value (	:8+
	DataEntry
key (	
value (	:8"?
Data

stringData (	>
mapData (2-.PhpSentryProtobuf.MySentry.Data.MapDataEntry
	arrayData (	.
MapDataEntry
key (	
value (	:8"?
Context;
data (2-.PhpSentryProtobuf.MySentry.Context.DataEntryM
	DataEntry
key (	/
value (2 .PhpSentryProtobuf.MySentry.Data:8"/
RuntimeContext
name (	
version (	"P
	OsContext
name (	
version (	
build (	
kernelVersion (	"?
User

id (	
email (	
	ipAddress (	
username (	@
metadata (2..PhpSentryProtobuf.MySentry.User.MetadataEntry/
MetadataEntry
key (	
value (	:8"?

Breadcrumb
category (	9
type (2+.PhpSentryProtobuf.MySentry.Breadcrumb.Type
message (	;
level (2,.PhpSentryProtobuf.MySentry.Breadcrumb.LevelF
metadata (24.PhpSentryProtobuf.MySentry.Breadcrumb.MetadataEntry
	timestamp (/
MetadataEntry
key (	
value (	:8"~
Type
type_default 
	type_http
	type_user
type_navigation

type_error
type_session
type_system"]
Level
level_debug 

level_info
level_warning
level_error
level_fatal"?
	Exception
type (	
value (	:

stacktrace (2&.PhpSentryProtobuf.MySentry.StacktraceA
	mechanism (2..PhpSentryProtobuf.MySentry.ExceptionMechanism"?

Stacktrace1
frames (2!.PhpSentryProtobuf.MySentry.Frame"?
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
handled (B:?PhpSentryProtobuf\\MySentry?PhpSentryProtobuf\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

