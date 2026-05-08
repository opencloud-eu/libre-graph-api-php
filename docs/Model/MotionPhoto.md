# # MotionPhoto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **int** | The file format version of the Motion Photo. Currently always 1. Read-only. | [optional] [readonly]
**presentation_timestamp_us** | **int** | Presentation timestamp in microseconds of the video frame that corresponds to the still image. A value of -1 indicates unspecified. If absent, readers should use a timestamp near the middle of the video track. Read-only. | [optional] [readonly]
**video_size** | **int** | Size in bytes of the embedded video portion of the file. The video is appended at the end of the file, so clients can fetch it with a Range request: &#x60;Range: bytes&#x3D;&lt;fileSize - videoSize&gt;-&#x60;. Read-only. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
