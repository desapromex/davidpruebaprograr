<?php
namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{  
	function __construct()
    {
      $this->UnModelo = new ProductosModel();
    }
	
    public function index()
	{		
		$query4 = $this->UnModelo->query("SELECT * FROM productos");
		$datos1['productos_result'] = $query4->getResultArray();
        echo view('head');
        echo view('encabezado');
		echo view('ProductosListado', $datos1);
        echo view('footer_piedepagina');		
   }

}

?>