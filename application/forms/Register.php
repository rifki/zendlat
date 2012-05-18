<?php

class Application_Form_Register extends Zend_Form
{

    public function init()
    {
         /* Form Elements & Other Definitions Here ... */
        // text
        $name = new Zend_Form_Element_Text('name');
            $name->setLabel('Name')
                 ->addFilter('StripTags')
                 ->setRequired(true);
            
        $password = new Zend_Form_Element_Password('password');
            $password->setLabel('Password')
                     ->addFilter('StripTags')
                     ->setRequired(true);
            
        $submit = new Zend_Form_Element_Submit('submit');
            $submit->setLabel('Submit');
            
        $this->addElement(array ($name, $password, $submit));
    }


}

