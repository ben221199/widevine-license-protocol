<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace VideoWidevineServer\SDK;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provisioning request sent by client devices to provisioning service.
 *
 * Generated from protobuf message <code>VideoWidevineServer.SDK.ProvisioningRequest</code>
 */
class ProvisioningRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Device root of trust and other client identification. Required.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.ClientIdentification client_id = 1;</code>
     */
    protected $client_id = null;
    /**
     * Nonce value used to prevent replay attacks. Required.
     *
     * Generated from protobuf field <code>optional bytes nonce = 2;</code>
     */
    protected $nonce = null;
    /**
     * Options for type of certificate to generate.  Optional.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.ProvisioningOptions options = 3;</code>
     */
    protected $options = null;
    /**
     * Stable identifier, unique for each device + application (or origin).
     * Required if doing per-origin provisioning.
     *
     * Generated from protobuf field <code>optional bytes stable_id = 4;</code>
     */
    protected $stable_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \VideoWidevineServer\SDK\ClientIdentification $client_id
     *           Device root of trust and other client identification. Required.
     *     @type string $nonce
     *           Nonce value used to prevent replay attacks. Required.
     *     @type \VideoWidevineServer\SDK\ProvisioningOptions $options
     *           Options for type of certificate to generate.  Optional.
     *     @type string $stable_id
     *           Stable identifier, unique for each device + application (or origin).
     *           Required if doing per-origin provisioning.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LicenseProtocol::initOnce();
        parent::__construct($data);
    }

    /**
     * Device root of trust and other client identification. Required.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.ClientIdentification client_id = 1;</code>
     * @return \VideoWidevineServer\SDK\ClientIdentification|null
     */
    public function getClientId()
    {
        return isset($this->client_id) ? $this->client_id : null;
    }

    public function hasClientId()
    {
        return isset($this->client_id);
    }

    public function clearClientId()
    {
        unset($this->client_id);
    }

    /**
     * Device root of trust and other client identification. Required.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.ClientIdentification client_id = 1;</code>
     * @param \VideoWidevineServer\SDK\ClientIdentification $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkMessage($var, \VideoWidevineServer\SDK\ClientIdentification::class);
        $this->client_id = $var;

        return $this;
    }

    /**
     * Nonce value used to prevent replay attacks. Required.
     *
     * Generated from protobuf field <code>optional bytes nonce = 2;</code>
     * @return string
     */
    public function getNonce()
    {
        return isset($this->nonce) ? $this->nonce : '';
    }

    public function hasNonce()
    {
        return isset($this->nonce);
    }

    public function clearNonce()
    {
        unset($this->nonce);
    }

    /**
     * Nonce value used to prevent replay attacks. Required.
     *
     * Generated from protobuf field <code>optional bytes nonce = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkString($var, False);
        $this->nonce = $var;

        return $this;
    }

    /**
     * Options for type of certificate to generate.  Optional.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.ProvisioningOptions options = 3;</code>
     * @return \VideoWidevineServer\SDK\ProvisioningOptions|null
     */
    public function getOptions()
    {
        return isset($this->options) ? $this->options : null;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * Options for type of certificate to generate.  Optional.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.ProvisioningOptions options = 3;</code>
     * @param \VideoWidevineServer\SDK\ProvisioningOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \VideoWidevineServer\SDK\ProvisioningOptions::class);
        $this->options = $var;

        return $this;
    }

    /**
     * Stable identifier, unique for each device + application (or origin).
     * Required if doing per-origin provisioning.
     *
     * Generated from protobuf field <code>optional bytes stable_id = 4;</code>
     * @return string
     */
    public function getStableId()
    {
        return isset($this->stable_id) ? $this->stable_id : '';
    }

    public function hasStableId()
    {
        return isset($this->stable_id);
    }

    public function clearStableId()
    {
        unset($this->stable_id);
    }

    /**
     * Stable identifier, unique for each device + application (or origin).
     * Required if doing per-origin provisioning.
     *
     * Generated from protobuf field <code>optional bytes stable_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStableId($var)
    {
        GPBUtil::checkString($var, False);
        $this->stable_id = $var;

        return $this;
    }

}

