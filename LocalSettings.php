<?php
# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgSitename = "jinkley wiki";
$wgMetaNamespace = "Jinkley_wiki";

$wgScriptPath = "";
$wgServer = "https://jinkley.wiki";
$wgResourceBasePath = $wgScriptPath;

$wgLogos = [
	'1x' => "$wgResourceBasePath/resources/assets/change-your-logo.svg",
	'icon' => "$wgResourceBasePath/resources/assets/change-your-logo.svg",
];

$wgEnableEmail = false;
$wgEnableUserEmail = true;

$wgEmergencyContact = "";
$wgPasswordSender = "";

$wgEnotifUserTalk = false;
$wgEnotifWatchlist = false;
$wgEmailAuthentication = true;

## DATABASE SETTINGS (MySQL)
$wgDBtype = "mysql";
$wgDBserver = "sql5.freesqldatabase.com";
$wgDBname = "sql5815883";
$wgDBuser = "sql5815883";
$wgDBpassword = "Fk4NpgdC8g";
$wgDBprefix = "";
$wgDBport = 3306;

# Shared database table
$wgSharedTables[] = "actor";

$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
$wgUseInstantCommons = false;

$wgPingback = true;

$wgLanguageCode = "en";
$wgLocaltimezone = "UTC";

$wgSecretKey = "59bfd95f9bca30365217e58a2e64c579de39e66377ee3c85d0d1896adb0930b4";
$wgAuthenticationTokenVersion = "1";
$wgUpgradeKey = "3b6808c3ea4b3b42";

$wgRightsPage = "";
$wgRightsUrl = "https://creativecommons.org/publicdomain/zero/1.0/";
$wgRightsText = "Creative Commons Zero (Public Domain)";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-0.png";

$wgDiff3 = "/usr/bin/diff3";

$wgDefaultSkin = "vector";

wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );

wfLoadExtension( 'Cite' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TemplateStyles' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'WikiEditor' );



# End of automatically generated settings.
# Add more configuration options below.

