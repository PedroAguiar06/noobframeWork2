<?php 

namespace App\Controllers;

use Core\Controller;
use App\Models\Noticia;

class PortalController extends Controller {

    public function index() {
        
        $noticiaModel = new Noticia();
        $noticias = $noticiaModel -> getAll();

        $this -> view('noticias', ['noticias' => $noticias]);
        // $clients = Client::getAll();
        // $this -> view('clients', ['clients' => $clients]);
    }

    public function noticia($titulo){
        // var_dump($titulo);
        $noticiaModel = new Noticia();
        $noticia = $noticiaModel -> getByTituloUrl($titulo);
        // $noticia = $noticiaModel -> getAll();
        // var_dump($noticia);

        $this -> view('noticia', ['noticia' => $noticia]);
    }
}