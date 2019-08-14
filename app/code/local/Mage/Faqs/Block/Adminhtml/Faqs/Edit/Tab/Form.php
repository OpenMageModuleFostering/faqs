<?php

class Mage_Faqs_Block_Adminhtml_Faqs_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('faqs_form', array('legend'=>Mage::helper('faqs')->__('Faq information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('faqs')->__('Question ?'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('faqs')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('faqs')->__('Enabled'),
              ),

              array(
                  'value'     => 0,
                  'label'     => Mage::helper('faqs')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('faqs')->__('Answar'),
          'title'     => Mage::helper('faqs')->__('Answar'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getFaqsData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getFaqsData());
          Mage::getSingleton('adminhtml/session')->setFaqsData(null);
      } elseif ( Mage::registry('faqs_data') ) {
          $form->setValues(Mage::registry('faqs_data')->getData());
      }
      return parent::_prepareForm();
  }
}