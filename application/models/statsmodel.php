<?php

class StatsModel
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

    public function getAmountOfUsers()
    {
        $sql = "SELECT COUNT(id_user) AS amount_of_users FROM users";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetch()->amount_of_users;
    }

	public function search_username($username)
	{
        $sql = "SELECT id_user FROM users WHERE username = :username";
        $query = $this->db->prepare($sql);
        $query->execute(array(':username' => $username));
        return $query->fetchAll();
	}

	public function search_id_pw($id,$old_pw)
	{
        $sql = "SELECT id_user FROM users WHERE id_user = :id_user and passw = :password";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_user' => $id,':password' => $old_pw));
        return $query->fetchAll();
	}
}
