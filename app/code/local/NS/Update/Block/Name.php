<?php
class NS_Update_Block_Name extends Mage_Newsletter_Block_Subscribe
{
    public function indexAction() {
        $block = "templates/newsletter.xml";
        $this->getLayout()->getBlock('header')->append($block);
    }
}