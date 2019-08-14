<?php

class Mage_Faqs_Model_Mysql4_Faqs_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('faqs/faqs');
    }
}