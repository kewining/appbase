<?php

class UserModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get all users from database
     */
    public function getAllUsers()
    {
        $sql = "SELECT id_user, firstname, surname, username FROM users";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Add a user to database
     * @param string $firstname Firstname
     * @param string $surname Surname
     * @param string $username Username
     * @param string $password Password
     */
    public function addUser($firstname, $surname, $username, $password)
    {
        // clean the input from javascript code for example
        $firstname = strip_tags($firstname);//Strip HTML and PHP tags from a string
        $surname = strip_tags($surname);
        $username = strip_tags($username);
        $password = strip_tags($password);

        $sql = "INSERT INTO users (firstname, surname, username, passw) VALUES (:firstname, :surname, :username, :password)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':firstname' => $firstname, ':surname' => $surname, ':username' => $username, ':password' => $password));
    }

	public function getIDUser($id_user)
	{
        $sql = "SELECT id_user, firstname, surname, username FROM users WHERE id_user = :id_user";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_user' => $id_user));
        return $query->fetchAll();
	}

	public function eupdate($id, $firstname, $surname, $username, $password)
	{
        // clean the input from javascript code for example
        $id = strip_tags($id);
        $firstname = strip_tags($firstname);
        $surname = strip_tags($surname);
        $username = strip_tags($username);
        $password = strip_tags($password);
        $sql = "UPDATE users SET firstname = :firstname, surname = :surname, username = :username, passw = :password WHERE id_user = :id_user";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_user' => $id, ':firstname' => $firstname, ':surname' => $surname, ':username' => $username, ':password' => $password));
	}

    /**
     * Delete a user in the database
     */
    public function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE id_user = :id_user";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_user' => $id));
    }
}
