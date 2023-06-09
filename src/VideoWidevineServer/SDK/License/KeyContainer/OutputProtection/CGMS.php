<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace VideoWidevineServer\SDK\License\KeyContainer\OutputProtection;

use UnexpectedValueException;

/**
 * Indicate the CGMS setting to be inserted on analog output.
 *
 * Protobuf type <code>VideoWidevineServer.SDK.License.KeyContainer.OutputProtection.CGMS</code>
 */
class CGMS
{
    /**
     * Generated from protobuf enum <code>COPY_FREE = 0;</code>
     */
    const COPY_FREE = 0;
    /**
     * Generated from protobuf enum <code>CGMS_NONE = 42;</code>
     */
    const CGMS_NONE = 42;
    /**
     * Generated from protobuf enum <code>COPY_ONCE = 2;</code>
     */
    const COPY_ONCE = 2;
    /**
     * Generated from protobuf enum <code>COPY_NEVER = 3;</code>
     */
    const COPY_NEVER = 3;

    private static $valueToName = [
        self::COPY_FREE => 'COPY_FREE',
        self::CGMS_NONE => 'CGMS_NONE',
        self::COPY_ONCE => 'COPY_ONCE',
        self::COPY_NEVER => 'COPY_NEVER',
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
class_alias(CGMS::class, \VideoWidevineServer\SDK\License_KeyContainer_OutputProtection_CGMS::class);

