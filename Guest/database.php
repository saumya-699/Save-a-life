<?php

class Database {

    private static Database $instance;

    private $connection = null;

    private function __construct() {
        $db = 'ci';
        $username = 'root';
        $password = '';
        $server = 'localhost:3306';

        $this->connection = mysqli_connect($server, $username, $password, $db) or die('Database error');
        if ($this->connection) {
            self::$instance = $this;
        }
    }

	public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    private function validate() {
        if (self::$instance->connection == null) {
            echo '<br/><br/><pre>Database not connected or there is an error!</pre><br/><br/>';
        }
    }

	public function checkDonorExists($username, $password) {
        $this->validate();

        $query = "SELECT * FROM donors WHERE username='$username' AND password='$password'";
        if ($rSet = mysqli_query(self::$instance->connection, $query)) {
            $cnt = mysqli_num_rows($rSet);
            if ($cnt > 0) {
                return true;
            }
        }

        return false;
    }

    public function executeQuery($query) {
        $this->validate();

        $rSet = mysqli_query(self::$instance->connection, $query);
        if ($rSet) {
            return $rSet;
	} else {
		return mysqli_error(self::$instance->connection);
	}

		return null;
    }

    public function getUserData($username) {
        $query = "SELECT * FROM donors WHERE username='$username'";
        $rSet = self::executeQuery($query);
        $firstrow = mysqli_fetch_assoc($rSet);

        return $firstrow;
    }
}
