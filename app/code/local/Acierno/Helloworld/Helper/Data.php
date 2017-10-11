<?php
/**
 * Hello World Blind
 */

/**
 * Class Acierno_Helloworld_Helper_Data
 *
 * @version 0.1.0
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @package cms
 */
class Acierno_Helloworld_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * getCofig
     * Get Configuration by name
     *
     * @param $config
     * @return mixed
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig("acierno_helloworld/".$config);
    }

    /**
     *isEnabledTheModule
     *
     * returns true if the module is active, false instead
     * @return bool
     */
    public function isEnabledtheModule()
    {
        //return $this->getConfig("configuration/enabled");
        return Mage::getStoreConfig("acierno_helloworld/configuration/enabled");
    }
}