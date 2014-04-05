<?php


// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla modelitem library
jimport('joomla.application.component.modelitem');

class WotoAdminModelWotoAdmin extends JModelItem
{	

	
	public function __construct($config = array())
	{
		parent::__construct($config);

		$this->database = JDatabaseMySQL::getInstance($ar);		
		
	}
	
	
	
}