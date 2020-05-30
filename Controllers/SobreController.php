<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controllers;
use \Core\Controller;

/**
 * Description of SobreController
 *
 * @author root
 */
class SobreController extends Controller {
    public function index() {
        $array = array();

        $this->loadTemplate('sobre', $array);
    }
}
