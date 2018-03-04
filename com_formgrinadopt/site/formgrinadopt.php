<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_formgrinadopt
 *
 * @copyright
 * @license 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

//Load styles and javascripts
$document = JFactory::getDocument();
$document->addStylesheet(JURI::base().'components/com_formgrinadopt/assets/css/style.css');
$document->addScript(JURI::base().'components/com_formgrinadopt/assets/js/formgrinadopt.js');

// Get an instance of the controller prefixed by FormGrinAdopt
$controller = JControllerLegacy::getInstance('FormGrinAdopt');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();