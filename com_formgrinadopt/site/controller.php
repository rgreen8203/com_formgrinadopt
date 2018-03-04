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
 * Grin Adoption Form Component Controller
 *
 * @since  0.0.1
 */
class FormGrinAdoptController extends JControllerLegacy
{
  
   /**
	 * Send the message and display a notice
	 *
	 * @return  void
	 *
	 * @since  1.5
	 */
	public function send()
	{

		$this->input->set('view', 'sent');
		$this->display();
	}
  
  
}  // end of class

