<?php

class DS_Price_Block_Adminhtml_Price_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    protected function _construct()
    {
        $this->_blockGroup = 'dsprice';
        $this->_controller = 'adminhtml_price';
    }

    public function getHeaderText()
    {
        $helper = Mage::helper('dsprice');
        $model = Mage::registry('current_price');

        if ($model->getId()) {
            return $helper->__("Edit Price item '%s'", $this->escapeHtml($model->getName()));
        } else {
            return $helper->__("Add Price item");
        }
    }

}