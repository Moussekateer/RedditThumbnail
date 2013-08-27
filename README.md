# RedditThumbnail

A MediaWiki extension for wikis to specifiy what thumbnail reddit links use.

##Installation
* Create a folder named RedditThumbnail in your /extensions folder
* Copy all the files in this extension into the extensions/RedditThumbnail/ folder
* Edit LocalSettings.php and add the lines:

```php
require_once("$IP/extensions/RedditThumbnail/RedditThumbnail.php");
$wgRedditThumbnailImage = 'your/image/url';
```