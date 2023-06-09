<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace VideoWidevineServer\SDK;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>VideoWidevineServer.SDK.LicenseRequest</code>
 */
class LicenseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The client_id provides information authenticating the calling device.  It
     * contains the Widevine keybox token that was installed on the device at the
     * factory.  This field or encrypted_client_id below is required for a valid
     * license request, but both should never be present in the same request.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.ClientIdentification client_id = 1;</code>
     */
    protected $client_id = null;
    /**
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.LicenseRequest.ContentIdentification content_id = 2;</code>
     */
    protected $content_id = null;
    /**
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.LicenseRequest.RequestType type = 3;</code>
     */
    protected $type = null;
    /**
     * Generated from protobuf field <code>optional int64 request_time = 4;</code>
     */
    protected $request_time = null;
    /**
     * Old-style decimal-encoded string key control nonce.
     *
     * Generated from protobuf field <code>optional bytes key_control_nonce_deprecated = 5;</code>
     */
    protected $key_control_nonce_deprecated = null;
    /**
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.ProtocolVersion protocol_version = 6;</code>
     */
    protected $protocol_version = null;
    /**
     * New-style uint32 key control nonce, please use instead of
     * key_control_nonce_deprecated.
     *
     * Generated from protobuf field <code>optional uint32 key_control_nonce = 7;</code>
     */
    protected $key_control_nonce = null;
    /**
     * Encrypted ClientIdentification message, used for privacy purposes.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.EncryptedClientIdentification encrypted_client_id = 8;</code>
     */
    protected $encrypted_client_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \VideoWidevineServer\SDK\ClientIdentification $client_id
     *           The client_id provides information authenticating the calling device.  It
     *           contains the Widevine keybox token that was installed on the device at the
     *           factory.  This field or encrypted_client_id below is required for a valid
     *           license request, but both should never be present in the same request.
     *     @type \VideoWidevineServer\SDK\LicenseRequest\ContentIdentification $content_id
     *     @type int $type
     *     @type int|string $request_time
     *     @type string $key_control_nonce_deprecated
     *           Old-style decimal-encoded string key control nonce.
     *     @type int $protocol_version
     *     @type int $key_control_nonce
     *           New-style uint32 key control nonce, please use instead of
     *           key_control_nonce_deprecated.
     *     @type \VideoWidevineServer\SDK\EncryptedClientIdentification $encrypted_client_id
     *           Encrypted ClientIdentification message, used for privacy purposes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LicenseProtocol::initOnce();
        parent::__construct($data);
    }

    /**
     * The client_id provides information authenticating the calling device.  It
     * contains the Widevine keybox token that was installed on the device at the
     * factory.  This field or encrypted_client_id below is required for a valid
     * license request, but both should never be present in the same request.
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
     * The client_id provides information authenticating the calling device.  It
     * contains the Widevine keybox token that was installed on the device at the
     * factory.  This field or encrypted_client_id below is required for a valid
     * license request, but both should never be present in the same request.
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
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.LicenseRequest.ContentIdentification content_id = 2;</code>
     * @return \VideoWidevineServer\SDK\LicenseRequest\ContentIdentification|null
     */
    public function getContentId()
    {
        return isset($this->content_id) ? $this->content_id : null;
    }

    public function hasContentId()
    {
        return isset($this->content_id);
    }

    public function clearContentId()
    {
        unset($this->content_id);
    }

    /**
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.LicenseRequest.ContentIdentification content_id = 2;</code>
     * @param \VideoWidevineServer\SDK\LicenseRequest\ContentIdentification $var
     * @return $this
     */
    public function setContentId($var)
    {
        GPBUtil::checkMessage($var, \VideoWidevineServer\SDK\LicenseRequest\ContentIdentification::class);
        $this->content_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.LicenseRequest.RequestType type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : 0;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.LicenseRequest.RequestType type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \VideoWidevineServer\SDK\LicenseRequest\RequestType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int64 request_time = 4;</code>
     * @return int|string
     */
    public function getRequestTime()
    {
        return isset($this->request_time) ? $this->request_time : 0;
    }

    public function hasRequestTime()
    {
        return isset($this->request_time);
    }

    public function clearRequestTime()
    {
        unset($this->request_time);
    }

    /**
     * Generated from protobuf field <code>optional int64 request_time = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRequestTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->request_time = $var;

        return $this;
    }

    /**
     * Old-style decimal-encoded string key control nonce.
     *
     * Generated from protobuf field <code>optional bytes key_control_nonce_deprecated = 5;</code>
     * @return string
     */
    public function getKeyControlNonceDeprecated()
    {
        return isset($this->key_control_nonce_deprecated) ? $this->key_control_nonce_deprecated : '';
    }

    public function hasKeyControlNonceDeprecated()
    {
        return isset($this->key_control_nonce_deprecated);
    }

    public function clearKeyControlNonceDeprecated()
    {
        unset($this->key_control_nonce_deprecated);
    }

    /**
     * Old-style decimal-encoded string key control nonce.
     *
     * Generated from protobuf field <code>optional bytes key_control_nonce_deprecated = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyControlNonceDeprecated($var)
    {
        GPBUtil::checkString($var, False);
        $this->key_control_nonce_deprecated = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.ProtocolVersion protocol_version = 6;</code>
     * @return int
     */
    public function getProtocolVersion()
    {
        return isset($this->protocol_version) ? $this->protocol_version : 0;
    }

    public function hasProtocolVersion()
    {
        return isset($this->protocol_version);
    }

    public function clearProtocolVersion()
    {
        unset($this->protocol_version);
    }

    /**
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.ProtocolVersion protocol_version = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setProtocolVersion($var)
    {
        GPBUtil::checkEnum($var, \VideoWidevineServer\SDK\ProtocolVersion::class);
        $this->protocol_version = $var;

        return $this;
    }

    /**
     * New-style uint32 key control nonce, please use instead of
     * key_control_nonce_deprecated.
     *
     * Generated from protobuf field <code>optional uint32 key_control_nonce = 7;</code>
     * @return int
     */
    public function getKeyControlNonce()
    {
        return isset($this->key_control_nonce) ? $this->key_control_nonce : 0;
    }

    public function hasKeyControlNonce()
    {
        return isset($this->key_control_nonce);
    }

    public function clearKeyControlNonce()
    {
        unset($this->key_control_nonce);
    }

    /**
     * New-style uint32 key control nonce, please use instead of
     * key_control_nonce_deprecated.
     *
     * Generated from protobuf field <code>optional uint32 key_control_nonce = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyControlNonce($var)
    {
        GPBUtil::checkUint32($var);
        $this->key_control_nonce = $var;

        return $this;
    }

    /**
     * Encrypted ClientIdentification message, used for privacy purposes.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.EncryptedClientIdentification encrypted_client_id = 8;</code>
     * @return \VideoWidevineServer\SDK\EncryptedClientIdentification|null
     */
    public function getEncryptedClientId()
    {
        return isset($this->encrypted_client_id) ? $this->encrypted_client_id : null;
    }

    public function hasEncryptedClientId()
    {
        return isset($this->encrypted_client_id);
    }

    public function clearEncryptedClientId()
    {
        unset($this->encrypted_client_id);
    }

    /**
     * Encrypted ClientIdentification message, used for privacy purposes.
     *
     * Generated from protobuf field <code>optional .VideoWidevineServer.SDK.EncryptedClientIdentification encrypted_client_id = 8;</code>
     * @param \VideoWidevineServer\SDK\EncryptedClientIdentification $var
     * @return $this
     */
    public function setEncryptedClientId($var)
    {
        GPBUtil::checkMessage($var, \VideoWidevineServer\SDK\EncryptedClientIdentification::class);
        $this->encrypted_client_id = $var;

        return $this;
    }

}

