<?php
/**
 * Hello World Blind
 */

/**
 * Class Acierno_Helloworld_Block_Helloworld
 *
 * @version 0.1.0
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @package cms
 */
class Acierno_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
{
    /**
     * getMessage
     *
     * Returns the message stored for the welcoming
     * @return string
     */
    public function getMessage()
    {
        return Mage::helper("acierno_helloworld")->getConfig("configuration/message");
    }

    /**
     * isEnabled
     *
     * Returns true if the module is active, false instead
     * @return bool
     */
    public function isEnabled()
    {
        return Mage::helper("acierno_helloworld")->isEnabledtheModule();
    }

}