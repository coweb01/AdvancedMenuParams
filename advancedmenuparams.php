<?php

/**
 * @copyright	Copyright (C) 2015 c.oerter
 * http://www.das-webconcept.de
 * @license		GNU/GPL
 * */
defined('_JEXEC') or die('Restricted access');
jimport('joomla.event.plugin');

class plgContentAdvancedmenuparams extends JPlugin {

	function plgSystemAdvancedmenuparams(&$subject, $params) {
		parent::__construct($subject, $params);
	}

	/**
	 * @param       JForm   The form to be altered.
	 * @param       array   The associated data for the form.
	 * @return      boolean
	 * @since       1.6
	 */
	function onContentPrepareForm($form, $data) {
		if (
				$form->getName() != 'com_menus.item' 
			)
			return;

           JForm::addFormPath(__DIR__ . '/forms');
		
		
		// get the language
		$lang = JFactory::getLanguage();
		$langtag = $lang->getTag(); 
		$this->loadLanguage();

		// menu item options
		if ($form->getName() == 'com_menus.item' ) {
			$form->loadFile('advancedmenuparams', false);
		}
	}
	
	//function check_version() {
	//	return '4';
	//}
}













?>