<?php

class GuestbookController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function signAction()
    {
        $request = $this->getRequest();
        $form    = new Application_Form_Guestbook();
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $comment = new Application_Model_Guestbook($form->getValue);
                $mapper  = new Application_Model_GuestbookMapper();
                $mapper->save($comment);
                return $this->_helper->redirector('index');
            }
        }
        $this->view->form = $form;
    }


}





