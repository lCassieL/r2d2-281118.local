<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author web
 */
class View {
    public $template;
    public $page;
    public function __construct() {
        $this->template='template_main_view';
    }
    
    public function render(){
        include_once 'app/views/'.$this->template.'.php';
    }
}
