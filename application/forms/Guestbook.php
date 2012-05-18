<?php

class Application_Form_Guestbook extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setMethod('post');
        $this->setAttrib('action', 'Submit');
        // email
        $this->addElement('text', 'Email', array(
            'label'     => 'Email:',
            'required'  => true,
            'validators'=> array('EmailAddress'),
            'filters'   => array('StringTrim')
        ));
        // textarea
        $this->addElement('textarea', 'Comment', array(
           'label'      => 'Please Comment:',
            'required'  => true,
            'validators'=> array(
                array('validator' => 'StringLength', 'options' => array(0, 20))
                )
        ));
        // captcha
        $this->addElement('captcha', 'Captcha', array(
            'label'     => 'Please enter the 5 letters displayed below:',
            'required'  => true,
            'captcha'   => array(
                'captcha' => 'Figlet',
                'wordLen' => 5,
                'timeout' => 300
            )
        ));
        // submit
        $this->addElement('submit','Submit', array(
           'ignore' => true,
            'label' => 'Submit'
        ));
        // CSRF Protection
        $this->addElement('hash', 'csrf', array(
            'ignore' => true
        ));
    }


}

