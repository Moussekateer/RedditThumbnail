<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This is a MediaWiki extension, and must be run from within MediaWiki.' );
}
 
$wgExtensionCredits['other'][] = array( 
	'name' => 'RedditThumbnail', 
	'status' => 'stable',
	'author' => 'Moussekateer',
	'version' => '0.1',
	'url' => 'https://github.com/ThePortalWiki/RedditThumbnail',
	'description' => 'Adds a meta tag that specifies which image reddit should use for its link thumbnail',
);
 
$wgHooks['OutputPageBeforeHTML'][] = 'wfAddRedditMetaTag';
 
function wfAddRedditMetaTag( &$out, &$text ) {
	global $wgRedditThumbnailImage;
	$out->addMeta( 'og:image', $wgRedditThumbnailImage );
	return true;
}
