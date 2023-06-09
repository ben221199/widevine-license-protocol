<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace VideoWidevineServer\SDK;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DeviceCertificate signed with intermediate or root certificate private key.
 *
 * Generated from protobuf message <code>VideoWidevineServer.SDK.SignedDeviceCertificate</code>
 */
class SignedDeviceCertificate extends \Google\Protobuf\Internal\Message
{
    /**
     * Serialized DeviceCertificate. Required.
     *
     * Generated from protobuf field <code>optional bytes device_certificate = 1;</code>
     */
    protected $device_certificate = null;
    /**
     * Signature of device_certificate. Signed with root or intermediate
     * certificate private key using RSASSA-PSS. Required.
     *
     * Generated from protobuf field <code>optional bytes signature = 2;</code>
     */
    protected $signature = null;
    /**
     * Intermediate signing certificate. Present only for user device
     * certificates. All others signed with root certificate private key.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.SignedDeviceCertificate signer = 3;</code>
     */
    protected $signer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $device_certificate
     *           Serialized DeviceCertificate. Required.
     *     @type string $signature
     *           Signature of device_certificate. Signed with root or intermediate
     *           certificate private key using RSASSA-PSS. Required.
     *     @type \VideoWidevineServer\SDK\SignedDeviceCertificate $signer
     *           Intermediate signing certificate. Present only for user device
     *           certificates. All others signed with root certificate private key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LicenseProtocol::initOnce();
        parent::__construct($data);
    }

    /**
     * Serialized DeviceCertificate. Required.
     *
     * Generated from protobuf field <code>optional bytes device_certificate = 1;</code>
     * @return string
     */
    public function getDeviceCertificate()
    {
        return isset($this->device_certificate) ? $this->device_certificate : '';
    }

    public function hasDeviceCertificate()
    {
        return isset($this->device_certificate);
    }

    public function clearDeviceCertificate()
    {
        unset($this->device_certificate);
    }

    /**
     * Serialized DeviceCertificate. Required.
     *
     * Generated from protobuf field <code>optional bytes device_certificate = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceCertificate($var)
    {
        GPBUtil::checkString($var, False);
        $this->device_certificate = $var;

        return $this;
    }

    /**
     * Signature of device_certificate. Signed with root or intermediate
     * certificate private key using RSASSA-PSS. Required.
     *
     * Generated from protobuf field <code>optional bytes signature = 2;</code>
     * @return string
     */
    public function getSignature()
    {
        return isset($this->signature) ? $this->signature : '';
    }

    public function hasSignature()
    {
        return isset($this->signature);
    }

    public function clearSignature()
    {
        unset($this->signature);
    }

    /**
     * Signature of device_certificate. Signed with root or intermediate
     * certificate private key using RSASSA-PSS. Required.
     *
     * Generated from protobuf field <code>optional bytes signature = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->signature = $var;

        return $this;
    }

    /**
     * Intermediate signing certificate. Present only for user device
     * certificates. All others signed with root certificate private key.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.SignedDeviceCertificate signer = 3;</code>
     * @return \VideoWidevineServer\SDK\SignedDeviceCertificate|null
     */
    public function getSigner()
    {
        return isset($this->signer) ? $this->signer : null;
    }

    public function hasSigner()
    {
        return isset($this->signer);
    }

    public function clearSigner()
    {
        unset($this->signer);
    }

    /**
     * Intermediate signing certificate. Present only for user device
     * certificates. All others signed with root certificate private key.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.SignedDeviceCertificate signer = 3;</code>
     * @param \VideoWidevineServer\SDK\SignedDeviceCertificate $var
     * @return $this
     */
    public function setSigner($var)
    {
        GPBUtil::checkMessage($var, \VideoWidevineServer\SDK\SignedDeviceCertificate::class);
        $this->signer = $var;

        return $this;
    }

}

