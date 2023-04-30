<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace VideoWidevineServer\SDK\DeviceCertificateStatus;

use UnexpectedValueException;

/**
 * Protobuf type <code>VideoWidevineServer.SDK.DeviceCertificateStatus.CertificateStatus</code>
 */
class CertificateStatus
{
    /**
     * Generated from protobuf enum <code>VALID = 0;</code>
     */
    const VALID = 0;
    /**
     * Generated from protobuf enum <code>REVOKED = 1;</code>
     */
    const REVOKED = 1;

    private static $valueToName = [
        self::VALID => 'VALID',
        self::REVOKED => 'REVOKED',
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
class_alias(CertificateStatus::class, \VideoWidevineServer\SDK\DeviceCertificateStatus_CertificateStatus::class);

