<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace VideoWidevineServer\SDK\License\KeyContainer;

use UnexpectedValueException;

/**
 * Protobuf type <code>VideoWidevineServer.SDK.License.KeyContainer.KeyType</code>
 */
class KeyType
{
    /**
     * Generated from protobuf enum <code>KEYTYPE_UNKNOWN = 0;</code>
     */
    const KEYTYPE_UNKNOWN = 0;
    /**
     * Exactly one key of this type must appear.
     *
     * Generated from protobuf enum <code>SIGNING = 1;</code>
     */
    const SIGNING = 1;
    /**
     * Generated from protobuf enum <code>CONTENT = 2;</code>
     */
    const CONTENT = 2;
    /**
     * Generated from protobuf enum <code>KEY_CONTROL = 3;</code>
     */
    const KEY_CONTROL = 3;
    /**
     * Generated from protobuf enum <code>OPERATOR_SESSION = 4;</code>
     */
    const OPERATOR_SESSION = 4;

    private static $valueToName = [
        self::KEYTYPE_UNKNOWN => 'KEYTYPE_UNKNOWN',
        self::SIGNING => 'SIGNING',
        self::CONTENT => 'CONTENT',
        self::KEY_CONTROL => 'KEY_CONTROL',
        self::OPERATOR_SESSION => 'OPERATOR_SESSION',
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
class_alias(KeyType::class, \VideoWidevineServer\SDK\License_KeyContainer_KeyType::class);

