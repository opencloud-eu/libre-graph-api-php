# # LockInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lock_type** | **string** | The type of lock currently held on the file. OpenCloud currently only issues exclusive locks, same as MS Graph, even if it defines more. Read-only. | [optional] [readonly]
**created_date_time** | **\DateTime** | The date and time when the lock was created, in UTC. Read-only. | [optional] [readonly]
**expiration_date_time** | **\DateTime** | The date and time when the lock expires, in UTC. Read-only. | [optional] [readonly]
**owners** | [**\OpenAPI\Client\Model\Identity[]**](Identity.md) | The collection of users that currently hold the lock on the file. Read-only. | [optional] [readonly]
**at_libre_graph_app_name** | **string** | Name of the application holding the lock, for example an office application. Not part of MS Graph. Read-only. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
