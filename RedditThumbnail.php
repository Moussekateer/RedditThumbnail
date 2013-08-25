<?php
if ( !defined( 'MEDIAWIKI' ) ) {
  die( 'This is a MediaWiki extension, and must be run from within MediaWiki.' );
}
 
$wgExtensionCredits['other'][] = array( 
    'name' => 'RedditThumbnail', 
    'status' => 'stable',
    'author' => 'Moussekateer',
    'version' => '0.1',
    'url' => 'http://wiki.teamfortress.com',
    'description' => 'Adds a meta tag that specifies which image reddit should use for its tags',
);
 
$wgHooks['OutputPageBeforeHTML'][] = 'wfAddRedditMetaTag';
 
function wfAddRedditMetaTag( &$out, &$text ) {
  $out->addMeta( 'og:image', 'http://wiki.teamfortress.com/w/images/c/c9/Logo.png' );
  return true;
}