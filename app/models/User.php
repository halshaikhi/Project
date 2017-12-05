<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate() {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		 
		$db = db_connect();
        $statement = $db->prepare("select * from users
                                WHERE username = :name;
                ");
        $statement->bindValue(':name', $this->username);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		if ($rows) {
			$this->auth = true;
			$_SESSION['name'] = $rows[0]['Username'];
			$_SESSION['usertype'] = $rows[0]['UserType'];

		}
    }
	
	public function register ($username, $password ,$email) {
		$db = db_connect();
		
		$insert=$db->prepare("INSERT INTO user(username, Password, Email)values(:username,:password,:email)");
		$insert->bindparam('username',$username);
		$insert->bindparam('email',$email);
		$insert->bindparam('password',$password);

	}

    public function get_provinces(){
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM provinces;");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function get_cities($province){
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM cities
                                WHERE Province = :Province
                                ORDER BY City;");
        $statement->bindValue(':Province', $province);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

}
