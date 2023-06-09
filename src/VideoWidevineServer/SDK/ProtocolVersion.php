<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace VideoWidevineServer\SDK;

use UnexpectedValueException;

/**
 * Protobuf type <code>VideoWidevineServer.SDK.ProtocolVersion</code>
 */
class ProtocolVersion
{
    /**
     * Generated from protobuf enum <code>PROTOCOLVERSION_UNKNOWN = 0;</code>
     */
    const PROTOCOLVERSION_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>VERSION_2_0 = 20;</code>
     */
    const VERSION_2_0 = 20;
    /**
     * Generated from protobuf enum <code>VERSION_2_1 = 21;</code>
     */
    const VERSION_2_1 = 21;

    private static $valueToName = [
        self::PROTOCOLVERSION_UNKNOWN => 'PROTOCOLVERSION_UNKNOWN',
        self::VERSION_2_0 => 'VERSION_2_0',
        self::VERSION_2_1 => 'VERSION_2_1',
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

