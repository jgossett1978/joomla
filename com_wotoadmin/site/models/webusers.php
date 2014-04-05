<?php


// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla modelitem library
jimport('joomla.application.component.modelform');

class WotoAdminModelWebUsers extends JModelForm
{	
		
	public function __construct($config = array())
	{
		parent::__construct($config);
	
		$this->database = JDatabaseMySQL::getInstance($ar);
		
	}
	
	
	public function getUser($id) 
	{
		$cols =  array( 'id',
				'username',
				'first_name',
				'last_name',
				'primary_phone',
				'cell_phone',
				'user_type',
				'allow_access' );
		
		$query = new JDatabaseQueryMySQL();
		
		$query->select($cols)->from('webusers')->where("id = " . $id);
		
		$this->database->setQuery($query);		
		
		return $this->database->loadObjectList();
		
	}
	
	
	public function getAllUsers()
	{		

		$cols =  array( 'id',
						'username', 
						'first_name', 
						'last_name', 
						'primary_phone',
						'cell_phone',
						'user_type',
						'allow_access' );
		
		$query = new JDatabaseQueryMySQL();
		
		$query->select($cols)->from('webusers');
		
		$this->database->setQuery($query);
		
		return $this->database->loadObjectList();
		
	}
	
	
	protected function loadFormData()
	{
		return $this->data;
	}
	
	
	/**
	 * Method to get the form.
	 *
	 * @access      public
	 * @return      mixed   JForm object on success, false on failure.
	 */
	public function getForm($data = array(), $loadData = true)
	{
			
		$this->data = $data;
		
		$optionArray = array('control' => 'jform', 'load_data' => $loadData );
		
		$form = $this->loadForm(
				'com_wotoadmin.webusers',
				'Edit',
				$optionArray);
		
		return $form;
	}
	
	
}