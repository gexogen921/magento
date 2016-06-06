<?php
class NS_Update_Block_Name extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        $this->loadLayout();
        $block = "newsletter.xml";
        $this->getLayout()->getBlock('header')->append($block);
        $this->renderLayout();
    }
}