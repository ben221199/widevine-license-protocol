<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace VideoWidevineServer\SDK\License\KeyContainer;

use UnexpectedValueException;

/**
 * The SecurityLevel enumeration allows the server to communicate the level
 * of robustness required by the client, in order to use the key.
 *
 * Protobuf type <code>VideoWidevineServer.SDK.License.KeyContainer.SecurityLevel</code>
 */
class SecurityLevel
{
    /**
     * Generated from protobuf enum <code>SECURITYLEVEL_UNKNOWN = 0;</code>
     */
    const SECURITYLEVEL_UNKNOWN = 0;
    /**
     * Software-based whitebox crypto is required.
     *
     * Generated from protobuf enum <code>SW_SECURE_CRYPTO = 1;</code>
     */
    const SW_SECURE_CRYPTO = 1;
    /**
     * Software crypto and an obfuscated decoder is required.
     *
     * Generated from protobuf enum <code>SW_SECURE_DECODE = 2;</code>
     */
    const SW_SECURE_DECODE = 2;
    /**
     * The key material and crypto operations must be performed within a
     * hardware backed trusted execution environment.
     *
     * Generated from protobuf enum <code>HW_SECURE_CRYPTO = 3;</code>
     */
    const HW_SECURE_CRYPTO = 3;
    /**
     * The crypto and decoding of content must be performed within a hardware
     * backed trusted execution environment.
     *
     * Generated from protobuf enum <code>HW_SECURE_DECODE = 4;</code>
     */
    const HW_SECURE_DECODE = 4;
    /**
     * The crypto, decoding and all handling of the media (compressed and
     * uncompressed) must be handled within a hardware backed trusted
     * execution environment.
     *
     * Generated from protobuf enum <code>HW_SECURE_ALL = 5;</code>
     */
    const HW_SECURE_ALL = 5;

    private static $valueToName = [
        self::SECURITYLEVEL_UNKNOWN => 'SECURITYLEVEL_UNKNOWN',
        self::SW_SECURE_CRYPTO => 'SW_SECURE_CRYPTO',
        self::SW_SECURE_DECODE => 'SW_SECURE_DECODE',
        self::HW_SECURE_CRYPTO => 'HW_SECURE_CRYPTO',
        self::HW_SECURE_DECODE => 'HW_SECURE_DECODE',
        self::HW_SECURE_ALL => 'HW_SECURE_ALL',
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
class_alias(SecurityLevel::class, \VideoWidevineServer\SDK\License_KeyContainer_SecurityLevel::class);
