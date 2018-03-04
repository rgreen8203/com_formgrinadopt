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

/**
 * HTML View class for the FormGrinAdopt Component
 *
 * @since  0.0.1
 */
class FormGrinAdoptViewFormGrinAdopt extends JViewLegacy
{
	/**
	 * Display the Grin Adoption Form view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = 'Grin Adoption Form';

		// Display the view
		parent::display($tpl);
	}
}