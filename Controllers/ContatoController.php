<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controllers;
use Core\Controller;

/**
 * Description of ContatoController
 *
 * @author root
 */
class ContatoController extends Controller{
    public function index() {
        $array = array();

        $this->loadTemplate('contato', $array);
    }
}
