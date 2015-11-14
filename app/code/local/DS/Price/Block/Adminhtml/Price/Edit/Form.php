<?php

class DS_Price_Block_Adminhtml_Price_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    protected function _prepareForm()
    {
        $helper = Mage::helper('dsprice');
        $model = Mage::registry('current_price');

        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl('*/*/save', array(
                'id' => $this->getRequest()->getParam('id')
            )),
            'method' => 'post',
            'enctype' => 'multipart/form-data'
        ));

        $this->setForm($form);

        $fieldset = $form->addFieldset('price_form', array('legend' => $helper->__('Price request Information')));

        $fieldset->addField('name', 'text', array(
            'label' => $helper->__('Name'),
            'required' => true,
            'name' => 'name',
        ));
        $fieldset->addField('email', 'text', array(
            'label' => $helper->__('Email'),
            'required' => true,
            'name' => 'email',
        ));

        $fieldset->addField('sku', 'text', array(
            'label' => $helper->__('Product Sku'),
            'required' => true,
            'name' => 'sku',
        ));

        $fieldset->addField('comment', 'editor', array(
            'label' => $helper->__('Comment'),
            'required' => false,
            'name' => 'comment',
        ));

        $fieldset->addField('created', 'date', array(
            'format' => Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT),
            'image' => $this->getSkinUrl('images/grid-cal.gif'),
            'label' => $helper->__('Created At'),
            'name' => 'created'
        ));

        $fieldset->addField('status', 'select', array(
            'label' => $helper->__('Status'),
            'name' => 'status',
            'values' => array('-1'=>'Please Select..','New' => 'New','In Progress' => 'In Progress', 'Closed' => 'Closed'),
        ));


        $form->setUseContainer(true);

        if($data = Mage::getSingleton('adminhtml/session')->getFormData()){
            $form->setValues($data);
        } else {
            $form->setValues($model->getData());
        }

        return parent::_prepareForm();
    }

}