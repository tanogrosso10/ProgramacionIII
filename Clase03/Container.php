<?php

/**
 * 
 */
class Container// extends AnotherClass
{
    public $numero=0;
    public $producto;
    
    function __construct($num)
    {
        $this->numero=$num;
        $this->producto = array();
        
    }

    public function AgregarProducto($producto)
    {
        array_push($this->producto,$producto);
    }
    public function GuardarProductos()
    {
        $ListadoDeProductos=fopen("ListadoDeProductos.txt","w");

        foreach ($this->producto as $key) {
            fwrite($ListadoDeProductos,$key->ToString());
        }
        fclose($ListadoDeProductos);
        
    }
}






?>