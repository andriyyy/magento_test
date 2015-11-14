<?php

class DS_Price_Block_Adminhtml_Price extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    protected function _construct()
    {
        parent::_construct();

        $helper = Mage::helper('dsprice');
        $this->_blockGroup = 'dsprice';
        $this->_controller = 'adminhtml_price';

        $this->_headerText = $helper->__('Price Requests');
        $this->_addButtonLabel = $helper->__('Add Price');
    }

}