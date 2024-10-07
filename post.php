<?php
session_start();
class Categorias{
    private $tag=[];
    public function __construct(){
        $this->tag=[];
    }
    public function getTag(): array
    {
        return $this->tag;
    }
}

class Publicacion{
    private $titulo;
    private $texto;
    private $meGusta;
    public function __construct(){
        $this->titulo="";
        $this->texto="";
        $this->meGusta=0;
    }
    public function getTitulo(): string
    {
        return $this->titulo;
    }
    public function getTexto(): string
    {
        return $this->texto;
    }
    public function getMeGusta(): int
    {
        return $this->meGusta;
    }
}
function obtenerPost()
{
    $array=[
        new Publicacion('Mi primer viaje','akdskf',5),
        [ new Categorias('Viaje','Ocio')],
    ];
    foreach ($array as $post) {
        echo "<b>".$post->getTitulo()."</b><br>";
        echo "Texto: ".$post->getTexto()."<br>";
        echo "<b>Likes: </b>".$post->getMeGusta()."<br>";
    }
}
echo "hola";
?>