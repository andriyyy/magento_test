<?php

class DS_Price_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        if ($data = $this->getRequest()->getPost()) {
            $data["status"] = "New";
            $data["created"] = now();
            //init model and set data
            $model = Mage::getModel('dsprice/price');
            $model->addData($data);
            try{
                //try to save it
                $model->save();
                Mage::getSingleton('adminhtml/session')->addSuccess('Saved');
                //redirect to grid.
                $this->_redirect('*/*/');
                echo '<h3 style="text-align: center; color:red;">Success!!!</h3>';
            }
            catch (Exception $e){
                //if there is an error return to edit
                Mage::getSingleton('adminhtml/session')->addError('Not Saved. Error:'.$e->getMessage());

            }
        }

    }

}