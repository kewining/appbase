<?php

/**
 * Class Users
 */
class Users extends Controller
{
    /**
     * PAGE: index
     */
    public function index()
    {
        $user_model = $this->loadModel('UserModel');
        $users = $user_model->getAllUsers();

        // load views. within the views we can echo out $users
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/menu.php';
        require 'application/views/users/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * ACTION: addUser
     */
    public function addUser()
    {
        // if we have POST data to create a new user entry
        if (isset($_POST["submit_add_user"]))
		{
			if($_POST["password"]==$_POST["password_conf"])
			{
				$usern = $this->loadModel('StatsModel');
    	        $val = $usern->search_username($_POST["username"]);//model
            	// load model, perform an action on the model
				if(!$val)
				{
		        	// load model, perform an action on the model
			        $user_model = $this->loadModel('UserModel');
			        $user_model->addUser($_POST["firstname"], $_POST["surname"], $_POST["username"], $_POST["password"]);//model
					if($user_model)
					{
						// where to go after user has been added
						header('location: ' . URL . 'users/index');
					}
					else
					{
						echo 'Error al insertar';
					}
				}
				else
				{
					echo 'usado';
				}
			}
			else
			{
				echo 'Error: Las contraseñas no coinciden';
			}
        }
    }

	public function update($id)
	{
        $user_model = $this->loadModel('UserModel');
        $user = $user_model->getIDUser($id);
		if($user)
		{
		    // load views. within the views we can echo out $users
		    require 'application/views/_templates/header.php';
		    require 'application/views/_templates/menu.php';
		    require 'application/views/users/update.php';
		    require 'application/views/_templates/footer.php';
		}
	}

	public function execupdate()
	{
        if (isset($_POST["submit_exec_update"]))
		{
			if(!empty($_POST["firstname"]) and !empty($_POST["surname"]) and !empty($_POST["username"]) and !empty($_POST["old_password"]) and !empty($_POST["new_password"]))
			{
				$user_pw = $this->loadModel('StatsModel');
    	        $val = $user_pw->search_id_pw($_POST["id_user"], $_POST["old_password"]);//model
            	// load model, perform an action on the model
				if($val)
				{
					$user_model = $this->loadModel('UserModel');
			        $user_model->eupdate($_POST["id_user"], $_POST["firstname"], $_POST["surname"], $_POST["username"], $_POST["new_password"]);

					if($user_model)
					{
						// where to go after user has been added
						header('location: ' . URL . 'users/index');
					}
					else
					{
						echo 'Error al actualizar';
					}
				}
				else
				{
					echo 'la contraseña es incorrecta';
				}
			}
        }
	}

    /**
     * ACTION: deleteUser
     */
    public function deleteUser($id)
    {
        // if we have an id of a user that should be deleted
        if (isset($id))
		{
            // load model, perform an action on the model
            $user_model = $this->loadModel('UserModel');
            $user_model->deleteUser($id);
			//si lo elimino si no mostrar error al eliminar
        }
        // where to go after User has been deleted
        header('location: ' . URL . 'users/index');
    }
}
