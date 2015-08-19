<?php
/**
 * Chronolabs Lorem Ipsum Generator Service API
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://labs.coop
 * @license         General Public License version 3 (http://labs.coop/briefs/legal/general-public-licence/13,3.html)
 * @package         lipsum
 * @since           1.0.2
 * @author          Simon Roberts <wishcraft@users.sourceforge.net>
 * @version         $Id: functions.php 1000 2013-06-07 01:20:22Z mynamesnot $
 * @subpackage		api
 * @description		Checksums/Hashes API Service REST
 * @link			https://screening.labs.coop Screening API Service Operates from this URL
 * @category		control
 * @category		gui
 * @filesource
 */


	$pu = parse_url($_SERVER['REQUEST_URI']);
	$source = (isset($_SERVER['HTTPS'])?'https://':'http://').strtolower($_SERVER['HTTP_HOST']).$pu['path'];
	if (strlen($theip = whitelistGetIP(true))==0)
		$theip = "127.0.0.1";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php 	$servicename = "Lorem Ipsum Generator"; 
		$servicecode = "LIG"; ?>
	<meta property="og:url" content="<?php echo (isset($_SERVER["HTTPS"])?"https://":"http://").$_SERVER["HTTP_HOST"]; ?>" />
	<meta property="og:site_name" content="<?php echo $servicename; ?> Open Services API's (With Source-code)"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="rating" content="general" />
	<meta http-equiv="author" content="wishcraft@users.sourceforge.net" />
	<meta http-equiv="copyright" content="Chronolabs Cooperative &copy; <?php echo date("Y")-1; ?>-<?php echo date("Y")+1; ?>" />
	<meta http-equiv="generator" content="wishcraft@users.sourceforge.net" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<link rel="icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<link rel="apple-touch-icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<meta property="og:image" content="//labs.partnerconsole.net/execute2/external/reseller-logo"/>
	<link rel="stylesheet" href="/style.css" type="text/css" />
	<link rel="stylesheet" href="//css.ringwould.com.au/3/gradientee/stylesheet.css" type="text/css" />
	<link rel="stylesheet" href="//css.ringwould.com.au/3/shadowing/styleheet.css" type="text/css" />
	<title><?php echo $servicename; ?> (<?php echo $servicecode; ?>) Open API || Chronolabs Cooperative (Sydney, Australia)</title>
	<meta property="og:title" content="<?php echo $servicecode; ?> API"/>
	<meta property="og:type" content="<?php echo strtolower($servicecode); ?>-api"/>
	<!-- AddThis Smart Layers BEGIN -->
	<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50f9a1c208996c1d"></script>
	<script type="text/javascript">
	  addthis.layers({
		'theme' : 'transparent',
		'share' : {
		  'position' : 'right',
		  'numPreferredServices' : 6
		}, 
		'follow' : {
		  'services' : [
			{'service': 'twitter', 'id': 'ChronolabsCoop'},
			{'service': 'twitter', 'id': 'Cipherhouse'},
			{'service': 'twitter', 'id': 'OpenRend'},
			{'service': 'facebook', 'id': 'Chronolabs'},
			{'service': 'linkedin', 'id': 'founderandprinciple'},
			{'service': 'google_follow', 'id': '105256588269767640343'},
			{'service': 'google_follow', 'id': '116789643858806436996'}
		  ]
		},  
		'whatsnext' : {},  
		'recommended' : {
		  'title': 'Recommended for you:'
		} 
	  });
	</script>
	<!-- AddThis Smart Layers END -->
</head>
<?php 
	$types = array('paragraphs'=>'Paragraphs', 'words'=>'Words', 'bytes'=>'Bytes', 'lists'=>'Lists'); 
	$modes = array('raw'=>'Raw', 'html'=>'HTML', 'json'=>'Json', 'serial'=>'Serialisation', 'xml'=>'XML');
	$with = array('lorem' => 'start each item opening with Lorem Ipsum',  'any' => 'open each item starting with anything; not with Lorem Ipsum');
	$wkeys = array_keys($with);
?>
<body>
<div class="main">
    <h1><?php echo $servicename; ?> (<?php echo $servicecode; ?>) Open API || Chronolabs Cooperative (Sydney, Australia)</h1>
    <p>This is an API Service for creating Lorem Ipsum via a URL with GET methods as per normal REST API Services. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    <h2>Code API Documentation</h2>
    <p>You can find the phpDocumentor code API documentation at the following path :: <a target="_blank" href="<?php echo $source; ?>docs/" target="_blank"><?php echo $source; ?>docs/</a>. These should outline the source code core functions and classes for the API to function!</p>
    <h2>Internet API Usage Statistics</h2>
    <p>You can find the usage statistics for this API which is update within every ten minutes at the following URI :: <a target="_blank" href="<?php echo $source; ?>stats/awstats.pl" target="_blank"><?php echo $source; ?>stats/awstats.pl</a>. These should outline the overall load and frequencies of this application programmable interface!</p>
    <h2>API Responses Available</h2>
    <p>This is a list of the types of lipsums available you would use in the URL path the part in this information just following this paragraph in <em>italics</em>!</p>
    <blockquote>
<?php foreach ($types as $key => $values) { ?>
        <em><strong><?php echo $key; ?></strong></em> - Return a set of <?php echo $values; ?> to the amount and number of items<br />
<?php } ?>
    </blockquote>
<?php foreach ($modes as $mode => $title) { ?>
    <h2><?php echo $title; ?> Document Output</h2>
    <p>This is done with the <em><?php echo $mode; ?>.api</em> extension at the end of the url.</p>
    <blockquote>
<?php foreach ($types as $key => $values) {
	$openkey = $wkeys[mt_rand(0, count($wkeys)-1)];
	switch ($key)
	{
		case 'paragraphs':
			$amount = mt_rand(1,7);
			break;
		default:
			$amount = mt_rand(19, 87);
			break;
	}
	$items = mt_rand(5, 23); ?>
    	<font color="#009900">This is for returning a set of <?php echo $items; ?> seperate items of  <?php echo $values; ?> containing <em>'<?php echo $amount; ?>'</em> in each items which <?php echo $with[$openkey]; ?>.</font><br/>
        <em><strong><a target="_blank" href="<?php echo $source; ?>v1/<?php echo $key; ?>/<?php echo $openkey; ?>/<?php echo $amount; ?>/<?php echo $items; ?>/<?php echo $mode; ?>.api"><?php echo $source; ?>v1/<?php echo $key; ?>/<?php echo $openkey; ?>/<?php echo $amount; ?>/<?php echo $items; ?>/<?php echo $mode; ?>.api</a></strong></em><br /><br />
<?php } ?>
    </blockquote>
<?php } ?>
    <?php if (file_exists($fionf = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'apis-labs.coop.html')) {
    	readfile($fionf);
    }?>	
    <h2>Limits</h2>
    <p>There is a limit of <?php echo MAXIMUM_QUERIES; ?> queries per hour. This will reset every hour and the response of a 404 document not found will be provided if you have exceeded your query limits. You can add yourself to the whitelist by using the following form API <a href="https://whitelist.labs.coop/">Whitelisting form</a>. This is only so this service isn't abused!!</p>
    <h2>The Author</h2>
    <p>This was developed by Simon Roberts in 2014 and is part of the Chronolabs System and Xortify and offering on-going support to existing libraries. if you need to contact simon you can do so at the following address <a target="_blank" href="mailto:wishcraft@users.sourceforge.net">wishcraft@users.sourceforge.net</a></p></body>
</div>
</html>
<?php 
