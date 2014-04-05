<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

class WotoAdminViewWebUsers extends JView
{
	public $tableHtml = null;
	public $html = null;
	public $addNewLink = null;
	public $form = null;
	
	// Overwriting JView display method
	function display($tpl = null)
	{
				
		$this->htmlMg = "";
		
		if ($this->getLayout()  == 'default' || $this->getLayout() == null) {
			$this->tableHtml = $this->displayHTMLTable();
			
			$this->tableHtml = $this->displayHTMLTable();
			
		} else if ($this->getLayout()  == 'edit') {		
			
			$tempData = $this->getModel('WebUsers')->getUser($_REQUEST['id']);
			
 			$form = &$this->getModel("WebUsers")->getForm($tempData[0]); 			
			$this->form = $form;
			
		}
		
		
		$this->addNewLink = JURI::current() . "?layout=add";
		
		// Display the view
		parent::display($tpl);
		
	}
	
	
	private function displayHTMLTable()
	{	
		
 		$model = $this->getModel()->getAllUsers();
 		
 		$html = "<table>";
		
 		$html .= "<thead>"; 
 		$html .= "<th style='padding:5px;'></th>";		
 		foreach(  $model as $row ) {
 			foreach ($row as $key => $value) {
 				$html .= "<th style='padding:5px;'>" . $key . "</th>";	
 			} 			
 			break;
 		} 		
 		$html  .= "</thead>";
 		
		$html .= "<tbody>";		
 		foreach(  $model as $row ) { 	
 			
 			$html .= "<tr><td style='width:50px;' ><a href='" . WotoAdminController::getLocationUrl() .  "?" . 'layout=edit&id=' . $row->id   . "' >[edit]</a></td>";
 					
  			foreach ( $row as $itemintheRow) {
  				$html .= "<td>" . $itemintheRow . "</td>";
   			}
	
 			$html .= "</tr>";
		}		 
 		$html .= "</tbody></table>";		
		
		return $html;
		 
	}

}