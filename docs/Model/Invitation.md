# # Invitation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invited_user_display_name** | **string** | The display name of the user being invited. | [optional]
**invited_user_email_address** | **string** | The email address of the user being invited. Required. | [optional]
**invited_user_message_info** | [**\OpenAPI\Client\Model\InvitedUserMessageInfo**](InvitedUserMessageInfo.md) |  | [optional]
**send_invitation_message** | **bool** | Indicates whether an invitation message should be sent to the user. | [optional]
**invite_redirect_url** | **string** | The URL to which the user is redirected after accepting the invitation. Required. | [optional]
**invite_redeem_url** | **string** | The URL that the user can use to redeem the invitation. Read-only. | [optional] [readonly]
**status** | **string** | The status of the invitation. Read-only. | [optional] [readonly]
**invited_user** | [**\OpenAPI\Client\Model\User**](User.md) |  | [optional]
**invited_user_type** | **string** | The type of user being invited. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
