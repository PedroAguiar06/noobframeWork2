<?php

namespace App\Models;

use Core\DataBase;


class Conta {
    public function getAll() {
        $db = DataBase::getInstance(); //retornar a instâcia do bd, dai n precisa fazer $db = new DataBase
        return $db -> getList("tb_conta", "*");

    }

    public function delete($id) {

    }

}