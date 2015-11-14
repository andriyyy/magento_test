<?php

class DS_Price_Model_Resource_Price extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('dsprice/table_price', 'price_id');
    }

}