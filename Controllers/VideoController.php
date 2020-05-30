<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controllers;
use \Core\Controller;
/**
 * Description of VideoController
 *
 * @author root
 */
class VideoController extends Controller{
    public function index() {
        $array = array();

        $this->loadTemplate('video', $array);
    }
    
    public function podcast() {
        $array = array();

        $this->loadTemplate('podcast', $array);
    }
    
    public function imagem(){
        $array = array();
        $this->loadTemplate('imagem', $array);
    }
     
}
