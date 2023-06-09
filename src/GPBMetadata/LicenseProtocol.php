<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: license_protocol.proto

namespace GPBMetadata;

class LicenseProtocol
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
šR
license_protocol.protoVideoWidevineServer.SDK"ĩ
LicenseIdentification

request_id (H 

session_id (H
purchase_id (H7
type (2$.VideoWidevineServer.SDK.LicenseTypeH
version (H#
provider_session_token (HB
_request_idB
_session_idB
_purchase_idB
_typeB

_versionB
_provider_session_token"
License?
id (2..VideoWidevineServer.SDK.LicenseIdentificationH <
policy (2\'.VideoWidevineServer.SDK.License.PolicyH:
key (2-.VideoWidevineServer.SDK.License.KeyContainer
license_start_time (H(
remote_attestation_verified (H"
provider_client_token (HÔ
Policy
can_play (H 
can_persist (H
	can_renew (H$
rental_duration_seconds (H&
playback_duration_seconds (H%
license_duration_seconds (H.
!renewal_recovery_duration_seconds (H
renewal_server_url (	H"
renewal_delay_seconds	 (H+
renewal_retry_interval_seconds
 (H	
renew_with_usage (H
!
renew_with_client_id (HB
	_can_playB
_can_persistB

_can_renewB
_rental_duration_secondsB
_playback_duration_secondsB
_license_duration_secondsB$
"_renewal_recovery_duration_secondsB
_renewal_server_urlB
_renewal_delay_secondsB!
_renewal_retry_interval_secondsB
_renew_with_usageB
_renew_with_client_id
KeyContainer
id (H 
iv (H
key (HH
type (25.VideoWidevineServer.SDK.License.KeyContainer.KeyTypeHO
level (2;.VideoWidevineServer.SDK.License.KeyContainer.SecurityLevelH`
required_protection (2>.VideoWidevineServer.SDK.License.KeyContainer.OutputProtectionHa
requested_protection (2>.VideoWidevineServer.SDK.License.KeyContainer.OutputProtectionHR
key_control (28.VideoWidevineServer.SDK.License.KeyContainer.KeyControlHz
 operator_session_key_permissions	 (2K.VideoWidevineServer.SDK.License.KeyContainer.OperatorSessionKeyPermissionsHm
video_resolution_constraints
 (2G.VideoWidevineServer.SDK.License.KeyContainer.VideoResolutionConstraint&
anti_rollback_usage_table (H	Z

KeyControl
key_control_block (H 
iv (HB
_key_control_blockB
_iv
OutputProtectionV
hdcp (2C.VideoWidevineServer.SDK.License.KeyContainer.OutputProtection.HDCPH \\

cgms_flags (2C.VideoWidevineServer.SDK.License.KeyContainer.OutputProtection.CGMSH"j
HDCP
	HDCP_NONE 
HDCP_V1
HDCP_V2
	HDCP_V2_1
	HDCP_V2_2
HDCP_NO_DIGITAL_OUTPUT˙"C
CGMS
	COPY_FREE 
	CGMS_NONE*
	COPY_ONCE

COPY_NEVERB
_hdcpB
_cgms_flags
VideoResolutionConstraint"
min_resolution_pixels (H "
max_resolution_pixels (H`
required_protection (2>.VideoWidevineServer.SDK.License.KeyContainer.OutputProtectionHB
_min_resolution_pixelsB
_max_resolution_pixelsB
_required_protectionã
OperatorSessionKeyPermissions
allow_encrypt (H 
allow_decrypt (H

allow_sign (H#
allow_signature_verify (HB
_allow_encryptB
_allow_decryptB
_allow_signB
_allow_signature_verify"_
KeyType
KEYTYPE_UNKNOWN 
SIGNING
CONTENT
KEY_CONTROL
OPERATOR_SESSION"
SecurityLevel
SECURITYLEVEL_UNKNOWN 
SW_SECURE_CRYPTO
SW_SECURE_DECODE
HW_SECURE_CRYPTO
HW_SECURE_DECODE
HW_SECURE_ALLB
_idB
_ivB
_keyB
_typeB
_levelB
_required_protectionB
_requested_protectionB
_key_controlB#
!_operator_session_key_permissionsB
_anti_rollback_usage_tableB
_idB	
_policyB
_license_start_timeB
_remote_attestation_verifiedB
_provider_client_token"Ļ
LicenseRequestE
	client_id (2-.VideoWidevineServer.SDK.ClientIdentificationH V

content_id (2=.VideoWidevineServer.SDK.LicenseRequest.ContentIdentificationHF
type (23.VideoWidevineServer.SDK.LicenseRequest.RequestTypeH
request_time (H)
key_control_nonce_deprecated (HG
protocol_version (2(.VideoWidevineServer.SDK.ProtocolVersionH
key_control_nonce (HX
encrypted_client_id (26.VideoWidevineServer.SDK.EncryptedClientIdentificationHž
ContentIdentificationX
cenc_id (2B.VideoWidevineServer.SDK.LicenseRequest.ContentIdentification.CENCH X
webm_id (2B.VideoWidevineServer.SDK.LicenseRequest.ContentIdentification.WebMHc
license (2M.VideoWidevineServer.SDK.LicenseRequest.ContentIdentification.ExistingLicenseH
CENC
pssh (?
license_type (2$.VideoWidevineServer.SDK.LicenseTypeH 

request_id (HB
_license_typeB
_request_id 
WebM
header (H ?
license_type (2$.VideoWidevineServer.SDK.LicenseTypeH

request_id (HB	
_headerB
_license_typeB
_request_idŗ
ExistingLicenseG

license_id (2..VideoWidevineServer.SDK.LicenseIdentificationH "
seconds_since_started (H&
seconds_since_last_played (H&
session_usage_table_entry (HB
_license_idB
_seconds_since_startedB
_seconds_since_last_playedB
_session_usage_table_entryB

_cenc_idB

_webm_idB

_license"H
RequestType
REQUESTYPE_UNKNOWN 
NEW
RENEWAL
RELEASEB

_client_idB
_content_idB
_typeB
_request_timeB
_key_control_nonce_deprecatedB
_protocol_versionB
_key_control_nonceB
_encrypted_client_id"Ø
LicenseErrorD

error_code (2+.VideoWidevineServer.SDK.LicenseError.ErrorH "s
Error
ERROR_UNKNOWN 
INVALID_DEVICE_CERTIFICATE
REVOKED_DEVICE_CERTIFICATE
SERVICE_UNAVAILABLEB
_error_code"ˇ
RemoteAttestationP
certificate (26.VideoWidevineServer.SDK.EncryptedClientIdentificationH 
salt (H
	signature (HB
_certificateB
_saltB

_signature"Æ
SignedMessageE
type (22.VideoWidevineServer.SDK.SignedMessage.MessageTypeH 
msg (H
	signature (H
session_key (HK
remote_attestation (2*.VideoWidevineServer.SDK.RemoteAttestationH"
MessageType
MESSAGETYPE_UNKNOWN 
LICENSE_REQUEST
LICENSE
ERROR_RESPONSE
SERVICE_CERTIFICATE_REQUEST
SERVICE_CERTIFICATEB
_typeB
_msgB

_signatureB
_session_keyB
_remote_attestation"ô
ProvisioningOptions[
certificate_type (2<.VideoWidevineServer.SDK.ProvisioningOptions.CertificateTypeH "
certificate_authority (	H"-
CertificateType
WIDEVINE_DRM 
X509B
_certificate_typeB
_certificate_authority"ū
ProvisioningRequestE
	client_id (2-.VideoWidevineServer.SDK.ClientIdentificationH 
nonce (HB
options (2,.VideoWidevineServer.SDK.ProvisioningOptionsH
	stable_id (HB

_client_idB
_nonceB

_optionsB

_stable_id"Ō
ProvisioningResponse
device_rsa_key (H 
device_rsa_key_iv (H
device_certificate (H
nonce (HB
_device_rsa_keyB
_device_rsa_key_ivB
_device_certificateB
_nonce"c
SignedProvisioningMessage
message (H 
	signature (HB

_messageB

_signature"	
ClientIdentificationJ
type (27.VideoWidevineServer.SDK.ClientIdentification.TokenTypeH 
token (HL
client_info (27.VideoWidevineServer.SDK.ClientIdentification.NameValue"
provider_client_token (H
license_counter (Hb
client_capabilities (2@.VideoWidevineServer.SDK.ClientIdentification.ClientCapabilitiesHE
	NameValue
name (	H 
value (	HB
_nameB
_valueĩ
ClientCapabilities
client_token (H 
session_token (H)
video_resolution_constraints (Hk
max_hdcp_version (2L.VideoWidevineServer.SDK.ClientIdentification.ClientCapabilities.HdcpVersionH#
oem_crypto_api_version (H&
anti_rollback_usage_table (H"q
HdcpVersion
	HDCP_NONE 
HDCP_V1
HDCP_V2
	HDCP_V2_1
	HDCP_V2_2
HDCP_NO_DIGITAL_OUTPUT˙B
_client_tokenB
_session_tokenB
_video_resolution_constraintsB
_max_hdcp_versionB
_oem_crypto_api_versionB
_anti_rollback_usage_table"S
	TokenType

KEYBOX 
DEVICE_CERTIFICATE"
REMOTE_ATTESTATION_CERTIFICATEB
_typeB
_tokenB
_provider_client_tokenB
_license_counterB
_client_capabilities"Õ
EncryptedClientIdentification

service_id (	H .
!service_certificate_serial_number (H 
encrypted_client_id (H#
encrypted_client_id_iv (H"
encrypted_privacy_key (HB
_service_idB$
"_service_certificate_serial_numberB
_encrypted_client_idB
_encrypted_client_id_ivB
_encrypted_privacy_key"Ū
DeviceCertificateM
type (2:.VideoWidevineServer.SDK.DeviceCertificate.CertificateTypeH 
serial_number (H"
creation_time_seconds (H

public_key (H
	system_id (H\'
test_device_deprecated (BH

service_id (	H"K
CertificateType
ROOT 
INTERMEDIATE
USER_DEVICE
SERVICEB
_typeB
_serial_numberB
_creation_time_secondsB
_public_keyB

_system_idB
_test_device_deprecatedB
_service_id"É
SignedDeviceCertificate
device_certificate (H 
	signature (HE
signer (20.VideoWidevineServer.SDK.SignedDeviceCertificateHB
_device_certificateB

_signatureB	
_signer"Ū
ProvisionedDeviceInfo
	system_id (H 
soc (	H
manufacturer (	H
model (	H
device_type (	H

model_year (H[
security_level (2>.VideoWidevineServer.SDK.ProvisionedDeviceInfo.WvSecurityLevelH
test_device (H"O
WvSecurityLevel
LEVEL_UNSPECIFIED 
LEVEL_1
LEVEL_2
LEVEL_3B

_system_idB
_socB
_manufacturerB
_modelB
_device_typeB
_model_yearB
_security_levelB
_test_device"˛
DeviceCertificateStatus
serial_number (H W
status (2B.VideoWidevineServer.SDK.DeviceCertificateStatus.CertificateStatusHH
device_info (2..VideoWidevineServer.SDK.ProvisionedDeviceInfoH"+
CertificateStatus	
VALID 
REVOKEDB
_serial_numberB	
_statusB
_device_info"Š
DeviceCertificateStatusList"
creation_time_seconds (H L
certificate_status (20.VideoWidevineServer.SDK.DeviceCertificateStatusB
_creation_time_seconds"
SignedCertificateStatusList$
certificate_status_list (H 
	signature (HB
_certificate_status_listB

_signature*B
LicenseType
LICENSETYPE_UNKNOWN 
	STREAMING
OFFLINE*P
ProtocolVersion
PROTOCOLVERSION_UNKNOWN 
VERSION_2_0
VERSION_2_1BHbproto3'
        , true);

        static::$is_initialized = true;
    }
}

