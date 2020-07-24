<?php
require_once '../Model/PersonalModel.php';

class PersonalControlador{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Personal();
    }
    
    public function Index(){
        require_once '../view/registrarPersonal.php';
    }
    // INSERTAR
    public function nuevo(){
    	require_once ("../view/registrarPersonal.php");	    	    	
    }

    public function Guardar(){
        $alm = new Personal();
        $alm->opcion = $_REQUEST['opcion'];
        
        $alm->idPersonal = $_REQUEST['id'];
        $alm->perNombre = $_REQUEST['Nombre'];
        $alm->perApellido = $_REQUEST['Apellido'];
        $alm->perIdentificacion = $_REQUEST['Identificacion'];
        $alm->perNacimiento = $_REQUEST['Nacimiento'];
        $alm->user = $_REQUEST['user'];
        $alm->password = $_REQUEST['password'];
        $alm->rol = $_REQUEST['rol'];

        $alm->$this->model->Registrar($alm);
        
        header('location: localhost:8082/Trasporte/view/registrarPersonal.php');
    }
    // ACTUALIZAR

    public function editar(){
    	$id=$_REQUEST['id'];
    	
    }
    public function update(){
    	$alm = new Personal();
        $alm->opcion = $_REQUEST['opcion'];
        
        $alm->idPersonal = $_REQUEST['id'];
        $alm->perNombre = $_REQUEST['Nombre'];
        $alm->perApellido = $_REQUEST['Apellido'];
        $alm->perIdentificacion = $_REQUEST['Identificacion'];
        $alm->perNacimiento = $_REQUEST['Nacimiento'];
        $alm->user = $_REQUEST['user'];
        $alm->password = $_REQUEST['password']; 

        $alm->$this->model->Actualizar($alm);
		
        header('Location: ../view/registrarPersonal.php');
	}
    
}
?>