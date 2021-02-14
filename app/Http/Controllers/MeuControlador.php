<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos() {
        echo '<h1> Produtos </h1>';
        echo '<ol>';
        echo '<li> NoteBook </li>';
        echo '<li> Impressora </li>';
        echo '<li> Mouse </li>';
        echo '</ol>';
    }

    public function getNome(){
        echo 'Olá João';
    }

    public function getIdade(){
        echo '44 anos';
    }

    public function multiplicar($n1,$n2){
        echo $n1 * $n2;
    }
}
