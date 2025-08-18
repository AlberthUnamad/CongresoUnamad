<?php

namespace Model;

class Regalo extends ActiveRecord
{
    protected static $tabla = 'regalos';
    protected static $columnasDB = ['id', 'nombre'];

    public $id;
    public $nombre;
    public $total; // ✅ propiedad extra para evitar el warning

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->total = $args['total'] ?? 0; // ✅ inicialización
    }
}
