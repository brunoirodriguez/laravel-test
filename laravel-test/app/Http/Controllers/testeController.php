<?php namespace Cinema\Http\Controllers;

class testeController extends Controller {
    /* Mostra uma mensagem de acesso ao controller */
    public function index(){
        return "O testeController lhe dá as boas vindas";
    }
    public function nome($nome){
        return "O meu nome e ".$nome;
    }
}