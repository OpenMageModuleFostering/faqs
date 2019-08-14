<?php

class Mage_Faqs_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_PATH_LIST_PAGE_TITLE	 =	'faqs/list/page_title';
	
	public function getListPageTitle()
	{
		return Mage::getStoreConfig(self::XML_PATH_LIST_PAGE_TITLE);
	}
}

?>