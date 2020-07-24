<?php
class Personal
{
	private $bd;
    
    public $idPersonal;
    public $perNombre;
    public $perApellido;
    public $perIdentificacion;
    public $perNacimiento;
    public $user;
    public $password;
    public $rol;

	public function __CONSTRUCT()
	{
		try
		{
			$this->bd = conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }
    
	public function Registrar(Personal $data)
	{
		try 
		{
		$sql = "INSERT INTO personal VALUES (null,?, ?, ?, ?, ?, ?, ?)";

		$result = $this->bd->prepare($sql)
		     ->execute(
				array(
                    $data->perNombre,
                    $data->perApellido, 
                    $data->perIdentificacion, 
                    $data->perNacimiento,
                    $data->user,
                    $data->password,
                    $data->rol
                )
            );
            if ($result) {
                return true;
            } else {
                return false;
            }
            $this->pdo = null;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM alumnos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM alumnos WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM alumnos WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE alumnos SET 
						Nombre          = ?, 
						Apellido        = ?,
                        Correo        = ?,
						Sexo            = ?, 
						FechaNacimiento = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre, 
                        $data->Correo,
                        $data->Apellido,
                        $data->Sexo,
                        $data->FechaNacimiento,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>