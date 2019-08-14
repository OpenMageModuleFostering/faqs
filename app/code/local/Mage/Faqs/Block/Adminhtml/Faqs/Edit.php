<?php

class Mage_Faqs_Block_Adminhtml_Faqs_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'faqs';
        $this->_controller = 'adminhtml_faqs';
        
        $this->_updateButton('save', 'label', Mage::helper('faqs')->__('Save Faq'));
        $this->_updateButton('delete', 'label', Mage::helper('faqs')->__('Delete Faq'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
          <!--function applyFCKEditor() {
						var editable_areas = 'content';
									editable_areas.split(',').each(function(dom_id) {
							if($(dom_id)) {
													var loopCheck = 0;
								while($(dom_id).hasClassName('required-entry') && loopCheck < 10) {
									$(dom_id).removeClassName('required-entry');
									loopCheck += 1;
								}
								
								var fck = new FCKeditor(dom_id);
													
								fck.Config['CustomConfigurationsPath'] = '".Mage::getBaseUrl('js')."fontis/fckeditor/fontis_custom_config.php';
								fck.Config['SkinPath'] = 'skins/office2003/';
								fck.BasePath = '".Mage::getBaseUrl('js')."fontis/fckeditor/';
								fck.Width = '640';
								fck.Height = '450';
								fck.ToolbarSet = 'Default';                    
								fck.ReplaceTextarea();
							}
						});
			}
					
			if ($('edit_form')) {
				varienGlobalEvents.attachEventHandler('showTab', applyFCKEditor);
			} else {
				applyFCKEditor();
			}-->

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('faqs_data') && Mage::registry('faqs_data')->getId() ) {
            return Mage::helper('faqs')->__("Edit Faq '%s'", $this->htmlEscape(Mage::registry('faqs_data')->getTitle()));
        } else {
            return Mage::helper('faqs')->__('Add Faq');
        }
    }
}