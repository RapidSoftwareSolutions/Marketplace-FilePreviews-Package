[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/FilePreviews/functions?utm_source=RapidAPIGitHub_FilePreviewsFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# FilePreviews Package
FilePreviews is an API that produces beautiful previews,optical character recognition and metadata from any file.Extract, analyze, and present data from your files.
* Domain: [filepreviews.io](http://filepreviews.io)
* Credentials: apiKey, apiSecret

## How to get credentials: 
0. Register on the [filepreviews.io](https://api.filepreviews.io/auth/signup/)
1. [Create](https:\/\/api.filepreviews.io\/apps\/create\/) an application for a new API credentials
2. After creation app you will see API credentials in app settings
 
## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```  
 
## FilePreviews.createPreview
Create file preview.Returned response can be used for polling until results are available and return an HTTP status code of 200. If application has a Callback URL specified, results will also be posted via webhooks.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your API key.
| apiSecret  | credentials| Your API secret.
| fileUrl    | String     | File url to preview.
| sizes      | List       | An array of sizes of the extracted thumbnails, in pixels. Expressed as widthxheight. Specifying only the width(e.g `300`) will generate a thumbnail with a fixed width and varying height. You can also only shrink larger images to fit into the give size and never enlarge(e.g `300x400>`).
| format     | Select     | The format of the extracted thumbnails.
| metadata   | List       | An list of string values of additional metadata to extract.
| pages      | String     | The document pages that you want to extract thumbnails for. You can specify a range or individual pages separated by commas. Example: `1-3` or `1,3,5`. You can also specify the special value of `all` to extract all pages. Default value is `1`.
| callbackUrl| String     | A URL that we will POST anytime results for requests previews are ready.

## FilePreviews.getPreview
Get file preview.Returned response can be used for polling until results are available and return an HTTP status code of 200. If application has a Callback URL specified, results will also be posted via webhooks.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key.
| apiSecret| credentials| Your API secret.
| previewId| String     | Preview id from createPreview endpoint.

