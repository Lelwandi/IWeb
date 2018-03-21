<?php
/**
 * @version		$Id: router.php $
 * @package		Joomla.Site
 * @subpackage	com_testimonies
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		kiennh
 * This component was generated by http://xipat.com/ - 2015
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

function TestimoniesBuildRoute(&$query)
{
	$segments = array();

	if(isset($query['view'])){
		$segments[] = $query['view'];
		unset($query['view']);
	};

	if(isset($query['id'])){
		$segments[] = $query['id'];
		unset($query['id']);
	};

	return $segments;
}

function TestimoniesParseRoute($segments)
{
	$vars = array();
	// Count segments
	$count = count($segments);
	//Handle View and Identifier
	switch($segments[0])
	{
		case 'testimonies':
			$id = explode(':', $segments[$count-1]);
			$vars['id'] = (int) $id[0];
			$vars['view'] = 'testimonies';
			break;

		case 'testimonies_add':
			$id = explode(':', $segments[$count-1]);
			$vars['id'] = (int) $id[0];
			$vars['view'] = 'testimonies_add';
			break;
	}
	return $vars;
}
?>