<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace VideoWidevineServer\SDK;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>VideoWidevineServer.SDK.RemoteAttestation</code>
 */
class RemoteAttestation extends \Google\Protobuf\Internal\Message
{
    /**
     * Encrypted ClientIdentification message containing the device remote
     * attestation certificate. Required.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.EncryptedClientIdentification certificate = 1;</code>
     */
    protected $certificate = null;
    /**
     * Bytes of salt which were added to the remote attestation challenge prior to
     * signing it. Required.
     *
     * Generated from protobuf field <code>optional bytes salt = 2;</code>
     */
    protected $salt = null;
    /**
     * Signed remote attestation challenge + salt. Required.
     *
     * Generated from protobuf field <code>optional bytes signature = 3;</code>
     */
    protected $signature = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \VideoWidevineServer\SDK\EncryptedClientIdentification $certificate
     *           Encrypted ClientIdentification message containing the device remote
     *           attestation certificate. Required.
     *     @type string $salt
     *           Bytes of salt which were added to the remote attestation challenge prior to
     *           signing it. Required.
     *     @type string $signature
     *           Signed remote attestation challenge + salt. Required.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LicenseProtocol::initOnce();
        parent::__construct($data);
    }

    /**
     * Encrypted ClientIdentification message containing the device remote
     * attestation certificate. Required.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.EncryptedClientIdentification certificate = 1;</code>
     * @return \VideoWidevineServer\SDK\EncryptedClientIdentification|null
     */
    public function getCertificate()
    {
        return isset($this->certificate) ? $this->certificate : null;
    }

    public function hasCertificate()
    {
        return isset($this->certificate);
    }

    public function clearCertificate()
    {
        unset($this->certificate);
    }

    /**
     * Encrypted ClientIdentification message containing the device remote
     * attestation certificate. Required.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.EncryptedClientIdentification certificate = 1;</code>
     * @param \VideoWidevineServer\SDK\EncryptedClientIdentification $var
     * @return $this
     */
    public function setCertificate($var)
    {
        GPBUtil::checkMessage($var, \VideoWidevineServer\SDK\EncryptedClientIdentification::class);
        $this->certificate = $var;

        return $this;
    }

    /**
     * Bytes of salt which were added to the remote attestation challenge prior to
     * signing it. Required.
     *
     * Generated from protobuf field <code>optional bytes salt = 2;</code>
     * @return string
     */
    public function getSalt()
    {
        return isset($this->salt) ? $this->salt : '';
    }

    public function hasSalt()
    {
        return isset($this->salt);
    }

    public function clearSalt()
    {
        unset($this->salt);
    }

    /**
     * Bytes of salt which were added to the remote attestation challenge prior to
     * signing it. Required.
     *
     * Generated from protobuf field <code>optional bytes salt = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSalt($var)
    {
        GPBUtil::checkString($var, False);
        $this->salt = $var;

        return $this;
    }

    /**
     * Signed remote attestation challenge + salt. Required.
     *
     * Generated from protobuf field <code>optional bytes signature = 3;</code>
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
     * Signed remote attestation challenge + salt. Required.
     *
     * Generated from protobuf field <code>optional bytes signature = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->signature = $var;

        return $this;
    }

}

