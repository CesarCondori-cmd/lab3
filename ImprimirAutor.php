<?php

require_once "Autor.php";

class ImprimirAutor {
    public function getInfo(Autor $autor) {
        echo "Nombre: " . $autor->getNombre() . "\n";
        echo "Nacionalidad: " . $autor->getNacionalidad() . "\n";
    }
}

