<?php
class Mage_Faqs_Block_Faqs extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getFaqs()     
     { 
        if (!$this->hasData('faqs')) {
            $this->setData('faqs', Mage::registry('faqs'));
        }
        return $this->getData('faqs');
        
    }
}