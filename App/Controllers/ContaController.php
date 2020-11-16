<?php 

namespace App\Controllers; 

use Core\Controller;
use App\Models\Conta;

class ContaController extends Controller {
    public function index() {
        $conta = new Conta();
        // $conta = new App\Models\Conta();
        $contas = $conta -> getAll();

        var_dump($contas);
    }

    public function editar(){
        echo "Editar...";
    }

    public function deletar(){
        $conta = new Conta(1);

    }
}