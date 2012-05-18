<?php

class UserController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->assign('name', 'rifki');
        $this->view->assign('title', 'Hello');
    }

    public function nameAction()
    {
        $request = $this->getRequest();
        $this->view->assign('name', $request->getParam('username'));
        $this->view->assign('gender', $request->getParam('gender'));
        $this->view->assign('title', 'User Name');
    }


}





