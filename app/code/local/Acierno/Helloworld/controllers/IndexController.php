<?php
/**
 * Hello World Blind
 */

/**
 * Class Acierno_Helloworld_IndexController
 *
 *
 * @version 0.1.0
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 */
class Acierno_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * Index Action
     *
     * index/index call
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}