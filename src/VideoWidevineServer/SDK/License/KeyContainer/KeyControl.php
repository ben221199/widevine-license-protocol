<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace VideoWidevineServer\SDK\License\KeyContainer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>VideoWidevineServer.SDK.License.KeyContainer.KeyControl</code>
 */
class KeyControl extends \Google\Protobuf\Internal\Message
{
    /**
     * If present, the key control must be communicated to the secure
     * environment prior to any usage. This message is automatically generated
     * by the Widevine License Server SDK.
     *
     * Generated from protobuf field <code>optional bytes key_control_block = 1;</code>
     */
    protected $key_control_block = null;
    /**
     * Generated from protobuf field <code>optional bytes iv = 2;</code>
     */
    protected $iv = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key_control_block
     *           If present, the key control must be communicated to the secure
     *           environment prior to any usage. This message is automatically generated
     *           by the Widevine License Server SDK.
     *     @type string $iv
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LicenseProtocol::initOnce();
        parent::__construct($data);
    }

    /**
     * If present, the key control must be communicated to the secure
     * environment prior to any usage. This message is automatically generated
     * by the Widevine License Server SDK.
     *
     * Generated from protobuf field <code>optional bytes key_control_block = 1;</code>
     * @return string
     */
    public function getKeyControlBlock()
    {
        return isset($this->key_control_block) ? $this->key_control_block : '';
    }

    public function hasKeyControlBlock()
    {
        return isset($this->key_control_block);
    }

    public function clearKeyControlBlock()
    {
        unset($this->key_control_block);
    }

    /**
     * If present, the key control must be communicated to the secure
     * environment prior to any usage. This message is automatically generated
     * by the Widevine License Server SDK.
     *
     * Generated from protobuf field <code>optional bytes key_control_block = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyControlBlock($var)
    {
        GPBUtil::checkString($var, False);
        $this->key_control_block = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes iv = 2;</code>
     * @return string
     */
    public function getIv()
    {
        return isset($this->iv) ? $this->iv : '';
    }

    public function hasIv()
    {
        return isset($this->iv);
    }

    public function clearIv()
    {
        unset($this->iv);
    }

    /**
     * Generated from protobuf field <code>optional bytes iv = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIv($var)
    {
        GPBUtil::checkString($var, False);
        $this->iv = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeyControl::class, \VideoWidevineServer\SDK\License_KeyContainer_KeyControl::class);
