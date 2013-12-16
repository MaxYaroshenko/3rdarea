<?php

class Eltrino_Thirdarea_Controller_Action extends Mage_Core_Controller_Varien_Action
{
    protected function _construct()
    {
        parent::_construct();

        Mage::getDesign()->setArea('thirdarea')
            ->setPackageName('default')
            ->setTheme('default');

        $this->getLayout()->setArea('thirdarea');

        $this->setFlag('', self::FLAG_NO_CHECK_INSTALLATION, true);
    }
}