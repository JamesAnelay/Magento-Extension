<?php
/**
 * @category   Shiptheory
 * @package    Shiptheory_Shippinglabels
 */
class Shiptheory_Shippinglabels_Model_Mysql4_History_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
	
	protected function _construct()
	{
		$this->_init('shippinglabels/history');
	}
}