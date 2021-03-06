<?php
/**
 * Chronolabs Lorem Ipsum API
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
 * @package         screening
 * @since           1.0.2
 * @author          Simon Roberts <wishcraft@users.sourceforge.net>
 * @version         $Id: functions.php 1000 2013-06-07 01:20:22Z mynamesnot $
 * @subpackage		api
 * @description		Screening API Service REST
 * @link			https://screening.labs.coop Screening API Service Operates from this URL
 * @filesource
 */

	global $hashing;
	error_reporting(E_ERROR);
	ini_set('display_errors', true);
		
	define('MAXIMUM_QUERIES', 125);
	ini_set('memory_limit', '256M');
	include dirname(__FILE__).'/functions.php';
	
	$help=false;
	if ((!isset($_GET['output']) || empty($_GET['output'])) || (!isset($_GET['type']) || empty($_GET['type'])) || (!isset($_GET['items']) || empty($_GET['items'])) || (!isset($_GET['start']) || empty($_GET['start'])) || (!isset($_GET['amount']) || empty($_GET['amount']))) {
		$help=true;
	} else {
		$output = (string)trim($_GET['output']);
		$type = (string)trim($_GET['type']);
		$items = (integer)trim($_GET['items']);	
		$amount = (integer)trim($_GET['amount']);
		$start = (string)trim($_GET['start']);	
	}
	
	if ($help==true) {
		//http_response_code(400);
		include dirname(__FILE__).'/help.php';
		exit;
	}
	//http_response_code(200);
	$data = array();
	$counter = "AA0";
	for($i = 1; $i <= $items; $i ++)
	{
		$counter++;
		$data[$counter] = getLipsum($amount, $type, $start, $output);
	}
	switch ($output) {
		default:
			echo '<h1>Lipsums: ' . strtoupper($type) . '</h1>';
			echo '<pre style="font-family: \'Courier New\', Courier, Terminal; font-size: 0.77em;">';
			if (!is_array($data))
				echo $data;
			else
				echo "{ '". implode("' } { '", $data) . "' }";
			echo '</pre>';
			break;
		case 'raw':
			if (!is_array($data))
				echo $data;
			else
				echo "{ '". implode("' } { '", $data) . "' }";
			break;
		case 'json':
			header('Content-type: application/json');
			echo json_encode($data);
			break;
		case 'serial':
			header('Content-type: text/html');
			echo serialize($data);
			break;
		case 'xml':
			header('Content-type: application/xml');
			$dom = new XmlDomConstruct('1.0', 'utf-8');
			$dom->fromMixed(array('root'=>$data));
 			echo $dom->saveXML();
			break;
	}
?>
		
