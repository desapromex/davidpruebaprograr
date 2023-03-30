<?php
namespace App\Controllers;

class ProductoEditor extends BaseController
{
    public function index()
    {
        $datos1['nombre'] = 'Erwin Andrés';
        $datos1['apellido'] = 'Espitia Torres';
        echo view('head');
        echo view('encabezado');
		echo view('ProductosListado', $datos1);
        echo view('footer_piedepagina');
   }

    public function agregar()
    {
        $datos1['nombre'] = 'Erwin Andrés';
        $datos1['apellido'] = 'Espitia Torres';
        echo view('head');
        echo view('encabezado');
		echo view('ProductoEditor', $datos1);
        echo view('footer_piedepagina');
   }
    public function modificar()
    {
        $datos1['nombre'] = 'Erwin Andrés';
        $datos1['apellido'] = 'Espitia Torres';
        echo view('head');
        echo view('encabezado');
		echo view('ProductoEditor', $datos1);
        echo view('footer_piedepagina');
   }

}

?>