<?php

/**
 * Description of AritmatikaController
 * Penjumlahan, pengurangan, pembagian dan perkalian.
 *
 * @author rifki
 */
class AritmatikaController extends Zend_Controller_Action {
    
    public function init() 
    {   
    }
    
    public function indexAction() 
    {   
//        $this->penjumlahanAction();
//        $this->penguranganAction();
//        $this->pembagianAction();
//        $this->perkalianAction();
    }
    // penjumlahan
    public function penjumlahanAction()
    {
        $a = 4;
        $b = 8;
        $hasil = $a.'+'.$b.' ='.($a + $b);
        echo $hasil;
    }
    // pengurangan
    public function penguranganAction()
    {
        $a = 8;
        $b = 4;
        $hasil = $a.'-'.$b.' ='.($a - $b);
        echo $hasil;
    }
    // pembagian
    public function pembagianAction()
    {
        $a = 8;
        $b = 4;
        $hasil = $a.'/'.$b.' ='.($a / $b);
        echo $hasil;
    }
    // perkalian
    public function perkalianAction()
    {
        $a = 8;
        $b = 4;
        $hasil = $a.'x'.$b.' ='.($a * $b);
        echo $hasil;
    }
            
}

?>
