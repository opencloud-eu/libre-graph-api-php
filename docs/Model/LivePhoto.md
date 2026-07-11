# # LivePhoto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_id** | **string** | Identifier (UUID) shared by the still image and the paired video of one Live Photo. Read-only. | [readonly]
**still_image_time_us** | **int** | Time in microseconds within the paired video at which the still image was captured. The value comes from the video file only: it is the presentation time of the com.apple.quicktime.still-image-time timed metadata sample in the QuickTime movie, so it is only present on the video half. The still image carries no reliable equivalent (the Apple maker note tag 0x0017, historically documented as a derivable video index, does not encode a usable time on current iOS versions). If absent, readers should use a timestamp near the middle of the video track. Read-only. | [optional] [readonly]
**auto** | **bool** | True if the device decided automatically whether to capture the Live Photo video (com.apple.quicktime.live-photo.auto). Only present on the video half. Read-only. | [optional] [readonly]
**vitality_score** | **float** | Score between 0 and 1 rating how interesting the motion clip is, used by readers to decide whether to autoplay it (com.apple.quicktime.live-photo.vitality-score). Only present on the video half. Read-only. | [optional] [readonly]
**vitality_scoring_version** | **int** | Version of the algorithm that produced vitalityScore (com.apple.quicktime.live-photo.vitality-scoring-version). Only present on the video half. Read-only. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
