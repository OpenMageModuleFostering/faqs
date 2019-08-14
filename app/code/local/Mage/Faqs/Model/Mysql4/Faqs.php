<?php

class Mage_Faqs_Model_Mysql4_Faqs extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the faqs_id refers to the key field in your database table.
        $this->_init('faqs/faqs', 'faqs_id');
    }
}