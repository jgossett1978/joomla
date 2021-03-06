<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controller');


class WotoAdminController extends JController
{
	
	public function display($cachable = false, $urlparams = false) 
	{
		parent::display( $cachable, $urlparams);
		
		return $this;
		
	}
	
	public static function getLocationUrl() {
		return str_ireplace(JURI::current(), JURI::base(), "");
	}
	
}
