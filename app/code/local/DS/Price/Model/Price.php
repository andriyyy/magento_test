<?php

class DS_Price_Model_Price extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('dsprice/price');
    }

}