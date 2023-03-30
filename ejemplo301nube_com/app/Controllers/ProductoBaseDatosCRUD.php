<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductosModel;

class ProductoBaseDatosCRUD extends BaseController
{
	protected $datos_post;
	
    // Model
    // protected $ProductosModel_crud;

    // Initialize Objects
    // public function __construct(){
        // $this->ProductosModel_crud = new ProductosModel();
    // }
		
    // Model
	protected $ProductosModel_crud;
	
    public function index()
    {
		echo json_encode(['resultadorespuesta'=>'metodo no especificado']);
        // return $this->respond(['users' => ''], 200);
    }
	
    public function validardatosinput()
    {
        // $this->data['request'] = $this->request;
		// echo json_encode(['resultadorespuesta'=>'metodo no especificado']);
        // return $this->respond(['users' => ''], 200);
		
		$nombre= $this->request->getPost('nombre');
		if(is_null($nombre)){	
			echo json_encode([
			'resultadorespuesta'=>'error'
			,'data'=>'El nombre no puede estar nulo']);			
		}
		else{			
			if('' != trim($nombre)){
				
			}
			else{
				
				echo json_encode([
				'resultadorespuesta'=>'error'
				,'data'=>'El nombre no puede estar vacio']);
				
			}			
		}
		
		$precioventa= $this->request->getPost('precioventa');
		if(is_null($precioventa)){	
			echo json_encode([
			'resultadorespuesta'=>'error'
			,'data'=>'El precioventa no puede estar nulo']);			
		}
		else{			
			if('' != trim($precioventa)){
				
			}
			else{
				
				echo json_encode([
				'resultadorespuesta'=>'error'
				,'data'=>'El precioventa no puede estar vacio']);
				
			}			
		}
		
		
		$sucursal= $this->request->getPost('sucursal');
		if(is_null($sucursal)){	
			echo json_encode([
			'resultadorespuesta'=>'error'
			,'data'=>'El sucursal no puede estar nulo']);			
		}
		else{			
			if('' != trim($sucursal)){
				
			}
			else{
				
				echo json_encode([
				'resultadorespuesta'=>'error'
				,'data'=>'El sucursal no puede estar vacio']);
				
			}			
		}
		
		
		
		
		$fechacaducidad= $this->request->getPost('fechacaducidad');
		if(is_null($fechacaducidad)){	
			echo json_encode([
			'resultadorespuesta'=>'error'
			,'data'=>'El fechacaducidad no puede estar nulo']);			
		}
		else{			
			if('' != trim($fechacaducidad)){
				
			}
			else{
				
				echo json_encode([
				'resultadorespuesta'=>'error'
				,'data'=>'El fechacaducidad no puede estar vacio']);
				
			}			
		}
		
		
		
		
		
		
		
		
		try{				
			$this->datos_post = [
				'nombre' => $this->request->getPost('nombre'),
				'precioventa' => $this->request->getPost('precioventa'),
				'sucursal' => $this->request->getPost('sucursal'),
				'fechacaducidad' => $this->request->getPost('fechacaducidad')
			];
		}
		catch(\Exception $exr){
			var_dump($exr);
			// echo json_encode([
			// 'resultadorespuesta'=>'error'
			// ,'data'=> $exr->getMessage()]);
			die();
		}
			
    }
	
    public function insertartupla()
    {
		
		try{
		$this->validardatosinput();
		
        $this->ProductosModel_crud = new ProductosModel();
		
			$save = $this->ProductosModel_crud->insert($this->datos_post);
			
			echo json_encode([
			'resultadorespuesta'=>'success'
			,'data'=>'']);
			
		}
		catch(\Exception $ex){
			
			var_dump($ex);
			echo json_encode([
			'resultadorespuesta'=>'error'
			,'data'=> $ex->getMessage()]);
			die();
		}
		
		
    }
	
    public function modificartupla()
    {    
	
		$id= $this->request->getPost('id');
		if(is_null($id)){	
			echo json_encode([
			'resultadorespuesta'=>'error'
			,'data'=>'El id no puede estar nulo']);			
		}
		else{			
			if('' != trim($id)){
							
				$this->validardatosinput();
				
				$this->ProductosModel_crud = new ProductosModel();
				
				$save = $this->ProductosModel_crud->where(['id'=>$id])->set($this->datos_post)->update();
			  
				echo json_encode([
				'resultadorespuesta'=>'success'
				,'data'=>'']);
				
			}
			else{
				
				echo json_encode([
				'resultadorespuesta'=>'error'
				,'data'=>'El id no puede estar vacio']);
				
			}
		}
    }
}

?>