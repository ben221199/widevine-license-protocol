<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace VideoWidevineServer\SDK;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Signed CertificateStatusList
 *
 * Generated from protobuf message <code>VideoWidevineServer.SDK.SignedCertificateStatusList</code>
 */
class SignedCertificateStatusList extends \Google\Protobuf\Internal\Message
{
    /**
     * Serialized DeviceCertificateStatusList. Required.
     *
     * Generated from protobuf field <code>optional bytes certificate_status_list = 1;</code>
     */
    protected $certificate_status_list = null;
    /**
     * Signature of certificate_status_list. Signed with root certificate private
     * key using RSASSA-PSS. Required.
     *
     * Generated from protobuf field <code>optional bytes signature = 2;</code>
     */
    protected $signature = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $certificate_status_list
     *           Serialized DeviceCertificateStatusList. Required.
     *     @type string $signature
     *           Signature of certificate_status_list. Signed with root certificate private
     *           key using RSASSA-PSS. Required.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LicenseProtocol::initOnce();
        parent::__construct($data);
    }

    /**
     * Serialized DeviceCertificateStatusList. Required.
     *
     * Generated from protobuf field <code>optional bytes certificate_status_list = 1;</code>
     * @return string
     */
    public function getCertificateStatusList()
    {
        return isset($this->certificate_status_list) ? $this->certificate_status_list : '';
    }

    public function hasCertificateStatusList()
    {
        return isset($this->certificate_status_list);
    }

    public function clearCertificateStatusList()
    {
        unset($this->certificate_status_list);
    }

    /**
     * Serialized DeviceCertificateStatusList. Required.
     *
     * Generated from protobuf field <code>optional bytes certificate_status_list = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificateStatusList($var)
    {
        GPBUtil::checkString($var, False);
        $this->certificate_status_list = $var;

        return $this;
    }

    /**
     * Signature of certificate_status_list. Signed with root certificate private
     * key using RSASSA-PSS. Required.
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
     * Signature of certificate_status_list. Signed with root certificate private
     * key using RSASSA-PSS. Required.
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

}

