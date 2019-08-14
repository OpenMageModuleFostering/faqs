<?php

class Mage_Faqs_Model_Faqs extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('faqs/faqs');
    }
}