<?php

class NgetestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->var = date('d M Y H:i:s');
    }

    public function chatAction()
    {
        $this->view->assign('msg', 'ojo lali');
    }
  
}



